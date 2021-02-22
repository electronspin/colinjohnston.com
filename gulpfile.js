// --------------------------------- //
// gulpfile for colinjohnston.com v2 //
// --------------------------------- //

const gulp 				 = require('gulp');

const connect      = require('gulp-connect-php');
const autoprefixer = require('gulp-autoprefixer');
const browsersync  = require('browser-sync').create();
const concat       = require('gulp-concat');
const sass         = require('gulp-sass');
const nano         = require('gulp-cssnano');
const plumber      = require('gulp-plumber');
const rename       = require('gulp-rename');
const uglify       = require('gulp-uglify');
const sourcemaps   = require('gulp-sourcemaps');
const gutil 			 = require('gulp-util');

// CONFIGS

// This can all be refactored to a config file in Gulp 4 style

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
			'Opera 12.1' // Update!
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

// TODO: Reractor this to be um better

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

function css(cb) {
	// TODO: Refactor 
	gulp.src(paths.src.styles + "main.scss")
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
		.pipe(browsersync.stream());
		cb();
}

// SCRIPTS

function js(cb) {
	// TODO: Refactor 
	for (var i in scripts) {
    if ({}.hasOwnProperty.call(scripts, i)) {
      var script = scripts[i];
      var fileName = i + '.js';
			gulp.src(script.src)
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
}

// SERVE

function serve(cb) {
	// TODO: Refactor 
	connect.server(configs.connect, function() {
		 browsersync.init({
		 		injectChanges: true,
				proxy: configs.connect.hostname + ':' + configs.connect.port,
				browser: 'Firefox Developer Edition',
				// browser: 'Safari',
		 		snippetOptions: {
		 			ignorePaths: ['panel/**', 'site/accounts/**']
		 		},
		 });
	});
	cb();
}

// WATCH

function reload(cb){
  browsersync.reload();
  cb();
}

const watchCSS = () => gulp.watch(paths.src.styles + '**/*.scss', gulp.series(css, reload));
const watchJS = () => gulp.watch(paths.src.scripts + '**/*.js', gulp.series(js, reload));
const watchPHP = () => gulp.watch('./**/*.php', reload);
const watchTXT = () => gulp.watch('./**/*.txt', reload);

// DEV

const dev = gulp.series(
	serve,
	gulp.parallel(css, js),
	gulp.parallel(watchCSS, watchJS, watchPHP, watchTXT),
);
exports.default = dev;

// BUILD

// No need. Use default task for build and watch.
