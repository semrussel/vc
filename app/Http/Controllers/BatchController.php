<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Disciple;
use App\Batch;
use App\PivotDiscipleBatch;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$batches = Batch::all();

        return view('batch.index')->with('batches',$batches);
    }

    public function delete(Request $request)
    {
        $batch = Batch::find($request->id);
        $batch->delete();
        return redirect('/batch')->with('message','deleted batch: '.$batch->name);
    }

    public function createView(){

     	$disciples = Disciple::all();
        return view('batch.create')->with('disciples',$disciples);
    }

    public function create(Request $request)
    {
    	$batch = new Batch();
    	$batch->name = $request->name;
    	$batch->bibleVerse = $request->bibleVerse;
    	$batch->save();

    	if (count($request->disciples) != 0) {
    		for ($i=0; $i < count($request->disciples); $i++) { 
    			$pivot = new PivotDiscipleBatch();
    			$pivot->batch_id = $batch->id;
    			$pivot->disciple_id = $request->disciples[$i];
    			$pivot->save(); 
    		}
    	}

    	return redirect('/batch')->with('message','added Batch: '.$batch->name);
    }

    public function editView($id){

    	$edit_data = Batch::find($id);
        $disciples = DB::table('disciples')
        ->leftJoin('pivot_disciple_batch','disciples.id','=','pivot_disciple_batch.disciple_id')
        ->whereNull('pivot_disciple_batch.disciple_id')->select('disciples.id')->get(); 
        $pivots = PivotDiscipleBatch::where('batch_id',$id)->get();

    	return view('batch.edit')->with('edit_data',$edit_data)->with('pivots',$pivots)->with('disciples',$disciples);
    }

    public function edit(Request $request,$id)
    {
        
        $batch = Batch::find($id);
        $batch->name = $request->name;
        $batch->bibleVerse = $request->bibleVerse;
        $batch->save();

        if (count($request->disciples) != 0) {
            for ($i=0; $i < count($request->disciples); $i++) { 
                $pivot = new PivotDiscipleBatch();
                $pivot->batch_id = $batch->id;
                $pivot->disciple_id = $request->disciples[$i];
                $pivot->save(); 
            }
        }

        return redirect('/batch')->with('message','edited Batch: '.$batch->name);
    }
}
