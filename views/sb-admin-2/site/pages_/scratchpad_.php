<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Scratchpad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="body-content">
	</div><!-- /.body-content -->

</div><!-- /#content-wrapper -->
