// File: gulpfile.js 

var gulp          = require('gulp'),
    gutil         = require('gulp-util'),
    sass          = require('gulp-sass'),
    autoprefixer  = require('gulp-autoprefixer'),
    sourcemaps    = require('gulp-sourcemaps');
    browserSync   = require('browser-sync').create();


// ### Sass 

gulp.task('sass', function() {
  return gulp.src('stylesheets/scss/**/*.scss')
    .pipe(sourcemaps.init())  // Process the original sources
      .pipe(sass())
    .pipe(sourcemaps.write()) // Add the map to modified source
    .pipe(gulp.dest('stylesheets/css'))
    .pipe(browserSync.stream()); // auto-inject into browsers
});

// ### Watch
// 'gulp watch' uses browsersync to check for changes to .php and .scss 

gulp.task('watch', function() {
  browserSync.init({
    //files: ['/**/*.php', '*.php'],
    proxy: 'colinjohnston.dev'
  });
  gulp.watch('stylesheets/scss/**/*.scss', ['sass']);
  gulp.watch(['./*/**/*.php', '*.php']).on('change', browserSync.reload);
});