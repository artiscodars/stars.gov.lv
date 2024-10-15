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
    plugins: [
        require('daisyui'), // Make sure DaisyUI is included as a plugin
    ],
    theme: {
        extend: {
            colors: {
                primary: '#EEB649',   // Primary color for buttons, links, etc.
                secondary: '#9333EA', // Secondary color
                accent: '#10B981',    // Accent color
                neutral: '#3D4451',   // Neutral color (often used for text or borders)
                'base-100': '#FFFFFF', // Base background color
                info: '#3ABFF8',      // Info color
                success: '#849A6F',   // Success color (like for success messages)
                warning: '#EEB649',   // Warning color (like for warnings)
                error: '#EB694',     // Error color (like for error messages)
            },
            fontFamily: {
                serif: ['"Source Serif 4"', 'serif'],  // For headings (H1, H2)
                sans: ['"Source Sans 3"', 'sans-serif'], // For paragraphs, descriptions, buttons
            },

        },
    },
}


