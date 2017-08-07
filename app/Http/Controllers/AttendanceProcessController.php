<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;

class AttendanceProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($process)
    {
    	$batches = Process::level($process);

    	return view('attendance.process.index')->with('batches',$batches)->with('process',$process);
    }

    public function delete(Request $request,$process)
    {
    	Process::deletePE($request->id);

    	return redirect('/attendance/process/'.$process)->with('message','deleted one data');
    }
}
