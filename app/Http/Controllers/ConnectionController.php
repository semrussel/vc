<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\Disciple;
use App\Models\Http\Requests;

class ConnectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$connections = Connection::all();
    	$disciples = Disciple::all();

        return view('connection.index')->with('connections',$connections)->with('disciples',$disciples);
    }

    public function view(Request $request)
    {   
        $connections = Connection::where('discipler_id',$request->cellLeader)->get();

        return view('connection.view')->with('id',$request->cellLeader)->with('connections',$connections);
    }

    public function view2($id)
    {   
        $connections = Connection::where('discipler_id',$id)->get();

        return view('connection.view')->with('id',$id)->with('connections',$connections);
    }

    public function edit($id)
    {
        $connections = Connection::where('discipler_id',$id)->get();

        return view('connection.edit')->with('connections',$connections)->with('id',$id);
    }

    public function delete(Request $request)
    {
        $connection = Connection::find($request->id);
        $connection->delete();
        return redirect('/connections/edit/'.$request->discipler_id.'?successDelete=1');
    }

    public function createView($id)
    {
        $disciples = Disciple::all();

        return view('connection.create')->with('id',$id)->with('disciples',$disciples);
    }

    public function create(Request $request,$id)
    {
        for ($i=0; $i < count($request->cellMember); $i++) { 
            $connection = new Connection();
            $connection->discipler_id = $id;
            $connection->disciple_id = $request->cellMember[$i];
            $connection->save();
        }
        return redirect('/connections?successAdd=1');
    }
}
