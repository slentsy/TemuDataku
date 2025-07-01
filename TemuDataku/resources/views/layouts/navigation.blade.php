<nav x-data="{ open: false }" class="bg-[#FFFFFF] border-b border-gray-100 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between h-18">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('aboutUs') }}">
                        <img src="{{ asset('images/temudataku-1.png') }}" alt="TemuDataku Logo" class="block h-20 w-auto">
                    </a>
                </div>

                <!-- About Us -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('aboutUs')" :active="request()->routeIs('aboutUs')">
                        {{ __('About Us') }}
                    </x-nav-link>
                </div>

                <!-- Mentoring Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                    <x-nav-link :href="route('mentoring')" :active="request()->routeIs('mentoring')">
                        {{ __('Mentoring') }}
                    </x-nav-link>
                    @else
                    <x-nav-link :href="route('register')" :active="false">
                        {{ __('Mentoring') }}
                    </x-nav-link>
                    @endauth
                </div>

                <!-- Practice -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                    <x-nav-link :href="route('practice')" :active="request()->routeIs('practice')">
                        {{ __('Practice') }}
                    </x-nav-link>
                    @else
                    <x-nav-link :href="route('register')" :active="false">
                        {{ __('Practice') }}
                    </x-nav-link>
                    @endauth
                </div>

                <!-- Bootcamp -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                    <x-nav-link :href="route('bootcamp')" :active="request()->routeIs('bootcamp')">
                        {{ __('Bootcamp') }}
                    </x-nav-link>
                    @else
                    <x-nav-link :href="route('register')" :active="false">
                        {{ __('Bootcamp') }}
                    </x-nav-link>
                    @endauth
                </div>
                
            </div>

            <!-- Settings Dropdown -->
            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-[#078450] focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->nama }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>


                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth

            {{-- Login Register--}}
            @guest
            <div class="grid grid-cols-2 sm:ms-6 mt-7">
                <div>
                    <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-sans font-black leading-4 text-black hover:text-[#035D37] focus:outline-none transition ease-in-out duration-150">
                        {{ __('Log In') }}
                    </a>
                </div>
                <div>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-sans font-black leading-4 rounded-[20px] text-white bg-[#078450] hover:bg-[#035D37] focus:outline-none transition ease-in-out duration-150">
                        {{ __('Register') }}
                    </a>
                </div> 
            </div>
            @endguest

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 mx-8">
            <x-responsive-nav-link :href="route('aboutUs')" :active="request()->routeIs('aboutUs')">
                {{ __('AboutUs') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600 mx-8">
            <div class="px-4">
            @if (Auth::check())
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->nama}}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            @endif
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>