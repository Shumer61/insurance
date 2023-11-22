<header class="header">
        <a href="" class="logo">MediKe</a>
        <ul class="navlist">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#insurance">Insurance</a></li>
            <li><a href="#compare">Compare</a></li>
            <li><a href="{{ route('contact.page') }}">Contact</a></li>
            <li>
            	 @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>