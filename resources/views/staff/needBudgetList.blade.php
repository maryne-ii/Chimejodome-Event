@extends('layouts.main')

@section('content')
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
        <div class="bg-pink-100 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">Event List</h2>
        </div>
        <div>

        </div>

        <ul class="divide-y divide-gray-200">
            @foreach ($events as $event)
                <form class="" action="{{route('acceptBudget', ['event' => $event]) }}">
                    <li class="flex items-center justify-between py-4 px-6 hover:bg-gray-50">
                        <div class="flex items-center">
                            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>

                            <div class="flex flex-col">
                                <h3 class="text-md font-medium text-gray-800">{{ $event->name }}</h3>
                                <img class="h-30 w-20"src="{{$event->poster}}">
                                @if ($event->status === 0)
                                    <p>processing ..</p>
                                @elseif ($event->status === 1)
                                    <p>Complete</p>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Accept</button>
                    </li>
                </form>
            @endforeach
        </ul>
    </div>

@endsection
