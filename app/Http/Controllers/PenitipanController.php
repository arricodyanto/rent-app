<?php

namespace App\Http\Controllers;

use App\Models\m_kendaraan;
use App\Models\trans_titip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenitipanController extends Controller
{
    public function index() {
        $userId = Auth::id();

        $trans_titip = trans_titip::with('m_kendaraan')->whereHas('m_kendaraan', function($query) use ($userId) {
            $query->where('id_user', $userId);
        })->get();

        return view('penitipan.lihat', [
            'titips' => $trans_titip,
        ]);
    }

    public function create() {
        return view('penitipan.create');
    }

    public function new(Request $request) {
        DB::beginTransaction();

        try {
            // Tambah data kendaraan
            $kendaraan = new m_kendaraan();
            $kendaraan->merk = $request->input('merk');
            $kendaraan->jenis = $request->input('jenis');
            $kendaraan->nama = $request->input('nama');
            $kendaraan->nopol = $request->input('nopol');
            $kendaraan->save();

            // Tambah data penitipan
            $titip = new trans_titip();
            $titip->id_kendaraan = $kendaraan->id_kendaraan; // Menggunakan ID yang baru saja disimpan
            $titip->tgl_titip = $request->input('tgl_titip');
            $titip->harga_sewa = $request->input('harga_sewa');
            $titip->tgl_berakhir = $request->input('tgl_berakhir');
            $titip->save();
            
            DB::commit();

            return redirect(route('user.penitipan.lihat'));
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }

    }
}
