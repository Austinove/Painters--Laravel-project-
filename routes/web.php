<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/user', function(){
    return view('painter.index');
})->name('painterDashboard');

Route::get('/client', function(){
    return view('client.index');
})->name('clientDashboard');

Route::get('user/profile', function(){
    return view('painter.profile');
})->name('painterProfile');

Route::get('client/profile', function(){
    return view('client.profile');
})->name('clientProfile');

Route::get('/contactUs', function(){
    return view('contact');
})->name('contactUs');
