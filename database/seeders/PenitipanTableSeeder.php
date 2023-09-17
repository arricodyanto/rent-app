<?php

namespace Database\Seeders;

use App\Models\trans_titip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenitipanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penitipans = [
            [
                'id_kendaraan' => 1,
                'tgl_titip' => date('Y-m-d', strtotime('2022-04-01')),
                'harga_sewa' => 500000,
                'tgl_berakhir' => NULL,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'id_kendaraan' => 2,
                'tgl_titip' => date('Y-m-d', strtotime('2023-05-03')),
                'harga_sewa' => 560000,
                'tgl_berakhir' => NULL,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'id_kendaraan' => 3,
                'tgl_titip' => date('Y-m-d', strtotime('2023-04-01')),
                'harga_sewa' => 1500000,
                'tgl_berakhir' => date('Y-m-d', strtotime('2023-04-30')),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
        ];

        trans_titip::insert($penitipans);
    }
}
