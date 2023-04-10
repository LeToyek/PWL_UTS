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
        DB::table('mobils')->insert(
            [
                [
                    "merk" => "Sedan",
                    "tipe" => "Honda Civic RS",
                    "warna" => "Merah",
                    "jml_penumpang" => 4,  
                    "harga" => 601000000,     
                    "qty" => 10          
                ],
                [
                    "merk" => "Sedan",
                    "tipe" => "Toyota Corolla Altis Hybrid",
                    "warna" => "Hitam",
                    "jml_penumpang" => 4,  
                    "harga" => 594000000,     
                    "qty" => 15  
                ],
                [
                    "merk" => "Jeep",
                    "tipe" => "Jeep Compass Limited",
                    "warna" => "Putih",
                    "jml_penumpang" => 6,  
                    "harga" => 826000000,     
                    "qty" => 10 
                ],
                [
                    "merk" => "Hyundai",
                    "tipe" => "Hyundai Grand i10",
                    "warna" => "Putih",
                    "jml_penumpang" => 6,  
                    "harga" => 184000000,     
                    "qty" => 5 
                ]
                ,
                [
                    "merk" => "Jeep",
                    "tipe" => "Jeep Gladiator Rubicon",
                    "warna" => "Hitam",
                    "jml_penumpang" => 4,  
                    "harga" => 2000000000,     
                    "qty" => 10
                ]
            ]
        );
    }
}
