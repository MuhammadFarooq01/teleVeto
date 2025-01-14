<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How it Works - teleVeto</title>
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
    <style>
        /* Add some custom styles for hiding and showing timelines */
        .timeline {
            display: none;
        }

        .timeline.active {
            display: block;
        }

    </style>
</head>
@include('partials.header')
<body>
    <body class="relative font-inter antialiased">
        <div class="bg-deepNavyBlue text-lightBeige">
            <!-- Hero Section -->
            <div class="pt-10 pb-6 text-center" data-aos="fade-down">
                <h1 class="text-4xl font-bold text-brightAzure">{{ __('howitworks.hero_title') }}</h1>
            </div>

            <!-- Divider -->
            <img src="{{ asset('images/contact-divider.svg') }}" alt="Hero Section Divider" class="w-full h-auto" data-aos="fade-up">
        </div>
        <main class="relative min-h-screen flex flex-col justify-center bg-lightBeige overflow-hidden">
            <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
                <div class="flex flex-col justify-center divide-y divide-slate-200 [&>*]:py-16">

                    <div class="w-full max-w-3xl mx-auto">
                        <div class="flex justify-between gap-5 max-w-2xl mx-auto ">
                            <!-- Doctor Box -->
                            <div class="flex flex-col w-1/2 items-center justify-center text-white p-4 bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(1)">
                                <div class="flex flex-col items-center justify-center w-full h-full">
                                    <img src="/images/doctor-white.svg" alt="Doctor" class="h-12 w-12 mb-2" />
                                    <p class="text-center">{{ __('howitworks.doctor') }}</p>
                                </div>
                            </div>
                            <!-- Patient Box -->
                            <div class="flex flex-col w-1/2 items-center justify-center p-4 text-white bg-deepNavyBlue rounded-md shadow-md hover:-translate-y-3 duration-500 cursor-pointer" onclick="showTimeline(2)">
                                <div class="flex flex-col items-center justify-center w-full h-full">
                                    <img src="/images/patient-white.svg" alt="Patient" class="h-12 w-12 mb-2" />
                                    <p class="text-center">{{ __('howitworks.patient') }}</p>
                                </div>
                            </div>
                        </div>


                        <!-- Vertical Timeline #1 -->
                        <div id="timeline1" class="timeline active mt-10">
                            <div class="-my-6">
                                <!-- Item #1 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 1</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline1_step_1_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #2 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 2</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline1_step_2_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #3 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 3</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline1_step_3_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #4 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 4</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline1_step_4_title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Timeline #2 -->
                        <div id="timeline2" class="timeline mt-10">
                            <div class="-my-6">
                                <!-- Item #1 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 1</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline2_step_1_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #2 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 2</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline2_step_2_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #3 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 3</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline2_step_3_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #4 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 4</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline2_step_4_title') }}</div>
                                    </div>
                                </div>
                                <!-- Item #5 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">Step 5</time>
                                        <div class="text-xl font-bold text-slate-900">{{ __('howitworks.timeline2_step_5_title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        @include('partials.footer')

        <script>
            function showTimeline(timelineNumber) {
                const timeline1 = document.getElementById("timeline1");
                const timeline2 = document.getElementById("timeline2");

                if (timelineNumber === 1) {
                    timeline1.classList.add("active");
                    timeline2.classList.remove("active");
                } else {
                    timeline1.classList.remove("active");
                    timeline2.classList.add("active");
                }
            }

        </script>

    </body>
</html>
