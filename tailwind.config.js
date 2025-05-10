/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "wp-content/themes/child/*.php",
    "wp-content/themes/child/**/*.php",
    "wp-content/plugins/vezaconslt-plugin/elementor/*.php",
  ],
  theme: {
    extend: {
      container: {
        padding: {
          DEFAULT: '1rem',
          xl: '4rem',
        },
        center: true,
      },
      colors: {
        'cl-main': "var(--cl-main)",
        'cl-primary': "var(--cl-primary)",
        'cl-secondary': "var(--cl-secondary)",
        'bg-primary': "var(--bg-primary)",
        'cl-scrollbar': "var(--cl-scrollbar)",
      },
      fontFamily: {
        'roboto': ['"Roboto"'],
      }
    },
    screens: {
      sm: "576px",
      md: "768px",
      lg: "1024px",
      xl: "1298px",
    },
  },
  plugins: [],
}
