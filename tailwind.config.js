/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary-color": "var(--primary-color)",
            },
        },
        screens: {
            mdMid: "1100px",
        },
    },
    plugins: [],
};
