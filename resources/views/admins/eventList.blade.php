@extends('layouts.main')

@section('content')
{{--<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">--}}
{{--    <div class="bg-pink-100 py-2 px-4">--}}
{{--        <h2 class="text-xl font-semibold text-gray-800">Event List</h2>--}}
{{--    </div>--}}
{{--    <div>--}}

{{--    </div>--}}

{{--    <ul class="divide-y divide-gray-200">--}}
{{--        @foreach ($events as $event)--}}
{{--        <form class="" action="{{route('DeleteEvent', ['event' => $event]) }}">--}}
{{--            <li class="flex items-center justify-between py-4 px-6 hover:bg-gray-50">--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <h3 class="text-md font-medium text-gray-800">{{ $event->name }}</h3>--}}
{{--                        <img class="h-30 w-20"src="{{$event->poster}}">--}}
{{--                        @if ($event->status === 0)--}}
{{--                        <p>processing ..</p>--}}
{{--                        @elseif ($event->status === 1)--}}
{{--                        <p>Complete</p>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Delete</button>--}}
{{--            </li>--}}
{{--        </form>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}


<div>
    <div class="flex items-start justify-center mt-10 mb-10">
        <p class="mr-20 ml-20 bg-[#A1C77B] text-lg text-center font-medium px-4 py-3 mr-5 w-full rounded-md text-white" >
            Event
        </p>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-10 mr-40 ml-40">
        @foreach ($events as $event)
            <form class="" action="{{route('DeleteEvent', ['event' => $event]) }}">

                <div class="flex flex-col justify-center items-center px-5 py-5 bg-white h-full w-full rounded-md mr-10 ml-10  ">
                    <a href="{{ route('events.show', ['event' => $event]) }}">
                        <div class="">
                            <p class="text-lg text-center font-medium text-gray-800">{{ $event->name }}</p>
                        </div>
                        <hr class="border-2 w-full mt-2 mb-2 border-[rgb(161,199,123)] ">
                        <div class="">
                            <img class="h-80 w-60" src="{{env('APP_URL')."/".$event->poster}}" alt="event poster">
                        </div>
                    </a>
                    <div class="mt-6">
                        <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Delete</button>
                    </div>

                </div>
            </form>
        @endforeach
    </div>
</div>

@endsection
