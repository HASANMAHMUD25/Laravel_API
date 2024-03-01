<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data untuk diisi ke dalam tabel produk
        $produkData = [
            [
                'namaProduk' => 'Soto Madura',
                'deskripsiProduk' => 'Soto Madura Spesial',
                'hargaProduk' => 10000,
                'kategoriProduk' => 'makanan',
            ],
            [
                'namaProduk' => 'Teh Pucuk',
                'deskripsiProduk' => 'Minuman Teh Pucuk',
                'hargaProduk' => 4000,
                'kategoriProduk' => 'minuman',
            ],
            [
                'namaProduk' => 'Sabun Cuci',
                'deskripsiProduk' => 'Sabun Cuci Rinso',
                'hargaProduk' => 15000,
                'kategoriProduk' => 'perlengkapan nyuci',
            ],
            [
                'namaProduk' => 'Lipstik',
                'deskripsiProduk' => 'Lipstik Matte',
                'hargaProduk' => 50000,
                'kategoriProduk' => 'kosmetik',
            ],
        ];

        // Insert data ke dalam tabel produk
        foreach ($produkData as $produk) {
            DB::table('produk')->insert($produk);
        }
    }
}
