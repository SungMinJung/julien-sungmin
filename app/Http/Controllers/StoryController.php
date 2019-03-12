<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {
        return view('story.brand');
    }
    public function ceo() {
        return view('story.ceo');
    }
    public function julien() {
        return view('story.julien');
    }
    public function kid() {
        return view('story.kid');
    }
    public function cofwaf() {
        return view('story.cofwaf');
    }
    public function kims() {
        return view('story.kims');
    }
    public function direction() {
        return view('story.direction');
    }
}
