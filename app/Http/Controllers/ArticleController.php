<?php


namespace App\Http\Controllers;


use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{

    public function createArticle(){

        $someText = 'some text here if everything working correctly!';

        return view('article/create')->with('text', $someText);
    }
}