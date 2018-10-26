var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require("browser-sync");

gulp.task('watch', ['serve'], function (){
  gulp.watch('src/scss/**/*.scss', ['compile']);
  gulp.watch('src/js/**/*.js', ['bundle']);
  //
  gulp.watch('src/js/bundle.js').on('change', browserSync.reload);
  gulp.watch('src/scss/**/*.scss').on('change', browserSync.reload);
  gulp.watch('dist/**/*.php').on('change', browserSync.reload);
})
