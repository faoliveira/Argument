'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'library/js/*.js',
        'library/js/plugins/*.js',
        '!library/js/scripts.min.js'
      ]
    },
    recess: {
      dist: {
        options: {
          compile: true,
          compress: true
        },
        files: {
          'library/css/style.css': [
            'library/less/style.less'
          ]
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'library/js/scripts.min.js': [
            'library/js/plugins/*.js',
            'library/js/_*.js'
          ]
        }
      }
    },
	imagemin: {
      dist: {
        options: {
			optimizationLevel: 7,
			progressive: true
		},
		files: [{
			expand: true,
            cwd: 'library/images/src/',
            src: '**/*',
            dest: 'library/images/'
			}]
		}
	},
    watch: {
      less: {
        files: [
          'library/less/*.less'
        ],
        tasks: ['recess']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify']
      },
        files: [
          'library/css/style.css',
          'library/js/scripts.min.js',
          'library/lib/*.php',
          '*.php'
        ]
      },
    clean: {
      dist: [
        'library/css/style.css',
        'library/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-recess');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'recess',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};