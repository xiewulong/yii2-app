<?php
use yii\helpers\Html;

$this->title = $name;
?>

<h1><?= Html::encode($this->title) ?></h1>
<p><?= nl2br(Html::encode($message)) ?></p>
