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
