<?php
namespace backend\assets;

use Yii;

class ControllerAsset extends \yii\xui\ControllerAsset {

	public $depends = [
		'yii\xui\BootstrapAsset',
		'yii\xui\FontAwesomeAsset',
		'yii\xui\AdminAsset',
		'common\assets\CommonAsset',
	];

}
