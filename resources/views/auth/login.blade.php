<x-guest-layout>
    <div class="grid grid-cols-12 w-full h-screen overflow-hidden">
        <div class="col-span-8 bg-white flex flex-col py-20 items-center justify-center">
            <img src="KU_SubLogo_Thai.png" alt="" class="mb-[-8rem] h-[20rem] w-[20rem]">
            <img src="loginImage.png" alt="" class=" h-[30rem] w-[30rem]">
        </div>
        <div class="col-span-4 bg-[#006664]">
            <hr class="border-[#D9D9D9] border-8 my-14 ">
            <div class="flex flex-col items-center gap-10 justify-center text-white">
                <div class="span font-bold text-4xl">Welcome</div>
                <div class="span font-bold text-3xl text-center">KU Event <br> Management</div>
                <form method="POST" class="mt-4 w-[60%] " action="{{ route('login') }}">
                    @csrf

                    <!-- Username -->
                    <div>
                        <!-- <x-input-label for="email" :value="__('Email')" /> -->
                        <x-text-input id="email" placeholder="Email" class="py-3 px-5 rounded-[10rem] bg-[#D9D9D9] text-black  mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <!-- <x-input-label for="password" :value="__('Password')" /> -->
                        <x-text-input id="password" placeholder="Password" class="py-3 px-5 rounded-[10rem] bg-[#D9D9D9] text-black  mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <hr class="border-white border-1 mt-4 px-[9rem] rounded-xl ">
                    <div class="mt-4">
                        <button type="submit" class="bg-cyan-400 w-full hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded-full">Sign In</button>
                    </div>
                </form>
                <span>Don’t have an account ? <x-nav-link class="text-[#60E16D]" :href="route('register')">
                        {{ __('Register') }}
                    </x-nav-link> </span>
                <x-nav-link class="text-[#60E16D] mt-[-2rem]" :href="route('login')">
                    {{ __('About') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</x-guest-layout>