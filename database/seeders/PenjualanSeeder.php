<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        // Sample data for t_penjualan table (10 entries)
        $data = [
            [
                'user_id' => 1, // Assuming user_id 1 exists in m_user table
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 2, // Assuming user_id 2 exists in m_user table
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 3, // Assuming user_id 3 exists in m_user table
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => Carbon::now(),
            ]
        ];

        // Insert data into t_penjualan table
        DB::table('t_penjualan')->insert($data);
    }
}
