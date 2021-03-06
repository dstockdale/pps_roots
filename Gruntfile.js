'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        '!assets/js/scripts.min.js'
      ]
    },
    sass: {
      dist: {
        files: {
          'assets/css/main.min.css' : 'assets/sass/main.scss'
        },
        options: {
          compass: true,
          style: 'compressed'
        }
      }
    },
    // less: {
    //   dist: {
    //     files: {
    //       'assets/css/main.min.css': [
    //         'assets/less/app.less'
    //       ]
    //     },
    //     options: {
    //       compress: true,
    //       // LESS source map
    //       // To enable, set sourceMap to true and update sourceMapRootpath based on your install
    //       sourceMap: false,
    //       sourceMapFilename: 'assets/css/main.min.css.map',
    //       sourceMapRootpath: '/app/themes/roots/'
    //     }
    //   }
    // },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'assets/js/foundation/foundation.js',
            'assets/js/foundation/foundation.abide.js',
            'assets/js/foundation/foundation.accordion.js',
            'assets/js/foundation/foundation.alert.js',
            'assets/js/foundation/foundation.clearing.js',
            'assets/js/foundation/foundation.dropdown.js',
            'assets/js/foundation/foundation.interchange.js',
            'assets/js/foundation/foundation.joyride.js',
            'assets/js/foundation/foundation.magellan.js',
            'assets/js/foundation/foundation.offcanvas.js',
            'assets/js/foundation/foundation.orbit.js',
            'assets/js/foundation/foundation.reveal.js',
            'assets/js/foundation/foundation.tab.js',
            'assets/js/foundation/foundation.tooltip.js',
            'assets/js/foundation/foundation.topbar.js',
            'assets/js/_*.js'
          ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          // sourceMap: 'assets/js/scripts.min.js.map',
          // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
        }
      }
    },
    version: {
      options: {
        file: 'lib/scripts.php',
        css: 'assets/css/main.min.css',
        cssHandle: 'roots_main',
        js: 'assets/js/scripts.min.js',
        jsHandle: 'roots_scripts'
      }
    },
    watch: {
      // less: {
      //   files: [
      //     'assets/less/*.less',
      //     'assets/less/bootstrap/*.less'
      //   ],
      //   tasks: ['less', 'version']
      // },
      sass: {
        files: [
          'assets/sass/*.scss',
          'assets/sass/**/*.scss'
        ],
        tasks: ['sass', 'version']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify', 'version']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: true
        },
        files: [
          'assets/css/main.min.css',
          'assets/js/scripts.min.js',
          'templates/*.php',
          '*.php'
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-wp-version');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'uglify',
    'version'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
