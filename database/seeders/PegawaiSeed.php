<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class PegawaiSeed extends Seeder
{
    static $jabatans = [
        'Manager',
        'Sales',
        'Sales Supervisor',
        'Admin',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$jabatans as $jabatan) {
            DB::table('pegawai')->insert([
                ['Nip' => '1', 'Nama' => 'Faiz Atha Radhitya', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Owner', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '2', 'Nama' => 'Dzaka Murran R', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Manager', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '3', 'Nama' => 'Andika Ainur', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Manager', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '4', 'Nama' => 'Alif Hakan', 'Alamat' => 'jl.asd123', 'Jabatan' =>  'Sales Supervisor', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '5', 'Nama' => 'Elang Putra', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales Supervisor', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '6', 'Nama' => 'Sukamto', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales Supervisor', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '7', 'Nama' => 'Saprudin', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '8', 'Nama' => 'Ilham Sudirman', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00' ],
                ['Nip' => '9', 'Nama' => 'Keselamatan', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '10', 'Nama' => 'Cahya Wijaya', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '11', 'Nama' => 'Supradi', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '12', 'Nama' => 'Fikri', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '13', 'Nama' => 'Sulaiman', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '14', 'Nama' => 'Joko', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '15', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '16', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '17', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '18', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '19', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],
                ['Nip' => '20', 'Nama' => 'lorem ipsum', 'Alamat' => 'jl.asd123', 'Jabatan' => 'Sales', 'Gaji_pokok' => '5.500.00'],

            ]);

        }
    }
}
