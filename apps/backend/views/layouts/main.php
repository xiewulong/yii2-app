<?php
use yii\helpers\Html;
use backend\assets\ControllerAsset;

ControllerAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!doctype html>

<!-- begin html -->
<html lang="<?= \Yii::$app->language ?>" xml:lang="<?= \Yii::$app->language ?>">

<!-- begin head -->
<head>
<title><?= Html::encode($this->title) ?></title>
<meta charset="<?= \Yii::$app->charset ?>" />
<meta name="author" content="xiewulong<xiewulong@vip.qq.com>" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<!-- begin ie modes -->
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="renderer" content="webkit" />
<!-- end ie modes -->

<!-- begin mobile -->
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="format-detection" content="telephone=no,email=no" />
<!-- end mobile -->

<!-- begin csrf -->
<?= Html::csrfMetaTags() ?>
<!-- end csrf -->

<?php $this->head(); ?>
</head>
<!-- end head -->

<!-- begin body -->
<body>
<?php $this->beginBody(); ?>

<?= $content ?>

<!-- begin admin-alerts -->
<div class="admin-alerts J-admin-alerts"></div>
<?php
foreach(\Yii::$app->session->allFlashes as $flash) {
	list($type, $message) = explode('|', $flash);
	$this->registerJs('$.alert("' . addslashes($message) . '", "' . $type . '");', 3);
}
?>
<!-- end admin-alerts -->

<?php $this->endBody(); ?>
</body>
<!-- end body -->

</html>
<!-- end html -->
<?php $this->endPage(); ?>
