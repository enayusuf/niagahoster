/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./components/**/*.{html,js}",
    "index.html",
  ],
  theme: {
    extend: {},
    fontFamily: {
      sans: ["Roboto"],
      heading: ["Montserrat", "Roboto"],
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/line-clamp"),
    // require('@tailwindcss/aspect-ratio'),
  ],
};
