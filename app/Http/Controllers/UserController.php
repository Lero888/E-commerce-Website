<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // validate the field
        $this->validate($request,  [
            'first_name' =>  ['required','max:255'],
            'last_name' => ['required','max:255'],
            'address' => ['required','max:255'],
            'apartment' =>  ['required','max:255'],
            'city' =>  ['required','max:255'],       
            'country' =>  ['required','max:255'],        
            'state' =>  ['required','max:255'],        
            'postal_code' =>  ['required','max:255'],        
            'phone_number' =>  ['required','max:255'],        
            'website' =>  ['required','max:255'],         
        ]);

        // get value from textbox
        $users = new User([
            'first_name'     => $request -> get('first_name'),
            'last_name'  => $request -> get('last_name'),
            'address' => $request -> get('add'),
            'apartment' => $request -> get('apartment'),
            'city' => $request -> get('city'),
            'country' => $request -> get('country'),
            'state' => $request -> get('state'),
            'postal_code' => $request -> get('postcode'),
            'phone_number' => $request -> get('phone'),
            'website' => $request -> get('website'),

        ]);

        // save it to database
        // $shop->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
