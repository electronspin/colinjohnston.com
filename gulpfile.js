// gulpfile for colinjohnston-v2

var gulp = require('gulp');

var connect      = require('gulp-connect-php');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();
var concat       = require('gulp-concat');
var filter       = require('gulp-filter');
var jshint       = require('gulp-jshint');
var sass         = require('gulp-sass');
var nano         = require('gulp-cssnano');
var plumber      = require('gulp-plumber');
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');
var sourcemaps   = require('gulp-sourcemaps');
var gutil 			 = require('gulp-util');
//var addsrc 			 = require('gulp-add-src');
//var runSequence  = require('run-sequence');
var order 			 = require("gulp-order");

var reload = browserSync.reload;
//var stream = browserSync.stream;

var configs = {
	connect: { // for gulp-php-connect
		hostname: '127.0.0.1',
		port: '8000',
		base: '.',
		stdio: 'ignore'
	},
	sass: {
		precision: 10,
		includePaths: ['bower_components/']
	},
	autoprefixer: {
		browsers: [
			'> 1%',
			'last 2 versions',
			'Firefox ESR',
			'Opera 12.1' // Update?
		]
	}
};

var paths = {
	css: 'stylesheets/css/',
	//fonts: 'assets/fonts/',
	//images: 'asasets/images/',
	js: 'javascripts/src/',
	scss: 'stylesheets/scss/'
};

var scripts = {
  app: {
    src: [
      // 'bower_components/jquery/dist/jquery.js',
      paths.js + 'foundation.js',
      paths.js + 'custom.js'
    ]
  }
};

// Bip on error and display them in 'stylish' style
var errorHandler = {
  sass: function () {
    gutil.beep();
    browserSync.notify('Error in compiling sass files');
    this.emit('end');
  },
  js: function (err) {
    var color = gutil.colors;
    var message = color.gray(err.lineNumber) + ' ' + err.message;
    message = new gutil.PluginError(err.plugin, message).toString();

    gutil.beep();
    process.stderr.write(message + '\n');
    browserSync.notify('Error in compiling js files');
    this.emit('end');
  }
};

// STYLES

gulp.task('sass', function() {
	// return gulp.src(paths.scss + "**/*.scss")
	return gulp.src(paths.scss + "app.scss")
		.pipe(plumber({
        errorHandler: function (err) {
          console.log(err.message);
          this.emit('end');
        }
    }))
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer(configs.autoprefixer))
		.pipe(gulp.dest(paths.css))
		.pipe(nano())
		.pipe(rename({suffix: '.min'}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(paths.css))
		//.pipe(filter('**/*.css'))
		.pipe(browserSync.stream());
});

// SCRIPTS

gulp.task('js', function(cb) {
	// return gulp.src(paths.js + '**/*.js')
	// 	.pipe(sourcemaps.init())
	// 	.pipe(order([
	// 		"foundation.js",
	// 		"custom.js"
	// 	]))
	for (var i in scripts) {
    if ({}.hasOwnProperty.call(scripts, i)) {
      var script = scripts[i];
      var fileName = i + '.js';

      // var dest = 'javascripts';
      // if (script.template) {
      //   dest += 'templates/';
			// }
			gulp.src(script.src)
				.pipe(sourcemaps.init())
				.pipe(plumber({errorHandler: errorHandler.js}))
				.pipe(uglify())
				.pipe(concat(fileName))
				.pipe(rename({suffix: '.min'}))
				.pipe(sourcemaps.write('.'))
				.pipe(gulp.dest('javascripts'));
			}
		}
	cb();
});

// SERVE

gulp.task('serve', ['sass', 'js'], function() {
	connect.server(configs.connect, function() {
		 browserSync.init({
		 		injectChanges: true,
		 		proxy: configs.connect.hostname + ':' + configs.connect.port,
		 		// snippetOptions: {
		 		// 	ignorePaths: ['panel/**', 'site/accounts/**']
		 		// },
		 });
	});

	gulp.watch([
    '**/*.php',
    //paths.images + '**/*',
		//paths.fonts + '**/*',
		//paths.js + '**/*'
  ]).on('change', reload);

  gulp.watch(paths.scss + "**/*.scss", ['sass']);
	gulp.watch([paths.js + '**/*.js', '!**/*.min.js'], ['js']);

});

// BUILD

gulp.task('build', ['sass', 'js']);


// ALIASES

gulp.task('default', ['serve']);
