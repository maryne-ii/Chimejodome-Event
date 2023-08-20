@extends('layouts.main')

@section('content')


<label for="name" class="block mb-2 font-bold text-gray-600">poster</label>
<img src="{{ asset('storage/' . $event->post) }}">

<div class="mb-5">
    <label for="header" class="block mb-2 font-bold text-gray-600">Header</label>

    <input type="text" id="header" name="header" value ="{{old('header','')}}" placeholder="{{$event->header}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Detail</label>
    <input type="text" id="deteil" name="detail" value ="{{old('detail','')}}" placeholder="{{$event->detail}}" >

</div>
<div class="mb-5">
    <label for="organizer_total" class="block mb-2 font-bold text-gray-600">Member number</label>

    <input type="text" id="organizer_total" name="organizer_total" value ="{{old('organizer_total','')}}" placeholder="{{$event->organizer_total}}" >

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">join number</label>
    <input type="text" id="participant_total" name="participant_total" value ="{{old('participant_total','')}}" placeholder="{{$event->participant_total}}" >

</div>
@endsection