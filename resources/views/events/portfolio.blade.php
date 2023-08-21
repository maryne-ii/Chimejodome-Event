@extends('layouts.main')

<style type='text/css'>
    body, html {
        margin: 0;
        padding: 0;
    }
    body {
        color: black;
        display: table;
        /* font-family: Georgia, serif; */
        font-size: 24px;
        text-align: center;
    }
    .container {
        border: 20px solid tan;
        width: 750px;
        height: 563px;
        display: table-cell;
        vertical-align: middle;
    }
    .logo {
        color: tan;
    }

    .marquee {
        color: tan;
        font-size: 48px;
        margin: 20px;
    }
    .assignment {
        margin: 20px;
    }
    .person {
        border-bottom: 2px solid black;
        font-size: 32px;
        font-style: italic;
        margin: 20px auto;
        width: 400px;
    }
    .reason {
        margin: 20px;
    }
    .event {
        font-size: 32px;
        font-style: italic;
        margin: 20px auto;
        width: 400px;
    }
</style>

@section('content')

    <ul class="divide-y divide-gray-200">
        @foreach ($records as $record)
        @if((App\Models\Event::find($record->status === 0)))
        <div class="p-10 mt-8 flex flex-col items-center">
            <div class="container bg-white flex flex-col items-center">
                <div class="logo mt-4">
                    {{(App\Models\Event::find($record->event_id))->name}}
                </div>
                <div class="marquee">
                    Certificate of Completion
                </div>

                <div class="assignment">
                    This certificate is proudly presented to 
                </div>

                <div class="person">
                    {{Auth::user()->name}}
                </div>

                <div class="reason">
                    for participated in
                </div>

                <div class="event">
                    {{(App\Models\Event::find($record->event_id))->name}}
                </div>
            </div>
        </div>
        @endif
        @endforeach

        <!-- @foreach ($records as $record)
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
        @endforeach -->
    </ul>

@endsection
