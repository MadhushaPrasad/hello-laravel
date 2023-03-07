<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return view('user');
    return redirect('about');
});

//Route::get('/about',function (){
//    return view('about');
//});

Route::view('/about', 'about'); // url,view name

Route::view('/contact-us', 'contact'); // url,view name
Route::view('/user', 'user'); // url,view name
//Route::get('/{name}', function ($name) {// {pass data with route}
//    echo $name;
//    return view('user');
//});

Route::get('/{name}', function ($name) {// {pass data with route} -> type 02
    echo $name;
    return view('contact', ['name' => $name]);
});
