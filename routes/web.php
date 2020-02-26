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

// Route::post("/register", "Auth/RegisterController@validator")->name("register-user");


Auth::routes();
// Auth::routes(['register' => false]);
// Route::post('/regis', 'Auth\RegisterController@register')->name('register-user');
// Route::post('/register', function($request){
//     return $request;
// })->name('register-user');
Route::get('profile', function () {
    return view('painter.index');
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
