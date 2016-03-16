<?php
/**
 * glyphicons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

$this->title = 'Glyphicons';

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$bgIcons = [
	'adjust', 'alert', 'align-center', 'align-justify', 'align-left', 'align-right', 'apple',
	'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'asterisk', 'baby-formula',
	'backward', 'ban-circle', 'barcode', 'bed', 'bell', 'bishop', 'bitcoin', 'blackboard',
	'bold', 'book', 'bookmark', 'briefcase', 'bullhorn', 'calendar', 'camera', 'cd',
	'certificate', 'check', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up',
	'circle-arrow-down', 'circle-arrow-left', 'circle-arrow-right', 'circle-arrow-up',
	'cloud-download', 'cloud-upload', 'cloud', 'cog', 'collapse-down', 'collapse-up',
	'comment', 'compressed', 'console', 'copy', 'copyright-mark', 'credit-card', 'cutlery',
	'dashboard', 'download-alt', 'download', 'duplicate', 'earphone', 'edit', 'education',
	'eject', 'envelope', 'equalizer', 'erase', 'eur', 'euro', 'exclamation-sign', 'expand',
	'export', 'eye-close', 'eye-open', 'facetime-video', 'fast-backward', 'fast-forward',
	'file', 'film', 'filter', 'fire', 'flag', 'flash', 'floppy-disk', 'floppy-open',
	'floppy-remove', 'floppy-save', 'floppy-saved', 'folder-close', 'folder-open', 'font',
	'forward', 'fullscreen', 'gbp', 'gift', 'glass', 'globe', 'grain', 'hand-down',
	'hand-left', 'hand-right', 'hand-up', 'hd-video', 'hdd', 'header', 'headphones',
	'heart-empty', 'heart', 'home', 'hourglass', 'ice-lolly-tasted', 'ice-lolly', 'import',
	'inbox', 'indent-left', 'indent-right', 'info-sign', 'italic', 'king', 'knight', 'lamp',
	'leaf', 'level-up', 'link', 'list-alt', 'list', 'lock', 'log-in', 'log-out', 'magnet',
	'map-marker', 'menu-down', 'menu-hamburger', 'menu-left', 'menu-right', 'menu-up',
	'minus-sign', 'minus', 'modal-window', 'move', 'music', 'new-window',
	'object-align-bottom', 'object-align-horizontal', 'object-align-left',
	'object-align-right', 'object-align-top', 'object-align-vertical', 'off', 'oil',
	'ok-circle', 'ok-sign', 'ok', 'open-file', 'open', 'option-horizontal', 'option-vertical',
	'paperclip', 'paste', 'pause', 'pawn', 'pencil', 'phone-alt', 'phone', 'picture',
	'piggy-bank', 'plane', 'play-circle', 'play', 'plus-sign', 'plus', 'print', 'pushpin',
	'qrcode', 'queen', 'question-sign', 'random', 'record', 'refresh', 'registration-mark',
	'remove-circle', 'remove-sign', 'remove', 'repeat', 'resize-full', 'resize-horizontal',
	'resize-small', 'resize-vertical', 'retweet', 'road', 'ruble', 'save-file', 'save',
	'saved', 'scale', 'scissors', 'screenshot', 'sd-video', 'search', 'send', 'share-alt',
	'share', 'shopping-cart', 'signal', 'sort-by-alphabet-alt', 'sort-by-alphabet',
	'sort-by-attributes-alt', 'sort-by-attributes', 'sort-by-order-alt', 'sort-by-order',
	'sort', 'sound-5-1', 'sound-6-1', 'sound-7-1', 'sound-dolby', 'sound-stereo', 'star-empty',
	'star', 'stats', 'step-backward', 'step-forward', 'stop', 'subscript', 'subtitles',
	'sunglasses', 'superscript', 'tag', 'tags', 'tasks', 'tent', 'text-background',
	'text-color', 'text-height', 'text-size', 'text-width', 'th-large', 'th-list', 'th',
	'thumbs-down', 'thumbs-up', 'time', 'tint', 'tower', 'transfer', 'trash', 'tree-conifer',
	'tree-deciduous', 'triangle-bottom', 'triangle-left', 'triangle-right', 'triangle-top',
	'unchecked', 'upload', 'usd', 'user', 'volume-down', 'volume-off', 'volume-up',
	'warning-sign', 'wrench', 'yen', 'zoom-in', 'zoom-out',
];
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					All available icons
				</div>
				<div class="panel-body">
					<div class="row">
					<?php foreach ($bgIcons as $icon) { ?>
						<div class="bs-glyphicons col-lg-4">
							<?php echo '<i class="glyphicon glyphicon-' . $icon . '"> glyphicon-' . $icon . ' </i><br>'; ?>
						</div>
					<?php } ?>
					</div>
				</div>
			</div><!-- / Glyphicons -->

		</div>
	</div>

	<!-- /#pragma -->

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>

</div><!-- /#content-wrapper -->
