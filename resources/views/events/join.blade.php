@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl mt-2">Information</div>
        <hr class="border-1 rounded-full mt-2 mb-2 border-[rgb(161,199,123)] ">
        @if( Auth::check() )
        <form action="{{ route('events.storeJoinUser', ['event' => $event])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <!-- <div class="col-span-3 flex flex-col justify-start items-center gap-10">
                    <img src="{{Auth::user()->profile_image ? Auth::user()->profile_image : default_peson.jpeg}}" class="rounded-full h-48 w-48" alt="">
                    <textarea id="bio" rows="5" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-[#D9D9D9] rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your bio here..."></textarea>
                </div> -->
                <div class="col-span-9 mt-5">
                    <div class="grid grid-cols-12 px-10 py-2 gap-3">
                        <!-- <input type="hidden" value="{Auth::user()->password" name="password"> -->
                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                        <input type="hidden" value="{{$event->id}}" name="event_id">

                        <div class="col-span-4">
                            <div class="text-xl">ชื่อ-นามสกุล</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text"  value="{{Auth::user()->name}}" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value='{{Auth::user()->year}}' name="name">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">ชั้นปี</div>
                        </div>
                        <div class="col-span-8">
                        <input type="number" value="{{Auth::user()->year}}" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="header">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">คณะ</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" value="{{Auth::user()->faculty}}" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="header">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">อีเมล</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" value="{{Auth::user()->email}}" id="disabled-input-2" aria-label="disabled input 2" cursor-not-allowed class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="detail" >
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">เบอร์</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" value="{{Auth::user()->tel}}" id="disabled-input-2" aria-label="disabled input 2" cursor-not-allowed class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="detail" >
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">อัพโหลด รูปภาพ</div>
                        </div>
                        <div class="col-span-8">
                            <input type="file" id="name"  class="border border-gray-300 shadow p-3 w-full rounded mb-" name="image_for_event">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <button type="submit" class="bg-[#A1C77B] px-6 py-2 rounded-3xl mt-10  text-white">Submit</button>
        </form>
        @endif

    </div>
</div>
</div>
@endsection