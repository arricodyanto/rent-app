<?php

namespace Database\Seeders;

use App\Models\m_kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kendaraans = [
            [
                'merk' => 'Honda',
                'jenis' => 'MVP',
                'nama' => 'Mobilio',
                'nopol' => 'B 1234 ABC'
            ],
            [
                'merk' => 'Mitsubishi',
                'jenis' => 'SUV',
                'nama' => 'Expander',
                'nopol' => 'B 4321 ABC'
            ],
            [
                'merk' => 'Mitsubishi',
                'jenis' => 'SUV',
                'nama' => 'Pajero Sport',
                'nopol' => 'B 1111 ABC'
            ],
        ];

        m_kendaraan::insert($kendaraans);
    }
}
