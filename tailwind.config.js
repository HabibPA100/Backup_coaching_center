import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xs: '300px',
                sm: '380px',   // Small screens
                md: '678px',   // Medium screens
                lg: '1024px',  // Large screens
                xl: '1280px',  // Extra-large screens
                '2xl': '1536px' // 2x Extra-large screens
              },
        },
    },

    plugins: [forms],
};
