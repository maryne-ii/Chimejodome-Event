@extends('layouts.main')

@section('content')
<div class="w-full">
        <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Create New Event</h2>
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('kanban.storeComplete',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                @csrf
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Event Name</label>
    @error('name')
                    <div>
                    {{$message}}
                    </div>
    @enderror
    <input type="text" id="name" name="name" value ="{{old('name',$event->name)}}" placeholder="{{$event->name}}" required>

</div>
<div class="mb-5">
    <label for="header" class="block mb-2 font-bold text-gray-600">Header</label>

    <input type="text" id="header" name="header" value ="{{old('header',$event->header)}}" placeholder="{{$event->header}}" required>

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Detail</label>
    <input type="text" id="deteil" name="detail" value ="{{old('detail',$event->detail)}}" placeholder="{{$event->detail}}" required>

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Location</label>
    <input type="text" id="location" name="location" value ="{{old('location',$event->location)}}" placeholder="{{$event->location}}" required>

</div>
<div class="mb-5">
    <label for="organizer_total" class="block mb-2 font-bold text-gray-600">Member number</label>

    <input type="text" id="organizer_total" name="organizer_total" value ="{{old('organizer_total',$event->organizer_total)}}" placeholder="{{$event->organizer_total}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">join number</label>
    <input type="text" id="participant_total" name="participant_total" value ="{{old('participant_total',$event->participant_total)}}" placeholder="{{$event->participant_total}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">start date</label>
    <input type="date" id="start_date" name="start_date" autocomplete="off" placeholder="{{$event->start_date}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">end date</label>
    <input type="date" id="end_date" name="end_date" autocomplete="off" placeholder="{{$event->end_date}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">poster</label>
    <input type="file" id="image_path" name="image_path" >

</div>
<button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>

</div>

@endsection