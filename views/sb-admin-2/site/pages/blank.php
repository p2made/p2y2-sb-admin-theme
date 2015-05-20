<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Blank Page';

p2made\assets\MetisMenuAsset::register($this);
p2made\theme\sbAdmin\web\SBAdmin2Asset::register($this);
?>
<div id="content-wrapper">

</div><!-- /#content-wrapper -->
