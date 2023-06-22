
<header
    class="sticky inset-x-0 top-0 z-50 border-b-2 border-gray-100 bg-[#0F4C75] dark:border-gray-800 dark:bg-green-900 py-4">
    <div class="mx-auto max-w-screen-xl px-4 py-2">
        <div class="relative flex flex-row items-center justify-between gap-8">
            <div class="text-white">
                <x-application-logo />
            </div>
            <nav aria-label="Page Nav" class="flex flex-row items-center gap-4 text-white sm:hidden">
                <button type="button" class="text-white focus:outline-none" id="hamburgerBtn">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </nav>
            
            <nav class="hidden sm:flex flex-row items-center gap-4 text-white" id="menuItems">
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <ul class="flex flex-col sm:flex-row gap-2">
                        @if (Route::has('login'))
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-semibold text-white hover:text-red dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-white hover:text-red dark:text-gray-400 dark:hover:text-white">Log
                                        in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>

    </div>
</header>
