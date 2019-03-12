<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
class StoreController extends Controller
{
    //
    public function success(){
        return view('store.success');
    }
    public function recent(){
        return view('store.recent');
    }
    public function find(){
        $storeList = Store::all();
        return view('store.find', compact('storeList'));
    }
    public function finding($area){
        $storeList = Store::where('area', $area)->get();
        return view('store.find', compact('storeList'));
    }
}
