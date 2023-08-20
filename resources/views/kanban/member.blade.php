@extends('layouts.main')

@section('content')
<h3>member</h3>
<ul class="divide-y divide-gray-200">
            @foreach ($users as $event)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <a href="{{ route('events.kanban', ['event' => $event]) }}">
                            <h3 class="text-lg font-medium text-gray-800">{{ $user->name }}</h3>
                    </a>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>



@endsection