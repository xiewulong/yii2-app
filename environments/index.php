<?php

/**
* The manifest of files that are local to specific environment.
* This file returns a list of environments that the application
* may be installed under. The returned data must be in the following
* format:
*
* ```php
* return [
*     'environment name' => [
*         'path' => 'directory storing the local files',
*         'skipFiles'  => [
*             // list of files that should only copied once and skipped if they already exist
*         ],
*         'setWritable' => [
*             // list of directories that should be set writable
*         ],
*         'setExecutable' => [
*             // list of files that should be set executable
*         ],
*         'setCookieValidationKey' => [
*             // list of config files that need to be inserted with automatically generated cookie validation keys
*         ],
*         'createSymlink' => [
*             // list of symlinks to be created. Keys are symlinks, and values are the targets.
*         ],
*     ],
* ];
* ```
*/

return [
	'Production' => [
		'path' => 'prod',
		'skipFiles' => [],
		'setWritable' => [
			'apps/backend/runtime',
			'apps/ackend/web/assets',
			'apps/frontend/runtime',
			'apps/frontend/web/assets',
			'services/api/runtime',
			'services/api/web/assets',
		],
		'setExecutable' => [
			'yii',
		],
		'setCookieValidationKey' => [
			'apps/backend/config/main-local.php',
			'apps/frontend/config/main-local.php',
			'services/api/config/main-local.php',
		],
		'createSymlink' => [],
	],
	'Development' => [
		'path' => 'dev',
		'skipFiles' => [],
		'setWritable' => [
			'apps/backend/runtime',
			'apps/backend/web/assets',
			'apps/frontend/runtime',
			'apps/frontend/web/assets',
			'services/api/runtime',
			'services/api/web/assets',
		],
		'setExecutable' => [
			'yii',
			'tests/codeception/bin/yii',
		],
		'setCookieValidationKey' => [
			'apps/backend/config/main-local.php',
			'apps/frontend/config/main-local.php',
			'services/api/config/main-local.php',
		],
		'createSymlink' => [],
	],
];
