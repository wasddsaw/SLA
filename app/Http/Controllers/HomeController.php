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
    // terminal
    public function prai()
    {   
        $prai = Roadtanker::where('terminal', 'Prai')->get();
        return view('terminal.prai')->with('prai', $prai);
    }
    public function kerteh()
    {   
        $kerteh = Roadtanker::where('terminal', 'Kerteh')->get();
        return view('terminal.kerteh')->with('kerteh', $kerteh);
    }
    public function kuantan()
    {   
        $kuantan = Roadtanker::where('terminal', 'Kuantan')->get();
        return view('terminal.kuantan')->with('kuantan', $kuantan);
    }
    public function kvdt()
    {   
        $kvdt = Roadtanker::where('terminal', 'KVDT')->get();
        return view('terminal.kvdt')->with('kvdt', $kvdt);
    }
    public function langkawi()
    {   
        $langkawi = Roadtanker::where('terminal', 'Langkawi')->get();
        return view('terminal.langkawi')->with('langkawi', $langkawi);
    }
    public function lumut()
    {   
        $lumut = Roadtanker::where('terminal', 'Lumut')->get();
        return view('terminal.lumut')->with('lumut', $lumut);
    }
    public function melaka()
    {   
        $melaka = Roadtanker::where('terminal', 'Melaka')->get();
        return view('terminal.melaka')->with('melaka', $melaka);
    }
    public function pgudang()
    {   
        $pgudang = Roadtanker::where('terminal', 'Pasir Gudang')->get();
        return view('terminal.pgudang')->with('pgudang', $pgudang);
    }
    public function westport()
    {   
        $westport = Roadtanker::where('terminal', 'Westport')->get();
        return view('terminal.westport')->with('westport', $westport);
    }
    // end terminal
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