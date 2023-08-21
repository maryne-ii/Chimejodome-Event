@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
    <div class="bg-pink-100 py-2 px-4">
        <h2 class="text-xl font-semibold text-gray-800">Event</h2>
        <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100" href="{{ route('events.create') }}">
            create event
        </a>
        <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100" href="{{ route('events.manage') }}">
            my event
        </a>

        </div>

        @if(session('success'))
                <div class="centered-message mt-5 flex items-center justify-between p-5 leading-normal text-green-600 bg-green-100 rounded-lg" role="alert">
                    <p>Success</p>

                    <svg onclick="return this.parentNode.remove();" class="inline w-8 h-8 fill-current ml-2 hover:opacity-80 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z"/>
                    </svg>
                  </div>
        @endif
        <ul class="divide-y divide-gray-200">
            @foreach ($events as $event)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <a href="{{ route('events.show', ['event' => $event]) }}">
                            <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>
                            <img class="w-80 h-100"src="{{$event->poster}}">

                    </a>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
