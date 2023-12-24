/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'blue-500': 'rgb(65,184,252)',
      },
      fontFamily: {
        Manrope: 'Manrope, sans-serif',
        fjalla: 'Fjalla One, sans-serif',
      },
    },
  },
  plugins: [],
};

export default config;
