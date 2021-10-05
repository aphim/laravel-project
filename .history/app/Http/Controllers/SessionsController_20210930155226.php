<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('sessions.create');
        
    }

    public function store()
    {
       if (! auth()->attempt(request(['email', 'password'])))
        {
            return back();
        }


    }

    public function destroy()
    {
        auth()->logout();
    }
}
