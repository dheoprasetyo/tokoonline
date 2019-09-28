<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Alert;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::where('parent_id', null)->get();
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request){

        $category = new Category;
        $category->slug = $request->slug;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->icon = $request->icon;
        $category->user_id = Auth::user()->id;
        $category->save();
        Alert::success('', 'Category Berhasil di Tambahkan');
        return redirect()->back();
    }

    public function edit(Request $request,$id){
        $category = Category::find($id);
        $categorys = Category::where('parent_id',null)->get();
        return view('admin.category.edit',compact('category','categorys'));
    }

    public function update(Request $request,$id){
        $category = Category::find($id);
        $category->slug = $request->slug;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->icon = $request->icon;
        $category->save();
        // Alert::success('', 'Category Berhasil di Perbarui');
        return redirect('category');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        Alert::success('', 'Category Berhasil di Delete');
        return redirect('category');
    }
}
