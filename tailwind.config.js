/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./tailwind/src/**/*.{html,js}",
    "./tailwind/components/**/*.{html,js}",
    "./web/**/*.{html,js}",
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
