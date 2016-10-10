<?php
namespace common\assets;

use Yii;
use yii\components\AssetBundle;

class CommonAsset extends AssetBundle {

	public $basePath = '@webroot';

	public $baseUrl = '@web';

	public function init() {
		parent::init();

		$this->css[] = 'css/common' . $this->minimal . '.css';
		$this->js[] = 'js/common' . $this->minimal . '.js';
	}

}
