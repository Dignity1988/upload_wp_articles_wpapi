#!/usr/bin/env node

var PARSE = require('article-parser');
let url = 'http://whiteraven.org.ua/page.php?24';
PARSE.extract(url).then((article) => {
  var fs = require('fs');
  var path = require('path');
  // In newer Node.js versions where process is already global this isn't necessary.
  var process = require("process");
  text = new Array([article['content']], [article['title']]);
  console.log(text);
  var i = 0;
  var b = text[i + 1];
  fs.writeFile('./texts/' + text[i + 1] + '.txt', text[i][i], function(err) {
    if (err) throw err;
    console.log('It\'s saved!');



    var moveFrom = __dirname + "/texts/"; //setting up directory for file upload
    var fs = require('fs');
    var path = require('path');
    var b = text[i][i];
    // In newer Node.js versions where process is already global this isn't necessary.
    var process = require("process");
    // Loop through all the files in the temp directory
    fs.readdir(moveFrom, function(err, files) {

      if (err) {
        console.error("Could not list the directory.", err);
        process.exit(1);
      }

      files.forEach(function(file, index) {
        // Make one pass and make the file complete
        var fromPath = path.join(moveFrom, file);
        //  var toPath = path.join( moveTo, file );
        //starting getting filenames
        fs.stat(fromPath, function(error, stat) {
          if (error) {
            console.error("Error stating file.", error);
            return;
          }

          if (stat.isFile()) {

            var WPAPI = require("wpapi");
            var site = new WPAPI({
              endpoint: 'http://new.whiteraven.org.ua/wp-json/',
              username: 'Maksym',
              password: 'zfjbm*j0S7s)S1K!'
            });
            console.log("'%s' is a file.", moveFrom + file);
            var fullpath = moveFrom + file;
            var filename = file.replace(' - Сайт белого ворона.txt', ''); //specifying the fullpath to the text on node server or in file system.
            var WPAPI = require("wpapi");
            var wp = new WPAPI({
              endpoint: 'http://new.whiteraven.org.ua/wp-json/',
              username: 'Maksym',
              password: 'zfjbm*j0S7s)S1K!'
            });
            wp.posts().create({
              title: filename,
              content: b,
            })
          }








        });
      });
    });
  });

}).catch((err) => {
  console.log(err);
});