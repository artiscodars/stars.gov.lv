const { size } = require('lodash')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },

    theme: {
        extend: {
            colors: {
                primary: '#2D233D',   // Primary color for buttons, links, etc.
                secondary: '#554570', // Secondary color
                third: '#9680BD',    // Accent color
                success: '#849A6F',   // Success color (like for success messages)
                successDark: '#2E8062',
                warning: '#EEB649',   // Warning color (like for warnings)
                error: '#EB694',     // Error color (like for error messages)
                light: '#F5F5F5',
                beige: '#EBE7E0',
                starsGray: '#D6D6D6',
            },
            fontFamily: {
                sans: ['"Source Sans 3"', 'sans-serif'],  // Set Source Sans 3 as the default sans font
                serif: ['"Source Serif 4"', 'serif'],  // For headings (H1, H2)
            },

            typography: {
                DEFAULT: {
                    css: {
                        h1: {
                            fontFamily: 'Source Serif 4, serif',
                            fontWeight: '500',
                            fontSize: '3.25rem',

                        },
                        maxWidth: 'none',
                        blockquote: {
                            fontWeight: '600',
                            fontSize: '1.3rem',
                            fontStyle: 'normal',
                            fontFamily: 'Source Serif 4, serif',
                            color: '#9680BD',
                            padding: 0,
                            borderLeft: '0',
                        },
                    },
                },
            },
            container: {
                center: true,
                padding: '2rem',
                screens: {
                    '2xl': '1536px', // Custom width only for 2xl breakpoint
                },
            },

        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}


