/*!
 * webpack config - app
 * xiewulong <xiewulong@vip.qq.com>
 * create: 2016/11/16
 * since: 0.0.1
 */
const PATH = require('path');
const FS = require('fs');
const BASE_PATH = __dirname;

// const PROD = process.argv.indexOf('-p') >= 0 || process.argv.indexOf('--optimize-minimize') >= 0;
// const ENV = PROD ? 'production' : 'development';
// const MIN = PROD ? '.min' : '';

let extensions = [
	// PATH.join('extensionPath', 'extensionName'),
];

let configs = [];
let configRegister = (path) => {
	let configFile = PATH.join(path, 'webpack.config.js');
	if(!FS.existsSync(configFile)) return;

	let config = require(configFile);
	config.name = path;
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
