<?php
$params = array_merge(
	require(__DIR__ . '/../../../common/config/params.php'),
	require(__DIR__ . '/../../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'name' => 'backend',
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
			'loginUrl' => ['dashboard/login'],
		],
		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'backend',
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
	'modules' => [],
	'params' => $params,
];
