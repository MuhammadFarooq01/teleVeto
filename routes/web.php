<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// Default route for the home page (English is the default language)
Route::get('/', function () {
    return view('home');  // Return the 'home' view
});
// Default route for the howitworks page (English is the default language)
Route::get('/how-it-works', function () {
    return view('howitworks');  // Return the 'howitworks' view
});
// Default route for the about page (English is the default language)
Route::get('/about', function () {
    return view('about');  // Return the 'about' view
});
// Default route for the contact page (English is the default language)
Route::get('/contact', function () {
    return view('contact');  // Return the 'contact' view
});
// Default route for the register page (English is the default language)
Route::get('/register', function () {
    return view('register');  // Return the 'register' view
});

// Handle language-specific routes with the language code in the URL
Route::get('/{lang}', function ($lang) {
    // Set the application locale based on the language parameter in the URL
    if (in_array($lang, ['en', 'fr', 'de', 'it'])) {
        App::setLocale($lang);  // Set the app locale to the selected language
    } else {
        abort(404); // If the language is not supported, show a 404 error
    }

    return view('home');  // Return the 'about' view
});
// Handle language-specific routes with the language code in the URL
Route::get('/{lang}/about', function ($lang) {
    // Set the application locale based on the language parameter in the URL
    if (in_array($lang, ['en', 'fr', 'de', 'it'])) {
        App::setLocale($lang);  // Set the app locale to the selected language
    } else {
        abort(404); // If the language is not supported, show a 404 error
    }

    return view('about');  // Return the 'about' view
});

Route::get('/{lang}/how-it-works', function ($lang) {
    if (in_array($lang, ['en', 'fr', 'de', 'it'])) {
        App::setLocale($lang);  // Set the app locale to the selected language
    } else {
        abort(404);
    }

    return view('howitworks');  // Return the 'howitworks' view
});

Route::get('/{lang}/contact', function ($lang) {
    if (in_array($lang, ['en', 'fr', 'de', 'it'])) {
        App::setLocale($lang);  // Set the app locale to the selected language
    } else {
        abort(404);
    }

    return view('contact');  // Return the 'contact' view
});

Route::get('/{lang}/register', function ($lang) {
    if (in_array($lang, ['en', 'fr', 'de', 'it'])) {
        App::setLocale($lang);  // Set the app locale to the selected language
    } else {
        abort(404);
    }

    return view('register');  // Return the 'register' view
});
