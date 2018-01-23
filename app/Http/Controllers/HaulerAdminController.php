<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hauler_admin;

class HaulerAdminController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:hauler_admins',
            'hauler_id' => 'required',

        ]);
        
        $hauler_admin = new Hauler_admin;

        $hauler_admin->username = $request->input('username');
        $hauler_admin->email = $request->input('email');
        $hauler_admin->password = bcrypt($request->input('username'));
        $hauler_admin->hauler_id = $request->input('hauler_id');

        $hauler_admin->save();

        return redirect()->back()->with('success', 'Account Successfully Created !!');

    }
}
