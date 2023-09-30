<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->fullname = 'Jhon Anderson Giraldo Tabarez';
        $user->email = 'anderson052594@gmail.com';
        $user->password = '1212';
        $user->birthday = '1994-05-25';       
        $user->phone = '3148898381';
        $user->photo = 'images/uploads/bart.jpg';
        $user->address = 'Cra 35C N 99-99';
        $user->role_id= 1;
        $user->save();

        $user = new User;
        $user->fullname = 'Vendedor_1';
        $user->email = 'vendedor1@gmail.com';
        $user->password = '12121212';
        $user->birthday = '1994-05-26';       
        $user->phone = '3148898382';
        $user->photo = 'images/uploads/brock.jpg';
        $user->address = 'Cra 35C N 99-100';
        $user->role_id= 2;
        $user->save();

        $user = new User;
        $user->fullname = 'Vendedor_2';
        $user->email = 'vendedor2@gmail.com';
        $user->password = '12121212';
        $user->birthday = '1994-05-26';       
        $user->phone = '3148898382';
        $user->photo = 'images/no-profile.png';
        $user->address = 'Cra 35C N 99-100';
        $user->role_id= 2;
        $user->save();

        $user = new User;
        $user->fullname = 'Cliente';
        $user->email = 'cliente@gmail.com';
        $user->password = '12121212';
        $user->birthday = '1994-05-26';       
        $user->phone = '3148898382';
        $user->photo = 'images/uploads/ash.jpg';
        $user->address = 'Cra 35C N 99-100';
        $user->role_id= 3;
        $user->save();

        User::factory(20)->create();
    }
}
