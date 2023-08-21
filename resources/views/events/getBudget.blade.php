@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-full px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">ของบประมาณ</div>
        <hr class="border-1 rounded-full mt-5 mb-5 border-[rgb(161,199,123)] ">
        <form action="{{ route('sendRequestBudget', ['event' => $event])}}" method="GET" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <div class="grid mt-10 pt-7 place-items-center ">
                    <img class="h-[20rem]" src="http://localhost/{{$event->poster}}" alt="event poster">
                </div>
                <div class="col-span-9">
                    <div class="grid grid-cols-12 px-10 py-2 gap-3">
                        <!-- <input type="hidden" value="{Auth::user()->password" name="password"> -->
                        <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <div class="col-span-4">
                            <div class="text">ชื่อ Event</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" disabled readonly class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->name ? $event->name : ''}}" name="name">
                        </div>

                        <div class="col-span-4">
                            <div class="text">รายละเอียด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="textbox" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->detail ? $event->detail : ''}}" name="detail">
                        </div>

                        <div class="col-span-4">
                            <div class="number">จำนวนผู้จัด</div>
                        </div>
                        <div class="col-span-8">
                            <input type="number" disabled readonly class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->organizer_total ? $event->organizer_total : 0}}" name="organizer_total">
                        </div>
                        <div class="col-span-4">
                            <div class="number">จำนวนผู้เข้าร่วม</div>
                        </div>
                        <div class="col-span-8">
                            <input type="number" disabled readonly class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->participant_total ? $event->participant_total : 0}}" name="participant_total">
                        </div>
                        <div class="col-span-4">
                            <div class="text">งบที่ต้องการ</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->budget ? $event->budget : 0}}" name="budget">
                        </div>
                        <div class="col-span-4">
                            <div class="text">เลขที่บัญชี</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->bank_account_number ? $event->bank_account_number : '-'}}" name="bank_account_number">
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center mt-3">
                @if($event->user_id === null)
                <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">ยืนยัน</button>
                @else
                <p type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">คำขอได้รับการอนุมัติ !</p>
                @endif

        </form>

    </div>
</div>
</div>
@endsection
