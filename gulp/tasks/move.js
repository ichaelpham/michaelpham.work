var gulp = require('gulp');

/* Move fonts */
gulp.task('fonts', function() {
  return gulp.src('src/fonts/**/*.+(woff2|woff|ttf|svg|eot)')
    .pipe(gulp.dest('dist/assets/fonts'));
});
