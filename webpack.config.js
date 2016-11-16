/*!
 * webpack config - app
 * xiewulong <xiewulong@vip.qq.com>
 * create: 2016/11/16
 * since: 0.0.1
 */
const PATH = require('path');
const FS = require('fs');
const BASE_PATH = __dirname;
const MIN = process.argv.indexOf('-p') >= 0 || process.argv.indexOf('--optimize-minimize') >= 0 ? '.min' : '';

let webpack = require('webpack');

let extensions = [
	// PATH.join('xiewulong', 'yii2-account'),
	// PATH.join('xiewulong', 'yii2-attachment'),
	// PATH.join('xiewulong', 'yii2-xui'),
];

let configs = [];
let configRegister = (path) => {
	let configFile = PATH.join(path, 'webpack.config.js');
	if(!FS.existsSync(configFile)) return;
	let config = require(configFile);
	config.name = path;
	config.plugins.push(new webpack.DefinePlugin({ENV: JSON.stringify(path)}));
	configs.push(config);
}

let appsPath = PATH.join(BASE_PATH, 'apps');
FS.readdirSync(appsPath).forEach((file) => {
	configRegister(PATH.join(appsPath, file));
});

extensions.forEach((extension) => {
	configRegister(PATH.join(BASE_PATH, 'vendor', extension));
});

module.exports = configs;
