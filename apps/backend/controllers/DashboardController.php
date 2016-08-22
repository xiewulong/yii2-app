<?php
namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use backend\components\Controller;

class DashboardController extends Controller {

	//public $defaultAction = 'list';

	public function actionIndex() {
		return $this->render($this->action->id);
	}

}
