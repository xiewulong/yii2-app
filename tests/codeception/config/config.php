<?php

return [
	'language' => 'en-US',
	'controllerMap' => [
		'fixture' => [
			'class' => 'yii\faker\FixtureController',
			'fixtureDataPath' => '@tests/codeception/common/fixtures/data',
			'templatePath' => '@tests/codeception/common/templates/fixtures',
			'namespace' => 'tests\codeception\common\fixtures',
		],
	],
	'components' => [
		'db' => [
			'charset' => 'utf8',
		],
		'mailer' => [
			'useFileTransport' => true,
		],
		'urlManager' => [
			'showScriptName' => true,
			// 'showScriptName' => false,
			// 'enablePrettyUrl' => true,
		],
	],
];
