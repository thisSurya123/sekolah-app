<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        Siswa::factory(20)->create();
        
        Jurusan::create([
            'nama_jurusan' => 'Teknik Komputer Jaringan',
            'singkatan' => 'TKJ',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Audio Vidio',
            'singkatan' => 'TAV',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'singkatan' => 'RPL',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Instalasi Tenaga Listrik',
            'singkatan' => 'TITL',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Multimedia',
            'singkatan' => 'MM',
        ]);

    }
}
