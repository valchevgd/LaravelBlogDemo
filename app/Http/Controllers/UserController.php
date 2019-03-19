<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function getMyProfileAction(){

        $id = Auth::user()->id;
        $user = User::find($id);
        $stories = $user->stories()->get();

        return view('user/profile')->with('stories', $stories);
    }

    public function postProfilePictureAction(Request $request){

        $id = Auth::user()->id;
        $user = User::find($id);


        if ($request->file('pic')){
            $picture = $request->file('pic');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $location = public_path('img/' .$fileName);
            Image::make($picture)->save($location);

            $user->image = $fileName;
            $user->save();
        }


        return redirect()->route('my_profile');
    }
}
