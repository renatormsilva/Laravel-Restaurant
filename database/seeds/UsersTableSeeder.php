<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $user = new \App\User();
    //     $user->create([
    //         'name' => 'Renato Rodrigues',
    //         'email' => 'renato.brtkm@gmail.com',
    //         'password' => bcrypt('vr81002745r'),
    //     ]);
        factory(App\User::class,30)->create();

     }


}
