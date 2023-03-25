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
            'dark-bg': '#111111',
            'my-gray': '#262626',
            'main-purple': '#9a4dff',
            'dark-purple': '#2b1d3b',
        },
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
