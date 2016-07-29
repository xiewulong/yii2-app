<?php
$config = [
	'components' => [
		'db' => [
			'dsn' => 'mysql:host=127.0.0.1;dbname=db_dev',
			'username' => 'root',
			'password' => '',
			'tablePrefix' => 'tbpre_',
		],
		'mailer' => [
			'useFileTransport' => true,
		],
		'assetManager' => [
			'linkAssets' => true,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];

if (!YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
	];
	$config['bootstrap'][] = 'gii';
	$config['modules']['gii'] = [
		'class' => 'yii\gii\Module',
	];
}

return $config;
