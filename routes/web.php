<?php

use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;

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

Route::middleware('isLogged')->get('/home', function () {
    return view('welcome');
})->name('home');


Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::post('/login', function (Request $request) {


 if(Auth::attempt(["email"=>$request->email,"password"=>$request->password]))
 {

    return redirect()->route('home');

 }

})->name('login');









Route::post('/test', function (Request $request) {


   Event::dispatch((new TestEvent($request->message,$request->userid)));

    return response()->json([],200);
});

