@extends('layouts.main')

@section('content')
<h1>member</h1>
<ul class="divide-y divide-gray-200">
            @foreach ($users as $user1)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">                
                            <h3 class="text-lg font-medium text-gray-800">{{ $user1->name }}</h3>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>

<h2>search</h2>

<form action="{{ route('kanban.seachMember',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
<input type="search" id="name" name="name">
<button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
</form>

        <ul class="divide-y divide-gray-200">
        @foreach ($userss as $user)
        
        <li class="flex items-center py-4 px-6 hover:bg-gray-50">
            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
            <form action="{{ route('kanban.addMember', ['event' => $event,'user'=>$user]) }}" method="GET" enctype="multipart/form-data">
            <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-800">{{ $user->name }}</h3>
                    <input type="hidden" name="user_id" value="{{ $user->id }}">{{ $user->id }}
                    
                <p class="text-gray-600 text-base"></p>
            </div>
            <span class="text-gray-400"></span>
            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">add</button>
        </li>
        </form>
        @endforeach
    </ul>


<!-- <div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">Member</div>
        <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">
        @foreach ($users as $user)
        <li class="flex items-center py-4 px-6 hover:bg-gray-50">
            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
            <div class="flex-1">
                <h3 class="text-md font-medium text-gray-800">{{ $user->name }}</h3>
                <p class="text-gray-600 text-base"></p>
            </div>
            <span class="text-gray-400"></span>
        </li>
        @endforeach
        <a href="{{route('events.pickOrganize',['event'=> $event])}}">เพิ่มสมาชิก</a>

    </div>
</div> -->
</div>
@endsection