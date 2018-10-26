var gulp = require('gulp');
var del = require('del');

/* Cache cleaner */
gulp.task('cache:clear', function (callback) {
  return cache.clearAll(callback)
})

/* Dist cleaner */
gulp.task('clean:dist', function() {
  return del.sync('dist');
})
