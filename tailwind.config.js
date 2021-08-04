const defaultTheme = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                trueGray: colors.trueGray,
                orange: colors.orange,
                Greenlime: colors.Greenlime,
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            flex: {
                5: 5
              },

              backgroundImage: {
                1: "url('https://cdn.pixabay.com/photo/2017/06/16/15/58/luxury-home-2409518__340.jpg')",
                2: "url('https://cdn.pixabay.com/photo/2014/08/01/15/51/city-407703__340.jpg')",
                3: "url('https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501__340.jpg')",
                4: "url('https://cdn.pixabay.com/photo/2016/07/11/20/31/construction-1510561__340.jpg')",
                5: "url('https://cdn.pixabay.com/photo/2019/03/29/17/36/tools-4089700__340.jpg')"
              },

        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },

    corePlugins:{

        container:false,
    },

    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
