<?php
return [
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => '',
		],
		'user' => [
			'authTimeout' => 60 * 60,
			// 'identityCookie' => ['domain' => '.domain.com'],
		],
		'session' => [
			'timeout' => 60 * 60,
			// 'cookieParams' => ['domain' => '.domain.com'],
		],
	],
	'name' => 'frontend',
];
