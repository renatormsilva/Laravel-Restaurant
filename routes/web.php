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
Route::get('/', function () {
    $data = [
        'name' => 'Mass',
        'email' => '2@brtkm@gmail.com',
        'password' => bcrypt('12312'),
    ];

    $user = \App\User::find(33);
    $user->update($data);
    return view('welcome');
});
