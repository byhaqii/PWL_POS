<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run()
    {
        // Sample data for t_stok table (10 entries)
        $data = [
            [
                'barang_id' => 1,  // Assuming barang_id 1 exists in m_barang table
                'user_id' => 1,    // Assuming user_id 1 exists in m_user table
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 100,
            ],
            [
                'barang_id' => 2,  // Assuming barang_id 2 exists in m_barang table
                'user_id' => 2,    // Assuming user_id 2 exists in m_user table
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 150,
            ],
            [
                'barang_id' => 3,  // Assuming barang_id 3 exists in m_barang table
                'user_id' => 3,    // Assuming user_id 3 exists in m_user table
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 200,
            ],
            [
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 120,
            ],
            [
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 80,
            ],
            [
                'barang_id' => 6,
                'user_id' => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 200,
            ],
            [
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 8,
                'user_id' => 2,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 300,
            ],
            [
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 70,
            ],
            [
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => 90,
            ]
        ];

        // Insert data into t_stok table
        DB::table('t_stok')->insert($data);
    }
}
