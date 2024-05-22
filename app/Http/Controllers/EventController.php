<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        $events = Event::all(); 

        return view('events.create', compact('events')); 
    }
    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();
        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }
}
