<?php
namespace frontend\assets;

use Yii;

class ControllerAsset extends \yii\xui\ControllerAsset {

	public $depends = [
		'yii\xui\JqueryAsset',
		'yii\xui\FontAwesomeAsset',
		'common\assets\CommonAsset',
	];

}
