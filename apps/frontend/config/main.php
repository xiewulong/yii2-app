<?php
$params = array_merge(
	require(__DIR__ . '/../../../common/config/params.php'),
	require(__DIR__ . '/../../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-frontend',
	// 'version' => '1.0',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
	'defaultRoute' => 'site',
	'bootstrap' => ['log'],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf',
		],
		'user' => [
			'identityClass' => 'yii\account\models\User',
			'enableAutoLogin' => false,
			'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
			'loginUrl' => ['account/user/login'],
			'authTimeout' => 60 * 60,
		],
		'session' => [
			'name' => 'frontend',
			'timeout' => 60 * 60,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/home/error',
		],
		/*
		'controller' => [
			'defaultAction' => 'index',
		],
		*/
	],
	'modules' => [
		'site' => [
			'class' => 'yii\cms\FrontendModule',
		],
	],
	'params' => $params,
];
