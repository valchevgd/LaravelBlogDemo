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

Route::group(['middleware' => ['web']], function (){

    //Password Reset routes
//    Route::get('password/reset/{token?}', 'Auth\ForgotPasswordController@showLinkRequestForm');
//    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    //Logout route
    Route::get('auth/logout', 'Auth\LoginController@getLogoutAction')->name('user_logout');

    //Login routes
    Route::get('auth/login', 'Auth\LoginController@getLoginAction')->name('user_login');
    Route::post('auth/login', 'Auth\LoginController@postLoginAction')->name('user_login');

    //Register routes
    Route::post('auth/register', 'Auth\RegisterController@postRegisterAction')->name('user_register');
    Route::get('auth/register', 'Auth\RegisterController@getRegisterAction')->name('userh_register');

    //Stories (Posts) route
    Route::post('delete_story/{id}', 'StoryController@deleteStoryAction')->name('delete_story');
    Route::post('edit_story/{id}', 'StoryController@postEditStoryAction')->name('edit_story');
    Route::get('edit_story/{id}', 'StoryController@getEditStoryAction')->name('edit_story');
    Route::get('all_stories', 'StoryController@getAllStoriesAction')->name('all_stories');
    Route::get('story_show/{id}', 'StoryController@getStoryAction')->name('show_story');
    Route::post('/post_story', 'StoryController@postStoryAction')->name('post_story');
    Route::get('/share_story', 'StoryController@getShearStoryAction')->name('share_story');

    //About route
    Route::get('about', 'AboutController@getAboutAction')->name('about');

    //Index (Home page) route
    Route::get('/', 'HomeController@getIndexAction')->name('index');
});



