<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// Modal
use App\Models\User;

class UserController extends Controller
{

    public function login(Request $input)
    {
        return "login function";
    }

    public function register(Request $input)
    {
        
        $name       = $input->input('name');
        $email      = $input->input('email');
        $noTelp     = $input->input('noTelp');
        $pass       = Hash::make($input->input('password'));

        $register               = New User;
        $register->name         = $name;
        $register->email        = $email;
        $register->noTelfon     = $noTelp;
        $register->password     = $pass;
        
        if($register->save()){
            return response()->json([
                'status'    => true,
                'message'   => 'Register Success',
            ], 201);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Register Failed',
            ], 400);
        }
    }

}
