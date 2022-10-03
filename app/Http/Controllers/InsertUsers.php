<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class InsertUsers extends Controller
{
    public function insert($array_users_to_insert = []){
        
        $firstname = "Alex";
        $lastname = "Berneira";
        $maidenname = "Cunha";
        $age = 42;
        $gender = "male";
        $email = "alexberneira@gmail.com";
        $phone = "55 51 994005252"; 
        $username = "alexberneira";
        $password = "kjahsd876";
        $birthdate = "1979-10-25";
        $imagelink = "www.asdads.com.br/asdasd.png";
        $bloodgroup = "A+";
        $height = 1.82;
        $weight = 85.5;
        $eyecolor = "brown";



        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        $array_users_to_insert=array('firstname'=>$firstname,"lastname"=>$lastname,"maidenname" => $maidenname,"age"=>$age,"gender"=>$gender,
        "email"=>$email,"phone"=>$phone,"username"=>$username,"password"=>$password,"birthdate"=>$birthdate,"imagelink"=>$imagelink,"bloodgroup"=>$bloodgroup,
        "height"=>$height,"weight"=>$weight,"eyecolor"=>$eyecolor);
        DB::table('users')->insert($array_users_to_insert); 

        
        }
}