<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
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
}
