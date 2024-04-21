<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $city=[
            //koshi
            [
                "id"=>1,
                "city_name"=>"Bhojpur",
                "province"=>"Koshi"
            ],
            [
                "id"=>2,
                "city_name"=>"Dhankuta",
                "province"=>"Koshi"
            ],
            [
                "id"=>3,
                "city_name"=>"Ilam",
                "province"=>"Koshi"
            ],
            [
                "id"=>4,
                "city_name"=>"Jhapa",
                "province"=>"Koshi"
            ],
            [
                "id"=>5,
                "city_name"=>"Khotang",
                "province"=>"Koshi"
            ],
            [
                "id"=>6,
                "city_name"=>"Morang",
                "province"=>"Koshi"
            ],
            [
                "id"=>7,
                "city_name"=>"Okhaldhunga",
                "province"=>"Koshi"
            ],
            [
                "id"=>8,
                "city_name"=>"Panchthar",
                "province"=>"Koshi"
            ],
            [
                "id"=>9,
                "city_name"=>"Sankhuwasabha",
                "province"=>"Koshi"
            ],
            [
                "id"=>10,
                "city_name"=>"Solukhumbu",
                "province"=>"Koshi"
            ],
            [
                "id"=>11,
                "city_name"=>"Sunsari",
                "province"=>"Koshi"
            ],
            [
                "id"=>12,
                "city_name"=>"Taplejung",
                "province"=>"Koshi"
            ],
            [
                "id"=>13,
                "city_name"=>"Tehrathum",
                "province"=>"Koshi"
            ],
            [
                "id"=>14,
                "city_name"=>"Udayapur",
                "province"=>"Koshi"
            ],
            //Madesh
            [
                "id"=>15,
                "city_name"=>"Parsa",
                "province"=>"Madesh"
            ], [
                "id"=>16,
                "city_name"=>"Bara",
                "province"=>"Madesh"
            ], [
                "id"=>17,
                "city_name"=>"Rautaha",
                "province"=>"Madesh"
            ], [
                "id"=>18,
                "city_name"=>"Sarlahi",
                "province"=>"Madesh"
            ], [
                "id"=>19,
                "city_name"=>"Dhanusha",
                "province"=>"Madesh"
            ], [
                "id"=>20,
                "city_name"=>"Siraha",
                "province"=>"Madesh"
            ], [
                "id"=>21,
                "city_name"=>"Mahottari",
                "province"=>"Madesh"
            ], [
                "id"=>22,
                "city_name"=>"Saptari",
                "province"=>"Madesh"
            ],
            //Bagmati
            [
                "id"=>23,
                "city_name"=>"Sindhuli",
                "province"=>"Bagmati"
            ], [
                "id"=>24,
                "city_name"=>"Ramechhap",
                "province"=>"Bagmati"
            ], [
                "id"=>25,
                "city_name"=>"Dolkha",
                "province"=>"Bagmati"
            ], [
                "id"=>26,
                "city_name"=>"Bhaktapur",
                "province"=>"Bagmati"
            ], [
                "id"=>27,
                "city_name"=>"Dhading",
                "province"=>"Bagmati"
            ], [
                "id"=>28,
                "city_name"=>"Kathmandu",
                "province"=>"Bagmati"
            ], [
                "id"=>29,
                "city_name"=>"Kaverpalanchok",
                "province"=>"Bagmati"
            ], [
                "id"=>30,
                "city_name"=>"Lalitpur",
                "province"=>"Bagmati"
            ], [
                "id"=>31,
                "city_name"=>"Nuwakot",
                "province"=>"Bagmati"
            ], [
                "id"=>32,
                "city_name"=>"Rasuwa",
                "province"=>"Bagmati"
            ], [
                "id"=>33,
                "city_name"=>"Sindhupalchok",
                "province"=>"Bagmati"
            ], [
                "id"=>34,
                "city_name"=>"Chitwan",
                "province"=>"Bagmati"
            ], [
                "id"=>35,
                "city_name"=>"Makwanpur",
                "province"=>"Bagmati"
            ],
            //Gandaki
            [
                "id"=>36,
                "city_name"=>"Baglung",
                "province"=>"Gandaki"
            ], [
                "id"=>37,
                "city_name"=>"Gorkha",
                "province"=>"Gandaki"
            ], [
                "id"=>38,
                "city_name"=>"Kaski",
                "province"=>"Gandaki"
            ], [
                "id"=>39,
                "city_name"=>"Lamjung",
                "province"=>"Gandaki"
            ], [
                "id"=>40,
                "city_name"=>"Manag",
                "province"=>"Gandaki"
            ], [
                "id"=>41,
                "city_name"=>"Mustang",
                "province"=>"Gandaki"
            ], [
                "id"=>42,
                "city_name"=>"Myagdi",
                "province"=>"Gandaki"
            ], [
                "id"=>43,
                "city_name"=>"Nawalparasi(East of Bardaghat Susta)",
                "province"=>"Gandaki"
            ], [
                "id"=>44,
                "city_name"=>"Parbat",
                "province"=>"Gandaki"
            ], [
                "id"=>45,
                "city_name"=>"Syangja",
                "province"=>"Gandaki"
            ],
            [
                "id"=>46,
                "city_name"=>"Tanahun",
                "province"=>"Gandaki"
            ],
            //Lumbini
           [
                "id"=>47,
                "city_name"=>"Kapilvastu",
                "province"=>"Lumbini"
            ], [
                "id"=>48,
                "city_name"=>"Nawalparasi (West of Bardaghat Susta)",
                "province"=>"Lumbini"
            ], [
                "id"=>49,
                "city_name"=>"Rupendehi",
                "province"=>"Lumbini"
            ], [
                "id"=>50,
                "city_name"=>"Arghakhanchi",
                "province"=>"Lumbini"
            ], [
                "id"=>51,
                "city_name"=>"Gulmi",
                "province"=>"Lumbini"
            ], [
                "id"=>52,
                "city_name"=>"Dang",
                "province"=>"Lumbini"
            ], [
                "id"=>53,
                "city_name"=>"Pyuthan",
                "province"=>"Lumbini"
            ], [
                "id"=>54,
                "city_name"=>"Palpa",
                "province"=>"Lumbini"
            ], [
                "id"=>55,
                "city_name"=>"Eastern Rukum",
                "province"=>"Lumbini"
            ], [
                "id"=>56,
                "city_name"=>"Banke",
                "province"=>"Lumbini"
            ], [
                "id"=>57,
                "city_name"=>"Bardiya",
                "province"=>"Lumbini"
            ],
            [
                "id"=>58,
                "city_name"=>"Rolpa",
                "province"=>"Lumbini"
            ],
            //Karnali
            [
                "id"=>59,
                "city_name"=>"Western Rukum",
                "province"=>"Karnali"
            ], [
                "id"=>60,
                "city_name"=>"Salyan",
                "province"=>"Karnali"
            ], [
                "id"=>61,
                "city_name"=>"Dolpa",
                "province"=>"Karnali"
            ], [
                "id"=>62,
                "city_name"=>"Humla",
                "province"=>"Karnali"
            ], [
                "id"=>63,
                "city_name"=>"Jumla",
                "province"=>"Karnali"
            ], [
                "id"=>64,
                "city_name"=>"Kalikot",
                "province"=>"Karnali"
            ], [
                "id"=>65,
                "city_name"=>"Mugu",
                "province"=>"Karnali"
            ], [
                "id"=>66,
                "city_name"=>"Surkhet",
                "province"=>"Karnali"
            ], [
                "id"=>67,
                "city_name"=>"Dailekh",
                "province"=>"Karnali"
            ],
            [
                "id"=>68,
                "city_name"=>"Jajarkot",
                "province"=>"Karnali"
            ],
            //Sudurpaschim
            [
                "id"=>69,
                "city_name"=>"Kailali",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>70,
                "city_name"=>"Achham",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>71,
                "city_name"=>"Doti",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>72,
                "city_name"=>"Bajhang",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>73,
                "city_name"=>"Bajura",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>74,
                "city_name"=>"Kanchanpur",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>75,
                "city_name"=>"Dadeldhura",
                "province"=>"Sudurpaschim"
            ], [
                "id"=>76,
                "city_name"=>"Baitadi",
                "province"=>"Sudurpaschim"
            ],
            [
                "id"=>77,
                "city_name"=>"Darchula",
                "province"=>"Sudurpaschim"
            ],
        ];
        City::insert($city);
    }
}
