<?php

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/contactUs', function(){
    return view('contact');
})->name('contactUs');

// Route::post("/register", "Auth/RegisterController@validator")->name("register-user");


Auth::routes();

Route::get('painter', function () {
    return view('painter.index');
})->name('painterDashboard')->middleware('auth');

Route::get('painter/profile', function () {
    return view('painter.profile');
})->name('painterProfile')->middleware('auth');

Route::get('/painter/opportunities', function () {
    return view('painter.index');
})->name('opportunities')->middleware('auth');

Route::get('/client', function () {
    return view('client.index');
})->name('clientDashboard')->middleware('auth');

Route::get('client/profile', function () {
    return view('client.profile');
})->name('clientProfile')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
