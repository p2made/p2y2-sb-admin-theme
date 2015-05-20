<?php
/**
 * signup.php
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

$this->title = 'Signup';

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-user form-control-feedback'></i>",
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions3 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];
?>
<div class="sb-box">
	<div class="sb-logo">
		<?= Html::a('<b>P<sup>2</sup>SB</b> Admin v2.0', Yii::$app->homeUrl) ?>
	</div>
	<div class="sb-box-body panel panel-default">
		<div class="panel-body">

			<p class="sb-box-msg">Signup for membership</p>

			<?php $form = ActiveForm::begin([
				'id' => 'form-signup',
				'enableClientValidation' => false
			]); ?>

				<?= $form
					->field($model, 'username', $fieldOptions1)
					->label(false)
					->textInput(['placeholder' => $model->getAttributeLabel('username')])
				?>
				<?= $form
					->field($model, 'email', $fieldOptions2)
					->label(false)
					->textInput(['placeholder' => $model->getAttributeLabel('email')])
				?>
				<?= $form
					->field($model, 'password', $fieldOptions3)
					->label(false)
					->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
				?>
				<div class="row">
					<div class="col-xs-8">
						<!-- < ?= $form->field($model, 'rememberMe')->checkbox() ?> -->
					</div><!-- /.col -->
					<div class="col-xs-4">
						<?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'signup-button']) ?>
					</div><!-- /.col -->
				</div>

			<?php ActiveForm::end(); ?>

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
					<i class="fa fa-facebook"></i> Signup using Facebook
				</a>
				<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat">
					<i class="fa fa-google-plus"></i> Signup using Google+
				</a>
			</div>

		</div>
	</div>
</div>
