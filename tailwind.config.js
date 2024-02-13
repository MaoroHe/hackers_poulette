/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{php,js}",
    './components/**/*.{php,js}',
  ],
    theme: {
      extend: {},
    },
    plugins: [
      require('@tailwindcss/forms'),
    ],
  }