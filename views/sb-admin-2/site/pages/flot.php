<?php
/**
 * flot.php
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

$this->title = 'Flot Charts';

p2made\theme\sbAdmin\web\SBAdmin2Asset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\FlotDemoAsset::register($this);
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart"></div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-12 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Pie Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-pie-chart"></div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Multiple Axes Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart-multi"></div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Moving Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart-moving"></div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Bar Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-bar-chart"></div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Flot Charts Usage
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks, and interactive features. In SB Admin, we are using the most recent version of Flot along with a few plugins to enhance the user experience. The Flot plugins being used are the tooltip plugin for hoverable tooltips, and the resize plugin for fully responsive charts. The documentation for Flot Charts is available on their website, <a target="_blank" href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p>
					<a target="_blank" class="btn btn-default btn-lg btn-block" href="http://www.flotcharts.org/">View Flot Charts Documentation</a>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
</div><!-- /#content-wrapper -->
