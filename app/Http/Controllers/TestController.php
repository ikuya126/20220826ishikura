<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function build(){
        return "建物です";
    }
    public function room_number($number){
        return "部屋番号は". $number . "です";
    }
        
}
