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
    // $sql = 'SELECT * FROM users WHERE id = 4';
    // $users = \DB::select($sql);

    // $users = \DB::table('users')
    //             ->where('id',4)
    //             ->select('id','name')
    //             ->get();

    // $users = \App\User::where('id',4)
    //                 ->select('id','name')
    //                 ->get();
    // dd($users);
    return view('welcome');
});
