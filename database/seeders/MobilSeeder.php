<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mobil = array(
            array(
                'merk' => 'Toyota',
                'tipe' => 'Avanza',
                'warna' => 'Putih',
                'jml_penumpang' => 7,
                'harga' => 20000000,
                'qty' => 3
            ),
            array(
                'merk' => 'Honda',
                'tipe' => 'Jazz',
                'warna' => 'Hitam',
                'jml_penumpang' => 5,
                'harga' => 25000000,
                'qty' => 2
            ),
            array(
                'merk' => 'Mitsubishi',
                'tipe' => 'Pajero Sport',
                'warna' => 'Merah',
                'jml_penumpang' => 7,
                'harga' => 45000000,
                'qty' => 1
            ),
            array(
                'merk' => 'Suzuki',
                'tipe' => 'Ertiga',
                'warna' => 'Silver',
                'jml_penumpang' => 7,
                'harga' => 18000000,
                'qty' => 4
            ),
            array(
                'merk' => 'Daihatsu',
                'tipe' => 'Terios',
                'warna' => 'Putih',
                'jml_penumpang' => 7,
                'harga' => 22000000,
                'qty' => 2
            ),
            array(
                'merk' => 'Nissan',
                'tipe' => 'X-Trail',
                'warna' => 'Abu-abu',
                'jml_penumpang' => 7,
                'harga' => 38000000,
                'qty' => 1
            ),
            array(
                'merk' => 'Isuzu',
                'tipe' => 'Elf',
                'warna' => 'Hijau',
                'jml_penumpang' => 17,
                'harga' => 50000000,
                'qty' => 1
            ),
            array(
                'merk' => 'Mercedes-Benz',
                'tipe' => 'E-Class',
                'warna' => 'Hitam',
                'jml_penumpang' => 5,
                'harga' => 150000000,
                'qty' => 1
            ),
            array(
                'merk' => 'Tesla',
                'tipe' => 'Model S',
                'warna' => 'Putih',
                'jml_penumpang' => 5,
                'harga' => 250000000,
                'qty' => 1
            ),
            array(
                'merk' => 'Ferrari',
                'tipe' => 'F8 Tributo',
                'warna' => 'Merah',
                'jml_penumpang' => 2,
                'harga' => 500000000,
                'qty' => 1
            )
        );
        
        DB::table('mobil')->insert(
           $mobil
        );
    }
}
