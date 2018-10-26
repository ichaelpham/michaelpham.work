var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

    gulp.task('connect', function() {
      connect.server({
        port: 3001,
        base: './dist'
      });
    });

    gulp.task('serve',  ['connect'],function () {
      browserSync.init({
        proxy: 'localhost:3001'
      });
    });
