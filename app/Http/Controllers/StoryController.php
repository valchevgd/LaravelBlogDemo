<?php


namespace App\Http\Controllers;




class StoryController extends Controller
{

    public function getShearStoryAction(){

        $someText = 'some text here if everything working correctly!';

        return view('story/create')->with('text', $someText);
    }
}