@extends('layouts.main')

@section('content')

    <ul class="divide-y divide-gray-200">
        @foreach ($events as $event)
        <div class="bg-white p-10 mt-8 flex flex-col items-center rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <h1 class="text-black font-bold text-5xl mb-4">Certificate</h1>
            <h1 class="text-black text-large mb-2">of Appreciation</h1>
            <h1 class="text-black text-medium mb-4">This certificate is proudly presented to </h1>
            <h1 class="text-black font-bold text-4xl mb-4">{{Auth::user()->name}}</h1>
            <h1 class="text-black text-large mb-2">for participated in</h1>
            <h1 class="text-black font-bold text-4xl mb-4">{{$event->name}}</h1>
        </div>

        <!-- <li class="flex items-center py-4 px-6 hover:bg-gray-50">
            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
            <div class="flex-1">
                <a href="{{ route('events.show', ['event' => $event]) }}">
                    <img src="{{$event->poster}}" alt="">
                    <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>
                </a>
                <p class="text-gray-600 text-base"></p>
            </div>
            <span class="text-gray-400"></span>
        </li> -->
        @endforeach
    </ul>

@endsection