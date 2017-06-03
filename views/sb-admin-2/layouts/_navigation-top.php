<?php
/**
 * navigation-top.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Dropdown;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this \yii\web\View */
/* @var $content string */

$dropDownOptions = ['class' => 'dropdown-menu dropdown-messages'];
$dropDownCaret = FA::i('caret-down');

$messagesMenu = array(
	'label' => FA::i('envelope')->fixedWidth(),
	'dropDownOptions' => $dropDownOptions,
	'dropDownCaret' => $dropDownCaret,
	'url' => '#',
	'items' => [
		['url' => '#', 'label' => '<div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<strong>Read All Messages</strong> ' . FA::i('angle-right'), 'encode' => false, 'linkOptions' => ['class' => 'text-center']],
	],
);
$tasksMenu = array(
	'label' => FA::i('tasks')->fixedWidth(),
	'dropDownOptions' => $dropDownOptions,
	'dropDownCaret' => $dropDownCaret,
	'url' => '#',
	'items' => [
		['url' => '#', 'label' => '<div><p><strong>Task 1</strong><span class="pull-right text-muted">40% Complete</span></p><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div></div></div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<div><p><strong>Task 2</strong><span class="pull-right text-muted">20% Complete</span></p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div></div></div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<div><p><strong>Task 3</strong><span class="pull-right text-muted">60% Complete</span></p><div class="progress progress-striped active"><div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div></div></div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<div><p><strong>Task 4</strong><span class="pull-right text-muted">80% Complete</span></p><div class="progress progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div></div></div>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<strong>See All Tasks</strong> ' . FA::i('angle-right'), 'encode' => false, 'linkOptions' => ['class' => 'text-center']],
	],
);
$alertsMenu = array(
	'label' => FA::i('bell')->fixedWidth(),
	'dropDownOptions' => $dropDownOptions,
	'dropDownCaret' => $dropDownCaret,
	'url' => '#',
	'items' => [
		['url' => '#', 'label' => FA::i('comment')->fixedWidth() . ' New Comment<span class="pull-right text-muted small">4 minutes ago</span>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => FA::i('twitter')->fixedWidth() . ' 3 New Followers<span class="pull-right text-muted small">12 minutes ago', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => FA::i('envelope')->fixedWidth() . ' Message Sent<span class="pull-right text-muted small">4 minutes ago</span>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => FA::i('tasks')->fixedWidth() . ' New Task<span class="pull-right text-muted small">4 minutes ago</span>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => FA::i('upload')->fixedWidth() . ' Server Rebooted<span class="pull-right text-muted small">4 minutes ago</span>', 'encode' => false],
		'<li class="divider"></li>',
		['url' => '#', 'label' => '<strong>See All Alerts</strong> ' . FA::i('angle-right'), 'encode' => false, 'linkOptions' => ['class' => 'text-center']],
	],
);
$userMenu = array(
	'label' => FA::i('user')->fixedWidth(),
	'dropDownOptions' => $dropDownOptions,
	'dropDownCaret' => $dropDownCaret,
	'url' => '#',
	'items' => [
		['url' => '#', 'label' => FA::i('user')->fixedWidth() . ' User Profile', 'encode' => false],
		['url' => '#', 'label' => FA::i('gear')->fixedWidth() . ' Settings', 'encode' => false],
		'<li class="divider"></li>',
		//['url' => '#', 'label' => FA::i('sign-out')->fixedWidth() . ' Logout', 'encode' => false],
	],
);
if (Yii::$app->user->isGuest) {
	$userMenu['items'][] = [
		//'label' => 'Signup', 'url' => ['/site/signup'],
		'label' => 'Login', 'url' => '#', // ['/site/login']
	];
} else {
	$userMenu['items'][] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}

?>
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<?= Html::a('P<sup>2</sup>SB Admin v2.0', Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?>
</div>

<?php
echo Nav::widget([
	'options' => ['class' => 'nav navbar-top-links navbar-right'],
	'items' => [
		$messagesMenu, // dropdown-messages
		$tasksMenu, // dropdown-tasks
		$alertsMenu, // dropdown-alerts
		$userMenu, // dropdown-user
	],
	'encodeLabels' => false,
]);
?>
