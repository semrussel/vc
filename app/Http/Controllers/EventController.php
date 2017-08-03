<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$events = Event::all();

        return view('event.index')->with('events',$events);
    }
}
