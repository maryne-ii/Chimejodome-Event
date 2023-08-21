@extends('layouts.main')

@section('content')
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
    <div class="bg-pink-100 py-2 px-4">
        <h2 class="text-xl font-semibold text-gray-800">User List</h2>
    </div>
    <div>

    </div>

    <ul class="divide-y divide-gray-200">
        @foreach ($users as $user)
        <form class="" action="{{route('DeleteUser',['user'=>$user])}}">
            <li class="flex items-center justify-between py-4 px-6 hover:bg-gray-50">
                <div class="flex items-center">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex flex-col">
                        <h3 class="text-md font-medium text-gray-800">{{ $user->name }}</h3>
                        <img src="{{$user->image_path}}">
                        @if ($user->role === 0)
                        <p>Admin</p>
                        @elseif ($user->role === 1)
                        <p>Staff</p>
                        @elseif ($user->role === 2)
                        <p>Student</p>
                        @endif
                    </div>
                </div>
                <button class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Delete</button>
            </li>
        </form>
        @endforeach
    </ul>
</div>

@endsection