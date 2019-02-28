<?php

namespace App\Http\Controllers;


use App\Story;

class HomeController extends Controller
{
    public function getIndexAction()
    {
        $stories = Story::orderBy('created_at', 'desc')->limit(6)->get();

        return view('home/home')->with('stories', $stories);
    }
}