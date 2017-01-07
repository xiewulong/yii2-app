<?php
return [
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => '',
		],
		'user' => [
			// 'identityCookie' => ['domain' => '.domain.com'],
		],
		'session' => [
			'name' => 'backend-development',
			// 'cookieParams' => ['domain' => '.domain.com'],
		],
	],
	'name' => 'backend(development)',
];
