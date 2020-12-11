<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterestedPersons;
use App\Mail\SendDocument;

class InterestedPersonsController extends Controller
{
    //
    public function storeUserData(Request $request){

            $this->validate($request,[
                'name' => 'required|string',
                'email' => 'required|email',
                'phone_number' => 'required',
                'company' => 'required|string',
                'location' => 'required|string'
            ]);

            InterestedPersons::create($request->all());

            $to_email_address = $request->input('email');
            $name = $request -> input('name');
            $details = [
                'title' => 'MediaPal Programatic',
                'body' => 'Welcome to a world of awesomeness. Down load link at',
                'name' => $name
            ];

            \Mail::to($to_email_address)->send(new \App\Mail\SendDocument($details));


        return view('thankyou');
    }
}
