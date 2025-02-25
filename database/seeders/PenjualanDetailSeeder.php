<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        
        // Generate 30 data entries, with 3 items per transaction
        for ($i = 1; $i <= 10; $i++) { // 10 transactions
            for ($j = 1; $j <= 3; $j++) { // 3 items per transaction
                $data[] = [
                    'penjualan_id' => $i, // Corresponding to the penjualan_id from t_penjualan
                    'barang_id' => $j + ($i - 1) * 3, // Generating barang_id for each transaction (1-3, 4-6, etc.)
                    'jumlah' => rand(1, 5), // Random quantity between 1 and 5
                ];
            }
        }

        // Insert data into t_penjualan_detail table
        DB::table('t_penjualan_detail')->insert($data);
    }
}
