<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\KanbanNote;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
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
        // $user = Auth::user();
        // $records = DB::table('user_join_event')->where('user_id',$user->id)->get();
        // $events = $event->joins;
        $users = $event->joins;
        return view('kanban.join', [
            'users' => $users
        ]);
    }
    public function member(Event $event)
    {
        // $events = $event->joins;
        $users = $event->organizes;
        return view('kanban.member', [
            'users' => $users
        ]);
    }
    public function eventComplete(Event $event)
    {
        // $events = $event->joins;
        $users = $event->joins;
        return view('kanban.eventComplete', [
            'event' => $event
        ]);
    }
    public function storeComplete(Request $request,Event $event)
    {
        $users = $event->joins;
        $event->participant_total = count($users);
        $event_name = $request->get('name');
        $event_header = $request->get('header');
        $event_detail = $request->get('detail');
        $event_location = $request->get('location');
        if ($request->hasFile('image_path')) {
            // บันทึกไฟล์รูปภาพลงใน folder ชื่อ 'artist_images' ที่ storage/app/public
            $path = $request->file('image_path')->store('event_images', 'public');
            $event->poster = $path;
        }
        $event_participant_total = $request->get('participant_total');
        $event_organizer_total = $request->get('organizer_total');
        $event_start_date = $request->get('start_date');
        $event_end_date = $request->get('end_date');
        
        if ($event_name == null) {
            return redirect()->back();
        }
        $user = Auth::user();


        // $users = $event->joins;
        // $event->participant_total = count($users);
        

        
        $event->name = $event_name;
        $event->header = $event_header;
        $event->detail = $event_detail;
        $event->location = $event_location;
        $event->participant_total = $event_participant_total;
        $event->organizer_total = $event_organizer_total;
        $event->start_date = $event_start_date;
        $event->end_date = $event_end_date;
        $event->status =1;

        $event->save();
        
        $event->organizes()->attach($user->id);
        return redirect()->route('events.index');
    }
    
    public function disbursement(Event $event)
    {
        // $events = $event->joins;
        $users = $event->joins;
        return view('kanban.disbursement', [
            'event' => $event
        ]);
    }

    public function disburseConfirm(Event $event,Request $request)
    {
        $user=User::find(2);

        $event_detail = $request->get('detail');
        $event_bank_account_number = $request->get('bank_account_number');
        $event_budget = $request->get('budget');

        $event->detail=$event_detail;
        $event->bank_account_number=$event_bank_account_number;
        $event->budget=$event_budget;
        $event->user_id=$user->id;
        $event->save();

        $kanbans0 = KanbanNote::get()->where('status',0)->where('event_id',$event->id);
        $kanbans1 = KanbanNote::get()->where('status',1)->where('event_id',$event->id);
        $kanbans2 = KanbanNote::get()->where('status',2)->where('event_id',$event->id);
        $kanbans3 = KanbanNote::get()->where('status',3)->where('event_id',$event->id);

        return view('events.kanban',[
            'event'=>$event,
            'kanbans0'=>$kanbans0,
            'kanbans1'=>$kanbans1,
            'kanbans2'=>$kanbans2,
            'kanbans3'=>$kanbans3
        ]);

        // return view('events.kanban', [
        //     'event' => $event
        // ]);
    }

    public function manage()
    {
        $user = Auth::user();
        // $events = Event::get()->where('status',0);
        $events = $user->organizes->where('status',0);
        $events2 = $user->organizes->where('status',1);
        // $events = Event::get($user)->where('status',1);
        return view('events.manage', [
            'events' => $events,
            'events2'=> $events2
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
        $event_header = $request->get('header');
        
        if ($event_name == null) {
            return redirect()->back();
        }
        
        $user = Auth::user();


        $event = new Event();
        // if ($request->hasFile('post')) {
        //     // บันทึกไฟล์รูปภาพลงใน folder ชื่อ 'artist_images' ที่ storage/app/public
        //     $path = $request->file('post')->store('event_images', 'public');
        //     $event->post = $path;
        // }
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
    public function createKanbanPage(Event $event)
    {
        // $events = $event->joins;
        $user = Auth::user();
        return view('kanban.createKanbanNotes', [
            'event' => $event,
            'user' => $user
        ]);
        
    }


    public function createKanban(Request $request,Event $event)
    {
        $kanban_name = $request->get('name');
        // $kanban_writer = $request->get('writer');
        $kanban_description = $request->get('description');

        if ($kanban_name == null) {
            return redirect()->back();
        }
        $user = Auth::user();

        $kanban = new KanbanNote();
        

        
        $kanban->task_name = $kanban_name;
        $kanban->writer = $user->name;
        $kanban->description = $kanban_description;
        $kanban->event_id = $event->id;
        $kanban->status = 0;
        $kanban->save();
        // $event->kanbanNotes()->$kanban;
        return redirect()->route('events.kanban',
        [
            'event'=>$event
        ]
    );

        // $kanban = new KanbanNote();
        // $event->kanbanNotes()->attach($kanban->id);
        // $kanban->event_id = $event->id;
        // $kanban->task_name = "1qe";
        // $kanban->writer = $event->name;
        // $kanban->description = 'dasfghj';
        // $kanban->save();
        
    }
    public function move(Event $event,KanbanNote $kanban,Request $request) {

        // $kanban_name = $request->get('name');
        // $kanban_description = $request->get('description');
        // $kanban_writer = $request->get('writer');


        // $kanban = new KanbanNote();
        // $kanban = KanbanNote::find(1);

        // dd($kanban->id);



        
        $kanban->status = $kanban->status+1;
        $kanban->save();
        // return view('events.kaban',
        // [
        //     'kanban'=> $kanban
        // ]);


        // // $kanban->task_name = $kanban_name;
        // // $kanban->description = $kanban_description;

        
        // dd($kanban->description);

        $kanban->save();
        return redirect()->route('events.kanban',
        [
            'event'=>$event
        ]
    );
    }
    
    // public function move() {

    //     return view('events.kaban',
    //     [
    //         'kanban'=> $kanban
    //     ]);
    // }




    public function kanban(Event $event)
    {
        
        
        $kanbans0 = KanbanNote::get()->where('status',0)->where('event_id',$event->id);
        $kanbans1 = KanbanNote::get()->where('status',1)->where('event_id',$event->id);
        $kanbans2 = KanbanNote::get()->where('status',2)->where('event_id',$event->id);
        $kanbans3 = KanbanNote::get()->where('status',3)->where('event_id',$event->id);
        $users = $event->joins;
        $event->participant_total = count($users);

        return view('events.kanban',[
            'event'=>$event,
            'kanbans0'=>$kanbans0,
            'kanbans1'=>$kanbans1,
            'kanbans2'=>$kanbans2,
            'kanbans3'=>$kanbans3
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

    public function joinList()
    {
        
        // $user = User::findOrFail($request->get('user_id'));
        $user = Auth::user();
        $records = DB::table('user_join_event')->where('user_id',$user->id)->get();

        return view('events.joinList'
        , [
            'records' => $records
        ]);
        //certificate and applied status
        // return view('events.show');
    }

    public function organizeEvent(Event $event)
    {
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        return view('events.organize',['event'=>$event]);
    }

    public function storeOrganizeUser(Request $request,Event $event)
    {
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        $user = User::findOrFail($request->input('user_id'));
        $event->organizes()->attach($user);
        // DB::table('user_organize_event')->where('user_id',$user->id)->where('event_id',$event->id);
        return redirect()->route('events.index')->with('success', 'User attached successfully');     
    }

    public function organizeList()
    {
        
        // $user = User::findOrFail($request->get('user_id'));
        $user = Auth::user();
        $records = DB::table('user_organize_event')->where('user_id',$user->id)->get();

        return view('events.organizeList'
        , [
            'records' => $records
        ]);
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
        $event->status =1;

        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->songs->isEMPTY()) {
            $event->delete();
            return redirect()->route('events.index');

        }
        return redirect()->back();
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
