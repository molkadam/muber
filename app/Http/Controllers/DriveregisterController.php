<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriveregisterController extends Controller
{
    public function create()
    {
    	return view ('driver.create');
    } 
}
