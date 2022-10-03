<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiCreateUser extends Controller
{
    function GetApiData()
    {
        $response = Http::get('http://dummyjson.com/users');
        //dd($response['users']);
        return view('ApiCreateUser',['users'=>$response['users']]);
       
    }
}