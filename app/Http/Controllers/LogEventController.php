<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreLogEventRequest;
// use App\Http\Requests\UpdateLogEventRequest;
use App\Models\LogEvent;

class LogEventController extends Controller
{
  
    public function index()
    {
        $logEvent = LogEvent::all();
        return view('admin.logevent.index',compact('logEvent'));
    }


}
