<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function waffle(){
        return view('menu.waffle');
    }
    public function coffee(){
        return view('menu.coffee');
    }
    public function drinking(){
        return view('menu.drinking');
    }
}
