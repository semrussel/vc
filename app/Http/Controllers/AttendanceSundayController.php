<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Disciple;
use App\Models\PivotDiscipleAttendance;
use Illuminate\Support\Facades\DB;

class AttendanceSundayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->type = 'sunday';
    }

    public function index()
    {
    	$attendances = Attendance::sunday()->get();

    	return view('attendance.sunday.index')->with('attendances',$attendances);
    }

    public function delete(Request $request)
    {
        $attendance = Attendance::find($request->id);
        $attendance->delete();
        return redirect('/attendance/sunday-service')->with('message','deleted sunday service entry#: '.$attendance->id);
    }

    public function createView(Request $request)
    {
    	$disciples = Disciple::all();

        return view('attendance.sunday.create')->with('disciples',$disciples);
    }

    public function create(Request $request)
    {
    	$attendance = new Attendance();
    	$attendance->date = $request->date;
    	$attendance->type = $this->type;
    	$attendance->save();

    	if (count($request->disciples) != 0) {
    		for ($i=0; $i < count($request->disciples); $i++) { 
    			$pivot = new PivotDiscipleAttendance();
    			$pivot->attendance_id = $attendance->id;
    			$pivot->disciple_id = $request->disciples[$i];
    			$pivot->save(); 
    		}
    	}

    	return redirect('/attendance/sunday-service')->with('message','added Sunday Service');
    }

    public function editView($id)
    {

    	$edit_data = Attendance::find($id);
        $pivots = PivotDiscipleAttendance::where('attendance_id',$id)->select('disciple_id')->get();
        $disciples = DB::table('disciples')->whereNotIn('id',$pivots)->select('disciples.id')->get();

        

    	return view('attendance.sunday.edit')->with('edit_data',$edit_data)->with('pivots',$pivots)->with('disciples',$disciples);
    }

    public function edit(Request $request,$id)
    {

        if (count($request->disciples) != 0) {
            for ($i=0; $i < count($request->disciples); $i++) { 
                $pivot = new PivotDiscipleAttendance();
                $pivot->attendance_id = $id;
                $pivot->disciple_id = $request->disciples[$i];
                $pivot->save(); 
            }
        }

        return redirect('/attendance/sunday-service/edit/'.$id)->with('message','edited sunday service');
    }

    public function view($id)
    {
        $edit_data = Attendance::findSunday($id)->get();

        $disciples = DB::table('disciples')
        ->leftJoin('pivot_disciple_attendances','disciples.id','=','pivot_disciple_attendances.disciple_id')
        ->whereNull('pivot_disciple_attendances.disciple_id')->select('disciples.id')->get(); 
        $pivots = PivotDiscipleAttendance::where('attendance_id',$id)->get();

        return view('attendance.sunday.view')->with('edit_data',$edit_data[0])->with('pivots',$pivots)->with('disciples',$disciples);
    }

}