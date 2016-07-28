<?php

namespace common\components;

use Yii;

class Controller extends \yii\web\Controller {

	public function init() {
		parent::init();

		if($referrer = \Yii::$app->request->get('referrer')) {
			\Yii::$app->user->setReturnUrl($referrer);
		}
	}

	public function respond($response = null, $format = \yii\web\Response::FORMAT_JSON, $callbackParam = null) {
		\Yii::$app->response->format = \Yii::$app->request->get('format', $format);
		if(($callback = \Yii::$app->request->get($callbackParam)) && \Yii::$app->response->format == 'jsonp' && $response) {
			$_response = $response;
			$response = [
				'data' => $_response,
				'callback' => $callback,
			];
		}

		return $response;
	}

}
