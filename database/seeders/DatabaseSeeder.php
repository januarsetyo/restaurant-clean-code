<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'sumatera'],
            ['nama_kategori' => 'jawa'],
            ['nama_kategori' => 'kalimantan'],
            ['nama_kategori' => 'sulawesi'],
            ['nama_kategori' => 'papua'],
        ];
        DB::table('kategori')->insert($kategori);

        $makanan = [
            [
                'id_kategori' => 1,
                'nama_makanan' => 'sate padang',
                'detail_makanan' => 'Sate padang memakai bahan daging sapi, lidah, biji atau jeroan (jantung, usus, dan tetelan)[1] dengan bumbu kuah kacang kental yang ditambah dengan cabai yang banyak sehingga rasanya pedas.',
                'harga' => 25000,
            ],
            [
                'id_kategori' => 1,
                'nama_makanan' => 'lamang',
                'detail_makanan' => 'Sterbuat dari beras ketan atau dikenal juga dengan nama pulut yang dimasak dengan cara dibakar dalam seruas bambu.',
                'harga' => 15000,
            ],
            [
                'id_kategori' => 5,
                'nama_makanan' => 'kue sagu',
                'detail_makanan' => 'Terbuat dari tepung sagu yang diolah dengan berbagai bahan tambahan seperti keju, kacang, atau bahkan cokelat.',
                'harga' => 35000,
            ],
            [
                'id_kategori' => 5,
                'nama_makanan' => 'sinole',
                'detail_makanan' => 'Sagu mentah yang sudah dijemur kemudian diayak hingga halus menjadi tepung sagu.',
                'harga' => 45000,
            ],
        ];
        DB::table('makanan')->insert($makanan);
    }
}

