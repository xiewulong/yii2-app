<?php
$params = array_merge(
	require(__DIR__ . '/../../../common/config/params.php'),
	require(__DIR__ . '/../../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	// 'version' => '1.0',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'defaultRoute' => 'dashboard',
	'bootstrap' => ['log'],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => false,
			'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
			'loginUrl' => ['account/'],
			// 'authTimeout' => 60 * 60,
		],
		'session' => [
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
			'errorAction' => 'dashboard/error',
		],
		/*
		'controller' => [
			'defaultAction' => 'index',
		],
		*/
	],
	'modules' => [
		'account' => [
			'class' => 'yii\account\Module',
			'identityClass' => 'common\models\User',
		],
	],
	'params' => $params,
];
