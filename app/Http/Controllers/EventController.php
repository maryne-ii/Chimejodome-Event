<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


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
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        return view('events.edit',['event'=>$event]);
    }

    public function joinEvent(Event $event)
    {
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        return view('events.join',['event'=>$event]);
    }

    public function storeJoinUser(Request $request,Event $event)
    {
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        $user = User::findOrFail($request->input('user_id'));
        $event->joins()->attach($user);
        DB::table('user_join_event')->where('user_id',$user->id)->where('event_id',$event->id)->update(['image_for_event' => $request->image_for_event]);
        return redirect()->route('events.index')->with('success', 'User attached successfully');     
    }

    public function joinList(Request $request,User $user)
    {
        
        // $user = User::findOrFail($request->get('user_id'));
        print_r($user->id);
        // $records = DB::table('user_join_event')->where('user_id',$user->id)->where('event_id',$event->id)->get();

        // return view('events.joinList'
        // , [
        //     'records' => $records
        // ]);
        // return view('events.show');
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // Gate::authorize('update', $event);
        $request->validate([
            'name' => ['required','min:4','max:255']
        ]);
        $event->name = $request->get('name');
        $event->header = $request->get('header');
        $event->detail = $request->get('detail');
        $event->location = $request->get('location');
        $event->start_date = $request->get('start_date');
        $event->end_date = $request->get('end_date');
        $image_file = $request->file('poster'); // image->poster
        $file_name = now()->getTimestamp().".".$image_file->getClientOriginalExtension();
        $image_file->storeAs('public/'.$file_name);
        $image_path = "storage/".$file_name;
        $event->poster = $image_path;

        $event->save();
        return redirect()->route('events.index');
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
