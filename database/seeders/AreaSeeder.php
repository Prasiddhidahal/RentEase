<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Koshi
            //1
            $area = [];
            $id = 1;
            $i=1;
            $cityId = 1;
            $areaNames = ["Bhojpur", "Shadanand", "Hatuwagadhi", "Ramprasad Rai", "Aamchok", "Tyamke Maiyunm", "Arun Gaunpalika","Pauwadungma","Salpasilichho"];;
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$id-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
           
           //2
            $i=1;
            $cityId = 2;
            $areaNames = ["Dhankuta", "Pakhribas", "Mahalaxmi", "Sangurigadhi", "Chaubise", "Shahidbhumi", "Chhathar Jorpati"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //3
            $i=1;
            $cityId = 3;
            $areaNames = ["Ilam", "Deumai", "Mai", "Sandakpur", "Suryodaya", "Chulachuli", "Fikkal"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //4
            $i=1;
            $cityId = 4;
            $areaNames =["Bhadrapur", "Birtamod", "Damak", "Arjundhara", "Gauradaha", "Gauriganj", "Haldibari", "Jhapa", "Kachankawal", "Kamal", "Kankai", "Khajurgachhihawa", "Khorang", "Mechinagar", "Pathari-Sanischare", "Prithivinagar", "Shivasatakshi"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //5
            $i=1;
            $cityId = 5;
            $areaNames = ["Diktel Rupakot Majhuwagadhi", "Halesi Tuwachung", "	Khotehang", "Diprung", "Aiselukharka", "Jantedhunga", "Kepilasgadhi", "Barahpokhari", "Rawabesi", "Sakela"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //6
            $i=1;
            $cityId = 6;
            $areaNames = ["Belbari", "Biratnagar", "Budhiganga", "Kanepokhari", "Kerabari", "Letang", "Pathari-Shanischare", "Rangeli", "Sundarharaincha"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //7
            $i=1;
            $cityId = 7;
            $areaNames = ["Siddhicharan", "Sunkoshi", "Molung", "Likhu", "Champadevi"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            
           

             //8
             $i=1;
             $cityId = 8;
             $areaNames = ["Falelung", "Hilihang", "Kummayak", "Mauwabote", "Phidim", "Tumbewa", "Yangnam"];;
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
            
            //9
             $i=1;
             $cityId = 9;
             $areaNames = ["Chainpur", "Dharmadevi", "Khandbari", "Madi", "Makalu", "Silichong", "Tamku"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //10
             $i=1;
             $cityId = 10;
             $areaNames = ["Khumbu Pasanglhamu", "Dudhkunda", "Solududhkunda", "Mahakulung"]
             ;
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //11
             $i=1;
             $cityId = 11;
             $areaNames = ["Barahachhetra", "Dharan", "Duhabi", "Gadhi", "Harinagara", "Inaruwa", "Itahari", "Jhumka", "Koshi Haraicha", "Ramdhuni", "Rupani", "Shivasataksi", "Tarhara"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //12
             $i=1;
             $cityId = 12;
             $areaNames = ["Aathrai Tribeni", "Meringden", "Mikwakhola", "Sidingwa", "Sirijangha", "Maiwakhola", "Phungling", "Mai Municipality"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //13
             $i=1;
             $cityId = 13;
             $areaNames = ["Chhathar", "Myanglung", "Phedap", "Sukrabare"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //14
             $i=1;
             $cityId = 14;
             $areaNames = ["Belaka", "Chaudandigadhi", "Katari", "Lekhgaun", "Rautamai"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //Madesh
             //15
              
            $i=1;
            $cityId = 15;
            $areaNames = ["Birgunj", "Bahudarmai", "Chhipaharmai", "Jagarnathpur", "Jirabhawani", "Pakaha Mainpur", "Parsagadhi", "Sakhuwa Prasauni", "Thori"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //16
            $i=1;
            $cityId = 16;
            $areaNames = ["Adarsh Kotwal", "Kalaiya", "Jitpur Simara", "Nijgadh", "Mahagadhimai"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //17
            $i=1;
            $cityId = 17;
            $areaNames = ["Baudhimai", "Brindaban", "Chandrapur", "Dewahi Gonahi", "Garuda", "Gaur", "Katahariya", "Madhav Narayan", "Maulapur", "Paroha", "Phatuwa Bijayapur", "Rajpur", "Yadukuha"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //18
            $i=1;
            $cityId = 18;
            $areaNames = ["Bishnu", "Chakraghatta", "Godaita", "Harion", "Haripur", "Ishworpur", "Kabilasi", "Lalbandi", "Malangawa", "Parwanipur", "Ramnagar", "Sukhipur", "Basbariya"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //19
            $i=1;
            $cityId = 19;
            $areaNames = ["Bideha", "Chhireshwarnath", "Dhanusadham", "Ganeshman Charnath", "Janaknandani", "Kamala", "Lakshminiya", "Mithila", "Mukhiyapatti Musarmiya", "Nagarain", "Sabaila", "Saptari Rajbiraj", "Sithalpati"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            //20
            $i=1;
            $cityId = 20;
            $areaNames = ["Aurahi", "Bhagawanpur", "Dhangadhimai", "Golbazar", "Kalyanpur", "Lahan", "Mirchaiya", "Naraha", "Navarajpur", "Sakhuwanankarkatti", "Siraha Municipality", "Sukhipur"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
            
           

             //21
             $i=1;
             $cityId = 21;
             $areaNames = ["Bardibas", "Bhangaha", "Jaleshwor", "Manara Shiswa", "Matihani", "Ramgopalpur", "Samsi"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
            
            //22
             $i=1;
             $cityId = 22;
             $areaNames = ["Balan Bihul", "Bodebarsain", "Chhinnamasta", "Dakneshwori", "Hanumannagar Kankalini", "Kanchanrup", "Khadak", "Koiladi", "Kusaha", "Lalapatti", "Mahadeva", "Rajbiraj", "Rupani"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //Bagmati
             //23
             $i=1;
             $cityId = 23;
             $areaNames = ["Dudhauli", "Golanjor", "Kamalamai", "Marin", "Sunkoshi", "Tinpatan"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //24
             $i=1;
             $cityId = 24;
             $areaNames = ["Bamti Bhandar", "Doramba", "Ramechhap", "Manthali", "Duragaun", "Kumbukasthali", "Rashnailu"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //25
             $i=1;
             $cityId = 25;
             $areaNames = ["Bhimeshwar", "Jiri", "Suri", "Namdu", "Mati", "Malu", "Dolakha Town"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //26
             $i=1;
             $cityId = 26;
             $areaNames = ["Bageshwori", "Changunarayan", "Chhaling", "Dadhikot", "Duwakot", "Madhyapur Thimi", "Nagarkot", "Suryabinayak"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //27
             $i=1;
             $cityId = 27;
             $areaNames = ["Benighat Rorang", "Dhunibesi", "Gajuri", "Galchi", "Gangajamuna", "Gangajamuna Rural", "Jwalamukhi", "Khalte", "Nilkantha", "Rubi Valley", "Siddhalek", "Thakre"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
               //28
               $i=1;
               $cityId = 28;
               $areaNames = ["Budhanilkantha", "Chandragiri", "Dakshinkali", "Gokarneshwor", "Kageshwari-Manohara", "Kathmandu", "Kirtipur", "Nagarjun", "Shankharapur", "Tarakeshwor"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
                 //29
             $i=1;
             $cityId = 29;
             $areaNames = ["Banepa", "Bethanchowk", "Bhumlu", "Chaurideurali", "Dapcha Kashikhanda", "Dolalghat", "Kavre", "Mandan Deupur", "Panauti", "Roshi"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
               //30
               $i=1;
               $cityId = 30;
               $areaNames = ["Bagmati", "Godawari", "Mahalaxmi", "Lalitpur", "Konjyosom", "Mahanthapuri", "Sunakothi"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
                 //31
             $i=1;
             $cityId = 31;
             $areaNames = ["Belkotgadhi", "Bidur", "Chautara Sangachowkgadi", "Dupcheshwar", "Likhu", "Myagang", "Panchakanya", "Shivapuri"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             
               //32
               $i=1;
               $cityId = 32;
               $areaNames = ["Gosaikunda", "Kalika", "Gaurishankar", "Naukunda"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
                 //33
             $i=1;
             $cityId = 33;
             $areaNames = ["Balephi", "Bhimeshwar", "Chautara", "Indrawati", "Jugal", "Melamchi", "Panchpokhari Thangpal", "Sunkoshi"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
               //34
               $i=1;
               $cityId = 34;
               $areaNames =["Ayodhyapuri", "Kasara", "Tandi bazaar", "Badgaun", "Gitanagar bazaar", "Muglin Bazaar", "Sauraha", "Manakamana"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
                 //35
             $i=1;
             $cityId = 35;
             $areaNames = ["Agara", "Budhichaur", "Kulekhani", "Manahari", "Markhu", "Raksirang", "Tistung Deurali"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //Gandaki
  //36
  $i=1;
  $cityId = 36;
  $areaNames = ["Adhikarichaur", "Baglung", "Daga Tundada", "Jaidi", "Jaljala", "Burtibang", "Dhullu Baskot"];
  
  while ($i <= count($areaNames)) {
      $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
      $area[$id-1] = [
          "id" => $id,
          "city_id" => $cityId,
          "area_name" => $areaName
      ];
  
      $id += 1;
      $i+=1;
  }
    //37
    $i=1;
    $cityId = 37;
    $areaNames = ["Gorkha", "Palungtar", "Siranchok", "Sulikot", "Ajirkot", "Bhimsensthan", "Chumanubri"];
    
    while ($i <= count($areaNames)) {
        $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
        $area[$id-1] = [
            "id" => $id,
            "city_id" => $cityId,
            "area_name" => $areaName
        ];
    
        $id += 1;
        $i+=1;
    }
      //38
      $i=1;
      $cityId = 38;
      $areaNames = ["Pokhara Lekhnath", "Machhapuchchhre", "Annapurna", "Madi", "Rupa", "Ghiring", "Gurungkhola", "Dhital"];
      
      while ($i <= count($areaNames)) {
          $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
          $area[$id-1] = [
              "id" => $id,
              "city_id" => $cityId,
              "area_name" => $areaName
          ];
      
          $id += 1;
          $i+=1;
      }
        //39
        $i=1;
        $cityId = 39;
        $areaNames = ["Besisahar", "Marshyangdi", "Rainas", "Madhya Nepal Municipality", "Dordi", "Kaligandaki", "Sundarbazar", "Kwholasothar", "Marsyangdi Rural"];
        
        while ($i <= count($areaNames)) {
            $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
            $area[$id-1] = [
                "id" => $id,
                "city_id" => $cityId,
                "area_name" => $areaName
            ];
        
            $id += 1;
            $i+=1;
        }
          //40
          $i=1;
          $cityId = 40;
          $areaNames = ["Chame", "Nasong Rural", "Narpa Bhumi", "Manang", "Neshyang"];
          
          while ($i <= count($areaNames)) {
              $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
              $area[$id-1] = [
                  "id" => $id,
                  "city_id" => $cityId,
                  "area_name" => $areaName
              ];
          
              $id += 1;
              $i+=1;
          }
           //41
           $i=1;
           $cityId = 41;
           $areaNames = ["Gharapjhong", "Thasang", "Barhagaun Muktichhetra", "Lomanthang", "Lo-Ghekar Damodarkunda"];
           
           while ($i <= count($areaNames)) {
               $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
               $area[$id-1] = [
                   "id" => $id,
                   "city_id" => $cityId,
                   "area_name" => $areaName
               ];
           
               $id += 1;
               $i+=1;
           }
            //42
            $i=1;
            $cityId = 42;
            $areaNames = ["Dagnam", "Beni", "Begkhola", "Kuhunkot", "Okharbot"];
            
            while ($i <= count($areaNames)) {
                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                $area[$id-1] = [
                    "id" => $id,
                    "city_id" => $cityId,
                    "area_name" => $areaName
                ];
            
                $id += 1;
                $i+=1;
            }
             //43
             $i=1;
             $cityId = 43;
             $areaNames = ["Kawasoti", "Gaindakot", "Devachuli", "Madhyabindu", "Baudikali"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
             //44
             $i=1;
             $cityId = 44;
             $areaNames = ["Banau", "Katuwa Chaupari", "Khurkot", "Kushma Municipality", "Lunkhu Deurali"];
             
             while ($i <= count($areaNames)) {
                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                 $area[$id-1] = [
                     "id" => $id,
                     "city_id" => $cityId,
                     "area_name" => $areaName
                 ];
             
                 $id += 1;
                 $i+=1;
             }
              //45
              $i=1;
              $cityId = 45;
              $areaNames = ["Waling", "Arjunchaupari", "Bhirkot", "Chapakot", "Galyang", "Kaligandaki", "Phedikhola"];
              
              while ($i <= count($areaNames)) {
                  $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                  $area[$id-1] = [
                      "id" => $id,
                      "city_id" => $cityId,
                      "area_name" => $areaName
                  ];
              
                  $id += 1;
                  $i+=1;
              }
             
              //46
              $i=1;
              $cityId = 46;
              $areaNames =  ["Bhanu", "Bhimad", "Byas", "Devghat", "Shuklagandaki", "Vyas"];
              
              while ($i <= count($areaNames)) {
                  $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                  $area[$id-1] = [
                      "id" => $id,
                      "city_id" => $cityId,
                      "area_name" => $areaName
                  ];
              
                  $id += 1;
                  $i+=1;
              }
              //Lumbini
              //47
              $i=1;
              $cityId = 47;
              $areaNames =  ["Taulihawa", "Banganga", "Bijayanagar", "Mayadevi"];
              
              while ($i <= count($areaNames)) {
                  $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                  $area[$id-1] = [
                      "id" => $id,
                      "city_id" => $cityId,
                      "area_name" => $areaName
                  ];
              
                  $id += 1;
                  $i+=1;
              }
              //48
              $i=1;
              $cityId = 48;
              $areaNames =  ["Bardaghat", "Ramgram", "Sunwal", "Susta","Palhinandan"];
              
              while ($i <= count($areaNames)) {
                  $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                  $area[$id-1] = [
                      "id" => $id,
                      "city_id" => $cityId,
                      "area_name" => $areaName
                  ];
              
                  $id += 1;
                  $i+=1;
              }
              //49
              $i=1;
              $cityId = 49;
              $areaNames =  ["Siddharthanagar", "Butwal", "Devdaha", "Sainamaina", "Marchawari"];
              
              while ($i <= count($areaNames)) {
                  $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                  $area[$id-1] = [
                      "id" => $id,
                      "city_id" => $cityId,
                      "area_name" => $areaName
                  ];
              
                  $id += 1;
                  $i+=1;
              }
               //50
               $i=1;
               $cityId = 50;
               $areaNames = ["Sandhikharka", "Chhatradev", "Malarani", "Bhumikasthan"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
               
               //51
               $i=1;
               $cityId = 51;
               $areaNames = ["Tamghas", "Isma", "Chandrakot", "Satyawati"];
               
               while ($i <= count($areaNames)) {
                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                   $area[$id-1] = [
                       "id" => $id,
                       "city_id" => $cityId,
                       "area_name" => $areaName
                   ];
               
                   $id += 1;
                   $i+=1;
               }
                 //52
                 $i=1;
                 $cityId = 52;
                 $areaNames = ["Amritpur", "Baghmare", "Bela", "Bijauri", "Chailahi", "Dhanauri", "Dharna"];
                 
                 while ($i <= count($areaNames)) {
                     $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                     $area[$id-1] = [
                         "id" => $id,
                         "city_id" => $cityId,
                         "area_name" => $areaName
                     ];
                 
                     $id += 1;
                     $i+=1;
                 }
                  //53
                  $i=1;
                  $cityId = 53;
                  $areaNames = ["Arkha", "Chunja", "Hansapur", "Jumrikanda", "Narikot", "Okharkot", "Majhakot"];
                  
                  while ($i <= count($areaNames)) {
                      $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                      $area[$id-1] = [
                          "id" => $id,
                          "city_id" => $cityId,
                          "area_name" => $areaName
                      ];
                  
                      $id += 1;
                      $i+=1;
                  }
                   //54
                 $i=1;
                 $cityId = 54;
                 $areaNames = ["Tansen", "Rainadevi Chhahara", "Rampur", "Ribdikot"];
                 
                 while ($i <= count($areaNames)) {
                     $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                     $area[$id-1] = [
                         "id" => $id,
                         "city_id" => $cityId,
                         "area_name" => $areaName
                     ];
                 
                     $id += 1;
                     $i+=1;
                 }
                   //55
                   $i=1;
                   $cityId = 55;
                   $areaNames = ["Bhume", "Putha Uttarganga", "Sisne"];
                   
                   while ($i <= count($areaNames)) {
                       $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                       $area[$id-1] = [
                           "id" => $id,
                           "city_id" => $cityId,
                           "area_name" => $areaName
                       ];
                   
                       $id += 1;
                       $i+=1;
                   }
                    //56
                    $i=1;
                    $cityId = 56;
                    $areaNames = ["Bageshwari", "Baijapur", "Belahari","Mahadevpuri", "Nepalganj", "Phatepur", "Saigaun","Udarapur", "Udayapur", "Kohalpur"];
                    
                    while ($i <= count($areaNames)) {
                        $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                        $area[$id-1] = [
                            "id" => $id,
                            "city_id" => $cityId,
                            "area_name" => $areaName
                        ];
                    
                        $id += 1;
                        $i+=1;
                    }
                     //57
                     $i=1;
                     $cityId = 57;
                     $areaNames = ["Baganaha", "Belawa", "Kalika","Manau", "Mahamadpur", "Sanesri", "Taratal","Naya Gaun", "Padanaha", "Neulapur"];
                     
                     while ($i <= count($areaNames)) {
                         $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                         $area[$id-1] = [
                             "id" => $id,
                             "city_id" => $cityId,
                             "area_name" => $areaName
                         ];
                     
                         $id += 1;
                         $i+=1;
                     }
                      //58
                      $i=1;
                      $cityId = 58;
                      $areaNames = ["Lungri", "Madi", "Gangadev","Paribartan", "Sunchhahari", "Thabang", "Rolpa","Runtigadhi", "Triveni", "Sunilsmiriti"];
                      
                      while ($i <= count($areaNames)) {
                          $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                          $area[$id-1] = [
                              "id" => $id,
                              "city_id" => $cityId,
                              "area_name" => $areaName
                          ];
                      
                          $id += 1;
                          $i+=1;
                      }
                      //Karnali
                       //59
                       $i=1;
                       $cityId = 59;
                       $areaNames = ["Musikot", "Chaurjahari", "Aathbiskot","Banphikot", "Tribeni", "Sani Bheri"];
                       
                       while ($i <= count($areaNames)) {
                           $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                           $area[$id-1] = [
                               "id" => $id,
                               "city_id" => $cityId,
                               "area_name" => $areaName
                           ];
                       
                           $id += 1;
                           $i+=1;
                       }
                        //60
                        $i=1;
                        $cityId = 60;
                        $areaNames = ["Sharada", "Kapurkot", "Bagchaur"];
                        
                        while ($i <= count($areaNames)) {
                            $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                            $area[$id-1] = [
                                "id" => $id,
                                "city_id" => $cityId,
                                "area_name" => $areaName
                            ];
                        
                            $id += 1;
                            $i+=1;
                        }
                        //61
                        $i=1;
                        $cityId = 61;
                        $areaNames = ["Dunai", "Tripurasundari", "Thulibheri"];
                        
                        while ($i <= count($areaNames)) {
                            $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                            $area[$id-1] = [
                                "id" => $id,
                                "city_id" => $cityId,
                                "area_name" => $areaName
                            ];
                        
                            $id += 1;
                            $i+=1;
                        }
                         //62
                         $i=1;
                         $cityId = 62;
                         $areaNames = ["Simkot", "Namkha", "Sarkegad"];
                         
                         while ($i <= count($areaNames)) {
                             $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                             $area[$id-1] = [
                                 "id" => $id,
                                 "city_id" => $cityId,
                                 "area_name" => $areaName
                             ];
                         
                             $id += 1;
                             $i+=1;
                         }
                          //63
                          $i=1;
                          $cityId = 63;
                          $areaNames =["Chandannath", "Tatopani", "Sinja"];
                          
                          while ($i <= count($areaNames)) {
                              $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                              $area[$id-1] = [
                                  "id" => $id,
                                  "city_id" => $cityId,
                                  "area_name" => $areaName
                              ];
                          
                              $id += 1;
                              $i+=1;
                          }
                           //64
                           $i=1;
                           $cityId = 64;
                           $areaNames =["Manma", "Khandachakra", "Pachaljharana"];
                           
                           while ($i <= count($areaNames)) {
                               $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                               $area[$id-1] = [
                                   "id" => $id,
                                   "city_id" => $cityId,
                                   "area_name" => $areaName
                               ];
                           
                               $id += 1;
                               $i+=1;
                           }
                            //65
                            $i=1;
                            $cityId = 65;
                            $areaNames =["Gamgadhi", "Chhayanath Rara", "Mugum Karmarong"];
                            
                            while ($i <= count($areaNames)) {
                                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                $area[$id-1] = [
                                    "id" => $id,
                                    "city_id" => $cityId,
                                    "area_name" => $areaName
                                ];
                            
                                $id += 1;
                                $i+=1;
                            }
                            //66
                            $i=1;
                            $cityId = 66;
                            $areaNames =["Birendranagar", "Bheriganga", "Panchapuri", "Chaukune"];
                            
                            while ($i <= count($areaNames)) {
                                $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                $area[$id-1] = [
                                    "id" => $id,
                                    "city_id" => $cityId,
                                    "area_name" => $areaName
                                ];
                            
                                $id += 1;
                                $i+=1;
                            }
                             //67
                             $i=1;
                             $cityId = 67;
                             $areaNames =["Awal Parajul", "Jaganath", "Odhari", "Padukasthan", "Piladi", "Katti", "Lakuri"];
                             
                             while ($i <= count($areaNames)) {
                                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                 $area[$id-1] = [
                                     "id" => $id,
                                     "city_id" => $cityId,
                                     "area_name" => $areaName
                                 ];
                             
                                 $id += 1;
                                 $i+=1;
                             }
                             //68
                             $i=1;
                             $cityId = 68;
                             $areaNames =["Archhani", "Bhur", "Paink", "Nayakwada", "Majhkot", "Lahai", "Sima"];
                             
                             while ($i <= count($areaNames)) {
                                 $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                 $area[$id-1] = [
                                     "id" => $id,
                                     "city_id" => $cityId,
                                     "area_name" => $areaName
                                 ];
                             
                                 $id += 1;
                                 $i+=1;
                             }
                             //Sudurpachim
                               //69
                               $i=1;
                               $cityId = 69;
                               $areaNames =["Dhangadhi", "Lamki Chuha", "Godawari", "Gauriganga", "Bardagoriya"];
                               
                               while ($i <= count($areaNames)) {
                                   $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                   $area[$id-1] = [
                                       "id" => $id,
                                       "city_id" => $cityId,
                                       "area_name" => $areaName
                                   ];
                               
                                   $id += 1;
                                   $i+=1;
                               }
                                //70
                                $i=1;
                                $cityId = 70;
                                $areaNames =["Mangalsen", "Sanphebagar", "Kamalbazar"];
                                
                                while ($i <= count($areaNames)) {
                                    $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                    $area[$id-1] = [
                                        "id" => $id,
                                        "city_id" => $cityId,
                                        "area_name" => $areaName
                                    ];
                                
                                    $id += 1;
                                    $i+=1;
                                }
                                //71
                                $i=1;
                                $cityId = 71;
                                $areaNames =["Banalek", "Banja Kakani", "Changra","Khatiwada", "Latamandau", "Mudabhara", "Pachanali","Nirauli", "Pokhari", "Tikha"];
                                
                                while ($i <= count($areaNames)) {
                                    $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                    $area[$id-1] = [
                                        "id" => $id,
                                        "city_id" => $cityId,
                                        "area_name" => $areaName
                                    ];
                                
                                    $id += 1;
                                    $i+=1;
                                }
                                //72
                                $i=1;
                                $cityId = 72;
                                $areaNames =["Bhairabnath", "Dahabagar", "Chaudhari","Kotdewal", "Lekhgaun", "Rilu", "Pipalkot","Syandi", "Surma", "Thalara"];
                                
                                while ($i <= count($areaNames)) {
                                    $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                    $area[$id-1] = [
                                        "id" => $id,
                                        "city_id" => $cityId,
                                        "area_name" => $areaName
                                    ];
                                
                                    $id += 1;
                                    $i+=1;
                                }
                                //73
                                $i=1;
                                $cityId = 73;
                                $areaNames =["Atichaur", "Baddhu", "Bramhatola","Chhatara", "Dahakot", "Jayabageshwari", "Kailashmandau","Kolti", "Rugin", "Jukot"];
                                
                                while ($i <= count($areaNames)) {
                                    $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                    $area[$id-1] = [
                                        "id" => $id,
                                        "city_id" => $cityId,
                                        "area_name" => $areaName
                                    ];
                                
                                    $id += 1;
                                    $i+=1;
                                }
                                //74
                                $i=1;
                                $cityId = 74;
                                $areaNames =["Bhimdatta", "Bedkot", "Shuklaphanta"];
                                
                                while ($i <= count($areaNames)) {
                                    $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                    $area[$id-1] = [
                                        "id" => $id,
                                        "city_id" => $cityId,
                                        "area_name" => $areaName
                                    ];
                                
                                    $id += 1;
                                    $i+=1;
                                }
                                 //75
                                 $i=1;
                                 $cityId = 75;
                                 $areaNames =["Amargadhi", "Parshuram", "Ajayameru"];
                                 
                                 while ($i <= count($areaNames)) {
                                     $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                     $area[$id-1] = [
                                         "id" => $id,
                                         "city_id" => $cityId,
                                         "area_name" => $areaName
                                     ];
                                 
                                     $id += 1;
                                     $i+=1;
                                 }
                                  //76
                                  $i=1;
                                  $cityId = 76;
                                  $areaNames =["Dasharathchand", "Patan", "Melauli", "Sigas"];
                                  
                                  while ($i <= count($areaNames)) {
                                      $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                      $area[$id-1] = [
                                          "id" => $id,
                                          "city_id" => $cityId,
                                          "area_name" => $areaName
                                      ];
                                  
                                      $id += 1;
                                      $i+=1;
                                  }
                                   //77
                                   $i=1;
                                   $cityId = 77;
                                   $areaNames =["Mahakali", "Shailyasikhar", "Apihimal"];
                                   
                                   while ($i <= count($areaNames)) {
                                       $areaName = $areaNames[$i-1]; // Select an area name from the array using $id-1 as the index
                                       $area[$id-1] = [
                                           "id" => $id,
                                           "city_id" => $cityId,
                                           "area_name" => $areaName
                                       ];
                                   
                                       $id += 1;
                                       $i+=1;
                                   }
            Area::insert($area);
    }
}
