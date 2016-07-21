<?php

// common
Yii::setAlias('@common', dirname(__DIR__));

// console
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

// apps
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/apps/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/apps/backend');

// services
Yii::setAlias('@api', dirname(dirname(__DIR__)) . '/services/api');
