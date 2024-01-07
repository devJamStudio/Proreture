/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'blue-500': 'rgb(65,184,252)',
        white: '#fafaf7',
        black: 'rgb(29,32,32)',
      },
      fontFamily: {
        Manrope: 'Manrope, sans-serif',
        fjalla: 'Fjalla One, sans-serif',
      },
      fontSize: {
        '5xl': ['3rem', '1.2'],
      },
      borderRadius: {
        '2xl': '10rem',
      },
    },
  },
  plugins: [],
};

export default config;
