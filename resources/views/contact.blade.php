<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - teleVeto</title>
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <div class="bg-deepNavyBlue text-lightBeige">
        <!-- Hero Section -->
        <div class="pt-10 pb-6 text-center" data-aos="fade-down">
            <h1 class="text-4xl font-bold text-brightAzure">{{ __('contact.hero_section.heading') }}</h1>
        </div>

        <!-- Divider -->
        <img src="{{ asset('images/contact-divider.svg') }}" alt="{{ __('contact.hero_section.divider_alt') }}" class="w-full h-auto" data-aos="fade-up">
    </div>

    <!-- Contact Section -->
    <div class="flex flex-col max-w-7xl mx-auto gap-5" data-aos="zoom-in">
        <h2 class="px-6 text-2xl font-bold text-gray-600">{{ __('contact.contact_section.heading_small') }}</h2>
        <h2 class="px-6 text-5xl font-bold text-brightAzure">{{ __('contact.contact_section.heading_large') }}</h2>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Map Section -->
        <div data-aos="fade-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345094354!2d-122.41941548468168!3d37.77492977975979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c2f1a3f1b%3A0x4db72f6d6d9b3e9c!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1672344441931!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-lg shadow-lg">
            </iframe>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-lg shadow-lg space-y-6" data-aos="fade-left">
            <h2 class="text-2xl font-semibold text-deepNavyBlue">{{ __('contact.form.title') }}</h2>
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('contact.form.fields.name.label') }}</label>
                    <input type="text" id="name" placeholder="{{ __('contact.form.fields.name.placeholder') }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-brightAzure focus:border-brightAzure">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('contact.form.fields.email.label') }}</label>
                    <input type="email" id="email" placeholder="{{ __('contact.form.fields.email.placeholder') }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-brightAzure focus:border-brightAzure">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">{{ __('contact.form.fields.message.label') }}</label>
                    <textarea id="message" rows="4" placeholder="{{ __('contact.form.fields.message.placeholder') }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-brightAzure focus:border-brightAzure"></textarea>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="flex flex-col w-full sm:flex-row mt-10" data-aos="flip-left">
                <button class="px-8 py-3 text-white w-full font-semibold rounded-md transition duration-500 ease-in-out bg-brightAzure hover:translate-y-3">
                    {{ __('contact.form.button') }}
                </button>
            </div>
        </div>
    </div>
    <hr>
    @include('partials.footer')
</body>
</html>
