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


    public function destroy(Request $request)
    {
        $request->delete();
  
        return redirect()->route('view_uploaded_event')
                        ->with('success','Event deleted successfully');
    }
}
