<nav class="bg-[#F7F9FB] border-gray-200 px-2 sm:px-4 py-2.5 rounded shadow-lg">
    <div class="sm:container sm:px-10 flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('logo.svg') }}"
                class="w-6 h-6 mr-3 md:h-20 md:w-20 xs:w-14 xs:h-14 lg:w-14 lg:h-14" />
            <span class="self-center text-xl md:text-3xl lg:text-2xl font-semibold whitespace-nowrap">LiveScore</span>
        </a>
        <div class="flex items-center lg:order-2">
            @if(Auth::check())
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center justify-center p-2 md:text-2xl lg:text-lg text-sm xs:text-lg text-gray-500 rounded cursor-pointer">
                    <img src="{{ asset('assets/img/default_avatar.png') }}"
                        class="px-2 w-[50px] xs:w-16 md:w-20 lg:w-14">
                    {{ Auth::user()->name }}
                </button>
            @else
                <a href="{{ route('login') }}"
                    class="py-2 px-4 rounded-md bg-[#fee74c] hover:text-white hover:bg-slate-600 font-bold">
                    Login
                </a>
            @endif

            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                id="language-dropdown-menu">
                <ul class="py-1" role="none">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-600 hover:text-white"
                            role="menuitem">
                            <i class="fa-sharp fa-solid fa-gear"></i>
                            <div class="inline-flex items-center">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="px-4 py-2 text-sm text-gray-700 hover:bg-slate-600 hover:text-white">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-language-select" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-[#fee74c] focus:outline-none focus:ring-2 focus:ring-gray-200  "
                aria-controls="mobile-menu-language-select" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 "
            id="mobile-menu-language-select">
            <ul
                class="flex flex-col p-4 mt-4 border bg-[#fee74c] border-gray-100 rounded-lg lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium lg:border-0 lg:bg-white">
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4  rounded hover:bg-slate-600 hover:text-white lg:hover:bg-transparent lg:hover:text-[#fee74c] lg:p-0 lg:text-md font-bold text-slate-600  ">Mobile
                        Legends</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4  rounded hover:bg-slate-600 hover:text-white lg:hover:bg-transparent lg:hover:text-[#fee74c] lg:p-0 lg:text-md font-bold text-slate-600  ">PUBG</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4  rounded hover:bg-slate-600 hover:text-white lg:hover:bg-transparent lg:hover:text-[#fee74c] lg:p-0 lg:text-md font-bold text-slate-600  ">Free
                        Fire</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4  rounded hover:bg-slate-600 hover:text-white lg:hover:bg-transparent lg:hover:text-[#fee74c] lg:p-0 lg:text-md font-bold text-slate-600  ">League
                        of Legends</a>
                </li>
            </ul>
        </div>
    </div>
</nav>