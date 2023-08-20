@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <div class="bg-pink-100 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">Event</h2>
            <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100"
               href="{{ route('events.create') }}">
               create event
            </a>
            <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100"
               href="{{ route('events.manage') }}">
               my event
            </a>

        </div>
        
        
        <ul class="divide-y divide-gray-200">
            @foreach ($events as $event)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <a href="{{ route('events.show', ['event' => $event]) }}">
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>
                            <img src="{{ asset('storage/' . $event->poster) }}">

                    </a>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- <ul class="divide-y divide-gray-200">
        @foreach ($events as $event)
        <li class="flex items-center py-4 px-6 hover:bg-gray-50">
            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
            <div class="flex-1">
                <a href="{{ route('events.show', ['event' => $event]) }}">
                    <img src="{{$event->poster}}" alt="">
                    <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>
                </a>
                <p class="text-gray-600 text-base"></p>
            </div>
            <span class="text-gray-400"></span>
        </li>
        @endforeach
    </ul>
</div> -->
@endsection