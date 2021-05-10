<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@finance', dirname(dirname(__DIR__)) . '/finance');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

function __($message, $params = array())
{
    return Yii::t('main', $message, $params, Yii::$app->language);
}

function _url($url = '', $scheme = false)
{
    return \yii\helpers\Url::to($url, $scheme);
}
