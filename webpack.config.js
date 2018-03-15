const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
entry: './js/main.js',
output: {
path: path.resolve(__dirname, '/stylesheets'),
filename: 'bundle.js'},
  watch: true
}

test: /\.scss$/,
use: ExtractTextPlugin.extract({
fallback: 'style-loader',
use: ['css-loader', 'sass-loader']
})


module: {
  rules: [
    // Apply loader
    {
      test: /\.scss$/,
      use: [
        'style-loader',
        'css-loader',
        'postcss-loader',
        'sass-loader',
        {
          loader: 'sass-resources-loader',
          options: {
            // Provide path to the file with resources
            resources: './path/to/resources.scss',

            // Or array of paths
            resources: ['./path/to/vars.scss', './path/to/mixins.scss']
          },
        },
      ],
    },
  ],
},

/* Webpack@1: webpack.config.js */

module: {
  loaders: [
    // Apply loader
    { test: /\.scss$/, loader: 'style!css!sass!sass-resources' },
  ],
},

// Provide path to the file with resources
sassResources: './path/to/resources.scss',
