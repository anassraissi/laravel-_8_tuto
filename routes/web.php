<?php

use Illuminate\Support\Facades\Route;

        // had tuto jaya mn Code Step By Step url : https://www.youtube.com/watch?v=dxHTkqSpz-w&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=6

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

// Route::get('/{name}', function ($name) {
//     // echo $name;
//     return view('home',['name'=>$name]);  //route avec parametre
    
// });

 ///         

Route::get('/', function () {
    return view('home'); 

    // return redirect('about'); hadi katkhdam mnin kansaliw chi task nafichiw page about.

    
});
Route::get('/about', function () {
    return view('about');  

});
Route::get('/contact', function () {
    return view('contact');  

});
// Route::view('home','home'); hadi tarika mkhtasra bach nreturniw view mnin katbo /home 
