<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hauler_admin;

class HaulerAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:hauler_admin');
    }

    public function index()
    {
        return view('hauler.dashboard');
    }
}
