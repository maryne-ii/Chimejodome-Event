@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden">
        @php
        $items = DB::table('user_organize_event')->where('user_id','=',Auth::user()->id)->pluck('event_id')
        @endphp

        @foreach ($items as $item)
        <h1 class="event-organize-show">
            @php
                $event = $events->get($item);
            @endphp
            <a href="{{route('events.show',['event' => $event])}}">{{$events->get($item)->name}}</a>
        </h1>
        @endforeach


    </div>
@endsection
