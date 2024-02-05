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

//Route Naming
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    $greetings = 'Hello ren';
    $greetings2 = 'Hello vane';
    // return view('about.about', ['greetings' => $greetings]);
    return view('about.about', compact('greetings', 'greetings2'));// This is the shorter way to pass data
})->name('hello');

Route::get('contact', function() {
    return "<h1>contact page</h1>";
});

Route::get('contact/{id}', function($id) {
    return $id;
})->name('contact-edit');

// Route::get('home', function(){
//     return "<a href='".route('hello')."'>Click to redirect to about page</a><br>
//     <a href='".route('contact-edit', 1)."'>Click to redirect to contact page with passing data</a>";
// });

Route::get('home', function () {
    return view('home');
});

//Route Grouping
Route::group(['prefix' => 'customer'], function(){
    Route::get('/', function() {
        return "<h1>customer page</h1>";
    });
    Route::get('/create', function() {
        return "<h1>customer create page</h1>";
    });
    Route::get('/show', function() {
        return "<h1>customer show page</h1>";
    });
});

// Route Fallback
Route::fallback(function(){
    return "Route not exist";
});