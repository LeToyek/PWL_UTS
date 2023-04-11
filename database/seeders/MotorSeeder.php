<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data_sepeda_motor = array(
            array(
                "merk" => "Honda",
                "tipe" => "Supra X 125",
                "warna" => "Merah",
                "kapasitas_cc" => 125,
                "harga" => 15000000,
                "qty" => 5
            ),
            array(
                "merk" => "Yamaha",
                "tipe" => "NMAX 155",
                "warna" => "Hitam",
                "kapasitas_cc" => 155,
                "harga" => 25000000,
                "qty" => 3
            ),
            array(
                "merk" => "Suzuki",
                "tipe" => "GSX-R150",
                "warna" => "Biru",
                "kapasitas_cc" => 150,
                "harga" => 30000000,
                "qty" => 2
            ),
            array(
                "merk" => "Kawasaki",
                "tipe" => "Ninja 250",
                "warna" => "Hijau",
                "kapasitas_cc" => 250,
                "harga" => 45000000,
                "qty" => 4
            ),
            array(
                "merk" => "Harley-Davidson",
                "tipe" => "Sportster Iron 883",
                "warna" => "Hitam",
                "kapasitas_cc" => 883,
                "harga" => 120000000,
                "qty" => 1
            ),
            array(
                "merk" => "Ducati",
                "tipe" => "Monster 797",
                "warna" => "Kuning",
                "kapasitas_cc" => 797,
                "harga" => 90000000,
                "qty" => 2
            ),
            array(
                "merk" => "BMW",
                "tipe" => "R 1250 GS",
                "warna" => "Putih",
                "kapasitas_cc" => 1250,
                "harga" => 200000000,
                "qty" => 1
            ),
            array(
                "merk" => "KTM",
                "tipe" => "Duke 390",
                "warna" => "Oranye",
                "kapasitas_cc" => 390,
                "harga" => 60000000,
                "qty" => 3
            ),
            array(
                "merk" => "Triumph",
                "tipe" => "Street Triple RS",
                "warna" => "Abu-abu",
                "kapasitas_cc" => 765,
                "harga" => 180000000,
                "qty" => 1
            ),
            array(
                "merk" => "Aprilia",
                "tipe" => "RSV4 RR",
                "warna" => "Merah",
                "kapasitas_cc" => 1000,
                "harga" => 250000000,
                "qty" => 1
            )
        );
        
        DB::table('motor')->insert(
           $data_sepeda_motor
        );
    }
}
