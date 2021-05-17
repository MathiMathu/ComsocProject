<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Event;

class ViewEventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        
        return view('view_uploaded_event', compact('events'));
    }


    public function edit($id)
    {
        $event = Event::find($id);
        return view('edit_event', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'event_name' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'venue' => 'required',
        ]);
        $event = Event::find($id);
        $event->event_name = $request->event_name;
        $event->date = $request->date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->guest = $request->guest;
        $event->venue = $request->venue;

        if($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/services'), $filename);
            $event->image_name = $filename;
        }
    
        //Event::find(1)->update(['avatar'=> $filename]);
        //$event->avatar = $filename;
        $event->save();
        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();

        return redirect('/events');
    }
}
