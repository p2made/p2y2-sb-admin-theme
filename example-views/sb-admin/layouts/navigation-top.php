<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<?= Html::a('P<sup>2</sup>SB Admin', Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?>
	<!-- <?= Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?> -->
</div>

<ul class="nav navbar-right top-nav">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu message-dropdown">
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-footer">
				<a href="#">Read All New Messages</a>
			</li>
		</ul><!-- /.message-dropdown -->
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
		<ul class="dropdown-menu alert-dropdown">
			<li>
				<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">View All</a>
			</li>
		</ul>
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li>
				<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li>
				<?= Html::a(
					'<i class="fa fa-power-off fa-fw"></i> Logout',
					['/site/logout'],
					['data-method' => 'post']
				) ?>
			</li>
		</ul>
	</li><!-- /.dropdown -->
</ul>
