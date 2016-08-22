<?php
namespace api\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use api\components\Controller;

class HomeController extends Controller {

	// public $defaultAction = 'list';

    public function actionIndex() {
        return 'api';
    }

}
