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
        $user->password = '1234';
        $user->birthday = '1994-05-25';       
        $user->phone = '3148898381';
        $user->photo = 'images/nophoto.png';
        $user->address = 'Cra 35C N 99-99';
        $user->role_id= 1;
        $user->save();

        $user = new User;
        $user->fullname = 'Ash Ketchum';
        $user->email = 'ash@gmail.com';
        $user->password = '12345678';
        $user->birthday = '1994-05-26';       
        $user->phone = '3148898382';
        $user->photo = 'images/nophoto.png';
        $user->address = 'Cra 35C N 99-100';
        $user->role_id= 2;
        $user->save();

        User::factory(20)->create();
    }
}
