<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
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
        return view('skelbimai.pages.allads');
    }

    public function showad(){
        return view('skelbimai.pages.ad');
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

    //public function showeditad(){
    //    return view('skelbimai.pages.editad');
    //}
}
