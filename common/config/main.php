<?php

return [
	// 'charset' => 'utf-8',
	// 'timeZone' => 'PRC',
	// 'language' => 'zh-cn',
	// 'layout' => 'main',
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'charset' => 'utf8',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
		],
		'urlManager' => [
			'showScriptName' => true,
			// 'showScriptName' => false,
			// 'enablePrettyUrl' => true,
		],
		/*
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
		'i18n' => [
			'translations' => [
				'common' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@common/messages',
				],
			],
		],
		'view' => [
			'defaultExtension' => 'html',
		],
		*/
	],
	'modules' => [],
];
