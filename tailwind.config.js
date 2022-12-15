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
      'xs' : '414px',
      'sm' : '640px',
      'md' : '768px',
      'lg' :'1024px',
      'xl' :'1280px',
      '2xl':'1536px',

    },
  },
  plugins: [],
}
