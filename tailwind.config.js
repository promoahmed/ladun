const defaultTheme = require("tailwindcss/defaultTheme");
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}',
        'node_modules/flowbite/**/*.{js,jsx,ts,tsx}',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["SuisseIntl-Regular", ...defaultTheme.fontFamily.sans],
                // suisseIntl: ["SuisseIntl-Regular", "sans"],
            },
            colors: {
                "gray-border": "#B5B5B5",
                "gray-border-light": "#E6E6E6",
                "dark-brown": "#AF9744",
                "light-brown": "#C4A94C",
                "lightest-brown": "#FFFDF6",
                "background-overlay": "rgba(0,0,0,0.5)",
                "background-section": "#FFFDF6",
                "black": "#2B2B2B",
                "grey": "#474747",
                "brown-section": "#2B2B2B",
                "light-footer": "#F6F3EB",
                "light-footer-hr": "#424448",
                "dark-footer-text-color": "#B4B4B4",
                "light-beige-background": "#F3EDD4",
            },
            translate: {
                // 4.25: "17rem",
            },
            backgroundImage: {
                'subtraction-png': "url('/resources/img/subtraction.png')",
                'subtraction-ltr-png': "url('/resources/img/subtraction-ltr.png')",
                'real-state-managemnt-utility-section': "url('/resources/img/real-managent-utility-section.png')",
                'dark-footer-image': "url('/resources/img/dark_footer/dark_footer_bgImg.png')",
                'about-us-page-image': "url('/resources/img/joinus.jpg')"
            }  ,fontSize: {
                xs: "11px",
                sm: "16px",
                base: "18px",
                xl: "20px",
                "2xl": "22px",
                "3xl": "25px",
                "4xl": "35px",
            }, borderRadius: {
                'none': '0',
                DEFAULT: '4px',
                'md': '0.375rem',
                'lg': '0.5rem',
                'xl': '2rem',
                '2xl': '4rem',
                'full': '9999px',
            },

        },
        container: {
            padding: '2rem',
        },

    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('flowbite/plugin'),
    ],
};
