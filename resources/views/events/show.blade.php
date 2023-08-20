@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg ">
        <div class="">
            <div class="grid grid-cols-12">
                <div class="col-span-6 text-left pt-10 pb-5">
                    <h1 class="">{{$event->name}}</h1>
                    <h1 class="">{{$event->header}}</h1>
                </div>
                @if( Auth::check() )
                    @if ($event->joins()->where('user_id', Auth::user()->id)->exists())
                    @else
                    <div class="col-span-6 text-right pt-10 pb-5">
                        <a class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white" href="{{route('events.join',['event' => $event])}}">
                            Join
                        </a>
                    </div>
                    @endif
                @endif
            </div>
        </div>
        <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">
        <div class="grid mt-10 pt-7 place-items-center ">
            <img class="h-[20rem]" src="http://localhost/{{$event->poster}}" alt="event poster">
        </div>
    </div>
</div>
@endsection
