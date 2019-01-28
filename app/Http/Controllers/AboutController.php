<?php

namespace App\Http\Controllers;


class AboutController extends Controller
{
    public function getAboutAction(){
        return view('about/about');
    }
}