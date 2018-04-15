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

  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.loadNpmTasks('grunt-contrib-uglify');
const mozjpeg = require('imagemin-mozjpeg');

grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.initConfig({
  uglify: {
    my_target: {
      files: [{
        expand: true,
        cwd: 'js',
        src: '**/*.js',
        dest: 'dest'
      }]
    }
  },
  cssmin: {
    target: {
      files: [{
        expand: true,
        cwd: 'release/css',
        src: ['*.css', '!*.min.css'],
        dest: 'release/css',
        ext: '.min.css'
      }]
    }
  },
imagemin: {
    dynamic: {
        files: [{
            expand: true,
            cwd: 'uploads/',
            src: ['**/*.{png,jpg,gif}'],
            dest: 'uploads1/'
        }]
    }
}

});





grunt.registerTask('cssmin', ['cssmin']);

grunt.registerTask('min', ['uglify']);


grunt.registerTask('minimg', ['imagemin']);
};
