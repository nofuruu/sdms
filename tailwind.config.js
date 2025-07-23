/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views//*.php",
    "./Public//*.html",
    "./node_modules/flowbite//*.js",
  ],
  theme: {
    extend: {
      colors: {
        main: {
          "scheme-dark": "#24252a",
          "sea-blue": "#068FFF",
          "light-blue": "#44b4ffff",
          "dark-blue": "#0060c0ff",
          400: "#0c0d10",
          500: "#060607",
        },
      },
    },
  },
  plugins: [],
};
