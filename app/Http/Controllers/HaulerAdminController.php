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
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Prai'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kerteh()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Kerteh'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kuantan()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Kuantan'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function kvdt()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

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
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Lumut'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function melaka()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Melaka'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function pgudang()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Pasir Gudang'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    public function westport()
    {
        $id = auth()->user()->id;
        $roadtanker = Roadtanker::with('status')->where([

            ['hauler_id', $id], 
            ['terminal', 'Westport'],

        ])->get();

        return view('hauler.terminal')->with('roadtanker', $roadtanker);
    }
    /* status section */
    public function status($terminal)
    {
        $status = Status::orderBy('created_at','desc')->with('roadtanker')->get(); 

        $data = array(

            'status' => $status,
            'terminal' => $terminal
        );
       
        return view('hauler.status')->with($data);
    }   
    public function status_details(Request $request)
    {
        $status = Status::with('roadtanker', 'roadtanker.hauler')->where('id', $request->id)->get();
    
        return $status->toJson();
    }
    public function status_update(Request $request)
    {
        $this->validate($request, [

            'remarks_hauler' => 'required|max:255',
        ]);

        $plate = $request->input('plate_u');

        $status = Status::find($request->input('id_u'));

        $status->remarks_hauler = $request->input('remarks_hauler');
        $status->status = '1'; // verfiy status
        $status->save();
        
        \Session::flash('success', 'Status '.$plate.' Successfully Updated !!');

        return response()->json(['success'=> 'Status '.$plate.' Successfully Updated !!']);

        // return response()->json([

        //     'id' => $request->input('id_u'),
        //     'remarks_hauler' => $request->input('remarks_hauler')
        // ]);

    }
}
