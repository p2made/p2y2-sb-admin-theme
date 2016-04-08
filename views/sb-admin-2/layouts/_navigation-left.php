<?php
/**
 * navigation-left.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;

use p2made\helpers\FA;

$arrowIcon = FA::i('arrow')->tag('span');
?>
<section class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</li>
			<li><?= Html::a(
				FA::fw('dashboard') . 'Dashboard',
				Yii::$app->homeUrl
			) ?></li><!-- Dashboard -->
			<li>
				<a href="#"><?= FA::fw('bar-chart-o') ?> Charts<?= $arrowIcon ?></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Flot Charts', 'url' => ['/site/page', 'view' => 'flot']],
						['label' => 'Morris.js Charts', 'url' => ['/site/page', 'view' => 'morris']],
					],
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				]) ?>
			</li><!-- Charts -->
			<li><?= Html::a(
				FA::fw('table') . 'Tables',
				Url::to(['/site/page', 'view' => 'tables'])
			) ?></li><!-- Tables -->
			<li><?= Html::a(
				FA::fw('edit') . 'Forms',
				Url::to(['/site/page', 'view' => 'forms'])
			) ?></li><!-- Forms -->
			<li>
				<a href="#"><?= FA::fw('calendar') ?> Calendar</a>
				<!-- <a href="calendar.php"><?= FA::fw('calendar') ?> Calendar</a> -->
			</li><!-- Calendar -->
			<li>
				<a href="#"><?= FA::fw('wrench') ?> UI Elements<?= $arrowIcon ?></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Panels and Wells', 'url' => ['/site/page', 'view' => 'panels-wells']],
						['label' => 'Buttons', 'url' => ['/site/page', 'view' => 'buttons']],
						['label' => 'Notifications', 'url' => ['/site/page', 'view' => 'notifications']],
						['label' => 'Typography', 'url' => ['/site/page', 'view' => 'typography']],
						['label' => 'Grid', 'url' => ['/site/page', 'view' => 'grid']],
					],
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				]) ?>
			</li><!-- UI Elements -->
			<li>
				<a href="#"><?= FA::fw('image') ?> Icons<?= $arrowIcon ?></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Font Awesome', 'url' => ['/site/page', 'view' => 'font-awesome']],
						['label' => 'Font Awesome Examples', 'url' => ['/site/page', 'view' => 'font-awesome-examples']],
						['label' => 'Glyphicons', 'url' => ['/site/page', 'view' => 'glyphicons']],
						['label' => 'Flag Icon CSS', 'url' => ['/site/page', 'view' => 'flag-icon-css']],
						['label' => 'Bootstrap Social', 'url' => ['/site/page', 'view' => 'bootstrap-social']],
					],
				]) ?>
			</li><!-- Icons -->
			<li>
				<a href="#"><?= FA::fw('sitemap') ?> Multi-Level Dropdown<?= $arrowIcon ?></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Third Level <?= $arrowIcon ?></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
						</ul>
					</li>
				</ul>
			</li><!-- Multi-Level Dropdown -->
			<li>
				<a href="#"><?= FA::fw('files-o') ?> Sample Pages<?= $arrowIcon ?></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
						[ // Signup Page for basic
							'label' => '<span class="glyphicon glyphicon-user fa-fw"></span> Signup Page',
							'url' => ['/site/signup'],
							'visible' =>Yii::$app->user->isGuest
						],
						[ // login Page for basic
							'label' => '<span class="fa fa-lock fa-fw"></span> Login Page',
							'url' => ['/site/login'],
							'visible' =>Yii::$app->user->isGuest
						],
					],
				]) ?>
			</li><!-- Sample Pages -->
			<li>
				<a href="#"><?= FA::fw('coffee') ?> Developer<?= $arrowIcon ?></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => '<span class="fa fa-file-code-o fa-fw"></span> Gii', 'url' => ['/gii']],
						['label' => '<span class="fa fa-dashboard fa-fw"></span> Debug', 'url' => ['/debug']],
					],
				]) ?>
			</li><!-- Developer -->
		</ul>
	</div>
</section>
