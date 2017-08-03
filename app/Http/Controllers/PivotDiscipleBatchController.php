<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PivotDiscipleBatch;

class PivotDiscipleBatchController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete(Request $request)
    {
        $batch = PivotDiscipleBatch::find($request->id);
        $batch->delete();
        return redirect('/batch/edit/'.$request->batch_id)->with('message','removed one delegate');
    }
}
