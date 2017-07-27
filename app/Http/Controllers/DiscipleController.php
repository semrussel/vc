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
        if ($request->hasFile('picture')) {
            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('images/profile/'), $imageName);
            $disciple->picture = url('images/profile').'/'.$imageName;
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

        return redirect('/disciples')->with('message','added disciple: '.$disciple->nickName);
    }

    public function delete(Request $request)
    {
        $disciple = Disciple::find($request->id);
        $disciple->delete();
        return redirect('/disciples')->with('message','added disciple: '.$disciple->nickName);
    }

    public function editView($id)
    {
        $disciples = Disciple::all();

        $edit_data = Disciple::find($id);

        if ($id == 1 || $id == 2) {
            $discipler = 0;
        }else{
            $discipler = Connection::where('disciple_id',$id)->get();
            $discipler = $discipler[0]->discipler_id;
        }
         

        return view('disciple.edit')->with('disciples',$disciples)->with('edit_data',$edit_data)->with('discipler_id',$discipler);
    }

    public function edit(Request $request)
    {

        $disciple = Disciple::find($request->disciple_id);
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
        if ($request->hasFile('picture')) {
            $imageName = time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('images/profile/'), $imageName);
            $disciple->picture = url('images/profile').'/'.$imageName;
        }
        $disciple->spiBirth = $request->spiBirth;
        $disciple->process = $request->process;
        $disciple->bapt = $request->bapt;
        $disciple->isFirstGen = $request->isFirstGen;
        $disciple->spiStatus = $request->spiStatus;
        $disciple->save();

        if ($request->disciple_id != 1 && $request->disciple_id != 2) {
            $connection = Connection::where('disciple_id',$request->disciple_id)->first();
            $connection->discipler_id = $request->cellLeader;
            $connection->disciple_id = $request->disciple_id;
            $connection->save();
        }
        

        return redirect('/disciple/edit/'.$request->disciple_id)->with('message','edited disciple: '.$disciple->nickName);
    }

}
