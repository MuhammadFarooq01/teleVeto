<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us - teleVeto</title>
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
</head>
@include('partials.header')
<body class="bg-lightBeige">



    <main>
        <div class="flex flex-col lg:flex-row max-w-7xl p-3 lg:px-8 mx-auto w-screen py-20">
            <!-- Text -->
            <div class="flex flex-col uppercase lg:w-1/2 ">
                <span class="font-bold text-steelBlue text-2xl mb-5 text-gray-500" data-aos="fade-down-right">{{ __('about.about_title') }}</span>
                <div class="capitalize text-[44px] xl:text-[52px] leading-[62px] font-black text-skyBlue" data-aos="fade-left">
                    <span>{{ __('about.about_subtitle') }}</span>
                </div>
                <div class="text-lightGray mt-10 normal-case text-gray-500 text-xl" data-aos="fade-up">
                    {{ __('about.about_description') }}
                </div>
            </div>

            <!-- Image -->
            <div class="flex items-center justify-center lg:justify-end mt-10 lg:mt-0 lg:w-1/2" data-aos="zoom-out-down">
                <img src="/images/hero.jpg" class="rounded-3xl h-auto max-w-[90%] sm:max-w-[70%] lg:max-w-[80%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row max-w-7xl p-3 lg:px-8 mx-auto w-screen py-20">
            <!-- Image -->
            <div class="flex items-center justify-start  mt-10 lg:mt-0 lg:w-1/2" data-aos="zoom-out-down">
                <img src="/images/dog.jpg" class="rounded-3xl h-auto max-w-[90%] sm:max-w-[70%] lg:max-w-[80%] w-full hover:translate-y-3 duration-300" alt="Doctor holding a pet" />
            </div>
            <!-- Text -->
            <div class="flex flex-col uppercase lg:w-1/2 ">
                <span class="font-bold text-steelBlue text-2xl mb-5 text-gray-500" data-aos="fade-down-right">
                    {{ __('about.vision_title') }}
                </span>
                <div class="capitalize text-[44px] xl:text-[52px] leading-[62px] font-black text-skyBlue" data-aos="fade-left">
                    <span>
                        {{ __('about.vision_subtitle') }}
                    </span>
                </div>
                <div class="text-lightGray mt-10 normal-case text-gray-500 text-xl" data-aos="fade-up">
                    {{ __('about.vision_description') }}
                </div>
            </div>
        </div>

        {{-- Parallax Start Here --}}
        <div class="bg-cover relative bg-fixed bg-center max-h-screen w-full" style="background-image: url('/images/parallax2.jpg')">
            <div class="bg-brightAzure bg-opacity-80 p-4">
                <div class="flex flex-wrap justify-center sm:justify-between max-w-7xl mx-auto w-full sm:py-20 mt-5 gap-8">
                    <!-- Years of Experience -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-up" data-aos-delay="200">
                        <img src="/images/paw.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="yearsOfExperience" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('about.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('about.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Veterinary -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-down" data-aos-delay="200">
                        <img src="/images/house.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="veterinaryCount" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('about.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('about.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Cases Completed -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-up" data-aos-delay="200">
                        <img src="/images/stethoscope.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="casesCompleted" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('about.televeto_background_experience') }}</span>
                        <span class="text-xl text-center sm:text-4xl text-white">{{ __('about.televeto_background_experience_text') }}</span>
                    </div>
                    <!-- Happy Clients -->
                    <div class="flex flex-col items-center justify-center w-56" data-aos="fade-down" data-aos-delay="200">
                        <img src="/images/heart.png" class="w-20 sm:w-32 h-auto" alt="">
                        <span id="happyClients" class="text-center text-springBud font-black text-4xl sm:text-7xl"> {{ __('about.televeto_background_experience') }}</span>
                        <span class="text-xl sm:text-4xl text-white">{{ __('about.televeto_background_experience_text') }}</span>
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
        <hr>

</body>
@include('partials.footer')
</html>
