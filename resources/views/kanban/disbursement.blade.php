@extends('layouts.main')

@section('content')
    <div class="px-[20rem] py-6">
        <div class="bg-white h-full px-14 py-5 rounded-3xl shadow-lg">
            <div class="font-bold text-3xl">ของบประมาณ</div>
            <hr class="border-1 rounded-full mt-5 mb-5 border-[rgb(161,199,123)] ">
            <form action="{{ route('kanban.disburseConfirm',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <div class="grid mt-10 pt-7 place-items-center ">
                        <img class=" flex flex-col items-center h-[20rem]" src="http://localhost/{{$event->poster}}" alt="event poster">
                    </div>
                    <div class="col-span-9">
                        <div class="grid grid-cols-12 px-10 py-2 gap-3">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id">
                            <div class="col-span-4">
                                <div class="text">ชื่อ Event</div>
                            </div>
                            <div class="col-span-8">
                                <input type="text" id="header" name="header" value ="{{old('header',$event->header)}}" placeholder="{{$event->header}}" readonly disabled class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>

                            <div class="col-span-4">
                                <div class="text">รายละเอียด</div>
                            </div>
                            <div class="col-span-8">
                                <input type="textbox" id="detail" name="detail" value="{{old('detail',$event->detail)}}" placeholder="{{$event->detail}}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>

                            <div class="col-span-4">
                                <div class="number">จำนวนผู้จัด</div>
                            </div>
                            <div class="col-span-8">
                                <input type="number" readonly disabled id="organizer_total" name="organizer_total" value ="{{old('organizer_total',$event->oranizer_total)}}" placeholder="{{$event->organizer_total}}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>
                            <div class="col-span-4">
                                <div class="number">จำนวนผู้เข้าร่วม</div>
                            </div>
                            <div class="col-span-8">
                                <input type="number" disabled readonly id="participant_total" name="participant_total" value ="{{old('participant_total',$event->participant_total)}}" placeholder="{{$event->participant_total}}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>
                            <div class="col-span-4">
                                <div class="text">งบที่ต้องการ</div>
                            </div>
                            <div class="col-span-8">
                                <input type="text" id="bank_account_number" name="bank_account_number" value ="{{old('bank_account_number',$event->bank_account_number)}}" placeholder="{{$event->bank_account_number}}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>
                            <div class="col-span-4">
                                <div class="text">เลขที่บัญชี</div>
                            </div>
                            <div class="col-span-8">
                                <input type="text" id="bank_account_number" name="bank_account_number" value ="{{old('bank_account_number',$event->bank_account_number)}}" placeholder="{{$event->bank_account_number}}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-3">
{{--                    @if($event->user_id != null)--}}
                        <button type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">ยืนยัน</button>
{{--                    @else--}}
{{--                        <p type="submit" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">คำขอได้รับการอนุมัติ !</p>--}}
{{--                @endif--}}

            </form>

        </div>
    </div>
    </div>
@endsection

