<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;

?>
<section class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
	<ul class="nav navbar-nav side-nav">
		<li><?= Html::a(
			'<i class="fa fa-dashboard fa-fw"></i> Dashboard',
			Yii::$app->homeUrl
		) ?></li><!-- Dashboard -->
		<li>
			<a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
		</li><!-- Charts -->
		<li>
			<a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
		</li><!-- Tables -->
		<li>
			<a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a>
		</li><!-- Forms -->
		<li>
			<a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
		</li><!-- Bootstrap Elements -->
		<li>
			<a href="bootstrap-grid.php"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
		</li><!-- Bootstrap Grid -->
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href="#">Dropdown Item</a>
				</li>
				<li>
					<a href="#">Dropdown Item</a>
				</li>
			</ul>
		</li><!-- Dropdown -->
		<li>
			<a href="blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
		</li><!-- Blank Page -->
		<li>
			<a href="index-rtl.php"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
		</li><!-- RTL Dashboard -->
	</ul>
</section>
