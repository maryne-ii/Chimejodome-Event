@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">          
        <ul class="divide-y divide-gray-200">
            @foreach ($events as $event)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <a href="{{ route('users.show', ['event' => $event]) }}">
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->budget }}</h3>
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->organizer_total }}</h3>
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->participant_total }}</h3>
                            <img src="{{ asset('storage/' . $event->poster) }}">

                    </a>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>
</div>
@endsection