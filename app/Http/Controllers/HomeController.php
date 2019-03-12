<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $popupList = [
            'http://julienwaffle.com/wp-content/uploads/2018/09/%ED%99%88%ED%8E%98%EC%9D%B4%EC%A7%80-%ED%8C%9D%EC%97%85%EC%98%A4%ED%94%88%EC%A0%90-5.jpg',
            'http://julienwaffle.com/wp-content/uploads/2018/07/%EC%83%B5%EC%9D%B8%EC%83%B54.jpg',
            'http://julienwaffle.com/wp-content/uploads/2018/10/%ED%8C%9D%EC%97%85-10.jpg'
            
        ];
        return view('home', compact('popupList'));
    }
}
