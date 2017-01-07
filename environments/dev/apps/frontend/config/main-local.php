<?php
return [
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => '',
		],
		'user' => [
			// 'identityCookie' => ['domain' => '.dev.domain.com'],
		],
		'session' => [
			'name' => 'frontend-development',
			// 'cookieParams' => ['domain' => '.dev.domain.com'],
		],
	],
	'name' => 'frontend(development)',
];
