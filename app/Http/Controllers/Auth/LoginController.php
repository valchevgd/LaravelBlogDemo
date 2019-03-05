<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogoutAction');
    }

    public function getLoginAction()
    {

        return view('user/login');
    }

    public function postLoginAction()
    {

        $userData = array(
            'email' => $_POST['email'],
            'password' => $_POST['password']
        );

        if (Auth::attempt($userData)) {

            return redirect()->route('index');

        } else {

            return redirect()->route('user_login');

        }

    }

    public function getLogoutAction(Request $request)
    {
        $this->logout($request);
        return redirect()->route('index');
    }
}
