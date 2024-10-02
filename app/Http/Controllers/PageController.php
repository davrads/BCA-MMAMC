<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Glance;
use App\Models\Hero;
use App\Models\Message;
use App\Models\Notice;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
        //Home Page
    function home()  {
        $slides = Slide::all();
        $hero = Hero::first();
        $glance = Glance::first();
        $message= Message::first();
        return view('index',compact('hero',"message","glance","slides"));
    }
    //Gallery Page
     function gallery()  {
        $gallery= Gallery::all();

        return view('gallery',compact("gallery"));
    }
    //About Page
     function about()  {
        $about= About::first();
        return view('about',compact("about"));
    }
    //Notice Page
    function notice()  {
        $notice= Notice::orderBy('created_at','desc')->get();

        return view('notice',compact("notice"));
        
    }
    function galleryById($id)  {
        $gallery = Gallery::find($id);

    }
}

