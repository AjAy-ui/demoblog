module.exports = function(grunt) {

    grunt.initConfig({
        uglify: {
            options: {
                mangle: {
                    reserved: ['jQuery', 'Backbone']
                }
            },
            my_target: {
                files: {
                    'js/master.js': ['js/lib/jquery-1.11.3.min.js','js/lib/*.js']
                }
            }
        },
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'css/master.css': ['css/lib/*.css','style.css']
                }
            }
        },
        watch: {
            files: ['js/lib/*.js','css/lib/*.css','style.css'],
            tasks: ['uglify','cssmin']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['uglify','cssmin','watch']);

};

