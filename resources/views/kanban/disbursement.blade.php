@extends('layouts.main')

@section('content')

<form action="{{ route('kanban.disburseConfirm',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
<label for="name" class="block mb-2 font-bold text-gray-600">poster</label>

<div class="mb-5">
    <img class="h-[20rem]" src="http://localhost/{{$event->poster}}" alt="event poster">

    <label for="header" class="block mb-2 font-bold text-gray-600">Header</label>
    <input type="text" id="header" name="header" value ="{{old('header',$event->header)}}" placeholder="{{$event->header}}" readonly>

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Detail</label>
    <input type="text" id="deteil" name="detail" value ="{{old('detail',$event->detail)}}" placeholder="{{$event->detail}}" readonly>

</div>
<div class="mb-5">
    <label for="organizer_total" class="block mb-2 font-bold text-gray-600">Member number</label>

    <input type="text" id="organizer_total" name="organizer_total" value ="{{old('organizer_total',$event->oranizer_total)}}" placeholder="{{$event->organizer_total}}" readonly>

</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">join number</label>
    <input type="text" id="participant_total" name="participant_total" value ="{{old('participant_total',$event->participant_total)}}" placeholder="{{$event->participant_total}}" readonly>

</div>

<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Budget Requirement</label>
    <input type="text" id="budget" name="budget" value ="{{old('budget',$event->budget)}}" placeholder="{{$event->budget}}" >

</div>

<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Bank</label>
    <input type="text" id="bank_account_number" name="bank_account_number" value ="{{old('bank_account_number',$event->bank_account_number)}}" placeholder="{{$event->bank_account_number}}" >

</div>
<button type="submit" class="flex-1 block bg-blue-500 mt-8 text-white font-bold p-2 rounded-full">Submit</button>
@endsection