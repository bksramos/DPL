<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    public function loadEvents(Request $request)
    {

        /*Serão retornadas apenas os eventos entre as datas iniciais e finais do mês visualizado*/
        $returnedColumns = ['id', 'title', 'type', 'start', 'end', 'color', 'description'];

        $start = (!empty($request->start)) ? ($request->start) : ('');
        $end = (!empty($request->end)) ? ($request->end) : ('');
        
        $events = Event::whereBetween('start', [$start, $end])->get($returnedColumns);
        
        return response()->json($events);
    }

    public function store(EventRequest $request)
    {
        Event::create($request->all());

        return response()->json(true);
    }

    public function edit($id)
    {
        $event = Event::find($id);    

        return view('fullcalendar.edit')->withEvent($event);
    }

    public function update(EventRequest $request)
    {
        $event = Event::where('id', $request->id)->first();

        $event->fill($request->all());

        $event->save();

        return response()->json(true);
    }

    public function destroy(Request $request)
    {
        Event::where('id', $request->id)->delete();

        return response()->json(true);
    }

    public function briefing()
    {
        $event = DB::table('events')
             ->select('id', 'title', 'type', 'start',
                      'end', 'color', 'description', 'created_at', 'updated_at')
             ->get();
        // dd($event);
        return view('fullcalendar.event')->withEvent($event);
    }

    public function pfv()
    {
        $event = DB::table('events')
             ->select('id', 'title', 'type', 'start',
                      'end', 'color', 'description', 'created_at', 'updated_at')
             ->where('type', '=', 'PFV')
             ->get();
        // dd($event);
        return view('fullcalendar.event')->withEvent($event);
    }
}
