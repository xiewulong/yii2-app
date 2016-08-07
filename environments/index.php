<?php
$env = [
	// list of files that should only copied once and skipped if they already exist
	'skipFiles' => [],

	// list of directories that should be set writable
	'setWritable' => [
		'apps/backend/runtime',
		'apps/backend/web/assets',
		'apps/frontend/runtime',
		'apps/frontend/web/assets',
		'services/api/runtime',
		'services/api/web/assets',
	],

	// list of files that should be set executable
	'setExecutable' => [
		'yii',
	],

	// list of config files that need to be inserted with automatically generated cookie validation keys
	'setCookieValidationKey' => [
		'apps/backend/config/main-local.php',
		'apps/frontend/config/main-local.php',
		'services/api/config/main-local.php',
	],

	// list of symlinks to be created. Keys are symlinks, and values are the targets
	'createSymlink' => [
		// 'console/migrations/m140506_102106_rbac_init.php' => 'vendor/yiisoft/yii2/rbac/migrations/m140506_102106_rbac_init.php',
		// 'console/migrations/m141106_185632_log_init.php' => 'vendor/yiisoft/yii2/log/migrations/m141106_185632_log_init.php',
		// 'console/migrations/m150207_210500_i18n_init.php' => 'vendor/yiisoft/yii2/i18n/migrations/m150207_210500_i18n_init.php',
		// 'console/migrations/m150909_153426_cache_init.php' => 'vendor/yiisoft/yii2/caching/migrations/m150909_153426_cache_init.php',
		// 'console/migrations/m160313_153426_session_init.php' => 'vendor/yiisoft/yii2/web/migrations/m160313_153426_session_init.php',

		// 'console/migrations/m160731_032036_account_init.php' => 'vendor/xiewulong/yii2-account/migrations/m160731_032036_account_init.php',
		// 'console/migrations/m160807_123425_cms_init.php' => 'vendor/xiewulong/yii2-cms/migrations/m160807_123425_cms_init.php',
	],
];

$_envs = [
	'Production' => 'prod',
	'Development' => 'dev',
];

$envs = [];
foreach($_envs as $name => $path) {
	$_env = $env;

	// directory storing the local files
	$_env['path'] = $path;

	// set special enviroments
	if(in_array($name, ['Development'])) {
		$_env['setExecutable'][] = 'tests/codeception/bin/yii';
	}

	$envs[$name] = $_env;
}

return $envs;
