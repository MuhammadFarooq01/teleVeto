<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeleVeto</title>
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
</head>
@include('partials.header')
<body class="bg-lightBeige">
    <main>

        {{-- Hero Section Start Here --}}
        <div class="solid-gradient-hero overflow-y-hidden">
            <div class="flex flex-col lg:flex-row max-w-7xl p-3 lg:px-8 mx-auto w-screen py-10">
                <!-- Text -->
                <div class="flex flex-col uppercase lg:w-1/2 ">
                    <span class="font-bold text-steelBlue text-2xl mb-5 text-white" data-aos="fade-down-right">{{ __('home.hero_title') }}</span>
                    <div class="capitalize text-[44px] xl:text-[52px] leading-[62px] font-black text-skyBlue" data-aos="fade-left">
                        <span>{{ __('home.hero_subtitle') }}</span>
                    </div>
                    <div class="text-lightGray mt-10 normal-case text-white" data-aos="fade-up">
                        {{ __('home.hero_description') }}
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col max-w-64 sm:flex-row mt-10" data-aos="fade-up">
                        <a href={{__('home.hero_btn_link')}} class="px-8 py-3 text-white font-semibold rounded-md transition duration-500 ease-in-out bg-brightAzure hover:translate-y-3 ">
                            {{ __('home.hero_btn') }}
                            <span class="inline-flex items-center justify-center w-5 h-5 bg-white rounded-full text-[#4BA4E9] ml-1">></span>
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="flex items-center justify-center lg:justify-end mt-10 lg:mt-0 lg:w-1/2" data-aos="zoom-out-down">
                    <img src="/images/hero.jpg" class="rounded-3xl h-auto max-w-[90%] sm:max-w-[70%] lg:max-w-[80%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
                </div>
            </div>

            {{-- SVG Divider Start here --}}
            <img src="{{ asset('images/hero-section-divider.svg') }}" alt="Hero Section Divider" class="w-full h-full">
            {{-- SVG Divider End here --}}

        </div>
        {{-- Hero Section End Here --}}


        <div class="flex justify-center items-center p-4 pb-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-7xl">
                <!-- Card 1 -->
                <div class="shadow-lg rounded-lg overflow-hidden border max-w-[425px] border-gray-200" data-aos="fade-down-right">
                    <img src="/images/card1.png" alt="Card 1 Image" class="w-full h-48 object-contain">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold">{{ __('home.card1_title') }}</h2>
                        <p class="text-gray-600 mt-2">{{ __('home.card1_text') }}</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="shadow-lg rounded-lg overflow-hidden border max-w-[425px] border-gray-200" data-aos="zoom-out-down">
                    <img src="/images/card2.png" alt="Card 2 Image" class="w-full h-48 object-contain">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold">{{ __('home.card2_title') }}</h2>
                        <p class="text-gray-600 mt-2">{{ __('home.card2_text') }}</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="shadow-lg rounded-lg col-span-1 sm:col-span-2 lg:col-span-1 max-w-[425px] sm:mx-auto overflow-hidden border border-gray-200" data-aos="fade-down-left">
                    <img src="/images/card3.png" alt="Card 3 Image" class="w-full h-48 object-contain">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold">{{ __('home.card3_title') }}</h2>
                        <p class="text-gray-600 mt-2">{{ __('home.card3_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Parallax Start Here  --}}
        <div class="bg-cover relative bg-fixed  bg-center max-h-screen w-full" style="background-image: url('/images/parallax1.jpg')">
            <div class="bg-brightAzure bg-opacity-80 p-4">
                <div class="flex flex-col sm:flex-row max-w-7xl h-auto mx-auto w-full sm:py-20 mt-5">
                    <!-- Text -->
                    <div class="flex flex-col uppercase lg:w-1/2 ">
                        <span class="font-bold text-steelBlue text-4xl max-w-lg mb-5 text-white" data-aos="fade-down-right">{{ __('home.certified_veterinarians_title') }}.</span>
                        <div class="text-lightGray mt-10 text-lg normal-case max-w-lg text-white" data-aos="fade-up">
                            {{ __('home.certified_veterinarians_text') }}
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="flex items-start justify-start sm:justify-start md:justify-center lg:justify-end mt-10 lg:mt-0 lg:w-1/2" data-aos="zoom-out-down">
                        <img src="/images/cat.png" class="rounded-3xl h-auto max-w-[50%] lg:max-w-[60%] w-full hover:-translate-y-5 duration-300" alt="Picture of cat" />
                    </div>
                </div>
            </div>
            <div class="absolute left-10 -top-3 sm:left-20 p-2 bg-brightAzure rounded-full">
                <svg height="32px" width="32px" class="w-8 h-8 text-white hover:text-gray-400 transition-colors duration-300" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48.839 48.839" xml:space="preserve">
                    <g>
                        <path d="M39.041,36.843c2.054,3.234,3.022,4.951,3.022,6.742c0,3.537-2.627,5.252-6.166,5.252
                               c-1.56,0-2.567-0.002-5.112-1.326c0,0-1.649-1.509-5.508-1.354c-3.895-0.154-5.545,1.373-5.545,1.373
                               c-2.545,1.323-3.516,1.309-5.074,1.309c-3.539,0-6.168-1.713-6.168-5.252c0-1.791,0.971-3.506,3.024-6.742
                               c0,0,3.881-6.445,7.244-9.477c2.43-2.188,5.973-2.18,5.973-2.18h1.093v-0.001c0,0,3.698-0.009,5.976,2.181
                               C35.059,30.51,39.041,36.844,39.041,36.843z M16.631,20.878c3.7,0,6.699-4.674,6.699-10.439S20.331,0,16.631,0
                               S9.932,4.674,9.932,10.439S12.931,20.878,16.631,20.878z M10.211,30.988c2.727-1.259,3.349-5.723,1.388-9.971
                               s-5.761-6.672-8.488-5.414s-3.348,5.723-1.388,9.971C3.684,29.822,7.484,32.245,10.211,30.988z M32.206,20.878
                               c3.7,0,6.7-4.674,6.7-10.439S35.906,0,32.206,0s-6.699,4.674-6.699,10.439C25.507,16.204,28.506,20.878,32.206,20.878z
                                M45.727,15.602c-2.728-1.259-6.527,1.165-8.488,5.414s-1.339,8.713,1.389,9.972c2.728,1.258,6.527-1.166,8.488-5.414
                               S48.455,16.861,45.727,15.602z" fill="currentColor" />
                    </g>
                </svg>
            </div>

        </div>
        {{-- Parallax End Here  --}}

        <div class="flex flex-col p-4 lg:flex-row max-w-7xl py-10 sm:py-20 mx-auto w-screen ">
            <!-- Image -->
            <div class="flex items-center justify-start lg:w-1/3" data-aos="zoom-out-down">
                <img src="/images/cat2.jpg" class="rounded-3xl h-auto max-w-[60%] sm:max-w-[30%] lg:max-w-[70%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
            </div>

            <!-- Text -->
            <div class="flex flex-col uppercase lg:w-1/2 ">
                <div class="capitalize text-[44px] xl:text-[52px] leading-[62px] font-black text-skyBlue" data-aos="fade-left">
                    <span> {{ __('home.finest_four_legged_care_title') }} </span>
                </div>
                <div class="text-lightGray mt-10 normal-case text-gray-500 text-xl" data-aos="fade-up">
                    {{ __('home.finest_four_legged_care_text') }}
                </div>

                <!-- Buttons -->
                <div class="flex flex-col max-w-64 sm:max-w-full gap-10 sm:flex-row mt-10" data-aos="fade-up">
                    <img src="/images/logo.png" class="h-auto w-32" alt="">
                    <button onclick="window.location.href='{{ __('home.finest_four_legged_care_btn_link') }}';" class="px-8 py-3 text-white font-semibold rounded-md transition duration-500 ease-in-out bg-brightAzure hover:translate-y-3 ">
                        {{ __('home.finest_four_legged_care_btn') }}
                        <span class="inline-flex items-center justify-center w-5 h-5 bg-white rounded-full text-[#4BA4E9] ml-1">></span>
                    </button>
                </div>
            </div>
        </div>


        <div class="flex flex-col gap-10 p-4 lg:flex-row max-w-7xl py-10 sm:py-20 mx-auto w-screen ">
            <!-- Text -->
            <div class="flex flex-col uppercase lg:w-1/2 ">
                <div class="capitalize text-[44px] xl:text-[52px] leading-[62px] font-black text-skyBlue" data-aos="fade-left">
                    <span> {{ __('home.animal_teleconsultation_benefits_title') }}</span>
                </div>
                <div class="text-lightGray mt-10 normal-case text-gray-500 text-xl" data-aos="fade-up">
                    {{ __('home.animal_teleconsultation_benefits_text') }}
                </div>

                <!-- Buttons -->
                <div class="flex flex-col max-w-64 sm:max-w-full gap-10 sm:flex-row mt-10" data-aos="fade-up">
                    <button onclick="window.location.href='{{ __('home.animal_teleconsultation_benefits_btn_link') }}';" class="px-8 py-3 text-white font-semibold rounded-md transition duration-500 ease-in-out bg-brightAzure hover:translate-y-3 ">
                        {{ __('home.animal_teleconsultation_benefits_btn') }}
                        <span class="inline-flex items-center justify-center w-5 h-5 bg-white rounded-full text-[#4BA4E9] ml-1">></span>
                    </button>
                </div>
            </div>

            <!-- Image -->
            <div class="flex gap-10 items-center justify-start lg:w-1/2" data-aos="zoom-out-down">
                <img src="/images/doctor2.jpg" class="rounded-3xl h-auto max-w-[60%] sm:max-w-[30%] lg:max-w-[70%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
                <img src="/images/doctor1.jpg" class="rounded-3xl h-auto max-w-[60%] sm:max-w-[30%] lg:max-w-[70%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
            </div>
        </div>

        {{-- Parallax Start Here --}}
        <div class="bg-cover relative bg-fixed bg-center max-h-screen w-full" style="background-image: url('/images/parallax2.jpg')">
            <div class="bg-brightAzure bg-opacity-80 p-4">
                <div class="flex flex-wrap justify-center sm:justify-between max-w-7xl mx-auto w-full sm:py-20 mt-5 gap-8">
                    <!-- Years of Experience -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-up" data-aos-delay="200">
                        <img src="/images/paw.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="yearsOfExperience" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('home.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('home.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Veterinary -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-down" data-aos-delay="200">
                        <img src="/images/house.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="veterinaryCount" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('home.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('home.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Cases Completed -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-up" data-aos-delay="200">
                        <img src="/images/stethoscope.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="casesCompleted" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('home.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('home.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Happy Clients -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-down" data-aos-delay="200">
                        <img src="/images/heart.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="happyClients" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('home.televeto_background_experience') }}</span>
                        <span class="text-xl sm:text-4xl text-white">{{ __('home.televeto_background_experience_text') }}</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- Parallax End Here --}}

        <div class="flex flex-col justify-between items-center p-4 pb-10 gap-10 py-10 md:py-20">
            <h2 class="font-bold text-3xl text-gray-600">{{ __('home.veterinary_team_title') }}</h2>
            <h2 class="font-bold text-5xl text-center text-brightAzure">{{ __('home.veterinary_team_subtitle') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-14 max-w-7xl">
                <!-- Card 1 -->
                <div class="rounded-lg overflow-hidden  max-w-[425px]" data-aos="zoom-out-down">
                    <img src="/images/Dr-damian.jpg" alt="Card 2 Image" class="hover:-translate-y-2 duration-300 w-auto h-96 mx-auto object-contain  rounded-xl">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold">Dr. Damian Doe</h2>
                        <p class="text-gray-600 font-bold">Suisse</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="rounded-lg overflow-hidden  max-w-[425px] " data-aos="zoom-out-up">
                    <img src="/images/Dr-barron.jpg" alt="Card 2 Image" class="hover:-translate-y-2 duration-300 w-auto h-96 mx-auto object-contain  rounded-xl">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold"> Dr. Barron Doe</h2>
                        <p class="text-gray-600 font-bold">Germany</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="rounded-lg col-span-1 sm:col-span-2 lg:col-span-1 max-w-[425px] sm:mx-auto overflow-hidden" data-aos="zoom-out-down">
                    <img src="/images/Dr-caspar.jpg" alt="Card 3 Image" class="hover:-translate-y-2 duration-300 w-auto h-96 mx-auto object-contain  rounded-xl">
                    <div class="p-4">
                        <h2 class="text-brightAzure text-xl font-semibold">Dr. Caspar Doe</h2>
                        <p class="text-gray-600 font-bold">France</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <hr>



</body>
@include('partials.footer')
</html>
