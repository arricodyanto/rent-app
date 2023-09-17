<?php

namespace App\Http\Controllers;

use App\Models\m_kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index() {
        
        $m_kendaraan = m_kendaraan::all();
        return view('kendaraan.lihat', [
            'kendaraans' => $m_kendaraan
        ]);
    }

    public function create() {
        return view('kendaraan.create');
    }

    public function new(Request $request){
        m_kendaraan::create($request->all());

        return redirect(route('kendaraan.lihat'));
    }

    public function edit(m_kendaraan $m_kendaraan){
        return view('kendaraan.edit', [
            'kendaraan' => $m_kendaraan
        ]);
    }

    public function store(Request $request, m_kendaraan $m_kendaraan) {
        $m_kendaraan->merk = $request->merk;
        $m_kendaraan->jenis = $request->jenis;
        $m_kendaraan->nama = $request->nama;
        $m_kendaraan->nopol = $request->nopol;
        $m_kendaraan->save();

        return redirect(route('kendaraan.lihat'));
    }

    public function delete(m_kendaraan $m_kendaraan) {
        $m_kendaraan->delete();

        return redirect(route('kendaraan.lihat'));
    }
}
