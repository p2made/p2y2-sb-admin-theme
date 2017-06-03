<?php
/**
 * main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

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
