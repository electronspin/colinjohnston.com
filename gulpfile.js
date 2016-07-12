/* File: gulpfil.js */

var gulp          = require('gulp'),
    gutil         = require('gulp-util'),
    sass          = require('gulp-sass'),
    autoprefixer  = require('gulp-autoprefixer'),
    sourcemaps    = require('gulp-sourcemaps');


/* default 'test' task */

gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});

/* basic watch task with sass processing */

gulp.task('build-css', function() {
  return gulp.src('stylesheets/scss/**/*.scss')
    .pipe(sourcemaps.init())  // Process the original sources
      .pipe(sass())
    .pipe(sourcemaps.write()) // Add the map to modified source
    .pipe(gulp.dest('stylesheets/css'));
});

/* watch task */

gulp.task('watch', function() {
  gulp.watch('stylesheets/scss/**/*.scss', ['build-css']);
});