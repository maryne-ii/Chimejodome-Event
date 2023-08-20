<nav class="bg-white border-gray-200 py-6 flex justify-between px-20 text-kuGreen">
    <div class=" flex gap-14 justify-start items-center ">
        <a href="#" class="pr-15">
            <img src="http://localhost/kuLogo.png" class="h-7 w-auto pt-2 mr-3 sm:h-12" alt="Logo">
        </a>
        <!-- <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 ml-4 sm:inline-block">
                <span>asd</span>

            </div>
        </div> -->

        <!-- {{-- <div>--}}
        {{-- <button data-collapse-toggle="mobile-menu-2" type="button"--}}
        {{-- class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"--}}
        {{-- aria-controls="mobile-menu-2" aria-expanded="true">--}}
        {{-- <span class="sr-only">Open main menu</span>--}}
        {{-- <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
        {{-- <path fill-rule="evenodd"--}}
        {{-- d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"--}}
        {{-- clip-rule="evenodd"></path>--}}
        {{-- </svg>--}}
        {{-- <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
        {{-- <path fill-rule="evenodd"--}}
        {{-- d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"--}}
        {{-- clip-rule="evenodd"></path>--}}
        {{-- </svg>--}}
        {{-- </button>--}}
        {{-- </div>--}} -->
        <a href="">
            <span>
                <a href="{{route('events.index')}}">Event List</a>
            </span>
        </a>
        <a href="">
            <span>
                <a href="{{route('events.joinList')}}">Join List</a>
            </span>
        </a>
        <a href="">
            <span>
                User list
            </span>
        </a>
    </div>
    <div class="flex justify-center items-center" id="mobile-menu-2">
        <ul class="flex flex-col justify-center items-center mr-2 mt-4 font-medium lg:flex-row  lg:mt-0 ">
            @if( Auth::check() )

            <li class="p-5">
                {{Auth::user()->name}}
            </li>
            <li class="pr-3">
                <img src="http://localhost/{{Auth::user()->profile_image ? Auth::user()->profile_image : default_peson.jpeg}}" alt="" class="h-10 w-10 rounded-full">
            </li>
            <li class="flex justify-center items-center">
                <button id="dropdownDelayButton" data-dropdown-placement="right" data-dropdown-offset-skidding="110" data-dropdown-offset-distance="-40" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="" type="button">
                    <img src="http://localhost/manuIcon1.png" alt="" class="h-10 w-10 ">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44  dark:bg-gray-700">
                    <ul class="py-2  text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>


            </li>
            @else
            <div class=" flex gap-14 justify-start items-center">
                <a href="{{route('login')}}">
                    <span>Login</span>
                </a>
                <a href="{{route('register')}}">
                    <span>Register</span>
                </a>
            </div>

            @endif
        </ul>
    </div>




</nav>