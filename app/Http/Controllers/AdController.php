<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function createAd(){
        $categories = Category::all();
        return view('skelbimai.pages.category', compact('categories'));
    }

    public function showform(){
        $categories = Category::all();
        return view('skelbimai.pages.catform', compact('categories'));
    }

    public function storeAd(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'cost' => 'required',
            'info' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'cat_id' => 'required'
        ]);
        $ads = Ad::create([
            'name' => request('title'),
            'cost' => request('cost'),
            'info' => request('info'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'cat_id' => request('cat_id')
        ]);
        return redirect ('/');
    }

    public function showeditad(){
        $ads = Ad::all();
        return view('skelbimai.pages.editad', compact('ads'));
    }

    public function deleteAd(Ad $ad){
        $ad->delete();
        return redirect('/editad');
    }

    public function updateAd(){

    }

}
