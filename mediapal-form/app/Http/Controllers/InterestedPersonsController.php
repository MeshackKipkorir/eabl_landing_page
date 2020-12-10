<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterestedPersons;

class InterestedPersonsController extends Controller
{
    //
    public function storeUserData(Request $request){

            InterestedPersons::create($request->all());

        return redirect('/send-mail');
    }
}
