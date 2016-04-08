<?php
/**
 * morris.php
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
p2made\assets\MorrisAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\assets\MorrisDemoData::register($this);

/* @var $this yii\web\View */

$this->title = 'Morris.js Charts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
		<!-- The iconic font and CSS toolkit -->
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Area Chart Example
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="morris-area-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Bar Chart Example
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="morris-bar-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Line Chart Example
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="morris-line-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Donut Chart Example
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="morris-donut-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Morris.js Usage
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
						<a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
		</div>

	</div><!-- /.body-content -->

</div><!-- /#content-wrapper -->
