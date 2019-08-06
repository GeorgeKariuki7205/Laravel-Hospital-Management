<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class trial extends Controller
{
    public function register(Request $request){
        // return "Sent with no doubt.";

        //This is the method that will insert the data into the table.

         $user = new User(array(
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ));
        $user->save();

        $userInsertRole = User::whereEmail( $request['email']);
        $userInsertRole->roles()->attach(1);
        return "Role attached.";
    }
}
