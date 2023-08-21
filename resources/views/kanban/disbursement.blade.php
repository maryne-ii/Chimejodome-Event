@extends('layouts.main')

@section('content')
<div class="bg-white p-10 mt-8 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
    <form action="{{ route('kanban.disburseConfirm',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
    <label for="name" class="block mb-2 font-bold text-gray-600">Poster</label>

    <img class=" flex flex-col items-center h-[20rem]" src="http://localhost/{{$event->poster}}" alt="event poster">

    <!-- <div class="flex space-x-8 mb-5">
        <div class="w-40">
            <label for="header" class="block mb-2 font-bold text-gray-600">Header</label>
            <label for="detail" class="block mb-2 font-bold text-gray-600">Detail</label>
            <label for="organizer_total" class="block mb-2 font-bold text-gray-600">Member number</label>
            <label for="participant_total" class="block mb-2 font-bold text-gray-600">Join number</label>
            <label for="budget" class="block mb-2 font-bold text-gray-600">Budget Requirement</label>
            <label for="bank_account_number" class="block mb-2 font-bold text-gray-600">Bank</label>
        </div>
        <div class="flex-1">
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="header" name="header"
                value="{{ old('header', $event->header) }}" placeholder="{{ $event->header }}" readonly>
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="detail" name="detail"
                value="{{ old('detail', $event->detail) }}" placeholder="{{ $event->detail }}" readonly>
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="organizer_total" name="organizer_total"
                value="{{ old('organizer_total', $event->organizer_total) }}" placeholder="{{ $event->organizer_total }}" readonly>
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="participant_total" name="participant_total"
                value="{{ old('participant_total', $event->participant_total) }}" placeholder="{{ $event->participant_total }}" readonly>
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="budget" name="budget"
                value="{{ old('budget', $event->budget) }}" placeholder="{{ $event->budget }}">
            <input type="text" class=" input-field mb-2 py-2 px-3 rounded-full bg-[#D9D9D9] text-black h-8" id="bank_account_number" name="bank_account_number"
                value="{{ old('bank_account_number', $event->bank_account_number) }}" placeholder="{{ $event->bank_account_number }}">
        </div>
    </div> -->

    <div class="flex space-x-8 mb-5">        
        <label for="header" class="block mb-2 font-bold text-gray-600 w-40">Header</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="header" name="header" value ="{{old('header',$event->header)}}" placeholder="{{$event->header}}" readonly>
    </div>
    
    <div class="flex space-x-8 mb-5">
        <label for="name" class="block mb-2 font-bold text-gray-600 w-40">Detail</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="deteil" name="detail" value ="{{old('detail',$event->detail)}}" placeholder="{{$event->detail}}" readonly>
    </div>

    <div class="flex space-x-8 mb-5">
        <label for="organizer_total" class="block mb-2 font-bold text-gray-600 w-40">Member number</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="organizer_total" name="organizer_total" value ="{{old('organizer_total',$event->oranizer_total)}}" placeholder="{{$event->organizer_total}}" readonly>
    </div>

    <div class="flex space-x-8 mb-5">
        <label for="name" class="block mb-2 font-bold text-gray-600 w-40">join number</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="participant_total" name="participant_total" value ="{{old('participant_total',$event->participant_total)}}" placeholder="{{$event->participant_total}}" readonly>
    </div>

    <div class="flex space-x-8 mb-5">
        <label for="name" class="block mb-2 font-bold text-gray-600 w-40">Budget Requirement</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="budget" name="budget" value ="{{old('budget',$event->budget)}}" placeholder="{{$event->budget}}" >
    </div>

    <div class="flex space-x-8 mb-5">
        <label for="name" class="block mb-2 font-bold text-gray-600 w-40">Bank</label>
        <input type="text" class="py-2 px-3 rounded-full bg-[#D9D9D9] text-black flex-1 h-8"
        id="bank_account_number" name="bank_account_number" value ="{{old('bank_account_number',$event->bank_account_number)}}" placeholder="{{$event->bank_account_number}}" >
    </div>
    
    <div class="flex justify-center">
        <button type="submit" class="flex-1 block bg-blue-500 mt-8 text-white font-bold p-2 rounded-full">Submit</button>
    </div>
</div>
@endsection