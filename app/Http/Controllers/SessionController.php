<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function create()
    {
    	return view('session.create');
    }


    public function destroy()
    {

    	auth()->logout();
    	return redirect('/'); 
    }

    public function store()
    {
    	if(! auth()->attempt(request(['email','password'])))
    	{
    		return back();
    	}


    	return redirect('/');

    	
    }
}
