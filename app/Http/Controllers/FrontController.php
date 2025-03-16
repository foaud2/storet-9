<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $products = product::all();
        return view('home.index',compact('products'));
    }
}
