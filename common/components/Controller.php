<?php

namespace common\components;

use Yii;

class Controller extends \yii\web\Controller {

	public function init() {
		parent::init();
	}

	public function respond($response = null, $format = \yii\web\Response::FORMAT_JSON) {
		\Yii::$app->response->format = $format;
		return $response;
	}

}
