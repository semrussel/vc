<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciple;

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

    public function createView()
    {

        return view('disciple.create');
    }
}
