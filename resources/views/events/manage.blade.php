@extends('layouts.main')

@section('content')
{{--<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">--}}
{{--        <div class="bg-pink-100 py-2 px-4">--}}
{{--            <h2 class="text-xl font-semibold text-gray-800">Event</h2>--}}
{{--        </div>--}}

{{--        <ul class="divide-y divide-gray-200">--}}
{{--            @foreach ($events as $event)--}}
{{--                <li class="flex items-center py-4 px-6 hover:bg-gray-50">--}}
{{--                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--                    <div class="flex-1">--}}
{{--                    <a href="{{ route('events.kanban', ['event' => $event]) }}">--}}
{{--                            <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>--}}
{{--                            <img src="{{ asset('storage/' . $event->post) }}">--}}

{{--                    </a>--}}
{{--                        <p class="text-gray-600 text-base"></p>--}}
{{--                    </div>--}}
{{--                    <span class="text-gray-400"></span>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        <div class="bg-pink-100 py-2 px-4">--}}
{{--            <h2 class="text-xl font-semibold text-gray-800">Event on Board</h2>--}}
{{--        </div>--}}
{{--        <ul class="divide-y divide-gray-200">--}}
{{--            @foreach ($events2 as $event)--}}
{{--                <li class="flex items-center py-4 px-6 hover:bg-gray-50">--}}
{{--                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--                    <div class="flex-1">--}}
{{--                    <a href="{{ route('events.kanban', ['event' => $event]) }}">--}}
{{--                            <h3 class="text-lg font-medium text-gray-800">{{ $event->name }}</h3>--}}
{{--                            <img src="{{ asset('storage/' . $event->post) }}">--}}

{{--                    </a>--}}
{{--                        <p class="text-gray-600 text-base"></p>--}}
{{--                    </div>--}}
{{--                    <span class="text-gray-400"></span>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--</div>--}}


<div class="flex flex-col">
    <div>
        <div class="flex items-start justify-center mt-10 mb-10">
            <p class="ml-20 mr-20 bg-[#A1C77B] text-lg w-full text-center font-medium px-4 py-3 mr-5  rounded-md text-white" >
                Event (processing ...)
            </p>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-10 mr-40 ml-40">
            @foreach ($events as $event)
                <div class="flex flex-col justify-center items-center px-5 py-5 bg-white h-full w-full rounded-md mr-10 ml-10  ">
                    <a href="{{ route('events.kanban', ['event' => $event]) }}">
                        <div class="">
                            <p class="text-lg font-medium text-gray-800">{{ $event->name }}</p>
                        </div>
                        <hr class="border-2 w-full mt-2 mb-2 border-[rgb(161,199,123)] ">
                        <div class="">
                            <img class="h-80 w-60" src="{{env('APP_URL')."/".$event->poster}}" alt="event poster">
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-3">      <div class="flex items-start justify-center mt-10 mb-10">
            <p class="ml-20 mr-20 bg-[#A1C77B] text-lg w-full text-center font-medium px-4 py-3 mr-5  rounded-md text-white" >
                Event (Approved already)
            </p>
        </div>
        <div class="grid grid-cols-4 grid-rows-4 gap-4 mt-10 mr-40 ml-40">
            @foreach ($events2 as $event)
                <div class="flex flex-col justify-center items-center px-5 py-5 bg-white h-full w-full rounded-md mr-10 ml-10  ">
                    <a href="{{ route('events.kanban', ['event' => $event]) }}">
                        <div class="">
                            <p class="text-lg font-medium text-gray-800">{{ $event->name }}</p>
                        </div>
                        <hr class="border-2 w-full mt-2 mb-2 border-[rgb(161,199,123)] ">
                        <div class="">
                            <img class="h-80 w-60" src="{{env('APP_URL')."/".$event->poster}}" alt="event poster">
                        </div>
                    </a>

                </div>
            @endforeach
        </d
</div>
@endsection
