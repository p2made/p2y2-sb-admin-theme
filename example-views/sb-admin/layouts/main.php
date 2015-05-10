<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$layout = 'primary';

if (Yii::$app->controller->action->id === 'login') {
	$layout = 'user-entry';
}
if (Yii::$app->controller->action->id === 'signup') {
	$layout = 'user-entry';
}

echo $this->render(
	$layout, ['content' => $content]
);
