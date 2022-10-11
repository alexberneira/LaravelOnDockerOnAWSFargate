<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function insertUsers($arrayUsers){
        foreach ($arrayUsers as $oneUser) {
            $user = DB::table('users')->insert($oneUser);
        }
        if ($user) {
             echo "User inserted successfully!";
        } else {
             echo "Error while inserting user details";
        }
        // $user = DB::table('users')->insert([
        //     'name' => 'Vishal Khanna',
        //     'email' => 'vishal@email.com',
        //     'password' => 'vishal123',
        //  ]);
        //  if ($user) {
        //     echo "User inserted successfully!";
        //  } else {
        //     echo "Error while inserting user details";
        //  }
        //print_r($arrayUsers);
    }


}
