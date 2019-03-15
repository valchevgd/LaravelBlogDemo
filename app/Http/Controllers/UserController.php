<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getMyProfileAction(){

        $id = Auth::user()->id;
        $user = User::find($id);
        $stories = $user->stories()->get();

        return view('user/profile')->with('stories', $stories);
    }
}
