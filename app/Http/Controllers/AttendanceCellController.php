<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Disciple;
use App\Models\PivotDiscipleAttendance;
use Illuminate\Support\Facades\DB;

class AttendanceCellController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->type = 'cell';
    }

    public function index()
    {
    	$attendances = Attendance::cell()->get();

    	return view('attendance.cell.index')->with('attendances',$attendances);
    }

    public function delete(Request $request)
    {
        $attendance = Attendance::find($request->id);
        $attendance->delete();
        return redirect('/attendance/cell')->with('message','deleted cell entry#: '.$attendance->id);
    }

    public function createView(Request $request)
    {
    	$disciples = Disciple::all();
    	$cellLeads = DB::table('connections')
        	->leftJoin('disciples','connections.discipler_id','=','disciples.id')
        	->select('disciples.id')->distinct('id')->get();

        //dd($cellLeads);

        return view('attendance.cell.create')->with('disciples',$disciples)->with('cellLeads',$cellLeads);
    }

    public function create(Request $request)
    {
    	$attendance = new Attendance();
    	$attendance->date = $request->date;
    	$attendance->type = $this->type;
    	$attendance->cellLeader_id = $request->cellLeader;
    	$attendance->save();

    	if (count($request->disciples) != 0) {
    		for ($i=0; $i < count($request->disciples); $i++) { 
    			$pivot = new PivotDiscipleAttendance();
    			$pivot->attendance_id = $attendance->id;
    			$pivot->disciple_id = $request->disciples[$i];
    			$pivot->save(); 
    		}
    	}

    	return redirect('/attendance/cell')->with('message','added cell');
    }

    public function editView($id)
    {

    	$edit_data = Attendance::find($id);
		$pivots = PivotDiscipleAttendance::where('attendance_id',$id)->select('disciple_id')->get();
        $disciples = DB::table('disciples')
        	->where('id','!=',$edit_data->cellLeader_id)
        	->whereNotIn('id',$pivots)->select('id')->get();

    	return view('attendance.cell.edit')->with('edit_data',$edit_data)->with('pivots',$pivots)->with('disciples',$disciples);
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

        return redirect('/attendance/cell/edit/'.$id)->with('message','edited sunday service');
    }

    public function view($id)
    {
        $edit_data = Attendance::findCell($id)->get();

        $disciples = DB::table('disciples')
        ->leftJoin('pivot_disciple_attendances','disciples.id','=','pivot_disciple_attendances.disciple_id')
        ->whereNull('pivot_disciple_attendances.disciple_id')->select('disciples.id')->get(); 
        $pivots = PivotDiscipleAttendance::where('attendance_id',$id)->get();

        return view('attendance.cell.view')->with('edit_data',$edit_data[0])->with('pivots',$pivots)->with('disciples',$disciples);
    }
}
