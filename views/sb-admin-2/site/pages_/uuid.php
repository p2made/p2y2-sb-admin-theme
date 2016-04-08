<?php
/**
 * uuid.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\Uuid;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'UUID';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
		<h2>Lots &amp; lots of UUIDs!</h2>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<h4>Using no subdomain.</h4>
				<p><code>\p2made\helpers\Uuid::uuid()</code></p>
				<ul>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Using subdomain com.example.</h4>
				<p><code>\p2made\helpers\Uuid::uuid('com.example')</code></p>
				<ul>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
				</ul>
			</div>
		</div>

	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div>
