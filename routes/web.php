<?php

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

Route::get('/test', function () {
    $user=\App\User::create([
        'name' => 'Yang',
        'email' => 'a57785778@gmail.com',
        'password' => '1234'
    ]);

    dd($user);
});