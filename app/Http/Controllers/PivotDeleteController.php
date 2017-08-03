<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PivotDeleteController extends Controller
{
    public function delete(Request $request)
    {
    	$deleteItem = DB::table($request->table_name)->where('id',$request->id)->delete();
        return redirect($request->url_return.''.$request->return_id)->with('message','removed data');
    }
}
