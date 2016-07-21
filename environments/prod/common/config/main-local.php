<?php

return [
	'components' => [
		'db' => [
			'dsn' => 'mysql:host=127.0.0.1;dbname=db_prod',
			'username' => 'root',
			'password' => '',
			'tablePrefix' => 'tbpre_',
		],
		'mailer' => [
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.exmail.qq.com',
				'username' => '',
				'password' => '',
				'port' => '465',
				'encryption' => 'ssl',
			],
		],
		'assetManager' => [
			'appendTimestamp' => true,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		/*
		'cache' => [
			'class' => 'yii\caching\MemCache',
			'useMemcached' => true,
			'username' => '',
			'password' => '',
			'servers' => [
				[
					'host' => '',
				],
			],
		],
		'session' => [
			'class' => 'yii\web\CacheSession',
		],
		*/
	],
];
