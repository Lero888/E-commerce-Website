<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use \Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override AuthenticateUser class
    public function username()
    {   
        $login = request()->input('storeName');

        // $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // request()->merge([$field => $login]);

        // return $field;
        return $login;
    }

    // // Override valdation
    // protected function validateLogin(Request $request)
    // {
    //     $messages = [
    //         'storeName.required' => 'Store name cannot be empty',
    //         'email.exists' => 'Email is already registered',
    //         'password.required' => 'Password cannot be empty',
    //         'email.required' => 'Email cannot be empty',
    //     ];

    //     $request->validate([
    //         'storeName' => 'required|string|max:255',
    //         'password' => 'required|string',
    //         'email' => 'required|string|email|max:255',
    //     ], $messages);
    // }


    public function login(Request $request)
    { 
        $input = $request->all();
  
        $this->validate($request, [
            'storeName' => 'required|string|max:255',
            'password' => 'required|string',
            'email' => 'required|string|email|max:255',
        ]);

        // config --> auth.php
        if(auth()->attempt(array('store_name' => $input['storeName'], 'password' => $input['password'], 'email' => $input['email'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','Store Name, Email-Address And/Or Password is wrong.');
        }
          
    }

    protected function loggedOut(Request $request) {

        return redirect('/main-page');
        // session clear
    }

}
