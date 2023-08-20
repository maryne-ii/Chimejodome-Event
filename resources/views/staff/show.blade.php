@extends('layouts.main')

@section('content')
<h1 class="text-5xl">
    Event: {{$event->name}}
</h1>

<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <div class="bg-pink-100 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">Event detail</h2>

        </div>
        <ul class="divide-y divide-gray-200">
            <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-800">{{ $event->header }}</h3>
                    <p class="text-gray-600 text-base">{{ $event->name }}</p>
                    <img src="{{ asset('storage/' . $event->post) }}">
                </div>
            </li>
        </ul>
</div>
@endsection