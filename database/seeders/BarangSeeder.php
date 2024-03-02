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
                'barang_kode' => 'ELK001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 500000,
                'harga_jual' => 520000,
            ],  
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PKN001',
                'barang_nama' => 'Baju',
                'harga_beli' => 200000,
                'harga_jual' => 215000,
            ],  
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PKN002',
                'barang_nama' => 'Celana Panjang',
                'harga_beli' => 300000,
                'harga_jual' => 320000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Pizza',
                'harga_beli' => 150000,
                'harga_jual' => 155000,
            ],   
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Hamburger',
                'harga_beli' => 45000,
                'harga_jual' => 50000,
            ],   
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'MNM001',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],   
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'MNM002',
                'barang_nama' => 'Bear Brand',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],   
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PRB001',
                'barang_nama' => 'Kursi',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],   
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRB002',
                'barang_nama' => 'Meja',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],    
        ];
        DB::table('m_barang')->insert($data);
    }
}
