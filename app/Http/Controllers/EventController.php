<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */




    public function index()
    {

        $events = Event::get()->where('status',1);
        return view('events.index', [
            'events' => $events
        ]);
    }
    public function join(Event $event)
    {
        // $events = $event->joins;
        $users = $event->joins;
        return view('kanban.join', [
            'users' => $users
        ]);
    }

    public function manage()
    {
        $user = Auth::user();
        // $events = Event::get()->where('status',0);
        $events = $user->organizes->where('status',0);
        // $events = Event::get($user)->where('status',1);
        return view('events.manage', [
            'events' => $events
        ]);
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
    public function store(Request $request)
    {
        $event_name = $request->get('name');
        if ($event_name == null) {
            return redirect()->back();
        }
        $user = Auth::user();


        $event = new Event();
        $event->name = $event_name;
        $event->header = $user->name;
        $event->save();

        $event->organizes()->attach($user->id);
        return redirect()->route('events.manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show',[
            'event'=>$event
        ]);
    }
    public function kanban(Event $event)
    {
        return view('events.kanban',[
            'event'=>$event
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    public function show_join()
    {
        $events = Event::get();
        return view('events.event-join',[
            'events' => $events
        ]);
    }

    public function show_organize()
    {
        $events = Event::get();
        return view('events.event-organize',[
            'events' => $events
        ]);
    }
}
