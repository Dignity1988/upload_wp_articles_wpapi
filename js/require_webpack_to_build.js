/*import "../sass/screen.scss";*/
var ExtractTextPlugin = require("extract-text-webpack-plugin");

/*require('../sass/screen.scss')*/

/*Require CSS*/
/*require('../stylesheet/screen.css')*/

/*Require scripts*/
require('./jquery.js');
require('./menu.js');
/*reuiring jivosite*/
require('./jivosite.js');


/*Require wordpress api to build

var WPAPI = require( 'wpapi' );

rules: [{
  test: /\sass\.scss$/,
  use: [
    'style-loader',
    'css-loader',
    'sass-loader'
  ]
}, {
  // ...
}]

//requiring array to json setting up/
import {groupBy} from 'lodash/collection';
*/
var nodeSassLoader = require('node-sass-loader');
// Call the compilation
nodeSassLoader.compile({ source_directory: './sass/node project/sass'),
                         destination_directory: './stylesheets.css'),
                      });
