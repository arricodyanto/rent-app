<?php

namespace Database\Seeders;

use App\Models\trans_sewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyewaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyewaans = [
          [
            'id_titip' => 2,
            'tgl_awal' => date('Y-m-d', strtotime('2023-06-01')),
            'tgl_akhir' => date('Y-m-d', strtotime('2023-06-10')),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
          ]  
        ];

        trans_sewa::insert($penyewaans);
    }
}
