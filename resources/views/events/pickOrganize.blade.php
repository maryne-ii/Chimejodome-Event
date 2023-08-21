@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">Pick</div>
        <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">

        @foreach ($users as $user)
        <li class="flex items-center py-4 px-6 hover:bg-gray-50">
            <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
            <div class="flex-1">
                <a href="{{ route('profile.index', ['user' => $user]) }}">
                    <h3 class="text-lg font-medium text-gray-800">{{ $user->name }}</h3>
                    <h3 class="text-lg font-medium text-gray-800">{{ $user->role }}</h3>
                    <img src="{{$user->image_path}}">
                </a>
                <p class="text-gray-600 text-base"></p>
            </div>
        <div class="flex justify-center items-center mt-3">
            <a href="{{route('storeOrganizeUser')}}" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Select</a>
        </div>
        </li>
        @endforeach
    </div>
</div>
</div>
@endsection
