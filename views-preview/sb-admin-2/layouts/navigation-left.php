<?php
/**
 * navigation-left.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
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
				'<i class="fa fa-dashboard fa-fw"></i> Dashboard',
				Yii::$app->homeUrl
			) ?></li><!-- Dashboard -->
			<li>
				<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
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
				'<i class="fa fa-table fa-fw"></i> Tables',
				Url::to(['/site/page', 'view' => 'tables'])
			) ?></li><!-- Tables -->
			<li><?= Html::a(
				'<i class="fa fa-edit fa-fw"></i> Forms',
				Url::to(['/site/page', 'view' => 'forms'])
			) ?></li><!-- Forms -->
			<li>
				<a href="#"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
				<!-- <a href="calendar.php"><i class="fa fa-calendar fa-fw"></i> Calendar</a> -->
			</li><!-- Calendar -->
			<li>
				<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Panels and Wells', 'url' => ['/site/page', 'view' => 'panels-wells']],
						['label' => 'Buttons', 'url' => ['/site/page', 'view' => 'buttons']],
						['label' => 'Notifications', 'url' => ['/site/page', 'view' => 'notifications']],
						['label' => 'Typography', 'url' => ['/site/page', 'view' => 'typography']],
						['label' => ' Icons', 'url' => ['/site/page', 'view' => 'icons']],
						['label' => 'Grid', 'url' => ['/site/page', 'view' => 'grid']],
					],
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				]) ?>
			</li><!-- UI Elements -->
			<li>
				<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Third Level <span class="fa arrow"></span></a>
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
				<a href="#"><i class="fa fa-coffee fa-fw"></i> Developer<span class="fa arrow"></span></a>
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => '<span class="fa fa-file-code-o fa-fw"></span> Gii', 'url' => ['/gii']],
						['label' => '<span class="fa fa-dashboard fa-fw"></span> Debug', 'url' => ['/debug']],
					],
				]) ?>
			</li><!-- Developer -->
			<li>
				<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
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
		</ul>
	</div>
</section>
