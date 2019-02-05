<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;

Route::get('story_show/{id}', 'StoryController@getStoryAction');

Route::get('about', 'AboutController@getAboutAction');

Route::post('/post_story', 'StoryController@postStoryAction');

Route::get('/share_story', 'StoryController@getShearStoryAction');

Route::post('/share_story', 'StoryController@getShearStoryAction');

Route::get('/', 'HomeController@getIndexAction');

