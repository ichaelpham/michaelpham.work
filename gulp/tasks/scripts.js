var gulp = require('gulp');
var browserify = require('browserify');
var uglify = require('gulp-uglify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var plumber = require('gulp-plumber');

gulp.task('bundle', function() {
  return browserify({ entries: ['src/js/index.js'] })
    .bundle()
    .pipe(plumber())
    .pipe(source('bundle.js'))
    .pipe(buffer())
    // .pipe(uglify())
    .pipe(gulp.dest('./dist/assets/scripts'));
});
