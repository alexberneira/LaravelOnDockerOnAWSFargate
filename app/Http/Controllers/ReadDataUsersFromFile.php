<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use App\Models\User;

class ReadDataUsersFromFile extends Controller
{   
    function ReadDatafromexcel()
    {
        //echo getcwd().'<br>'; //echo dirname(__FILE__).'<br>'; //echo basename(__DIR__).'<br>'; //phpinfo(); exit;
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load("../App/Http/Controllers/users.xlsx");
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $i=1;
        unset($sheetData[0]);
        $jsonresponse = [];
        $firstname = [];
        $maidenname = [];
        $lastname = [];
        foreach ($sheetData as $t) {
        // process element here; // access column by index
            //echo $i."---".$t[0]."-".$t[1]."-".$t[2]."-".$t[3]."-".$t[4]."-".$t[5]."-".$t[6]."-".$t[7]."-".$t[8]."-".$t[9]."-".$t[10]."-".$t[11]."-".$t[12]."-".$t[13]."-".$t[14]." <br>";
            array_push($firstname,$t[0]);
            array_push($maidenname,$t[1]);
            array_push($lastname,$t[2]);   
            $i++;
        }
        $i = 1;
        foreach ($sheetData as $t) {
            // process element here; // access column by index
                //echo $i."---".$t[0]."-".$t[1]."-".$t[2]."-".$t[3]."-".$t[4]."-".$t[5]."-".$t[6]."-".$t[7]."-".$t[8]."-".$t[9]."-".$t[10]."-".$t[11]."-".$t[12]."-".$t[13]."-".$t[14]." <br>";
                $users = array(
                    array(
                        "id" => 265,
                        "firstname" => "Alex",
                        "lastname" => "Berneira",
                        "maidenname" => "Cunha",
                        "age" => 42,
                        "gender" => "male",
                        "email" => "alexberneira@gmail.com",
                        "phone" => "55 51 994005252",
                        "username" => "alexberneira",
                        "password" => "kjahsd876",
                        "birthdate" => "1979-10-25",
                        "imagelink" => "www.asdads.com.br/asdasd.png",
                        "bloodgroup" => "A+",
                        "height" => 1.82,
                        "weight" => 85.5,
                        "eyecolor" => "brown",
                        "created" => "2022-10-07 00:22:15",
                    ),
                    array(
                        "id" => 264,
                        "firstname" => "Alex",
                        "lastname" => "Berneira",
                        "maidenname" => "Cunha",
                        "age" => 42,
                        "gender" => "male",
                        "email" => "alexberneira@gmail.com",
                        "phone" => "55 51 994005252",
                        "username" => "alexberneira",
                        "password" => "kjahsd876",
                        "birthdate" => "1979-10-25",
                        "imagelink" => "www.asdads.com.br/asdasd.png",
                        "bloodgroup" => "A+",
                        "height" => 1.82,
                        "weight" => 85.5,
                        "eyecolor" => "brown",
                        "created" => "2022-10-07 00:22:15",
                    ),
                    array(
                        "id" => 263,
                        "firstname" => "Alex",
                        "lastname" => "Berneira",
                        "maidenname" => "Cunha",
                        "age" => 42,
                        "gender" => "male",
                        "email" => "alexberneira@gmail.com",
                        "phone" => "55 51 994005252",
                        "username" => "alexberneira",
                        "password" => "kjahsd876",
                        "birthdate" => "1979-10-25",
                        "imagelink" => "www.asdads.com.br/asdasd.png",
                        "bloodgroup" => "A+",
                        "height" => 1.82,
                        "weight" => 85.5,
                        "eyecolor" => "brown",
                        "created" => "2022-10-07 00:22:15",
                    ),
                );
                
                $i++;
            }
        $jsonresponse[] = [
            'firstname'=>$firstname[array_rand($firstname,1)],
            'maidenname'=>$maidenname[array_rand($maidenname,1)],
            'lastname'=>$lastname[array_rand($lastname,1)],
        ];
        
        // echo '<pre>'.json_encode($jsonresponse);
        $usersInsert = new User();
        $usersInsert->InsertUsers($users);     
        
    }    


}