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
        'azul-tec': '#1d70a2',
        'azul-grisecito': '#9BB4CB',
        'azul-fondo': '#3C5F8D',
        'azul-iconos': '#4C6E9B',
      },
    },
  },
  plugins: [],

}
