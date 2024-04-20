import defaultTheme from 'tailwindcss/defaultTheme';
//import forms from '@tailwindcss/forms';
//npm i -D @tailwindcss/forms

/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    400: '#2A82D4',
                    500: '#1060C1',
                },
                warning: {
                    300: '#FFFBDE',
                    500: '#FEDC00',
                    600: '#f3cb00',
                },
                danger: {
                    //500: '#EB001B', альтернатива
                    400: '#FF5F00',
                    500: '#FE0000',
                },
                gray: {
                    //400: '#9ca3af',
                    //500: '#7B7B7B', - не оригинальный (взят с макета)
                    //600: '#4b5563',
                },

            }
        },
        container: {
            screens: {
                '2xl': '1615px',
            }
        }
    },
    plugins: [
        //forms,
        require('flowbite/plugin')
    ]

}
