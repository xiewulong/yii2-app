/*!
 * gulp file
 * xiewulong <xiewulong@vip.qq.com>
 * create: 2016/10/10
 * since: 0.0.1
 */
const PATH = require('path');
const FS = require('fs');

const GULP = require('gulp');
const PLUGINS = require('gulp-load-plugins')();

const BASE_PATH = PATH.join(__dirname, 'apps');
const CONFIG = {
	css: {
		src: PATH.join('scss', '**', '*.scss'),
		dist: PATH.join('web', 'css'),
		outputStyles: ['compact', 'compressed'],
	},
	js: {
		src: PATH.join('js', '**', '*.js'),
		dist: PATH.join('web', 'js'),
	},
	extensions: [
		// PATH.join('xiewulong', 'yii2-account'),
		// PATH.join('xiewulong', 'yii2-attachment'),
		// PATH.join('xiewulong', 'yii2-xui'),
	],
};

let ns;
let _ns = (name, parent = ns) => (parent ? parent + ':' : '') + name;

let appsTasks = {
	names: [],
	css: [],
	js: [],
};
let appsTasksRegister = (app) => {
	let cssTaskName = _ns('scss', app);
	let cssTaskSrc = PATH.join(BASE_PATH, app, CONFIG.css.src);
	let cssTaskDist = PATH.join(BASE_PATH, app, CONFIG.css.dist);
	GULP.task(cssTaskName, function() {
		CONFIG.css.outputStyles.forEach((style) => {
			GULP.src(cssTaskSrc)
				.pipe(PLUGINS.plumber())
				.pipe(PLUGINS.sourcemaps.init())
				.pipe(PLUGINS.sass({outputStyle: style}).on('error', PLUGINS.sass.logError))
				.pipe(PLUGINS.autoprefixer())
				.pipe(PLUGINS.rename((path) => {
					if(style == 'compressed') {
						path.basename += '.min';
					}
				}))
				.pipe(PLUGINS.sourcemaps.write('.'))
				.pipe(GULP.dest(cssTaskDist));
		});
	});
	appsTasks.names.push(cssTaskName);
	appsTasks.css.push({
		glob: cssTaskSrc,
		tasks: [cssTaskName],
	});

	let jsTaskName = _ns('babel', app);
	let jsTaskSrc = PATH.join(BASE_PATH, app, CONFIG.js.src);
	let jsTaskDist = PATH.join(BASE_PATH, app, CONFIG.js.dist);
	GULP.task(jsTaskName, function() {
		GULP.src(jsTaskSrc)
			.pipe(PLUGINS.plumber())
			.pipe(PLUGINS.sourcemaps.init())
			.pipe(PLUGINS.babel())
			.pipe(PLUGINS.sourcemaps.write('.'))
			.pipe(GULP.dest(jsTaskDist));
		GULP.src(jsTaskSrc)
			.pipe(PLUGINS.plumber())
			.pipe(PLUGINS.sourcemaps.init())
			.pipe(PLUGINS.babel())
			.pipe(PLUGINS.uglify())
			.pipe(PLUGINS.rename(function(path) {
				path.basename += '.min';
			}))
			.pipe(PLUGINS.sourcemaps.write('.'))
			.pipe(GULP.dest(jsTaskDist));
	});
	appsTasks.names.push(jsTaskName);
	appsTasks.js.push({
		glob: jsTaskSrc,
		tasks: [jsTaskName],
	});
};

FS.readdirSync(BASE_PATH).forEach((file) => {
	FS.statSync(PATH.join(BASE_PATH, file)).isDirectory() && appsTasksRegister(file);
});

GULP.task('watch', function() {
	appsTasks.css.forEach(({glob, tasks}) => {
		GULP.watch(glob, tasks);
	});
	appsTasks.js.forEach(({glob, tasks}) => {
		GULP.watch(glob, tasks);
	});
});

GULP.task('release', (GULP.tasks.release ? GULP.tasks.release.dep : []).concat(appsTasks.names));
GULP.task('default', (GULP.tasks.default ? GULP.tasks.default.dep : []).concat(['watch']));

CONFIG.extensions.forEach((extension) => require(PATH.join(__dirname, 'vendor', extension, 'gulpfile.babel.js')));
