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
                error: '#EB6945',     // Error color (like for error messages)
                light: '#F5F5F5',
                beige: '#EBE7E0',
                starsGray: '#D6D6D6',
                link: '#2596bd',
                titleLink: '#083D4F',
            },
            fontFamily: {
                sans: ['"Source Sans 3"', 'sans-serif'],  // Set Source Sans 3 as the default sans font
                serif: ['"Source Serif 4"', 'serif'],  // For headings (H1, H2)
            },

            typography: {
                DEFAULT: {
                    css: {

                        h1: {

                            fontWeight: '500',
                            fontSize: '2.25rem',
                            marginBottom: '1.5rem',
                            marginTop: '1.5rem',
                        },
                        h2: {
                            marginBottom: '1rem',
                            marginTop: '1.5rem',
                            fontWeight: '500',
                            fontSize: '2.0rem',
                        },
                        h3: {
                            marginBottom: '0.8rem',
                            marginTop: '0',
                            fontWeight: '500',
                            fontSize: '1.5rem',
                        },
                        h4: {

                            fontWeight: '500',
                            fontSize: '1.4rem',
                        },
                        h5: {

                            fontWeight: '500',
                            fontSize: '1.3rem',
                        },
                        maxWidth: '1536px',
                        blockquote: {
                            fontWeight: '500',
                            fontSize: '1.3rem',
                            fontStyle: 'normal',
                            fontFamily: '"Source Serif 4", serif',
                            color: '#9680BD',
                            padding: 0,
                            borderLeft: '0',
                        },
                        p: {
                            marginBottom: '1.5rem',
                            marginTop: '0',
                        },
                        a: {
                            color: '#2D233D',

                        },
                        table: {
                            width: '100%',
                            borderCollapse: 'collapse',
                            marginTop: 0,

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
        require('flowbite/plugin'),
    ],
}


