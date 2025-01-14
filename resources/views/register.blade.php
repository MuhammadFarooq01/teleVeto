<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon">
    <script>
        // JavaScript to trigger file input for insurance card and passport images
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }

    </script>
</head>
@include('partials.header')

<body class="bg-lightBeige">

    <div class="container mx-auto p-4 " data-aos="fade-down">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-center text-deepNavyBlue mb-4">{{ __('register.hero_section.heading') }}</h2>
            <p class="text-center text-deepNavyBlue mb-6">{{ __('register.hero_section.sub_heading') }}</p>

            <form action="#" method="POST">
                <!-- Insurance Radio Buttons -->
                <div class="mb-4">
                    <label class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.insurance.label') }}</label>
                    <div class="flex items-center space-x-4">
                        <label>
                            <input type="radio" name="insurance" value="yes" class="mr-2"> {{ __('register.form.insurance.options.yes') }}
                        </label>
                        <label>
                            <input type="radio" name="insurance" value="no" class="mr-2"> {{ __('register.form.insurance.options.no') }}
                        </label>
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.email.label') }}</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure" placeholder="{{ __('register.form.email.placeholder') }}">
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.phone.label') }}</label>
                    <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure" placeholder="{{ __('register.form.phone.placeholder') }}">
                </div>

                <!-- Select Canton -->
                <div class="mb-4">
                    <label for="canton" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.canton.label') }}</label>
                    <select id="canton" name="canton" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure">
                        <option value="">{{ __('register.form.canton.placeholder') }}</option>
                        @foreach (__('register.form.canton.options') as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Date of Birth -->
                <div class="mb-4">
                    <label for="dob" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.dob.label') }}</label>
                    <input type="date" id="dob" name="dob" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.password.label') }}</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure">
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="confirm-password" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.confirm_password.label') }}</label>
                    <input type="password" id="confirm-password" name="confirm_password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure">
                </div>

                <!-- Insurance Number -->
                <div class="mb-4">
                    <label for="insurance-number" class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.insurance_number.label') }}</label>
                    <input type="text" id="insurance-number" name="insurance_number" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brightAzure">
                </div>

                <!-- Upload Insurance Card Image -->
                <div class="mb-4">
                    <label class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.upload_insurance_card.label') }}</label>
                    <div class="flex items-center justify-center cursor-pointer" onclick="triggerFileInput('insurance-card')">
                        <img src="/images/upload.svg" alt="Upload Icon" class="w-32 h-32 mr-2">
                    </div>
                    <input type="file" id="insurance-card" name="insurance_card" accept="image/*" class="hidden">
                </div>

                <!-- Upload Passport or ID -->
                <div class="mb-4">
                    <label class="block text-deepNavyBlue font-medium mb-2">{{ __('register.form.upload_passport.label') }}</label>
                    <div class="flex items-center justify-center cursor-pointer" onclick="triggerFileInput('passport-id')">
                        <img src="/images/upload.svg" alt="Upload Icon" class="w-32 h-32 mr-2">
                    </div>
                    <input type="file" id="passport-id" name="passport_id" accept="image/*" class="hidden">
                </div>

                <!-- Checkbox for Terms and Conditions -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="terms" name="terms" required class="mr-2 border border-gray-300 rounded-lg cursor-pointer">
                    <label for="terms" class="text-deepNavyBlue text-sm cursor-pointer">
                        {{ __('register.form.terms.label') }}
                    </label>
                </div>

                <!-- Register Button -->
                <div class="mb-4">
                    <button class="px-8 py-3 text-white w-full font-semibold rounded-md transition duration-500 ease-in-out bg-brightAzure hover:translate-y-3 ">
                        {{ __('register.form.button') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
@include('partials.footer')

</html>
