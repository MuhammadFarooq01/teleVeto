<footer class="bg-transparent text-gray-600 font-bold py-14">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Logo -->
            <div class="flex flex-col items-start">
                <img src="/images/logo.png" alt="Logo" class="w-64 h-auto mb-4">
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">{{ __('footer.quick_links') }}</h3>
                <ul class="flex flex-col gap-3">
                    <li>
                        <a href="/" class="">
                            <span class="inline-flex items-center justify-center w-5 h-5 bg-gray-600 rounded-full text-white mr-1">></span>
                            {{ __('footer.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="inline-flex items-center justify-center w-5 h-5 bg-gray-600 rounded-full text-white mr-1">></span>
                            {{ __('footer.how_it_works') }}
                        </a>
                    </li>
                    <li>
                        <a href="about" class="">
                            <span class="inline-flex items-center justify-center w-5 h-5 bg-gray-600 rounded-full text-white mr-1">></span>
                            {{ __('footer.about_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="">
                            <span class="inline-flex items-center justify-center w-5 h-5 bg-gray-600 rounded-full text-white mr-1">></span>
                            {{ __('footer.contact') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">{{ __('footer.contact_info') }}</h3>
                <div class="flex items-start mb-2 gap-2">
                    <img width="25" height="25" src="/images/location.svg" alt="marker" />
                    <p>{{ __('footer.address') }}</p>
                </div>
                <div class="flex items-start mb-2 gap-2">
                    <img width="25" height="25" src="/images/mail.svg" alt="mail" />
                    <p>{{ __('footer.email') }}</p>
                </div>
            </div>

            <!-- Make an Appointment -->
            <div class="flex flex-col">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">{{ __('footer.make_appointment') }}</h3>
                <p class="mb-4 text-gray-700">{{ __('footer.download_app') }}</p>
                <div class="flex gap-4">
                    <a href="#" target="_blank"><img src="/images/playstore.png" alt="{{ __('footer.playstore') }}" class="w-36"></a>
                    <a href="#" target="_blank"><img src="/images/appstore.png" alt="{{ __('footer.appstore') }}" class="w-36"></a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="mt-12 border-t border-gray-300 pt-6 text-center">
            <p class="text-sm text-gray-500">{{ __('footer.copyright') }} <a href="https://televeto.ch" class="text-gray-900 font-semibold">{{ __('footer.website') }}</a></p>
        </div>
    </div>
</footer>
