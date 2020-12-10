<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterestedPersonsController;
use App\Mail\SendDocument;
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

Route::get('/', function () {
    return view('index');
});

Route::post('/submit',[InterestedPersonsController::class,'storeUserData'])->name('storeUserData');

Route::get('/send-mail', function(){
    $details = [
        'title' => 'MediaPal Programatic',
        'body' => 'Welcome to a world of awesomeness. Down load link at'
    ];

    \Mail::to('meshkemz@gmail.com')->send(new \App\Mail\SendDocument($details));

    dd('mail is sent successfully');
});
