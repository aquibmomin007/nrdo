module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['_src/js/plugins.js', '_src/js/main.js', '_src/js/calendar-custom.js'],
        dest: 'assets/js/main.js'
      },
    },

    
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n',
        beautify:true
      },
      dist: {
        files: {
          'assets/js/main.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    //qunit: {
    //  files: ['test/**/*.html']
    //},
    sass: {
        dist: {
            files: {
                'assets/css/main.css': '_src/css/main.scss',
                'assets/css/responsive.css': '_src/css/responsive.scss'
            }
        }
    },
    jshint: {
      files: ['gruntfile.js', '_src/js/main.js'],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    watch: {
      files: ['<%= jshint.files %>', '_src/js/plugins.js', '_src/css/*.scss'],
      tasks: ['jshint', 'concat', 'uglify', 'sass'],
      options: {livereload: true}
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  /* grunt.loadNpmTasks('grunt-contrib-qunit'); */
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('test', ['jshint'/* , 'qunit' */]);

  grunt.registerTask('default', ['jshint', /* 'qunit', */ 'concat', 'sass',   'uglify']);

};