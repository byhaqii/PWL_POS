<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => '1342143',
                'barang_nama' => 'Setrika',
                'harga_beli' => 200000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => '1342144',
                'barang_nama' => 'Hair Dryer',
                'harga_beli' => 250000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => '1233132',
                'barang_nama' => 'Hoodie',
                'harga_beli' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => '1453132',
                'barang_nama' => 'Training',
                'harga_beli' => 150000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => '1499132',
                'barang_nama' => 'Sosis',
                'harga_beli' => 30000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => '1499222',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 20000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => '1434522',
                'barang_nama' => 'Meja',
                'harga_beli' => 200000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => '14341942',
                'barang_nama' => 'Kursi',
                'harga_beli' => 100000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => '141232942',
                'barang_nama' => 'Raket',
                'harga_beli' => 500000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => '14341233',
                'barang_nama' => 'Bola Basket',
                'harga_beli' => 200000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
