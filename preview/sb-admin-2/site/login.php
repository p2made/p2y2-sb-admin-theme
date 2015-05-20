<?php
/**
 * login.php
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

$this->title = 'Login';

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions2 = [
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

			<p class="sb-box-msg">Login to start your session</p>

			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'enableClientValidation' => false
			]); ?>

				<?= $form
					->field($model, 'username', $fieldOptions1)
					->label(false)
					->textInput(['placeholder' => $model->getAttributeLabel('username')])
				?>

				<?= $form
					->field($model, 'password', $fieldOptions2)
					->label(false)
					->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
				?>

				<div class="row">
					<div class="col-xs-8">
						<?= $form->field($model, 'rememberMe')->checkbox() ?>
					</div>
					<div class="col-xs-4">
						<?= Html::submitButton('Login', [
							'class' => 'btn btn-primary btn-block btn-flat',
							'name' => 'login-button'
						]) ?>
					</div>
				</div>

			<?php ActiveForm::end(); ?>

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
					<i class="fa fa-facebook"></i> Login using Facebook
				</a>
				<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat">
					<i class="fa fa-google-plus"></i> Login using Google+
				</a>
			</div>

		</div>
	</div>
</div>
