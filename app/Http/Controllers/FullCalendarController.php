<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\FastEvent;
use App\Models\EventType;
class FullCalendarController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {  
        $fastEvents = FastEvent::all();
        $eventTypes = EventType::all();

        return view('fullcalendar.fullcalendar', 
            ['fastEvents' => $fastEvents], 
            ['eventTypes' => $eventTypes]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */



}

