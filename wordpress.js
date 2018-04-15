
<<<<<<< HEAD
=======

<<<<<<< HEAD
/* got file structure removed - and assign varibles
altay
│   └── sep2002
├── Chernogoriay
│   └── Chernogoriya
├── crimea
│   ├── 2003
│   ├── chernoreche
│   ├── crimea2014
│   └── dec2005
├── India
│   ├── Ashram_babadzhi
│   ├── Jay_Poor
│   ├── Kadzhuraho
│   ├── Ocean
│   ├── Orcha_Old_Town
│   ├── Radzha_palace
│   ├── Taj_Mahal
│   ├── UsualIndia
│   └── Varanasi
├── interest
│   ├── beauties
│   ├── dolmens
│   └── Panoramy
├── kavkaz
│   ├── adygeya
│   ├── Adygeya2011
│   ├── Arhyz2014
│   ├── Arhyz-jul-2006
│   ├── Arhyz-select
│   ├── elbrus
│   ├── Gallery_2017-06-07
│   ├── sochi_march 2007
│   ├── ulutau_july_2008
│   └── water_travel(psheha_river2001)
├── Sayany
│   └── 2011
└── taymyr
    └── putorany1997

*/

    // expected output: 10
//destructive assignment of varibles

    // expected output: 10
    /*

      var  altay, sep2002, Chernogoriay, Chernogoriya_, crimea, crimea2003, chernoreche, crimea2014, dec2005, India, Ashram_babadzhi, Jay_Poor, Kadzhuraho, Ocean, Orcha_Old_Town, Radzha_palace, Taj_Mahal, UsualIndia, Varanasi, interest, beauties,  dolmens,  Panoramy, kavkaz, adygeya, Adygeya2011, Arhyz2014, Arhyz_jul_2006, Arhyz_select, elbrus, Gallery_2017_06_07, sochi_march_2007, ulutau_july_2008, water_travel_psheha_river2001, Sayany, Sayany2011, taymyr, putorany1997;

      [altay,
           sep2002,
           Chernogoriya,
           Chernogoriay_,
           crimea,
           crimea2003,
           chernoreche,
           crimea2014,
           dec2005,
           India,
           Ashram_babadzhi,
           Jay_Poor,
           Kadzhuraho,
           Ocean,
           Orcha_Old_Town,
           Radzha_palace,
           Taj_Mahal,
           UsualIndia,
           Varanasi,
           interest,
           beauties,
           dolmens,
           Panoramy,
           kavkaz,
           adygeya,
           Adygeya2011,
           Arhyz2014,
           Arhyz_jul_2006,
           Arhyz_select,
           elbrus,
           Gallery_2017_06_07,
           sochi_march_2007,
           ulutau_july_2008,
           water_travel_psheha_river2001,
           Sayany,
           Sayany2011,
            taymyr,
            putorany1997]=
      [
        [],
         [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        []
      ];
          gallery=[altay[sep2002],
          Chernogoriya[Chernogoriya_],
          crimea[crimea2003,chernoreche,crimea2014,dec2005],
          India[Ashram_babadzhi,Jay_Poor,
           Kadzhuraho,Ocean,Orcha_Old_Town,Orcha_Old_Town,Radzha_palace,Taj_Mahal,UsualIndia,Varanasi],
          interest[beauties,dolmens,Panoramy],
          kavkaz[adygeya,Adygeya2011,Arhyz2014,Arhyz_jul_2006,Arhyz_select,elbrus,Gallery_2017_06_07,
          sochi_march_2007,ulutau_july_2008,water_travel_psheha_river2001],
          Sayany[Sayany2011],
          taymyr[putorany1997]]=[
      [[]],[[]],[[],[],[],[]],[[],[],[],[],[],[],[],[],[],[],[[],[],[]],[[],[],[],[],[],[],[],[],[],[]],[[]],[[]]]];
      console.log(gallery);



    */
/*
altay
│   └── sep2002
├── Chernogoriay
│   └── Chernogoriya
├── crimea
│   ├── 2003
│   ├── chernoreche
│   ├── crimea2014
│   └── dec2005
├── India
│   ├── Ashram_babadzhi
│   ├── Jay_Poor
│   ├── Kadzhuraho
│   ├── Ocean
│   ├── Orcha_Old_Town
│   ├── Radzha_palace
│   ├── Taj_Mahal
│   ├── UsualIndia
│   └── Varanasi
├── interest
│   ├── beauties
│   ├── dolmens
│   └── Panoramy
├── kavkaz
│   ├── adygeya
│   ├── Adygeya2011
│   ├── Arhyz2014
│   ├── Arhyz-jul-2006
│   ├── Arhyz-select
│   ├── elbrus
│   ├── Gallery_2017-06-07
│   ├── sochi_march 2007
│   ├── ulutau_july_2008
│   └── water_travel(psheha_river2001)
├── Sayany
│   └── 2011
└── taymyr
    └── putorany1997
    */
>>>>>>> 67cf01954935a1dea6a083a829cd91bc6943534e
    var WPAPI = require("wpapi");
    var site = new WPAPI({
      endpoint: 'http://new.whiteraven.org.ua/wp-json/wp/v2/trip',
      username: 'Maksym',
      password: ''
    });
>>>>>>> 67cf01954935a1dea6a083a829cd91bc6943534e
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
<<<<<<< HEAD
                      endpoint: 'http://new.whiteraven.org.ua/wp-json/',
                      username: 'Maksym',
                      password: 'YfCDaWIC^ZQ$#NX3RAAeL6Lt'
=======
<<<<<<< HEAD
                      endpoint: 'http://new.whiteraven.org.ua/wp-json/',
                      username: 'Maksym',
                      password: ''
=======
                      endpoint: 'site/wp-json/',
                      username: '_',
                      password: '_'
>>>>>>> 67cf01954935a1dea6a083a829cd91bc6943534e
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
>>>>>>> 67cf01954935a1dea6a083a829cd91bc6943534e
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
