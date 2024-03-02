<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data penjualan
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1, 
                'pembeli' => 'Ilul',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2, 
                'pembeli' => 'Arip',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 3,
                'user_id' => 2, 
                'pembeli' => 'Boni',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 4,
                'user_id' => 1, 
                'pembeli' => 'Bima',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 5,
                'user_id' => 2, 
                'pembeli' => 'Nadya',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 6,
                'user_id' => 2, 
                'pembeli' => 'Yosi',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 7,
                'user_id' => 3, 
                'pembeli' => 'Ayik',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 8,
                'user_id' => 3, 
                'pembeli' => 'Raja',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 9,
                'user_id' => 3, 
                'pembeli' => 'Apip',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => now(),
            ],[
                'penjualan_id' => 10,
                'user_id' => 3, 
                'pembeli' => 'Yusron',
                'penjualan_kode' => 'PJN0010',
                'penjualan_tanggal' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
