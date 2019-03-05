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

Route::get('user/logout', 'Auth\LoginController@getLogoutAction')->name('user_logout');

Route::get('user/login', 'Auth\LoginController@getLoginAction')->name('user_login');
Route::post('user/login', 'Auth\LoginController@postLoginAction')->name('user_login');

Route::post('user/register', 'Auth\RegisterController@postRegisterAction')->name('user_register');
Route::get('user/register', 'Auth\RegisterController@getRegisterAction')->name('user_register');

Route::post('delete_story/{id}', 'StoryController@deleteStoryAction')->name('delete_story');
Route::post('edit_story/{id}', 'StoryController@postEditStoryAction')->name('edit_story');
Route::get('edit_story/{id}', 'StoryController@getEditStoryAction')->name('edit_story');
Route::get('all_stories', 'StoryController@getAllStoriesAction')->name('all_stories');
Route::get('story_show/{id}', 'StoryController@getStoryAction')->name('show_story');
Route::post('/post_story', 'StoryController@postStoryAction')->name('post_story');
Route::get('/share_story', 'StoryController@getShearStoryAction')->name('share_story');

Route::get('about', 'AboutController@getAboutAction')->name('about');

Route::get('/', 'HomeController@getIndexAction')->name('index');

