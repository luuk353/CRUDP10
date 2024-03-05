<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = auth()->user()->admin;
        $events = Event::get();

        return view('events.index', compact('events', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = Event::create($request->all());

        $imageName = time().'.'.$request->event_foto->extension();
        $request->event_foto->storeAs('public/images', $imageName);

        $event->event_foto = $imageName;
        $event->save();

        return redirect()->route('events.index')->with('success', 'Succesvol event aangemaakt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());

        $imageName = time().'.'.$request->event_foto->extension();
        $request->event_foto->storeAs('public/images', $imageName);

        $event->event_foto = $imageName;
        $event->save();

        return redirect()->route('events.index')->with('success', 'Succesvol event aangepast!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('destroy', 'Succesvol event verwijderd!');
    }
}
