<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth', ['only' => 'home']);
        // $this->middleware('auth', ['except' => 'home']);


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function accountSetup() {

        $title = "Shopify";
        return view('account-setup') -> with('title', $title);
    }


    public function yourStore() {

        return view('your-store');
    }
}
