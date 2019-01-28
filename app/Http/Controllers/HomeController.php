<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function getIndexAction(){
        $articles = [];

        $firstArticle = [];
        $firstArticle['title'] = 'This is our first story...';
        $firstArticle['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempor feugiat nibh, ut commodo ipsum scelerisque vitae. Nunc fermentum neque sed magna vehicula interdum. Donec quis aliquet nisl. Etiam mauris augue, scelerisque in consequat at, euismod a elit. Praesent elementum purus id turpis dignissim, a.';
        $articles [] = $firstArticle;

        $secondArticle = [];
        $secondArticle['title'] = 'This is our second story...';
        $secondArticle['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt libero et libero imperdiet, ac ultricies turpis accumsan. Cras at congue augue. Cras non ligula vel nisi porttitor varius malesuada ut arcu. Pellentesque ut cursus nulla. Cras non finibus felis. Proin in lorem sed arcu aliquam posuere non quis dolor. In eleifend.';
        $articles[] = $secondArticle;

        $thirdArticle = [];
        $thirdArticle['title'] = 'This is our third story...';
        $thirdArticle['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis fermentum risus, id vehicula sem. Vivamus eu nisl risus. Vivamus tempor eu orci sit amet tincidunt. Curabitur accumsan tellus odio, quis pellentesque dolor imperdiet et. Phasellus magna risus, semper et dolor vitae, lacinia maximus velit. Etiam sagittis est leo, et sodales lacus mattis at. Aliquam erat.';
        $articles[] = $thirdArticle;

        $fourthArticle = [];
        $fourthArticle['title'] = 'This is our forth story...';
        $fourthArticle['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae arcu eget tortor pharetra sollicitudin non ut dolor. Duis ut mattis ante. Nulla pharetra elit quis ultrices tincidunt. Etiam nec diam odio. Sed sollicitudin, dolor non mollis porttitor, felis ex porta urna, pharetra ullamcorper arcu felis vitae dolor. Duis luctus libero eu lacus.';
        $articles[] = $fourthArticle;

        return view('home/home')->with('articles', $articles);
    }
}