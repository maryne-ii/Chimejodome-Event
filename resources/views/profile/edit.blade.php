@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">Edit Personal Info</div>
        <hr class="border-1 rounded-full mt-2 border-[#A1C77B] ">
        <form action="{{ route('profile.update', ['user' => $user])}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="grid grid-cols-12 mt-3">
                <div class="col-span-3 flex flex-col justify-start items-center gap-10">
                    <img src="http://localhost/{{Auth::user()->profile_image ? Auth::user()->profile_image : default_peson.jpeg}}" class="rounded-full h-48 w-48" alt="">
                    <input type="file" class="border border-gray-300 shadow p-3 w-full text-xs rounded-full " name="profile_image">
                    <textarea value="{{Auth::user()->bio ? Auth::user()->bio : ''}}" name="bio" rows="5" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-[#D9D9D9] rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your bio here..."></textarea>
                </div>
                <div class="col-span-9">
                    <div class="grid grid-cols-12 px-10 py-2 gap-3">
                        <!-- <input type="hidden" value="{Auth::user()->password" name="password"> -->
                        <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <div class="col-span-4">
                            <div class="text-xl">ชื่อ - นามสกุล</div>
                        </div>
                        <div class="col-span-8">
                            @error('name')
                                <div class="text-red-600 display-absolute">{{$message}}</div>
                            @enderror
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->name}}" name="name">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">ชั้นปี</div>
                        </div>
                        <div class="col-span-8">
                            <input type="number" min="1" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->year ? Auth::user()->year : 1}}" name="year">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">คณะ</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->faculty ? Auth::user()->faculty : '-'}}" name="faculty">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">อีเมล</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" cursor-not-allowed class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->email}}" name="email" readonly>
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">เบอร์</div>
                        </div>
                        <div class="col-span-8">
                            @error('tel')
                                <div class="text-red-600 display-absolute">{{'This field must be an integer'}}</div>
                            @enderror
                            <input type="tel" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->tel ? Auth::user()->tel : '-'}}" name="tel">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">Line ID</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->line_account ? Auth::user()->line_account : '-'}}" name="line_account">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">Facebook</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->facebook_account ? Auth::user()->facebook_account : '-'}}" name="facebook_account">
                        </div>
                        <div class="col-span-4">
                            <div class="text-xl">Instagram</div>
                        </div>
                        <div class="col-span-8">
                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->instagram_account ? Auth::user()->instagram_account : '-'}}" name="instagram_account">
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
