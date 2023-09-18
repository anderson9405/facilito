<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        $users= User::All();
        return view('test')->with('users', $users);
    }

}
