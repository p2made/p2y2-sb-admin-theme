<?php
/**
 * font-awesome.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use rmrevin\yii\fontawesome\FA;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Font Awesome';
$this->params['breadcrumbs'][] = $this->title;

$iconGroups = [
	'web-application' => ['title' => 'Web Application Icons',
		'icons' =>['adjust', 'anchor', 'archive', 'area-chart', 'arrows', 'arrows-h', 'arrows-v', 'asterisk', 'at', 'automobile', 'balance-scale', 'ban', 'bank', 'bar-chart', 'bar-chart-o', 'barcode', 'bars', 'battery-0', 'battery-1', 'battery-2', 'battery-3', 'battery-4', 'battery-empty', 'battery-full', 'battery-half', 'battery-quarter', 'battery-three-quarters', 'bed', 'beer', 'bell', 'bell-o', 'bell-slash', 'bell-slash-o', 'bicycle', 'binoculars', 'birthday-cake', 'bluetooth', 'bluetooth-b', 'bolt', 'bomb', 'book', 'bookmark', 'bookmark-o', 'briefcase', 'bug', 'building', 'building-o', 'bullhorn', 'bullseye', 'bus', 'cab', 'calculator', 'calendar', 'calendar-check-o', 'calendar-minus-o', 'calendar-o', 'calendar-plus-o', 'calendar-times-o', 'camera', 'camera-retro', 'car', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'cart-arrow-down', 'cart-plus', 'cc', 'certificate', 'check', 'check-circle', 'check-circle-o', 'check-square', 'check-square-o', 'child', 'circle', 'circle-o', 'circle-o-notch', 'circle-thin', 'clock-o', 'clone', 'close', 'cloud', 'cloud-download', 'cloud-upload', 'code', 'code-fork', 'coffee', 'cog', 'cogs', 'comment', 'comment-o', 'commenting', 'commenting-o', 'comments', 'comments-o', 'compass', 'copyright', 'creative-commons', 'credit-card', 'credit-card-alt', 'crop', 'crosshairs', 'cube', 'cubes', 'cutlery', 'dashboard', 'database', 'desktop', 'diamond', 'dot-circle-o', 'download', 'edit', 'ellipsis-h', 'ellipsis-v', 'envelope', 'envelope-o', 'envelope-square', 'eraser', 'exchange', 'exclamation', 'exclamation-circle', 'exclamation-triangle', 'external-link', 'external-link-square', 'eye', 'eye-slash', 'eyedropper', 'fax', 'feed', 'female', 'fighter-jet', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-movie-o', 'file-pdf-o', 'file-photo-o', 'file-picture-o', 'file-powerpoint-o', 'file-sound-o', 'file-video-o', 'file-word-o', 'file-zip-o', 'film', 'filter', 'fire', 'fire-extinguisher', 'flag', 'flag-checkered', 'flag-o', 'flash', 'flask', 'folder', 'folder-o', 'folder-open', 'folder-open-o', 'frown-o', 'futbol-o', 'gamepad', 'gavel', 'gear', 'gears', 'gift', 'glass', 'globe', 'graduation-cap', 'group', 'hand-grab-o', 'hand-lizard-o', 'hand-paper-o', 'hand-peace-o', 'hand-pointer-o', 'hand-rock-o', 'hand-scissors-o', 'hand-spock-o', 'hand-stop-o', 'hashtag', 'hdd-o', 'headphones', 'heart', 'heart-o', 'heartbeat', 'history', 'home', 'hotel', 'hourglass', 'hourglass-1', 'hourglass-2', 'hourglass-3', 'hourglass-end', 'hourglass-half', 'hourglass-o', 'hourglass-start', 'i-cursor', 'image', 'inbox', 'industry', 'info', 'info-circle', 'institution', 'key', 'keyboard-o', 'language', 'laptop', 'leaf', 'legal', 'lemon-o', 'level-down', 'level-up', 'life-bouy', 'life-buoy', 'life-ring', 'life-saver', 'lightbulb-o', 'line-chart', 'location-arrow', 'lock', 'magic', 'magnet', 'mail-forward', 'mail-reply', 'mail-reply-all', 'male', 'map', 'map-marker', 'map-o', 'map-pin', 'map-signs', 'meh-o', 'microphone', 'microphone-slash', 'minus', 'minus-circle', 'minus-square', 'minus-square-o', 'mobile', 'mobile-phone', 'money', 'moon-o', 'mortar-board', 'motorcycle', 'mouse-pointer', 'music', 'navicon', 'newspaper-o', 'object-group', 'object-ungroup', 'paint-brush', 'paper-plane', 'paper-plane-o', 'paw', 'pencil', 'pencil-square', 'pencil-square-o', 'percent', 'phone', 'phone-square', 'photo', 'picture-o', 'pie-chart', 'plane', 'plug', 'plus', 'plus-circle', 'plus-square', 'plus-square-o', 'power-off', 'print', 'puzzle-piece', 'qrcode', 'question', 'question-circle', 'quote-left', 'quote-right', 'random', 'recycle', 'refresh', 'registered', 'remove', 'reorder', 'reply', 'reply-all', 'retweet', 'road', 'rocket', 'rss', 'rss-square', 'search', 'search-minus', 'search-plus', 'send', 'send-o', 'server', 'share', 'share-alt', 'share-alt-square', 'share-square', 'share-square-o', 'shield', 'ship', 'shopping-bag', 'shopping-basket', 'shopping-cart', 'sign-in', 'sign-out', 'signal', 'sitemap', 'sliders', 'smile-o', 'soccer-ball-o', 'sort', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-asc', 'sort-desc', 'sort-down', 'sort-numeric-asc', 'sort-numeric-desc', 'sort-up', 'space-shuttle', 'spinner', 'spoon', 'square', 'square-o', 'star', 'star-half', 'star-half-empty', 'star-half-full', 'star-half-o', 'star-o', 'sticky-note', 'sticky-note-o', 'street-view', 'suitcase', 'sun-o', 'support', 'tablet', 'tachometer', 'tag', 'tags', 'tasks', 'taxi', 'television', 'terminal', 'thumb-tack', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up', 'ticket', 'times', 'times-circle', 'times-circle-o', 'tint', 'toggle-down', 'toggle-left', 'toggle-off', 'toggle-on', 'toggle-right', 'toggle-up', 'trademark', 'trash', 'trash-o', 'tree', 'trophy', 'truck', 'tty', 'tv', 'umbrella', 'university', 'unlock', 'unlock-alt', 'unsorted', 'upload', 'user', 'user-plus', 'user-secret', 'user-times', 'users', 'video-camera', 'volume-down', 'volume-off', 'volume-up', 'warning', 'wheelchair', 'wifi', 'wrench']
	],
	'hand' => ['title' => 'Hand Icons',
		'icons' =>['hand-grab-o', 'hand-lizard-o', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'hand-paper-o', 'hand-peace-o', 'hand-pointer-o', 'hand-rock-o', 'hand-scissors-o', 'hand-spock-o', 'hand-stop-o', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up']
	],
	'transportation' => ['title' => 'Transportation Icons',
		'icons' =>['ambulance', 'automobile', 'bicycle', 'bus', 'cab', 'car', 'fighter-jet', 'motorcycle', 'plane', 'rocket', 'ship', 'space-shuttle', 'subway', 'taxi', 'train', 'truck', 'wheelchair']
	],
	'gender' => ['title' => 'Gender Icons',
		'icons' =>['genderless', 'intersex', 'mars', 'mars-double', 'mars-stroke', 'mars-stroke-h', 'mars-stroke-v', 'mercury', 'neuter', 'transgender', 'transgender-alt', 'venus', 'venus-double', 'venus-mars']
	],
	'file-type' => ['title' => 'File Type Icons',
		'icons' =>['file', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-movie-o', 'file-o', 'file-pdf-o', 'file-photo-o', 'file-picture-o', 'file-powerpoint-o', 'file-sound-o', 'file-text', 'file-text-o', 'file-video-o', 'file-word-o', 'file-zip-o']
	],
	'spinner' => ['title' => 'Spinner Icons',
		'icons' =>['circle-o-notch', 'cog', 'gear', 'refresh', 'spinner']
	],
	'form-control' => ['title' => 'Form Control Icons',
		'icons' =>['check-square', 'check-square-o', 'circle', 'circle-o', 'dot-circle-o', 'minus-square', 'minus-square-o', 'plus-square', 'plus-square-o', 'square', 'square-o']
	],
	'payment' => ['title' => 'Payment Icons',
		'icons' =>['cc-amex', 'cc-diners-club', 'cc-discover', 'cc-jcb', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'credit-card', 'credit-card-alt', 'google-wallet', 'paypal']
	],
	'chart' => ['title' => 'Chart Icons',
		'icons' =>['area-chart', 'bar-chart', 'bar-chart-o', 'line-chart', 'pie-chart']
	],
	'currency' => ['title' => 'Currency Icons',
		'icons' =>['bitcoin', 'btc', 'cny', 'dollar', 'eur', 'euro', 'gbp', 'gg', 'gg-circle', 'ils', 'inr', 'jpy', 'krw', 'money', 'rmb', 'rouble', 'rub', 'ruble', 'rupee', 'shekel', 'sheqel', 'try', 'turkish-lira', 'usd', 'won', 'yen']
	],
	'text-editor' => ['title' => 'Text Editor Icons',
		'icons' =>['align-center', 'align-justify', 'align-left', 'align-right', 'bold', 'chain', 'chain-broken', 'clipboard', 'columns', 'copy', 'cut', 'dedent', 'eraser', 'file', 'file-o', 'file-text', 'file-text-o', 'files-o', 'floppy-o', 'font', 'header', 'indent', 'italic', 'link', 'list', 'list-alt', 'list-ol', 'list-ul', 'outdent', 'paperclip', 'paragraph', 'paste', 'repeat', 'rotate-left', 'rotate-right', 'save', 'scissors', 'strikethrough', 'subscript', 'superscript', 'table', 'text-height', 'text-width', 'th', 'th-large', 'th-list', 'underline', 'undo', 'unlink']
	],
	'directional' => ['title' => 'Directional Icons',
		'icons' =>['angle-double-down', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-down', 'angle-left', 'angle-right', 'angle-up', 'arrow-circle-down', 'arrow-circle-left', 'arrow-circle-o-down', 'arrow-circle-o-left', 'arrow-circle-o-right', 'arrow-circle-o-up', 'arrow-circle-right', 'arrow-circle-up', 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'arrows', 'arrows-alt', 'arrows-h', 'arrows-v', 'caret-down', 'caret-left', 'caret-right', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'caret-up', 'chevron-circle-down', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up', 'exchange', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'long-arrow-down', 'long-arrow-left', 'long-arrow-right', 'long-arrow-up', 'toggle-down', 'toggle-left', 'toggle-right', 'toggle-up']
	],
	'video-player' => ['title' => 'Video Player Icons',
		'icons' =>['arrows-alt', 'backward', 'compress', 'eject', 'expand', 'fast-backward', 'fast-forward', 'forward', 'pause', 'pause-circle', 'pause-circle-o', 'play', 'play-circle', 'play-circle-o', 'random', 'step-backward', 'step-forward', 'stop', 'stop-circle', 'stop-circle-o', 'youtube-play']
	],
	'brand' => ['title' => 'Brand Icons',
		'icons' =>['500px', 'adn', 'amazon', 'android', 'angellist', 'apple', 'behance', 'behance-square', 'bitbucket', 'bitbucket-square', 'bitcoin', 'black-tie', 'bluetooth', 'bluetooth-b', 'btc', 'buysellads', 'cc-amex', 'cc-diners-club', 'cc-discover', 'cc-jcb', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'chrome', 'codepen', 'codiepie', 'connectdevelop', 'contao', 'css3', 'dashcube', 'delicious', 'deviantart', 'digg', 'dribbble', 'dropbox', 'drupal', 'edge', 'empire', 'expeditedssl', 'facebook', 'facebook-f', 'facebook-official', 'facebook-square', 'firefox', 'flickr', 'fonticons', 'fort-awesome', 'forumbee', 'foursquare', 'ge', 'get-pocket', 'gg', 'gg-circle', 'git', 'git-square', 'github', 'github-alt', 'github-square', 'gittip', 'google', 'google-plus', 'google-plus-square', 'google-wallet', 'gratipay', 'hacker-news', 'houzz', 'html5', 'instagram', 'internet-explorer', 'ioxhost', 'joomla', 'jsfiddle', 'lastfm', 'lastfm-square', 'leanpub', 'linkedin', 'linkedin-square', 'linux', 'maxcdn', 'meanpath', 'medium', 'mixcloud', 'modx', 'odnoklassniki', 'odnoklassniki-square', 'opencart', 'openid', 'opera', 'optin-monster', 'pagelines', 'paypal', 'pied-piper', 'pied-piper-alt', 'pinterest', 'pinterest-p', 'pinterest-square', 'product-hunt', 'qq', 'ra', 'rebel', 'reddit', 'reddit-alien', 'reddit-square', 'renren', 'safari', 'scribd', 'sellsy', 'share-alt', 'share-alt-square', 'shirtsinbulk', 'simplybuilt', 'skyatlas', 'skype', 'slack', 'slideshare', 'soundcloud', 'spotify', 'stack-exchange', 'stack-overflow', 'steam', 'steam-square', 'stumbleupon', 'stumbleupon-circle', 'tencent-weibo', 'trello', 'tripadvisor', 'tumblr', 'tumblr-square', 'twitch', 'twitter', 'twitter-square', 'usb', 'viacoin', 'vimeo', 'vimeo-square', 'vine', 'vk', 'wechat', 'weibo', 'weixin', 'whatsapp', 'wikipedia-w', 'windows', 'wordpress', 'xing', 'xing-square', 'y-combinator', 'y-combinator-square', 'yahoo', 'yc', 'yc-square', 'yelp', 'youtube', 'youtube-play', 'youtube-square']
	],
	'medical' => ['title' => 'Medical Icons',
		'icons' =>['ambulance', 'h-square', 'heart', 'heart-o', 'heartbeat', 'hospital-o', 'medkit', 'plus-square', 'stethoscope', 'user-md', 'wheelchair']
	],
];
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= $this->title ?></h1>
		The iconic font and CSS toolkit
	</div>

	<div class="body-content">

		<?php
			$groupId = 'web-application';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'hand';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'transportation';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'gender';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'file-type';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'spinner';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>

			<br>
			<div class="alert alert-success">
				<ul class="fa-ul">
					<li>
						<i class="fa fa-info-circle fa-lg fa-li"></i>
						These icons work great with <code>->spin()</code> added...
					</li>
				</ul>
			</div>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->spin()->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')->spin()') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'form-control';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'payment';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'chart';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'currency';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'text-editor';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'directional';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'video-player';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

		<?php
			$groupId = 'brand';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>

			<br>
			<div class="alert alert-success">
				<ul>
					<li>All brand icons are trademarks of their respective owners.</li>
					<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
					<li>Brand icons should only be used to represent the company or product to which they refer.</li>
				</ul>
			</div>
		</section>

		<?php
			$groupId = 'medical';
			$group = $iconGroups[$groupId];
			$icons = $group['icons'];
		?>
		<section id="<?= $groupId ?>">
			<h2><?= $group['title'] ?></h2>

			<div class="row">
				<?php foreach ($icons as $icon) { ?>
					<div class="fa-hover col-md-4">
						<?= FA::icon($icon)->fixedWidth() ?>
						<?= Html::encode('FA::icon(\'' . $icon . '\')') ?><span class="text-muted">->fixedWidth()</span>
					</div>
				<?php } ?>
			</div>
		</section>

	</div>

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div><!-- /#content-wrapper -->
