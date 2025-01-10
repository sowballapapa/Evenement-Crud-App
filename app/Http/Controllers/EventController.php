<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('home', [
            'listeDesEvents'=>$events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventFormRequest $request)
    {
        $event = Event::create($request->validated());
        return to_route('event.index')->with('created', 'L\'événement a été créé avec succés!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('show', [
            'event'=>$event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('edit', [
            'event'=>$event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventFormRequest $request, Event $event)
    {
        $event->update($request->validated());
        return to_route('event.index')->with('edited', 'L\'événement a été modifié avec succés!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return to_route('event.index')->with('deleted', 'L\'événement a été supprimé avec succés!');
    }
}
