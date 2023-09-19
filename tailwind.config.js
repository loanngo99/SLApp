/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        },
        bg: {
            pink: {
                '500': 'rgb(236 72 153 / var(--tw-text-opacity))'
            }
        },
        borderColor: {
            pink: {
                '500': 'rgb(236 72 153 / var(--tw-text-opacity))'
            }
        },
        extend: {
            width: {
                '120': '30rem',
                '112': '28rem',
            },
            marginLeft: {
                '120': '30rem',
                '112': '28rem',
            },
            margin: {
                '120': '30rem',
                '112': '28rem',
                left: {
                    '120': '30rem',
                    '112': '28rem',
                },
            },
            borderColor: {
                pink: {
                    '500': 'rgb(236 72 153 / var(--tw-text-opacity))'
                }
            },
        },
    },
    plugins: [],
}

