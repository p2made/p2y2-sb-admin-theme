<?php
/**
 * animate.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\assets\AnimateAsset::register($this);
p2made\demo\assets\AnimateDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Animate.css';
$this->params['breadcrumbs'][] = $this->title;

/*
yii\web\YiiAsset::register($this);

p2made\demo\assets\ThingsDemoAsset::register($this);
p2made\demo\assets\ThingsDemoAsset::register($this);

p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\JqueryMigrateAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\PrettySociableAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\WowAsset::register($this);

		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\JqueryMigrateAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\PrettySociableAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\WowAsset',

		'p2made\assets\Html5shivAsset',
		'p2made\assets\PrintShivAsset',
 */
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<span id="animationSandbox" style="display: block;"><h1><?= Html::encode($this->title) ?></h1></span>
		<span>Just-add-water CSS animations</span>
	</div>

	<div class="body-content">

		<div class="row">
			<form>
				<div class="col-md-offset-4 col-md-3">
					<select class="form-control js--animations">

						<optgroup label="Attention Seekers">
							<option value="bounce">bounce</option>
							<option value="flash">flash</option>
							<option value="pulse">pulse</option>
							<option value="rubberBand">rubberBand</option>
							<option value="shake">shake</option>
							<option value="swing">swing</option>
							<option value="tada">tada</option>
							<option value="wobble">wobble</option>
							<option value="jello">jello</option>
						</optgroup>

						<optgroup label="Bouncing Entrances">
							<option value="bounceIn">bounceIn</option>
							<option value="bounceInDown">bounceInDown</option>
							<option value="bounceInLeft">bounceInLeft</option>
							<option value="bounceInRight">bounceInRight</option>
							<option value="bounceInUp">bounceInUp</option>
						</optgroup>

						<optgroup label="Bouncing Exits">
							<option value="bounceOut">bounceOut</option>
							<option value="bounceOutDown">bounceOutDown</option>
							<option value="bounceOutLeft">bounceOutLeft</option>
							<option value="bounceOutRight">bounceOutRight</option>
							<option value="bounceOutUp">bounceOutUp</option>
						</optgroup>

						<optgroup label="Fading Entrances">
							<option value="fadeIn">fadeIn</option>
							<option value="fadeInDown">fadeInDown</option>
							<option value="fadeInDownBig">fadeInDownBig</option>
							<option value="fadeInLeft">fadeInLeft</option>
							<option value="fadeInLeftBig">fadeInLeftBig</option>
							<option value="fadeInRight">fadeInRight</option>
							<option value="fadeInRightBig">fadeInRightBig</option>
							<option value="fadeInUp">fadeInUp</option>
							<option value="fadeInUpBig">fadeInUpBig</option>
						</optgroup>

						<optgroup label="Fading Exits">
							<option value="fadeOut">fadeOut</option>
							<option value="fadeOutDown">fadeOutDown</option>
							<option value="fadeOutDownBig">fadeOutDownBig</option>
							<option value="fadeOutLeft">fadeOutLeft</option>
							<option value="fadeOutLeftBig">fadeOutLeftBig</option>
							<option value="fadeOutRight">fadeOutRight</option>
							<option value="fadeOutRightBig">fadeOutRightBig</option>
							<option value="fadeOutUp">fadeOutUp</option>
							<option value="fadeOutUpBig">fadeOutUpBig</option>
						</optgroup>

						<optgroup label="Flippers">
							<option value="flip">flip</option>
							<option value="flipInX">flipInX</option>
							<option value="flipInY">flipInY</option>
							<option value="flipOutX">flipOutX</option>
							<option value="flipOutY">flipOutY</option>
						</optgroup>

						<optgroup label="Lightspeed">
							<option value="lightSpeedIn">lightSpeedIn</option>
							<option value="lightSpeedOut">lightSpeedOut</option>
						</optgroup>

						<optgroup label="Rotating Entrances">
							<option value="rotateIn">rotateIn</option>
							<option value="rotateInDownLeft">rotateInDownLeft</option>
							<option value="rotateInDownRight">rotateInDownRight</option>
							<option value="rotateInUpLeft">rotateInUpLeft</option>
							<option value="rotateInUpRight">rotateInUpRight</option>
						</optgroup>

						<optgroup label="Rotating Exits">
							<option value="rotateOut">rotateOut</option>
							<option value="rotateOutDownLeft">rotateOutDownLeft</option>
							<option value="rotateOutDownRight">rotateOutDownRight</option>
							<option value="rotateOutUpLeft">rotateOutUpLeft</option>
							<option value="rotateOutUpRight">rotateOutUpRight</option>
						</optgroup>

						<optgroup label="Sliding Entrances">
							<option value="slideInUp">slideInUp</option>
							<option value="slideInDown">slideInDown</option>
							<option value="slideInLeft">slideInLeft</option>
							<option value="slideInRight">slideInRight</option>
						</optgroup>

						<optgroup label="Sliding Exits">
							<option value="slideOutUp">slideOutUp</option>
							<option value="slideOutDown">slideOutDown</option>
							<option value="slideOutLeft">slideOutLeft</option>
							<option value="slideOutRight">slideOutRight</option>
						</optgroup>

						<optgroup label="Zoom Entrances">
							<option value="zoomIn">zoomIn</option>
							<option value="zoomInDown">zoomInDown</option>
							<option value="zoomInLeft">zoomInLeft</option>
							<option value="zoomInRight">zoomInRight</option>
							<option value="zoomInUp">zoomInUp</option>
						</optgroup>

						<optgroup label="Zoom Exits">
							<option value="zoomOut">zoomOut</option>
							<option value="zoomOutDown">zoomOutDown</option>
							<option value="zoomOutLeft">zoomOutLeft</option>
							<option value="zoomOutRight">zoomOutRight</option>
							<option value="zoomOutUp">zoomOutUp</option>
						</optgroup>

						<optgroup label="Specials">
							<option value="hinge">hinge</option>
							<option value="rollIn">rollIn</option>
							<option value="rollOut">rollOut</option>
						</optgroup>

					</select>
				</div>

				<div class="col-md-1">
					<button class="btn btn-default js--triggerAnimation">Animate it</button>
				</div>
			</form>
		</div>

	</div>

<script>
</script>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div><!-- /#site-index -->
