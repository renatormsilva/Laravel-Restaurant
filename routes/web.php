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
// Reculperar dados do banco de dados 

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

   // inserir dados no banco de dados
   
   //$user = new \App\User;

   // é utilizado os metodos mágicos __set e __get pra entender que é cada coluna no banco
   $user = \App\User::find(31);
   $user->name = 'renatinho';
   $user->email = 'renato.brtkm@gmail.com';
   $user->password = bcrypt('9090tkm123');
   $user->save();

    
    return view('welcome');


});
