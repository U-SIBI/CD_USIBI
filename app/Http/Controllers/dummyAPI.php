<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData(){
        return["name"=>"Ario Syawal","email"=>"ariosyawal@gmail.com","alamat"=>"kost Adonis" ];
    }
}
