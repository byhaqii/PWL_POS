<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'TI001',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'TI002',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'TI003',
                'kategori_nama' => 'Makanan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'TI004',
                'kategori_nama' => 'Perabotan Rumah',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'TI005',
                'kategori_nama' => 'Peralatan Olahraga',
            ],
        ];
        DB::table('m_category')->insert($data);
    }
}
