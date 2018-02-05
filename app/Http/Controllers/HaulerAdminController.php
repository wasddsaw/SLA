<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hauler_admin;
use App\Roadtanker;
use App\Status;

class HaulerAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:hauler_admin');
    }

    public function index()
    {
        $id = auth()->user()->id;
        $user = Hauler_admin::with('hauler', 'hauler.roadtankers', 'hauler.roadtankers.status')->where('id', $id)->get();
        
        return view('hauler.dashboard')->with('user', $user);
    }
    public function prai()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Prai'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kerteh()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Kerteh'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kuantan()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Kuantan'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kvdt()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'KVDT'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function langkawi()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Langkawi'],

        ])->get();

        //$roadtanker = Status::orderBy('created_at','desc')->with('roadtanker')->get(); 
        
        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function lumut()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Lumut'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function melaka()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Melaka'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function pgudang()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Pasir Gudang'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function westport()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::where([

            ['hauler_id', $id], 
            ['terminal', 'Westport'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
}
