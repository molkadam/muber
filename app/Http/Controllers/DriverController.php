<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = driver::all();
        return view('driver.home',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request -> all();

        //$driver = new driver;
        //$driver ->name = $request ->name;
        //$driver ->email = $request ->email;
        //$driver ->cabno = $request ->cabno;
        //$driver ->password = $request ->password;
        //$driver -> save();


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'cabno' => 'required',
            'password' => 'required | confirmed'

            ]);

        $driver = driver::create([
            'name' => request('name'),
            'email' => request('email'),
            'cabno' => request('cabno'),
            'password' => bcrypt(request('password'))
            ]);
        //auth()->login($driver);
        return redirect('driver');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dr = driver::find($id);
        return view ('driver.edit',compact('dr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return $request -> all();
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'cabno' => 'required',
            

            ]);

        $driver = driver::find($id);
        $driver ->name = $request ->name;
        $driver ->email = $request ->email;
        $driver ->cabno = $request ->cabno;
        $driver -> save();
        return redirect('/driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = driver::find($id);
        $del->delete();
        return redirect('/driver');
    }
}
