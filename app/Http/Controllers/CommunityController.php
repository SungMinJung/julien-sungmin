<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function notice(){
        return view('community.notice');
    }
    public function news(){
        return view('community.news');
    }
    public function gallery(){
        return view('community.gallery');
    }
}
