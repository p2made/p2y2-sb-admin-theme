<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

$this->title = 'Blank Page';

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">


		</div>
	</div>

	<!-- /#pragma -->

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>

</div><!-- /#content-wrapper -->
