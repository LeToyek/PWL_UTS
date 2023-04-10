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
        DB::table('mobil')->insert(
            [
                [
                    "merk" => "Honda Civic RS",
                    "tipe" => "Sedan",
                    "warna" => "Merah",
                    "jml_penumpang" => 4,  
                    "harga" => 601000000,     
                    "qty" => 10          
                ],
                [
                    "merk" => "Toyota Corolla Altis Hybrid",
                    "tipe" => "Sedan",
                    "warna" => "Hitam",
                    "jml_penumpang" => 4,  
                    "harga" => 594000000,     
                    "qty" => 15  
                ],
                [
                    "merk" => "Jeep Compass Limited",
                    "tipe" => "Jeep",
                    "warna" => "Putih",
                    "jml_penumpang" => 6,  
                    "harga" => 826000000,     
                    "qty" => 10 
                ],
                [
                    "merk" => "Hyundai Grand i10",
                    "tipe" => "Hyundai",
                    "warna" => "Putih",
                    "jml_penumpang" => 6,  
                    "harga" => 184000000,     
                    "qty" => 5 
                ]
                ,
                [
                    "merk" => "Jeep Gladiator Rubicon",
                    "tipe" => "Jeep",
                    "warna" => "Hitam",
                    "jml_penumpang" => 4,  
                    "harga" => 2000000000,     
                    "qty" => 10 
                ]
            ]
        );
    }
}
