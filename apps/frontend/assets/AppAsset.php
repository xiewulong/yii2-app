<?php
namespace frontend\assets;

use Yii;
use yii\components\AssetBundle;

class AppAsset extends AssetBundle {

	public $depends = [
		'yii\xui\JqueryAsset',
		'yii\xui\FontAwesomeAsset',
		'common\assets\CommonAsset',
		'yii\xui\ControllerAsset',
	];

}
