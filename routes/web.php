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

Route::get('all_stories', 'StoryController@getAllStoriesAction')->name('all_stories');

Route::get('story_show/{id}', 'StoryController@getStoryAction')->name('show_story');

Route::get('about', 'AboutController@getAboutAction')->name('about');

Route::post('/post_story', 'StoryController@postStoryAction')->name('post_story');

Route::get('/share_story', 'StoryController@getShearStoryAction')->name('share_story');

Route::get('/', 'HomeController@getIndexAction');

