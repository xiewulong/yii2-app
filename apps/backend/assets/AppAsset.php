<?php
namespace backend\assets;

use Yii;
use yii\components\AssetBundle;

class AppAsset extends AssetBundle {

	public $depends = [
		'yii\xui\BootstrapAsset',
		'yii\xui\FontAwesomeAsset',
		'yii\xui\AdminAsset',
		'common\assets\CommonAsset',
		'yii\xui\ControllerAsset',
	];

}
