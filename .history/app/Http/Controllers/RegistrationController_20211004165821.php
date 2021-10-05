<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');

    }


    public function store(RegistrationRequest $request)
    {
        // $this->validate(request(), [
        //        'name' => 'required', 
        //        'email' => 'required|email', 
        //        'password' => 'required|confirmed'
        //    ]);

        // $user = User::create([ 

        //     'name' => request('name'),
            
        //     'email' => request('email'),
        
        //     'password' => bcrypt(request('password'))
        
        // ]);

        $user = User::create(
            
            
            request(['name', 'email', 'password'])
    
    
        );

        auth()->login($user);


        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
