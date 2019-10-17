<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BerandaController extends Controller
{
    public function index(){
        $product = Product::take(12)->orderBy('id','DESC')->get();
        return view('frontend.homepage',compact('product'));
    }
}
