<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    public function getAboutAction(){
        return view('about/about');
    }

    public function postEmailAction(Request $request){

        $this->validate($request, [
            'name' => 'min:3',
            'email' => 'min:5|email',
            'messageContent' => 'min:10'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messageContent' => $request->messageContent,
        ];

        Mail::send('emails/contacts', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('me@email.test');
        });

        return redirect()->route('index');
    }
}