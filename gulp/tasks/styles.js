var gulp = require('gulp');
var sass = require('gulp-sass');
var runSequence = require('run-sequence')
var plumber = require('gulp-plumber');
var autoprefixer = require('gulp-autoprefixer');
var uglifycss = require('gulp-uglifycss');
var rename = require("gulp-rename");

/* Browser SASS */
gulp.task('sass', function(){
  return gulp.src('src/scss/main.scss')
    .pipe(plumber())
    .pipe(sass({outputStyle: 'nested'}))
    .pipe(gulp.dest('src/css'))
});

/* concat Uglify + prefix*/
gulp.task('uglyPrefix', function() {
  return gulp.src('src/css/**/*.css')
  .pipe(autoprefixer({
      cascade: false,
      browsers: ['last 4 versions']
  }))
  // .pipe(uglifycss())
  .pipe(rename("bundle.css"))
  .pipe(gulp.dest('dist/assets/css'));
});

/* compile css */
gulp.task('compile', function (callback) {
  runSequence(
    'sass',
    'uglyPrefix',
    callback
  )
})
