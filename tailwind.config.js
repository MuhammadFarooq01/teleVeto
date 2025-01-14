import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                deepNavyBlue: '#001F44',
                skyBlue: '#6EC1E4',
                brightAzure: '#4BA4E9',
                lightBeige: '#F5EFE0',
                springBud: '#61CE70'
            },
        },
    },
    plugins: [],
};
