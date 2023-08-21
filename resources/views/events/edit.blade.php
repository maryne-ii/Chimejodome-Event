@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-full px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">ลงบอร์ดกิจกรรม</div>
        <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">
        <form action="{{ route('events.update', ['event' => $event])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <!-- <div class="col-span-3 flex flex-col justify-start items-center gap-10">
                    <img src="{{Auth::user()->profile_image ? Auth::user()->profile_image : default_peson.jpeg}}" class="rounded-full h-48 w-48" alt="">
                    <textarea id="bio" rows="5" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-[#D9D9D9] rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your bio here..."></textarea>
                </div> -->
                <div class="col-span-9">
                    <div class="grid grid-cols-12 px-10 py-2 gap-3">
                        <!-- <input type="hidden" value="{Auth::user()->password" name="password"> -->
                        <input type="hidden" value="{{Auth::user()->id}}" name="id" required>
                        <div class="col-span-4">
                            <div class="text-xl">ชื่อ Event</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->name}}" name="name" required readonly>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">รูป poster</div>
                        </div>
                        <div class="col-span-8">
                            <input type="file" id="name"  class="border border-gray-300 shadow p-3 w-full rounded mb-" name="poster" required>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">ชื่อผู้จัด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->header ? $event->header : ''}}" name="header" required readonly>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">รายละเอียด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" cursor-not-allowed class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->detail ? $event->detail : ''}}" name="detail" required >
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">สถานที่</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->location ? $event->location : ''}}" name="location" required>
                        </div>
                        <div class="col-span-4">
                            <div class="number">จำนวนผู้จัด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('organizer_total',$event->organizer_total)}}" name="organizer_total" required readonly>
                        </div>
                        <div class="col-span-4">
                            <div class="number">จำนวนผู้เข้าร่วม</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('participant_total',$event->participant_total)}}" name="participant_total" required readonly>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">วันที่เริ่ม</div>
                        </div>
                        <div class="col-span-8">
                            <input type="date" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->start_date ? $event->start_date : ''}}" name="start_date" required>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">วันที่สิ้นสุด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="date" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->end_date ? $event->end_date : ''" name="end_date" required>
                        </div>
                
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Submit</button>
        </form>

    </div>
</div>
</div>
@endsection
