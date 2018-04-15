module.exports = function(grunt){
grunt.task.registerTask('speak', function (){
    console.log('speaking loudly');
  });

  grunt.task.registerTask('post', function  (){
require('./wordpress.js');
  });
  grunt.task.registerTask('parse', function  (){
require('./article_parser.js');
  });
};
