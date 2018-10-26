var gulp = require('gulp');
var runSequence = require('run-sequence')
var requireDir = require('require-dir');

// Require all tasks.
requireDir('./gulp/tasks/');

/* Startup task */
gulp.task('default', function (callback) {
  runSequence(['serve', 'watch'],
    callback
  )
})

/* Build task */
gulp.task('build', function (callback) {
  runSequence('clean:dist',
    ['compile', 'bundle'],
    ['fonts'],
    callback);
});
