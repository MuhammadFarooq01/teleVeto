{{-- header.blade.php --}}
@vite(['resources/css/app.css', 'resources/js/navbar.js', 'resources/js/app.js', 'resources/js/numberAnimation.js', 'resources/js/modal.js'])
{{-- Navbar Start Here --}}
<header class="bg-white shadow-lg sticky top-0 z-50">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-3 lg:px-8">
        <div class="flex gap-14 items-center">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">teleVeto</span>
                    <img class="h-16 w-auto" src="/images/logo.png" alt="logo">
                </a>
            </div>
            <div id="desktopMenu" class="hidden lg:flex lg:gap-x-1">
                <a href={{ __('header.home.url') }} class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.home.text') }}</a>
                <span class="border-gray-900 border-r-2 my-auto h-3"></span>
                <a href={{ __('header.how_it_works.url') }} class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.how_it_works.text') }}</a>
                <span class="border-gray-900 border-r-2 my-auto h-3"></span>
                <a href={{ __('header.about_us.url') }} class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.about_us.text') }}</a>
                <span class="border-gray-900 border-r-2 my-auto h-3"></span>
                <a href={{ __('header.contact.url') }} class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.contact.text') }}</a>
                <span class="border-gray-900 border-r-2 my-auto h-3"></span>
                <a href={{ __('header.login.url') }} data-modal-trigger aria-controls="login-modal" aria-expanded="false" class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.login.text') }}</a>
                <span class="border-gray-900 border-r-2 my-auto h-3"></span>
                <a href={{ __('header.registration.url') }} data-modal-trigger aria-controls="register-modal" aria-expanded="false" class="px-2 py-1 text-[14px] font-semibold text-gray-900 hover:text-gray-500 border-b-2 border-transparent hover:border-black duration-500">{{ __('header.registration.text') }}</a>
            </div>
        </div>

        <div class="flex lg:hidden">
            <button id="menuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">{{ __('header.open_main_menu') }}</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <div class="hidden relative lg:inline-block text-left text-sm" id="dropdown">
            <!-- Dropdown Trigger -->
            <div class="flex items-center cursor-pointer border-gray-300 border px-3 py-1" id="dropdownTrigger">
                <span class="mr-2 text-lg">{{ __('header.selectedFlag') }}</span>
                <span>{{ __('header.selectedlanguage') }}</span>
                <svg class="w-5 h-5 ml-2 transform transition-transform" id="dropdownIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>

            <!-- Dropdown Menu -->
            <div class="absolute left-0 w-full bg-white border border-gray-300 shadow-lg opacity-0 transform scale-y-0 origin-top transition-all duration-200 ease-in-out" id="dropdownMenu">
                <div class="py-1">
                    <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="en" @if (app()->getLocale() == 'en') style="display: none;" @endif>
                        <span class="mr-2 text-lg">🇬🇧</span>
                        <span>{{ __('header.english') }}</span>
                    </div>
                    <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="fr" @if (app()->getLocale() == 'fr') style="display: none;" @endif>
                        <span class="mr-2 text-lg">🇫🇷</span>
                        <span>{{ __('header.french') }}</span>
                    </div>
                    <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="de" @if (app()->getLocale() == 'de') style="display: none;" @endif>
                        <span class="mr-2 text-lg">🇩🇪</span>
                        <span>{{ __('header.german') }}</span>
                    </div>
                    <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="it" @if (app()->getLocale() == 'it') style="display: none;" @endif>
                        <span class="mr-2 text-lg">🇮🇹</span>
                        <span>{{ __('header.italian') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile menu backdrop -->
    <div id="backdrop" class="hidden fixed inset-0 z-10 bg-black bg-opacity-50 transition-opacity duration-500 ease-in-out"></div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden fixed inset-0 z-20 transform -translate-x-full transition-all duration-500 ease-in-out" role="dialog" aria-modal="true">
        <div class="fixed inset-y-0 left-0 z-20 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">teleVeto</span>
                    <img class="h-16 w-auto" src="/images/logo.png" alt="logo">
                </a>
                <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">{{ __('header.close') }}</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <!-- Navigation Links -->
                    <div class="space-y-2 py-6">
                        <a href={{ __('header.home.url') }} class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.home.text') }}</a>
                        <a href={{ __('header.how_it_works.url') }} class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.how_it_works.text') }}</a>
                        <a href={{ __('header.about_us.url') }} class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.about_us.text') }}</a>
                        <a href={{ __('header.contact.url') }} class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.contact.text') }}</a>
                        <a href={{ __('header.login.url') }} data-modal-trigger aria-controls="login-modal" aria-expanded="false" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.login.text') }}</a>
                        <a href={{ __('header.registration.url') }} data-modal-trigger aria-controls="register-modal" aria-expanded="false" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ __('header.registration.text') }}</a>
                    </div>
                    <!-- Language Selector for Mobile -->


                </div>
            </div>
            <div class="relative inline-block text-left text-sm mt-3" id="dropdown2">
                <!-- Dropdown Trigger -->
                <div class="flex items-center cursor-pointer border-gray-300 border px-3 py-1" id="dropdownTrigger2">
                    <span class="mr-2 text-lg">{{ __('header.selectedFlag') }}</span>
                    <span>{{ __('header.selectedlanguage') }}</span>
                    <svg class="w-5 h-5 ml-2 transform transition-transform" id="dropdownIcon2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <!-- Dropdown Menu -->
                <div class="absolute left-0 w-full bg-white border border-gray-300 shadow-lg opacity-0 transform scale-y-0 origin-top transition-all duration-200 ease-in-out" id="dropdownMenu2">
                    <div class="py-1">
                        <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="en" @if (app()->getLocale() == 'en') style="display: none;" @endif>
                            <span class="mr-2 text-lg">🇬🇧</span>
                            <span>{{ __('header.english') }}</span>
                        </div>
                        <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="fr" @if (app()->getLocale() == 'fr') style="display: none;" @endif>
                            <span class="mr-2 text-lg">🇫🇷</span>
                            <span>{{ __('header.french') }}</span>
                        </div>
                        <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="de" @if (app()->getLocale() == 'de') style="display: none;" @endif>
                            <span class="mr-2 text-lg">🇩🇪</span>
                            <span>{{ __('header.german') }}</span>
                        </div>
                        <div class="flex items-center p-1 hover:bg-gray-100 cursor-pointer" data-lang="it" @if (app()->getLocale() == 'it') style="display: none;" @endif>
                            <span class="mr-2 text-lg">🇮🇹</span>
                            <span>{{ __('header.italian') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div id="login-modal" data-modal-target class="hidden">
        <div class="flex items-center justify-center fixed inset-0 z-50">
            <div data-modal-close data-modal-overlay tabindex="-1" data-class-in="opacity-50" data-class-out="opacity-0" class="opacity-0 fixed inset-0 w-full z-40 transition-opacity duration-300 bg-black select-none"></div>
            <div data-modal-wrapper data-class-in="opacity-100 translate-y-0" data-class-out="opacity-0 translate-y-5" class="opacity-0 translate-y-5 w-full z-50 overflow-auto max-w-md max-h-screen scrolling-touch transition-all duration-300 bg-white flex flex-col transform shadow-xl rounded-md m-5">
                <div class="flex items-center justify-between border-b p-6">
                    <h3 class="font-bold">
                        Login
                    </h3>
                    <button data-modal-close aria-label="Close" type="button" class="text-gray-700 hover:text-black focus:text-black transition ease-in-out duration-150 ml-auto">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="relative flex gap-10 overflow-x-hidden overflow-y-auto h-full flex-grow p-5">
                    <!-- Doctor Box -->
                    <div class="flex  w-1/2 items-center justify-center text-white p-4 bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(1)">
                        <a href="https://panel.televeto.ch/doctor-login" class="flex flex-col items-center justify-center w-full h-full">
                            <img src="/images/doctor-white.svg" alt="Doctor" class="h-12 w-12 mb-2" />
                            <p class="text-center">{{ __('howitworks.doctor') }}</p>
                        </a>
                    </div>
                    <!-- Patient Box -->
                    <div class="flex  w-1/2 items-center justify-center p-4 text-white bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(2)">
                        <a href="https://panel.televeto.ch/patient-login" class="flex flex-col items-center justify-center w-full h-full">
                            <img src="/images/patient-white.svg" alt="Patient" class="h-12 w-12 mb-2" />
                            <p class="text-center">{{ __('howitworks.patient') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <div id="register-modal" data-modal-target class="hidden">
        <div class="flex items-center justify-center fixed inset-0 z-50">
            <div data-modal-close data-modal-overlay tabindex="-1" data-class-in="opacity-50" data-class-out="opacity-0" class="opacity-0 fixed inset-0 w-full z-40 transition-opacity duration-300 bg-black select-none"></div>
            <div data-modal-wrapper data-class-in="opacity-100 translate-y-0" data-class-out="opacity-0 translate-y-5" class="opacity-0 translate-y-5 w-full z-50 overflow-auto max-w-md max-h-screen scrolling-touch transition-all duration-300 bg-white flex flex-col transform shadow-xl rounded-md m-5">
                <div class="flex items-center justify-between border-b p-6">
                    <h3 class="font-bold">
                        Register
                    </h3>
                    <button data-modal-close aria-label="Close" type="button" class="text-gray-700 hover:text-black focus:text-black transition ease-in-out duration-150 ml-auto">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="relative flex gap-10 overflow-x-hidden overflow-y-auto h-full flex-grow p-5">
                    <!-- Doctor Box -->
                    <div class="flex  w-1/2 items-center justify-center text-white p-4 bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(1)">
                        <a href="https://panel.televeto.ch/doctor-register" class="flex flex-col items-center justify-center w-full h-full">
                            <img src="/images/doctor-white.svg" alt="Doctor" class="h-12 w-12 mb-2" />
                            <p class="text-center">{{ __('howitworks.doctor') }}</p>
                        </a>
                    </div>
                    <!-- Patient Box -->
                    <div class="flex  w-1/2 items-center justify-center p-4 text-white bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(2)">
                        <a href="/register" class="flex flex-col items-center justify-center w-full h-full">
                            <img src="/images/patient-white.svg" alt="Patient" class="h-12 w-12 mb-2" />
                            <p class="text-center">{{ __('howitworks.patient') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>
