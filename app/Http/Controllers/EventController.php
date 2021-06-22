<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // $events = Event::latest()->paginate(5);

        $events = Event::all();

        return view('events.event',compact('events'));
        //return view('demo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_event');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'event_name' => ['required', 'string','regex:/[A-Z]/', 'max:255'],
            'image_name' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'venue' => ['required', 'string','regex:/[A-Z]/'],
            'is_register' => 'required',
        ]);
        $event = new Event;

        $event->event_name = $request->event_name;
        $event->date = $request->date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->guest = $request->guest;
        $event->venue = $request->venue;
        $event->is_register = $request->is_register;

        $filename = $request->image_name->getClientOriginalName();
        $event->image_name = $filename;

        $request->image_name->storeAs('images',$filename,'public');
        //Event::find(1)->update(['avatar'=> $filename]);
        //$event->avatar = $filename;





        $event->save();
        return redirect()->route('admin.route');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadFlyer($id)
    {

            //$download = Event::where(['id' => $id, 'Event' => $id]);
            
            $flyer = Event::find($id);
            $download = public_path().'/storage/images/' . $flyer->image_name;
            return response()->download($download);
    }
}
