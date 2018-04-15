var webpack = require('webpack')
const path = require('path');

module.exports = {
  entry: './js/require_webpack_to_build.js',
  output: {
    path: __dirname + './wordpress_template/',
    filename: 'bundle.js'
  }
}
