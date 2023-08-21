@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
        <div class="font-bold text-3xl">Personal Info</div>
        <hr class="border-1 rounded-full mt-2 border-[#A1C77B] ">
        @if(session('success'))
                <div class="centered-message mt-5 flex items-center justify-between p-5 leading-normal text-green-600 bg-green-100 rounded-lg" role="alert">
                    <p>You profile have been updated</p>

                    <svg onclick="return this.parentNode.remove();" class="inline w-8 h-8 fill-current ml-2 hover:opacity-80 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z"/>
                    </svg>
                  </div>
        @endif
        <div class="grid grid-cols-12 mt-3">
            <div class="col-span-3 flex flex-col justify-start items-center gap-10">
                {{-- <img src="http://localhost/{{Auth::user()->profile_image ? Auth::user()->profile_image : default_peson.jpeg}}" class="rounded-full h-48 w-48" alt=""> --}}
                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-full h-48 w-48">
                <textarea readonly disabled rows="5" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-[#D9D9D9] rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your bio here...">{{Auth::user()->bio ? Auth::user()->bio : '-'}}</textarea>
            </div>
            <div class="col-span-9">
                <div class="grid grid-cols-12 px-10 py-2 gap-3">
                    <div class="col-span-4">
                        <div class="text-xl">ชื่อ - นามสกุล</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->name}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">ชั้นปี</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->year ? Auth::user()->year : '-'}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">คณะ</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->faculty ? Auth::user()->faculty : '-'}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">อีเมล</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->email}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">เบอร์</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->tel ? Auth::user()->tel : '-'}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">Line ID</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->line_account ? Auth::user()->line_account : '-'}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">Facebook</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->facebook_account ? Auth::user()->facebook_account : '-'}}" disabled readonly>
                    </div>
                    <div class="col-span-4">
                        <div class="text-xl">Instagram</div>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{Auth::user()->instagram_account ? Auth::user()->instagram_account : '-'}}" disabled readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center mt-3">
            <a href="{{route('profile.edit')}}" class="bg-[#A1C77B] px-3 py-2 rounded-3xl text-white">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
