@extends('layouts.main')

@section('content')

    <div class="px-[20rem] py-6">
        <div class="bg-white h-full px-14 py-5 rounded-3xl shadow-lg ">
                <div class="">
                    <div class="text-left text-xl font-medium pt-10 pb-5">
                        <p>Create Event</p>
                    </div>
                </div>
            <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">
            <div class="w-full">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                    <div>
                        <div>
                            @error('name')
                            <div class="text-red-600">{{'The Event name has already been taken'}}<br>{{'please choose new Event name and resubmit'}}</div>
                            @enderror
                        </div>
                        <span class="flex space-x-8 mb-8">
                        <label for="name" class="block mb-4 mt-7 font-bold text-gray-600">Event Name</label>
                        <input type="text" class="px-5 py-5 mt-6 rounded-full bg-[#D9D9D9] text-black flex-1 h-7" id="name" name="name" autocomplete="off" placeholder="Put in event name" required>
                    </span>

                        <div class="flex justify-center space-x-20">
                            <button type="submit" class="flex-1 block bg-blue-500 mt-8 text-white font-bold p-2 rounded-full">Submit</button>
                            <a href="{{route('events.index')}}" class="text-center flex-1 block bg-red-500 mt-8 text-white font-bold p-2 rounded-full">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
@endsection



