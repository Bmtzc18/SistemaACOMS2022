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
        'azul-tec': '#213a62',
        'azul-grisecito': '#9BB4CB',
        'azul-fondo': '#0f3457',
        'azul-iconos': '#15497a',
        'azul-menuL':'#84AACD',
        'azul-submenu':'#759CBF',
        'azul-b1':'#1D70A2',
        'azul-b2':'#233569', 
      },
    },
  },
  plugins: [],

}
