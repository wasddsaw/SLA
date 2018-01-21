<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roadtanker;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function prai()
    {   
        $prai = Roadtanker::where('terminal', 'Prai')->get();
        return view('terminal.prai')->with('prai', $prai);
    }
    public function roadtanker()
    {
        $roadtankers = Roadtanker::get();
        return view('pages.roadtanker', compact('roadtankers'));
        //return view('pages.roadtanker');
    }
    public function upload()
    {
        return view('pages.upload');
    }
}
