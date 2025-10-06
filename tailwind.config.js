module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      './src/output.css': {
        spacing: {
          '1.5': '0.375rem',
        },
        fontSize: {
          'base': '1rem',
        },
        outline: {
          '1': '1px',
        },
        outlineOffset: {
          '1': '1px',
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
