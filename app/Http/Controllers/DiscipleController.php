<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciple;
use App\Connection;
use App\Http\Requests;

class DiscipleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$disciples = Disciple::all();

        return view('disciple.index')->with('disciples',$disciples);
    }

    public function view($id)
    {
        $disciple = Disciple::find($id);

        return view('disciple.view')->with('disciple',$disciple);
    }

    public function createView()
    {
        $disciples = Disciple::all();
        return view('disciple.create')->with('disciples',$disciples);
    }

    public function create(Request $request)
    {
        $disciple = new Disciple();
        $disciple->firstName = $request->firstName;
        $disciple->lastName = $request->lastName;
        $disciple->nickName = $request->nickName;
        $disciple->gender = $request->gender;
        $disciple->address = $request->address;
        $disciple->school = $request->school;
        $disciple->company = $request->company;
        $disciple->phyBirth = $request->phyBirth;
        $disciple->contactNo = $request->contactNo;
        $disciple->cStatus = $request->cStatus;
        if (isset($request->picture)) {
            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('images/profile/'), $imageName);
            $disciple->picture = url('images/profile').'/'.$imageName;
        }else{
            $disciple->picture = $request->input('picture');
        }
        $disciple->spiBirth = $request->spiBirth;
        $disciple->process = $request->process;
        $disciple->bapt = $request->bapt;
        $disciple->isFirstGen = $request->isFirstGen;
        $disciple->spiStatus = $request->spiStatus;
        $disciple->save();

        $connection = new Connection();
        $connection->discipler_id = $request->cellLeader;
        $connection->disciple_id = $disciple->id;
        $connection->save();

        return redirect('/disciples?successAdd=1');
    }

    public function delete(Request $request)
    {
        $disciple = Disciple::find($request->id);
        $disciple->delete();
        return redirect('/disciples?successDelete=1');
    }
}
