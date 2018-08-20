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
//var runSequence  = require('run-sequence');

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
	//js: 'assets/js/',
	scss: 'stylesheets/scss/'
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

// SERVE

gulp.task('serve', ['sass'], function() {
	connect.server(configs.connect, function() {
		 browserSync.init({
		 		injectChanges: true,
		 		proxy: configs.connect.hostname + ':' + configs.connect.port,
		 		snippetOptions: {
		 			// ignorePaths: ['panel/**', 'site/accounts/**']
		 		},
		 });
	});

	gulp.watch([
    'site/**/*.php',
    paths.images + '**/*',
    paths.fonts + '**/*'
  ]).on('change', reload);

  gulp.watch(paths.scss + "**/*.scss", ['sass']);
	//gulp.watch(paths.css, ['styles']);

});

// BUILD

gulp.task('build', ['sass']);


// ALIASES

gulp.task('default', ['serve']);
