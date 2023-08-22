@extends('layouts.main')

@section('content')
{{--<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">--}}
{{--    <div class="bg-pink-100 py-2 px-4">--}}
{{--        <h2 class="text-xl font-semibold text-gray-800">User List</h2>--}}
{{--    </div>--}}
{{--    <div>--}}

{{--    </div>--}}

{{--    <ul class="divide-y divide-gray-200">--}}
{{--        @foreach ($users as $user)--}}
{{--        <form class="" action="{{route('DeleteUser',['user'=>$user])}}">--}}
{{--            <li class="flex items-center justify-between py-4 px-6 hover:bg-gray-50">--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <h3 class="text-md font-medium text-gray-800">{{ $user->name }}</h3>--}}
{{--                        <img src="{{$user->image_path}}">--}}
{{--                        @if ($user->role === 0)--}}
{{--                        <p>Admin</p>--}}
{{--                        @elseif ($user->role === 1)--}}
{{--                        <p>Staff</p>--}}
{{--                        @elseif ($user->role === 2)--}}
{{--                        <p>Student</p>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Delete</button>--}}
{{--            </li>--}}
{{--        </form>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}




    <div>
        <div class="flex items-start justify-center mt-10 mb-10">
            <p class="mr-20 ml-20 bg-[#A1C77B] text-lg text-center font-medium px-4 py-3 mr-5  rounded-md text-white" >
                User
            </p>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-10 mr-40 ml-40">
            @foreach ($users as $user)
                <form class="" action="{{route('DeleteUser',['user'=>$user])}}">

                    <div class="flex flex-col justify-center items-center px-5 py-5 bg-white h-full w-full rounded-md mr-10 ml-10  ">
                        <a href="{{ route('profile.user', ['user' => $user]) }}">
                            <div class="">
                                <p class="text-lg text-center font-medium text-gray-800">{{ $user->name }}</p>
                                @if ($user->role === 0)
                                    <p>Admin</p>
                                @elseif ($user->role === 1)
                                    <p>Staff</p>
                                @elseif ($user->role === 2)
                                    <p>Student</p>
                                @endif
                            </div>
                            <hr class="border-2 w-full mt-2 mb-2 border-[rgb(161,199,123)] ">
                            <div class="">
                                <img class="h-80 w-60" src="{{env('APP_URL')."/".$user->profile_image}}" alt="event poster">
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
