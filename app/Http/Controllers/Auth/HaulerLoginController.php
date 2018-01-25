<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HaulerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:hauler_admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.hauler.hauler_login');
    }

    public function login(Request $request){
        // validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
 
        // Attempt to log the admin in 
        if(Auth::guard('hauler_admin')->attempt(['email'=> $request->email,
             'password'=> $request->password], $request->remember)){
            //If successful, then redirect to their intended location
            return redirect()->intended(route('hauler_admin.dashboard'));
        }
        
        // If not successful, then redirect back to the login with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('hauler_admin')->logout();

        if(Auth::guard('web')->check()){
            return redirect('/home'); 
        }
        else{
            return redirect('/');
        }
        
    }
  
}
