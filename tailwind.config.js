/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {

      },
      screens: {
        'mdMid': '1100px',

      },
    },
    plugins: [],
  }
