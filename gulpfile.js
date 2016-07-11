/* File: gulpfil.js */

var gulp    = require('gulp');
    gutil   = require('gulp-util');


// default 'test' task

gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});

