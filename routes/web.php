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
    // $user=\App\User::create([
    //     'name' => 'Yang',
    //     'email' => 'a57785778@gmail.com',
    //     'password' => '1234'
    // ]);

    $name='黃俊耀';
    $email='a5778@gmail.com';
    $password='˙12345';
    
    $user=\App\Service\UserService::create($name,$email,$password);

    $name='楊芷霖';
    $email='a57785778@gmail.com';
    $password='˙sa1217606';
    
    $user=\App\Service\UserService::create($name,$email,$password);

    $name='卓君飛';
    $email='a5887@gmail.com';
    $password='˙01234';
    
    $user=\App\Service\UserService::create($name,$email,$password);

    dd($user->toArray());
});

Route::get('/leave/create', function () { return view('leave.create');});
Route::get('/leave/isms', function () { return view('leave.isms');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'LoginController@login')->name('login');


