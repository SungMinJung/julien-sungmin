<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;

class FranchiseController extends Controller
{
    //
    public function competitive(){
        return view('franchise.competitive');
    }
    public function join(){
        return view('franchise.join');
    }
    public function cost(){
        return view('franchise.cost');
    }
    public function guide(){
        return view('franchise.guide');
    }
    public function explain(){
        return view('franchise.explain');
    }

    public function index()
    {
        $franchises = Franchise::all();
        $franchises = DB::table('franchises');

        return view('admin.franchise.index');
    }

    // 프랜차이즈 가맹신청 페이지
    public function create()
    {
        return view('franchise.guide');
    }

    public function store()
    {
        
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
