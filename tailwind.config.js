const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin')

module.exports = {
  purge: [
    './*.php',
    './**/*.php',
    './**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
      }
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',

      black: colors.black,
      white: colors.white,
      gray: colors.coolGray,
      yellow: colors.amber,
      blue: colors.blue,
      main: {
        dark: '#de5485',
        DEFAULT: '#f78fb3',
        light: '#f8a5c2',
      },
    },
    fontFamily: {
      'body': ['Comfortaa'],
      'heading': ['Peace Sans'],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
