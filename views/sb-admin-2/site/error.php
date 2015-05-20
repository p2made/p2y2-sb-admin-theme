<?php
/**
 * error.php
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

$this->title = $name;

p2made\theme\sbAdmin\web\SBAdmin2Asset::register($this);
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-sm-12">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-2">
							<h1><div class="huge"><i class="fa fa-warning"></i></div></h1>
						</div>
						<div class="col-md-10">
							<h3><?= nl2br(Html::encode($message)) ?></h3>
						</div>
					</div>
				</div>
				<div class="panel-body">

					<p>The above error occurred while the Web server was processing your request. Please contact us if you think this is a server error. Thank you. Meanwhile, you may <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a> or try using the search form.</p>

					<form class='search-form'>
						<div class='input-group'>
							<input type="text" name="search" class='form-control' placeholder="Search">
							<div class="input-group-btn">
								<button type="submit" name="submit" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div><!-- /.row -->
</div><!-- /#page-wrapper -->
