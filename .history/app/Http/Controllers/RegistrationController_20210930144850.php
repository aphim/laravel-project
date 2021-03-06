<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('sessions.create');

    }


    public function store(RegistrationForm )
    {
        $this->validate(request(), [
               'name' => 'required', 
               'email' => 'required|email', 
               'password' => 'required|confirmed'
           ]);
        

        $user = User::create(request(['name', 'email', 'password']));

         auth()->login($user);

    }
}
