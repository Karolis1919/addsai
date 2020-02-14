<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Category;
use Illuminate\Http\Request;
use Gate;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'cat_id' => request('cat_id'),
            'user_id' => auth()->user()->id
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

    public function updateAd(Ad $ad, Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'info' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'cat_id' => 'required'
        ]);
        Ad::where('id', $ad->id)->update($request->except(['_token', 'img']));
        return redirect('/editad');
    }

    public function form(Ad $ad){
        $ads = Ad::all();
        $categories = Category::all();
        if(Gate::allows('edit', $ad)){
            return view('skelbimai.pages.updatead',['ad' => $ad], compact('ads' , 'categories'));
        }
        else{
            return view('skelbimai.pages.error',['ad' => $ad], compact('ads' , 'categories'));
        }
    }

}
