<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;

class BerandaController extends Controller
{
    protected $category;
    public function __construct(){
        $this->category = Category::where('parent_id', null)->get();
    }
    public function index(){
        $category = $this->category;
        $product = Product::take(12)->orderBy('id','DESC')->get();
        return view('frontend.homepage',compact('product','category'));
    }

    public function product(){
        $category = $this->category;
        $product = Product::orderBy('id','DESC')->paginate(8);
        return view('frontend.product',compact('product','category'));
    }

    public function productbycategory($slug){
        $categorys = Category::where('slug',$slug)->first();
        $id 	  = $categorys->id;
        $category = $this->category;
        $name 	  = $categorys->name;
        $products = Product::orderBy('id','DESC')->where('category_id',$id)->get();
        return view('frontend.productbycategory',compact('products','category','name','categorys'));
    }

    public function detail($slug){
        $product = Product::where('slug',$slug)->first();
        $category = $this->category;
        return view('frontend.detail', compact('product','category'));
    }

    public function penjual(){
        $category = $this->category;
        $user = User::orderBy('id','DESC')->where('status',"1")->where('role','!=','member')->get();
        return view('frontend.supplier',compact('category','user'));
     }

    public function productbypenjual($id){
        $category = $this->category;
        $user = User::find($id);
        $products = $user->product;
        return view('frontend.productbypenjual',compact('products','category','user'));
    }
}
