@extends('layouts.main')

@section('content')
<x-guest-layout>
    <div class="px-[20rem] py-6">
        <div class="bg-white h-[36rem] px-14 py-5 rounded-3xl shadow-lg">
            <div class="span font-bold text-4xl mb-4">Register</div>

            <hr class="border-1 rounded-full mt-2 border-[rgb(161,199,123)] ">
            <form method="POST" class="flex flex-col items-center justify-center mt-4 " action="{{ route('addStaff') }}">
                @csrf

                <!-- Name -->
                <input type="hidden" name="role" value="1">
                <div>
                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
                    <x-text-input id="name" placeholder="Name" class="py-3 px-5 rounded-xl bg-[#D9D9D9] text-black  mt-4 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                    <x-text-input id="email" placeholder="Email" class="py-3 px-5 rounded-xl bg-[#D9D9D9] text-black  mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->
                    <x-text-input id="tel" placeholder="tel" class="py-3 px-5 rounded-xl bg-[#D9D9D9] text-black  mt-1 w-full" type="string" name="tel" required autocomplete="true" />
                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->
                    <x-text-input id="password" placeholder="Password" class="py-3 px-5 rounded-xl bg-[#D9D9D9] text-black  mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

                    <x-text-input id="password_confirmation" placeholder="Confirm password" class="py-3 px-5 rounded-xl bg-[#D9D9D9] text-black  mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <hr class="border-white border-1 mt-8 mb-8 px-[9rem] rounded-xl ">

                <div class="flex items-center justify-center mt-4">
                    <button type="submit" class="bg-cyan-400 w-full hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded-full">Register</button>

                    <!-- <x-primary-button class="">
                            {{ __('Register') }}
                        </x-primary-button> -->
                </div>
                <!-- <a class="underline mx-20 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a> -->
            </form>
        </div>
    </div>
    </div>
    </div>
</x-guest-layout>
@endsection