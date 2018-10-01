#!/usr/bin/env node
var request =require('request');
var PARSE = require('article-parser');
let url = 'https://www.distractify.com/humor/2018/09/13/URmx2/instant-rage';
PARSE.extract(url).then((article) => {
  var fs = require('fs');
  var img = article['image']
  var request = require('request');
  // Or with cookies
  // var request = require('request').defaults({jar: true});

  request.get({url: img, encoding: 'binary'}, function (err, response, body) {
    fs.writeFile('./texts/'+img, body, 'binary', function(err) {
      if(err)
        console.log(err);
      else
        console.log("The file was saved!");
    });
  });
var image= './images/'+img;
console.log(image);
  var path = require('path');
  // In newer Node.js versions where process is already global this isn't necessary.
  var process = require("process");
  text = new Array([article['content']], [article['title']]);
  console.log(text);
  var i = 0;
  var b = text[i + 1];
  fs.writeFile('./texts/' + text[i + 1] + '-added', text[i][i], function(err) {
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
              endpoint: '77.235.42.165/~vetezdemo/wp-json/',
              username: 'vetezdemo',
              password: '@Oe95mPjTN2R'
            });
            console.log("'%s' is a file.", moveFrom + file);
            var fullpath = moveFrom + file;
            var filename = file.replace('', ''); //specifying the fullpath to the text on node server or in file system.
            var WPAPI = require("wpapi");
            var wp = new WPAPI({
              endpoint: '77.235.42.165/~vetezdemo/wp-json/',
              username: 'vetezdemo',
              password: '@Oe95mPjTN2R'
            });
            wp.posts().create({
              title: filename,
              content: b,
              if ( err ) {
                console.log(err, b;
               }
            }).then(function( post ) {
              // Create the media record & upload your image file
            //  var filePath = fullpath;
        return wp.media().file(img , filename+'.png').create({
                title: filename,
                post: post.id
              }).then(function( media ) {

                // Set the new media record as the post's featured media
                return wp.posts().id( post.id ).update({
                  featured_media: media.id
                });

              });
            });
          }
        });
      });
    });
  });

}).catch((err) => {
  console.log(err);
});
