<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create()
    {
    	return view('regisration.create');
    }

    public function store()
    {
    	//return view('regisration.create');
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required | confirmed'

    		]);

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    		]);

    	auth()->login($user);

    	return redirect('/');
    }

}
