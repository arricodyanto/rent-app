<?php

namespace App\Http\Controllers;
use App\Models\trans_titip;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index() {
        $trans_titip = trans_titip::with('m_kendaraan')
        ->whereHas('m_kendaraan')
        ->where(function($query) {
                    $query->whereNotNull('tgl_berakhir')
                    ->where('tgl_berakhir', '<=', now());
                })->get();

        return view('penyewaan.lihat', [
            'titips' => $trans_titip,
        ]);
    }

    public function sewa($id_kendaraan)
    {
        $transTitip = trans_titip::find($id_kendaraan);
        
        if ($transTitip) {
            $transTitip->tgl_berakhir = now()->addDays(10);
            $transTitip->save();

            return redirect()->route('user.penyewaan.lihat'); // Ganti 'route_name' dengan nama rute yang sesuai
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
}
