
    var WPAPI = require("wpapi");
    var site = new WPAPI({
      endpoint: 'http://new.whiteraven.org.ua/wp-json/wp/v2/trip',
      username: 'Maksym',
      password: 'YfCDaWIC^ZQ$#NX3RAAeL6Lt'
    });
>>>>>>> 71cb9355a522fb77055cc9abbbb64928ade52679

var moveFrom = __dirname+"/gallery/slider/";
var fs = require( 'fs' );
var path = require( 'path' );
// In newer Node.js versions where process is already global this isn't necessary.
var process = require( "process" );
// Loop through all the files in the temp directory
fs.readdir( moveFrom, function( err, files ) {

var moveFrom = __dirname+"/gallery/slider/";//setting up directory for file upload
        if( err ) {
            console.error( "Could not list the directory.", err );
            process.exit( 1 );
        }

        files.forEach( function( file, index ) {
                // Make one pass and make the file complete
                var fromPath = path.join( moveFrom, file );
              //  var toPath = path.join( moveTo, file );
//starting getting filenames
                fs.stat( fromPath, function( error, stat ) {
                    if( error ) {
                        console.error( "Error stating file.", error );
                        return;
                    }

                    if( stat.isFile() ){

                      var WPAPI = require("wpapi");
                       var site = new WPAPI({
                      endpoint: 'http://new.whiteraven.org.ua/wp-json/',
                      username: 'Maksym',
                      password: ''
>>>>>>> 71cb9355a522fb77055cc9abbbb64928ade52679
                        });
                      console.log( "'%s' is a file.",moveFrom+file );
                      var fullpath=moveFrom+file;
                      var filename=file.replace('.jpg', '');//specifying the fullpath to the images on node server or in file system.
                      var WPAPI = require("wpapi");
                      var wp= new WPAPI({
                        endpoint: 'http://new.whiteraven.org.ua/wp-json/',
                        username: 'Maksym',
                        password: ''
>>>>>>> 71cb9355a522fb77055cc9abbbb64928ade52679
                      });
                      wp.posts().create({
                        title: filename,
                        content: filename,
                        category: 'Chernogoriay'
                      }).then(function( post ) {
                        // Create the media record & upload your image file
                        var filePath = fullpath;
                        return wp.media().file( filePath ).create({
                          title: 'Amazing featured image',
                          post: post.id
                        }).then(function( media ) {

                          // Set the new media record as the post's featured media
                          return wp.posts().id( post.id ).update({
                            featured_media: media.id
                          });

                        });
                      });
}








                } );
        } );
} );
