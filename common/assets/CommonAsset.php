<?php
namespace common\assets;

use Yii;
use yii\xui\ControllerAsset;

class CommonAsset extends ControllerAsset {

	public $css = [
		'css/common.css',
	];

	public $js = [
		'js/common.js',
	];

	public $depends = [
		'yii\xui\BootstrapAsset',
	];

}
