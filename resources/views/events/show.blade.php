@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-full px-14 py-5 rounded-3xl shadow-lg ">
        <div class="">
            <div class="flex flex-row justify-between">
                <div class="col-span-6 text-left text-xl font-medium pt-10 pb-5">
                        <p>{{$event->name}}</p>
                </div>
                <div>
                @if( Auth::check() )
                    @if ($event->joins()->where('user_id', Auth::user()->id)->exists())
                    @elseif ($event->organizes()->where('user_id', Auth::user()->id)->exists())
                        @endif
                    @if(Auth::user()->role === 2)
                    <div class="col-span-6 text-right pt-10 pb-5">
                        <a class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white" href="{{route('events.join',['event' => $event])}}">
                            Join
                        </a>
                    </div>
                            @endif
                @endif
                </div>
            </div>
        </div>
        <hr class="border-1 rounded-full mb-3 mt-2 border-[rgb(161,199,123)] ">
        <div class="w-full">

        <div class="grid grid-cols-12 ">
            <div class="col-span-4">
                <img class="h-80 w-100" src="{{env('APP_URL')."/".$event->poster}}" alt="event poster">
            </div>
            <div class="col-span-8 break-all ml-4">
                <ul class="divide-y divide-gray-200">
                    <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                        <div class="col-span-4">
                            <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Creator</h3>
                        </div>
                        <div class="col-span-8 flex items-center justify-center">
                            <p class="text-xs font-medium text-gray-800">{{ $event->header }}</p>
                        </div>
                    </li>
                        <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                            <div class="col-span-4 ">
                                    <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Event detail</h3>
                            </div>
                            <div class="col-span-8 flex items-center justify-center">
                                <p class="text-xs font-medium text-gray-800 ">{{ $event->detail }}</p>
                            </div>

                        </li>
                    @if(Auth::user()->role === 2)
                    <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                        <div class="col-span-4">
                            <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Location</h3>
                        </div>
                        <div class="col-span-8 flex items-center justify-center">
                            <p class="text-xs font-medium text-gray-800">{{ $event->location }}</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                        <div class="col-span-4">
                            <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Start date</h3>
                        </div>
                        <div class="col-span-8 flex items-center justify-center">
                            <p class="text-xs font-medium text-gray-800">{{ $event->start_date }}</p>
                        </div>
                    </li>
                    <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                        <div class="col-span-4">
                            <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">End date</h3>
                        </div>
                        <div class="col-span-8 flex items-center justify-center">
                            <p class="text-xs font-medium text-gray-800">{{ $event->end_date }}</p>
                        </div>
                    </li>
                    @endif
                    @if(Auth::user()->role === 1)
                    <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                        <div class="col-span-4">
                            <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Budget</h3>
                        </div>
                        <div class="col-span-8 flex items-center justify-center">
                            <p class="text-xs font-medium text-gray-800">{{ $event->budget }}</p>
                        </div>
                    </li>
                        <li class="grid grid-cols-12  justify-items-center py-4 px-6 hover:bg-gray-50">
                            <div class="col-span-4">
                                <h3 class="text-sm font-medium text-gray-800 px-2 py-1  text-white text-center bg-[#A1C77B] rounded-md">Bank account</h3>
                            </div>
                            <div class="col-span-8 flex items-center justify-center">
                                <p class="text-xs font-medium text-gray-800">{{ $event->bank_account_number }}</p>
                            </div>
                        </li>
                        @endif

                </ul>
            </div>

        </div>
        </div>
    </div>
</div>
@endsection
