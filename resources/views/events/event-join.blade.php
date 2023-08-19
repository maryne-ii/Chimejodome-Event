@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden">
        {{-- {{Auth::user()->id}}<br>
        {{DB::table('user_join_event')->get()}}<br>
        {{DB::table('user_join_event')->get('user_id')}}<br>
        {{DB::table('user_join_event')->get('event_id')}}<br>
        {{DB::table('user_join_event')->where('user_id','=',Auth::user()->id)->get('event_id')}}<br> --}}
        @php
        $items = DB::table('user_join_event')->where('user_id','=',Auth::user()->id)->pluck('event_id')
        @endphp

        @foreach ($items as $item)
        <h1 class="event-join-show">
            @php
                $event = $events->get($item);
            @endphp
            <a href="{{route('events.show',['event' => $event])}}">{{$events->get($item)->name}}</a>
        </h1>
        @endforeach


    </div>
@endsection
