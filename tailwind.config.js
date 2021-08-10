module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        backgroundImage: theme => ({
            'main-pattern': "url('../images/main-pattern.png')"
        })
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
