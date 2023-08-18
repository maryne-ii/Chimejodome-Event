@extends('layouts.main')

@section('content')

<div class="w-full">
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <h2 class="text-black font-bold text-2xl uppercase mb-10">Create New Event</h2>
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-600">Event Name</label>
                    <input type="text" id="name" name="name" autocomplete="off" placeholder="Put in event name" >
                </div>

                <div>
                    <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
                    <button type="cancel" style="display: inline-block" class="block w-full bg-red-500 text-white font-bold p-4 rounded-lg">Cancel</button>
                </div>
            </form>
</div>

@endsection