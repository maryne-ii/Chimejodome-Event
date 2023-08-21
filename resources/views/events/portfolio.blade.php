@extends('layouts.main')

@section('content')

    <ul class="divide-y divide-gray-200">
        @foreach ($records as $record)
        @if((App\Models\Event::find($record->status === 1)))
        <div class="bg-white p-10 mt-8 flex flex-col items-center rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <h1 class="text-black font-bold text-5xl mb-4">Certificate</h1>
            <h1 class="text-black text-large mb-2">of Appreciation</h1>
            <h1 class="text-black text-medium mb-4">This certificate is proudly presented to </h1>
            <h1 class="text-black font-bold text-4xl mb-4">{{Auth::user()->name}}</h1>
            <h1 class="text-black text-large mb-2">for participated in</h1>
            <h1 class="text-black font-bold text-4xl mb-4">{{(App\Models\Event::find($record->event_id))->name}}</h1>
        </div>
        @endif
        @endforeach
    </ul>

@endsection
