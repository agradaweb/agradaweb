const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Inter var, sans-serif",
                ],
            },

            colors: {
                'body-color': 'rgb(243, 244, 246)',
            },

            container: {
            // default breakpoints but with 40px removed
            screens: {
                sm: '600px',
                md: '728px',
                lg: '984px',
                xl: '1024px',
                '2xl': '1280px',
            },
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
