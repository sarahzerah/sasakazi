<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
          return view('pages.index');
    }

     public function about(){
          return view('pages.about');
    }


     public function courses(){
          return view('pages.courses');
    }


     public function event(){
          return view('pages.event');
    }

     public function contact(){
          return view('pages.contact');
    }


    //  public function event(){
    //       return view('pages.event');
    // }
}

