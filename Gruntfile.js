module.exports = function (grunt) {

    grunt.initConfig({
        watch: {
            files: ['styles/**/*.less'],
            tasks: ['less']
        },
        less: {
            "development": {
                options: {

                },
                files: {
                    'styles/theme.css': 'styles/theme.less'
                }
            }
            /*production: {
                options: {
                    paths: ['assets/css'],
                    plugins: [
                        new (require('less-plugin-autoprefix'))({ browsers: ["last 2 versions"] }),
                        new (require('less-plugin-clean-css'))(cleanCssOptions)
                    ],
                    modifyVars: {
                        imgPath: '"http://mycdn.com/path/to/images"',
                        bgColor: 'red'
                    }
                },
                files: {
                    'styles/theme.css': 'styles/theme.less'
                }
            }*/
        }
    });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');

    //grunt.registerTask('less', ['less']);
    grunt.registerTask('default', ['less']);

};