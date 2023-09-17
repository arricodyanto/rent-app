<?php

namespace App\Http\Controllers;

use App\Models\m_kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index() {
        
        $kendaraan = m_kendaraan::all();
        return view('kendaraan', [
            'kendaraans' => $kendaraan
        ]);
    }
}
