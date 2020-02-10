<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategory(){
        return view('skelbimai.pages.category');
    }


    public function showcatlist(){
        $categories = Category::all();
        return view('skelbimai.pages.catlist', compact('categories'));
    }

    public function storeCategory(Request $request){
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $category = Category::create([
            'title' => request('title')
        ]);
        return redirect ('/catlist');
    }
    public function deleteCategory(Category $category){
        $category->delete();
        return redirect('/catlist');
    }
}
