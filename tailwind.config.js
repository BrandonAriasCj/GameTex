import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    theme: {
        extend: {
            colors: {
                metal: '#dda90d',  // Color metálico gris
                oro: 'rgb(255, 223, 0)',
                plata: 'rgb(192, 192, 192)', // Metal plateado brillante
                bronce: 'rgb(205, 127, 50)',
            },
        },
    },

    plugins: [forms, typography],
};

