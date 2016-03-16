<?php
/**
 * icons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

$this->title = 'Font Awesome';

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$faIcons = [
	'fa-adjust', 'fa-adn', 'fa-align-center', 'fa-align-justify', 'fa-align-left',
	'fa-align-right', 'fa-ambulance', 'fa-anchor', 'fa-android', 'fa-angle-double-down',
	'fa-angle-double-left', 'fa-angle-double-right', 'fa-angle-double-up', 'fa-angle-down',
	'fa-angle-left', 'fa-angle-right', 'fa-angle-up', 'fa-apple', 'fa-archive',
	'fa-arrow-circle-down', 'fa-arrow-circle-left', 'fa-arrow-circle-o-down',
	'fa-arrow-circle-o-left', 'fa-arrow-circle-o-right', 'fa-arrow-circle-o-up',
	'fa-arrow-circle-right', 'fa-arrow-circle-up', 'fa-arrow-down', 'fa-arrow-left',
	'fa-arrow-right', 'fa-arrow-up', 'fa-arrows-alt', 'fa-arrows-h', 'fa-arrows-v',
	'fa-arrows', 'fa-asterisk', 'fa-automobile', 'fa-backward', 'fa-ban', 'fa-bank',
	'fa-bar-chart-o', 'fa-barcode', 'fa-bars', 'fa-beer', 'fa-behance-square', 'fa-behance',
	'fa-bell-o', 'fa-bell', 'fa-bitbucket-square', 'fa-bitbucket', 'fa-bitcoin', 'fa-bold',
	'fa-bolt', 'fa-bomb', 'fa-book', 'fa-bookmark-o', 'fa-bookmark', 'fa-briefcase', 'fa-btc',
	'fa-bug', 'fa-building-o', 'fa-building', 'fa-bullhorn', 'fa-bullseye', 'fa-cab',
	'fa-calendar-o', 'fa-calendar', 'fa-camera-retro', 'fa-camera', 'fa-car', 'fa-caret-down',
	'fa-caret-left', 'fa-caret-right', 'fa-caret-square-o-down', 'fa-caret-square-o-left',
	'fa-caret-square-o-right', 'fa-caret-square-o-up', 'fa-caret-up', 'fa-certificate',
	'fa-chain-broken', 'fa-chain', 'fa-check-circle-o', 'fa-check-circle', 'fa-check-square-o',
	'fa-check-square', 'fa-check', 'fa-chevron-circle-down', 'fa-chevron-circle-left',
	'fa-chevron-circle-right', 'fa-chevron-circle-up', 'fa-chevron-down', 'fa-chevron-left',
	'fa-chevron-right', 'fa-chevron-up', 'fa-child', 'fa-circle-o-notch', 'fa-circle-o',
	'fa-circle-thin', 'fa-circle', 'fa-clipboard', 'fa-clock-o', 'fa-cloud-download',
	'fa-cloud-upload', 'fa-cloud', 'fa-cny', 'fa-code-fork', 'fa-code', 'fa-codepen',
	'fa-coffee', 'fa-cog', 'fa-cogs', 'fa-columns', 'fa-comment-o', 'fa-comment',
	'fa-comments-o', 'fa-comments', 'fa-compass', 'fa-compress', 'fa-copy', 'fa-credit-card',
	'fa-crop', 'fa-crosshairs', 'fa-css3', 'fa-cube', 'fa-cubes', 'fa-cut', 'fa-cutlery',
	'fa-dashboard', 'fa-database', 'fa-dedent', 'fa-delicious', 'fa-desktop', 'fa-deviantart',
	'fa-digg', 'fa-dollar', 'fa-dot-circle-o', 'fa-download', 'fa-dribbble', 'fa-dropbox',
	'fa-drupal', 'fa-edit', 'fa-eject', 'fa-ellipsis-h', 'fa-ellipsis-v', 'fa-empire',
	'fa-envelope-o', 'fa-envelope-square', 'fa-envelope', 'fa-eraser', 'fa-eur', 'fa-euro',
	'fa-exchange', 'fa-exclamation-circle', 'fa-exclamation-triangle', 'fa-exclamation',
	'fa-expand', 'fa-external-link-square', 'fa-external-link', 'fa-eye-slash', 'fa-eye',
	'fa-facebook-square', 'fa-facebook', 'fa-fast-backward', 'fa-fast-forward', 'fa-fax',
	'fa-female', 'fa-fighter-jet', 'fa-file-archive-o', 'fa-file-audio-o', 'fa-file-code-o',
	'fa-file-excel-o', 'fa-file-image-o', 'fa-file-movie-o', 'fa-file-o', 'fa-file-pdf-o',
	'fa-file-photo-o', 'fa-file-picture-o', 'fa-file-powerpoint-o', 'fa-file-sound-o',
	'fa-file-text-o', 'fa-file-text', 'fa-file-video-o', 'fa-file-word-o', 'fa-file-zip-o',
	'fa-file', 'fa-files-o', 'fa-film', 'fa-filter', 'fa-fire-extinguisher', 'fa-fire',
	'fa-flag-checkered', 'fa-flag-o', 'fa-flag', 'fa-flash', 'fa-flask', 'fa-flickr',
	'fa-floppy-o', 'fa-folder-o', 'fa-folder-open-o', 'fa-folder-open', 'fa-folder', 'fa-font',
	'fa-forward', 'fa-foursquare', 'fa-frown-o', 'fa-gamepad', 'fa-gavel', 'fa-gbp', 'fa-ge',
	'fa-gear', 'fa-gears', 'fa-gift', 'fa-git-square', 'fa-git', 'fa-github-alt',
	'fa-github-square', 'fa-github', 'fa-gittip', 'fa-glass', 'fa-globe',
	'fa-google-plus-square', 'fa-google-plus', 'fa-google', 'fa-graduation-cap', 'fa-group',
	'fa-h-square', 'fa-hacker-news', 'fa-hand-o-down', 'fa-hand-o-left', 'fa-hand-o-right',
	'fa-hand-o-up', 'fa-hdd-o', 'fa-header', 'fa-headphones', 'fa-heart-o', 'fa-heart',
	'fa-history', 'fa-home', 'fa-hospital-o', 'fa-html5', 'fa-image', 'fa-inbox', 'fa-indent',
	'fa-info-circle', 'fa-info', 'fa-inr', 'fa-instagram', 'fa-institution', 'fa-italic',
	'fa-joomla', 'fa-jpy', 'fa-jsfiddle', 'fa-key', 'fa-keyboard-o', 'fa-krw', 'fa-language',
	'fa-laptop', 'fa-leaf', 'fa-legal', 'fa-lemon-o', 'fa-level-down', 'fa-level-up',
	'fa-life-bouy', 'fa-life-ring', 'fa-life-saver', 'fa-lightbulb-o', 'fa-link',
	'fa-linkedin-square', 'fa-linkedin', 'fa-linux', 'fa-list-alt', 'fa-list-ol', 'fa-list-ul',
	'fa-list', 'fa-location-arrow', 'fa-lock', 'fa-long-arrow-down', 'fa-long-arrow-left',
	'fa-long-arrow-right', 'fa-long-arrow-up', 'fa-magic', 'fa-magnet', 'fa-mail-forward',
	'fa-mail-reply-all', 'fa-mail-reply', 'fa-male', 'fa-map-marker', 'fa-maxcdn', 'fa-medkit',
	'fa-meh-o', 'fa-microphone-slash', 'fa-microphone', 'fa-minus-circle', 'fa-minus-square-o',
	'fa-minus-square', 'fa-minus', 'fa-mobile-phone', 'fa-mobile', 'fa-money', 'fa-moon-o',
	'fa-mortar-board', 'fa-music', 'fa-navicon', 'fa-openid', 'fa-outdent', 'fa-pagelines',
	'fa-paper-plane-o', 'fa-paper-plane', 'fa-paperclip', 'fa-paragraph', 'fa-paste',
	'fa-pause', 'fa-paw', 'fa-pencil-square-o', 'fa-pencil-square', 'fa-pencil',
	'fa-phone-square', 'fa-phone', 'fa-photo', 'fa-picture-o', 'fa-pied-piper-alt',
	'fa-pied-piper-square', 'fa-pied-piper', 'fa-pinterest-square', 'fa-pinterest', 'fa-plane',
	'fa-play-circle-o', 'fa-play-circle', 'fa-play', 'fa-plus-circle', 'fa-plus-square-o',
	'fa-plus-square', 'fa-plus', 'fa-power-off', 'fa-print', 'fa-puzzle-piece', 'fa-qq',
	'fa-qrcode', 'fa-question-circle', 'fa-question', 'fa-quote-left', 'fa-quote-right',
	'fa-ra', 'fa-random', 'fa-rebel', 'fa-recycle', 'fa-reddit-square', 'fa-reddit',
	'fa-refresh', 'fa-renren', 'fa-reorder', 'fa-repeat', 'fa-reply-all', 'fa-reply',
	'fa-retweet', 'fa-rmb', 'fa-road', 'fa-rocket', 'fa-rotate-left', 'fa-rotate-right',
	'fa-rouble', 'fa-rss-square', 'fa-rss', 'fa-rub', 'fa-ruble', 'fa-rupee', 'fa-save',
	'fa-scissors', 'fa-search-minus', 'fa-search-plus', 'fa-search', 'fa-send-o', 'fa-send',
	'fa-share-alt-square', 'fa-share-alt', 'fa-share-square-o', 'fa-share-square', 'fa-share',
	'fa-shield', 'fa-shopping-cart', 'fa-sign-in', 'fa-sign-out', 'fa-signal', 'fa-sitemap',
	'fa-skype', 'fa-slack', 'fa-sliders', 'fa-smile-o', 'fa-sort-alpha-asc',
	'fa-sort-alpha-desc', 'fa-sort-amount-asc', 'fa-sort-amount-desc', 'fa-sort-asc',
	'fa-sort-desc', 'fa-sort-down', 'fa-sort-numeric-asc', 'fa-sort-numeric-desc',
	'fa-sort-up', 'fa-sort', 'fa-soundcloud', 'fa-space-shuttle', 'fa-spinner', 'fa-spoon',
	'fa-spotify', 'fa-square-o', 'fa-square', 'fa-stack-exchange', 'fa-stack-overflow',
	'fa-star-half-empty', 'fa-star-half-full', 'fa-star-half-o', 'fa-star-half', 'fa-star-o',
	'fa-star', 'fa-steam-square', 'fa-steam', 'fa-step-backward', 'fa-step-forward',
	'fa-stethoscope', 'fa-stop', 'fa-strikethrough', 'fa-stumbleupon-circle', 'fa-stumbleupon',
	'fa-subscript', 'fa-suitcase', 'fa-sun-o', 'fa-superscript', 'fa-support', 'fa-table',
	'fa-tablet', 'fa-tachometer', 'fa-tag', 'fa-tags', 'fa-tasks', 'fa-taxi',
	'fa-tencent-weibo', 'fa-terminal', 'fa-text-height', 'fa-text-width', 'fa-th-large',
	'fa-th-list', 'fa-th', 'fa-thumb-tack', 'fa-thumbs-down', 'fa-thumbs-o-down',
	'fa-thumbs-o-up', 'fa-thumbs-up', 'fa-ticket', 'fa-times-circle-o', 'fa-times-circle',
	'fa-times', 'fa-tint', 'fa-toggle-down', 'fa-toggle-left', 'fa-toggle-right',
	'fa-toggle-up', 'fa-trash-o', 'fa-tree', 'fa-trello', 'fa-trophy', 'fa-truck', 'fa-try',
	'fa-tumblr-square', 'fa-tumblr', 'fa-turkish-lira', 'fa-twitter-square', 'fa-twitter',
	'fa-umbrella', 'fa-underline', 'fa-undo', 'fa-university', 'fa-unlink', 'fa-unlock-alt',
	'fa-unlock', 'fa-unsorted', 'fa-upload', 'fa-usd', 'fa-user-md', 'fa-user', 'fa-users',
	'fa-video-camera', 'fa-vimeo-square', 'fa-vine', 'fa-vk', 'fa-volume-down',
	'fa-volume-off', 'fa-volume-up', 'fa-warning', 'fa-wechat', 'fa-weibo', 'fa-weixin',
	'fa-wheelchair', 'fa-windows', 'fa-won', 'fa-wordpress', 'fa-wrench', 'fa-xing-square',
	'fa-xing', 'fa-yahoo', 'fa-yen', 'fa-youtube-play', 'fa-youtube-square', 'fa-youtube',
];
?>
<div id="content-wrapper">

	<!-- #pragma - 1 or more naked rows go in here -->

	<div class="row">

		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					All available icons (Font Awesome)
				</div>
				<div class="panel-body">
					<div class="row">
					<?php foreach ($faIcons as $icon) { ?>
						<div class="fa col-lg-3">
							<?php echo '<p class="fa ' . $icon . '"> ' . $icon . ' </p><br>'; ?>
						</div>
					<?php } ?>
					</div>
				</div>
			</div><!-- / Font Awesome -->

		</div>

	</div>

	<!-- /#pragma -->

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>

</div><!-- /#content-wrapper -->
