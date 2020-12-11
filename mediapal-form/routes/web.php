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
    return view('home-01');
});

Route::post('/submit',[InterestedPersonsController::class,'storeUserData'])->name('storeUserData');


