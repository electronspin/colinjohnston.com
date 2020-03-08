// gulpfile for colinjohnston-v2 (aka kirby-merge)

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
// var addsrc 			 = require('gulp-add-src');
// var runSequence  = require('run-sequence');
var order 			 = require("gulp-order");

var reload = browserSync.reload;

var configs = {
	connect: { 
		hostname: 'colinjohnston.local',
		port: '80',
		//base: './public/',
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
	},
	src: 'src/',
	dist: 'public/assets/'
};

var paths = {
	src: {
		scripts: configs.src + 'javascripts/',
		styles: configs.src + 'stylesheets/'
	},
	dist: {
		scripts: configs.dist + 'js/',
		styles: configs.dist + 'css/'
	}	
};

var scripts = {
  app: {
    src: [
			// 'bower_components/jquery/dist/jquery.js',
			'node_modules/lazysizes/lazysizes.js',
      paths.src.scripts + 'foundation.js',
			paths.src.scripts + 'custom.js',
    ]
  }
};

// ERRORS

// Beep on error and display them in 'stylish' style

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

// PHP

gulp.task('php', reload);

// STYLES

gulp.task('sass', function() {
	return gulp.src(paths.src.styles + "main.scss")
		.pipe(plumber({
        errorHandler: function (err) {
          console.log(err.message);
          this.emit('end');
        }
    }))
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer(configs.autoprefixer))
		.pipe(gulp.dest(paths.dist.styles))
		.pipe(nano())
		.pipe(rename({suffix: '.min'}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(paths.dist.styles))
		//.pipe(filter('**/*.css'))
		.pipe(browserSync.stream());
});

// SCRIPTS

gulp.task('js', function(cb) {
	for (var i in scripts) {
    if ({}.hasOwnProperty.call(scripts, i)) {
      var script = scripts[i];
      var fileName = i + '.js';
			return gulp.src(script.src)
				.pipe(sourcemaps.init())
				.pipe(plumber({errorHandler: errorHandler.js}))
				.pipe(uglify())
				.pipe(concat(fileName))
				.pipe(rename({suffix: '.min'}))
				.pipe(sourcemaps.write('.'))
				.pipe(gulp.dest(paths.dist.scripts));
			}
		}
	cb();
});

// SERVE

gulp.task('serve', ['sass', 'js'], function() {
	// connect.server(configs.connect, function() {
		 browserSync.init({
		 		injectChanges: true,
				proxy: configs.connect.hostname + ':' + configs.connect.port,
				browser: 'FirefoxDeveloperEdition',
		 		snippetOptions: {
		 			ignorePaths: ['panel/**', 'site/accounts/**']
		 		},
		 });
	// });

	
	gulp.watch([
    './**/*.php',
    // paths.src.images + '**/*', // TODO
		paths.src.styles + '**/*',
		paths.src.scripts + '**/*'
	]).on('change', reload);

  gulp.watch(paths.src.styles + "**/*.scss", ['sass']);
	gulp.watch([paths.src.scripts + '**/*.js', '!**/*.min.js'], ['js']);

});

// BUILD

gulp.task('build', ['sass', 'js']);


// ALIASES

gulp.task('default', ['serve']);
