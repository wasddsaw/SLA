<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roadtanker;
use App\Hauler_admin;
use App\Status;

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
    public function hauler()
    {
        $hauler_admins = Hauler_admin::get();
        return view('pages.hauler', compact('hauler_admins'));
    }
    public function create_hauler()
    {
        return view('pages.create_hauler');
    }
    public function store_hauler(Request $request)
    {
        $this->validate($request, [
            
            'username' => 'required|string|max:255|unique:hauler_admins',
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
    public function store_status(Request $request)
    {
        $this->validate($request, [
            
            'roadtanker_id' => 'required',
            'time' => 'required',
         
        ]);

        $status = new Status;

        $status->status = '0'; // status:pending
        $status->time = $request->input('time');
        $status->roadtanker_id = $request->input('roadtanker_id');
        
        $status->save();

        return redirect()->back()->with('success', 'Status Successfully Created !!');

    }
    public function create_status($terminal)
    {   
        $roadtankers = Roadtanker::where('terminal', $terminal)->get();
        return view('pages.create_status')->with('roadtankers', $roadtankers);
    }
    public function show_status($terminal)
    {
        $statuses = Status::orderBy('created_at','desc')->with('roadtanker')->get(); 

        $data = array(

            'statuses' => $statuses,
            'terminal' => $terminal
        );

        return view('pages.show_status')->with($data);
    }
    public function status_details(Request $request)
    {
        //$status = Status::find($request->id)->roadtanker;
          $status = Status::with('roadtanker', 'roadtanker.hauler')->where('id', $request->id)->get();
    
        return $status->toJson();
    }
    public function status_remove(Request $request)
    {
        $status = Status::find($request->input('id'));
        $status->delete();

        \Session::flash('success-remove', 'Status Successfully Removed !!');

    }

}
