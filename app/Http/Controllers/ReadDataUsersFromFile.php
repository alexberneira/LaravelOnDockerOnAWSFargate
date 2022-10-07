<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;


class ReadDataUsersFromFile extends Controller
{   
    function ReadDatafromexcel()
    {
        //echo getcwd().'<br>';
        //echo dirname(__FILE__).'<br>';
        //echo basename(__DIR__).'<br>';
        //phpinfo(); exit;
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load("../App/Http/Controllers/users.xlsx");
        
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $i=1;
        unset($sheetData[0]);
        foreach ($sheetData as $t) {
        // process element here;
        // access column by index
            echo $i."---".$t[0]."-".$t[1]."-".$t[2]."-".$t[3]."-".$t[4]."-".$t[5]."-".$t[6]."-".$t[7]."-".$t[8]."-".$t[9]."-".$t[10]."-".$t[11]."-".$t[12]."-".$t[13]."-".$t[14]." <br>";
            $i++;
        }
    }    

}