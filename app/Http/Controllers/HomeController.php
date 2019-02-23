<?php

namespace App\Http\Controllers;


use App\Story;

class HomeController extends Controller
{
    public function getIndexAction()
    {

        $stories = Story::all()
            ->sortByDesc('created_at')
            ->take(6);

        return view('home/home')->with('stories', $stories);
    }
}