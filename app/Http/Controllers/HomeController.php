<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::all();
        $ads = Ad::select('*','ads.id as adsid')->join('categories', 'cat_id', '=', 'categories.id')->get();
        return view('skelbimai.pages.home', compact('ads', 'categories'));
        //***PAGES***
        //$posts=Post::paginate(8);
        //return view('pages.home', compact(['posts']));
    }

    public function showProfile(){
        return view('skelbimai.pages.profile');

        //dd($darbuotojai);

        //return redirect('http://autogidas.lt');
    }

    public function showads(){
        $ads = Ad::select('*','ads.id as adsid')->join('categories', 'cat_id', '=', 'categories.id')->paginate(8);
        return view('skelbimai.pages.allads', compact('ads'));
    }

    public function showad(){
        $ads = Ad::select('*','ads.id as adsid')->join('categories', 'cat_id', '=', 'categories.id')->get();
        return view('skelbimai.pages.ad', compact('ads'));
    }

    public function showinfo(){
        return view('skelbimai.pages.info');
    }

    public function showcontact(){
        return view('skelbimai.pages.contacts');
    }

    public function showcat(){
        return view('skelbimai.pages.category');
    }

    public function showregister(){
        return view('skelbimai.pages.register');
    }

    public function showcatlist(){
        return view('skelbimai.pages.catlist');
    }

    public function oneAd(Ad $ad){
        $ads = Ad::select('*','ads.id as adsid')->join('categories', 'cat_id', '=', 'categories.id')->get();
        return view('skelbimai.pages.ad', ['ad'=>$ad], compact('ads'));
    }

    public function showeditad(){
        return view('skelbimai.pages.editad');
    }

    //public function showeditad(){
    //    return view('skelbimai.pages.editad');
    //}
}
