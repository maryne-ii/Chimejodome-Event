@extends('layouts.main')

@section('content')
{{--<h1>member</h1>--}}
{{--<ul class="divide-y divide-gray-200">--}}
{{--            @foreach ($users as $user1)--}}
{{--                <li class="flex items-center py-4 px-6 hover:bg-gray-50">--}}
{{--                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--                    <div class="flex-1">                --}}
{{--                            <h3 class="text-lg font-medium text-gray-800">{{ $user1->name }}</h3>--}}
{{--                        <p class="text-gray-600 text-base"></p>--}}
{{--                    </div>--}}
{{--                    <span class="text-gray-400"></span>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}

{{--<h2>search</h2>--}}

{{--<form action="{{ route('kanban.seachMember',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">--}}
{{--<input type="search" id="name" name="name">--}}
{{--<button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>--}}
{{--</form>--}}

{{--        <ul class="divide-y divide-gray-200">--}}
{{--        @foreach ($userss as $user)--}}
{{--        --}}
{{--        <li class="flex items-center py-4 px-6 hover:bg-gray-50">--}}
{{--            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>--}}
{{--            <form action="{{ route('kanban.addMember', ['event' => $event,'user'=>$user]) }}" method="GET" enctype="multipart/form-data">--}}
{{--            <div class="flex-1">--}}
{{--                    <h3 class="text-lg font-medium text-gray-800">{{ $user->name }}</h3>--}}
{{--                    <input type="hidden" name="user_id" value="{{ $user->id }}">{{ $user->id }}--}}
{{--                    --}}
{{--                <p class="text-gray-600 text-base"></p>--}}
{{--            </div>--}}
{{--            <span class="text-gray-400"></span>--}}
{{--            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">add</button>--}}
{{--        </li>--}}
{{--        </form>--}}
{{--        @endforeach--}}
{{--    </ul>--}}






    <div class="px-[30rem] py-6" >

        <div class="text-lg font-semibold text-center bg-white text-[#A1C77B] py-8 rounded-md">
            {{$event->name}}
        </div>
        <div class="">
            <p class="block w-full bg-[#A1C77B] text-white font-bold p-4 mt-5  rounded-lg">Search member</p>
            <form action="{{ route('kanban.seachMember',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                <div class="flex flex-row bg-white justify-between items-center p-5 rounded-md">
                    <div class="col-span-6  ml-2">
                        <input name="letter" value="" placeholder="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="search" id="name" name="name">
                    </div>
                    <div class="col-span-6 mr-2">
                        <button type="submit" class="block  bg-[#A1C77B] text-white font-md p-2 rounded-lg">search</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="">

            <div>
                <p class="block w-full bg-[#A1C77B] text-white mt-5 font-bold p-4 rounded-lg">Member</p>
            </div>
            <div>
                <ul class="divide-y divide-gray-200">
                    @foreach ($users as $user1)
                        <li class="flex rounded-md items-center bg-white py-4 px-6 hover:bg-gray-50">
                            <div class="flex-1">
                                <h3 class="text-md font-medium text-gray-800">{{ $user1->name }}</h3>
                                <p class="text-gray-600 text-base"></p>
                            </div>
                            <span class="text-gray-400"></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div>
            <p class="block w-full bg-[#A1C77B] text-white font-bold p-4 mt-5 rounded-lg">Select Member</p>
            <div>
                <ul class="divide-y divide-gray-200">
                    @foreach ($userss as $user)
                        <form action="{{ route('kanban.addMember', ['event' => $event,'user'=>$user]) }}" method="GET" enctype="multipart/form-data">
                        <li class="flex flex-row justify-between items-center py-4 px-6 bg-white hover:bg-gray-100">
                            <div class="col-span-6">
                                    <h3 class="text-md font-medium text-gray-800">{{ $user->name }}</h3>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">{{ $user->id }}
{{--                                    <p class="text-gray-600 text-base"></p>--}}
                            </div>
                            <div class="col-span-6">
                                <button type="submit" class="block w-full bg-[#A1C77B] text-white font-md p-2 rounded-lg">add</button>
                            </div>
                        </li>
                        </form>

                    @endforeach
                </ul></div>
        </div>
    </div>
@endsection
