<?php
/**
 * buttons.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Button;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
p2m\assets\CircleButtonsAsset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Buttons';
?>
<div id="content-wrapper">

<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Default Buttons
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Normal Buttons</h4>
					<p>
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-default']]) ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-primary']]) ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-success']]) ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-info']]) ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-warning']]) ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-danger']]) ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-link']]) ?>
					</p><br>
					<h4>Disabled Buttons</h4>
					<p>
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-default disabled']]) ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-primary disabled']]) ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-success disabled']]) ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-info disabled']]) ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-warning disabled']]) ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-danger disabled']]) ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-link disabled']]) ?>
					</p><br>
					<h4>Button Sizes</h4>
					<p>
	<?= Button::widget(['label' => 'Large button', 'options' => ['class' => 'btn-primary btn-lg']]) ?>
	<?= Button::widget(['label' => 'Default button', 'options' => ['class' => 'btn-primary']]) ?>
	<?= Button::widget(['label' => 'Small button', 'options' => ['class' => 'btn-primary btn-sm']]) ?>
	<?= Button::widget(['label' => 'Mini button', 'options' => ['class' => 'btn-primary btn-xs']]) ?>
					<br><br>
	<?= Button::widget(['label' => 'Block level button', 'options' => ['class' => 'btn-primary btn-lg btn-block']]) ?>
					</p>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

			<div class="panel panel-default">
				<div class="panel-heading">
					Circle Icon Buttons with Font Awesome Icons
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Normal Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle'], 'encodeLabel' => false]) ?>
					<br><br>
					<h4>Large Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle btn-lg'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle btn-lg'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle btn-lg'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle btn-lg'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle btn-lg'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle btn-lg'], 'encodeLabel' => false]) ?>
					<br><br>
					<h4>Extra Large Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-circle btn-xl'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-circle btn-xl'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-circle btn-xl'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-circle btn-xl'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-circle btn-xl'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-circle btn-xl'], 'encodeLabel' => false]) ?>
					<br><br>
					<h4>Outline Circle Buttons</h4>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-default btn-outline btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('list'), 'options' => ['class' => 'btn-primary btn-outline btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('link'), 'options' => ['class' => 'btn-success btn-outline btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('check'), 'options' => ['class' => 'btn-info btn-outline btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('times'), 'options' => ['class' => 'btn-warning btn-outline btn-circle'], 'encodeLabel' => false]) ?>
	<?= Button::widget(['label' => FA::i('heart'), 'options' => ['class' => 'btn-danger btn-outline btn-circle'], 'encodeLabel' => false]) ?>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Outline Buttons with Smooth Transition
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Outline Buttons</h4>
					<p>
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-outline btn-default']]) ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-outline btn-primary']]) ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-outline btn-success']]) ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-outline btn-info']]) ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-outline btn-warning']]) ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-outline btn-danger']]) ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-outline btn-link']]) ?>
					</p>
					<br>
					<h4>Outline Button Sizes</h4>
					<p>
	<?= Button::widget(['label' => 'Large button', 'options' => ['class' => 'btn-outline btn-primary btn-lg']]) ?>
	<?= Button::widget(['label' => 'Default button', 'options' => ['class' => 'btn-outline btn-primary']]) ?>
	<?= Button::widget(['label' => 'Small button', 'options' => ['class' => 'btn-outline btn-primary btn-sm']]) ?>
	<?= Button::widget(['label' => 'Mini button', 'options' => ['class' => 'btn-outline btn-primary btn-xs']]) ?>
						<br>
						<br>
	<?= Button::widget(['label' => 'Block level button', 'options' => ['class' => 'btn-outline btn-primary btn-lg btn-block']]) ?>
					</p>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

			<div class="panel panel-default">
				<div class="panel-heading">
					Social Buttons with Font Awesome Icons
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Social Buttons</h4>
					<div class="col-lg-6">
	<?= BSocial::b('adn') ?>
	<?= BSocial::b('bitbucket') ?>
	<?= BSocial::b('dropbox') ?>
	<?= BSocial::b('facebook') ?>
	<?= BSocial::b('flickr') ?>
	<?= BSocial::b('foursquare') ?>
	<?= BSocial::b('github') ?>
	<?= BSocial::b('google') ?>
	<?= BSocial::b('instagram') ?>
	<?= BSocial::b('linkedin') ?>
					</div>
					<div class="col-lg-6">
	<?= BSocial::b('microsoft') ?>
	<?= BSocial::b('openid') ?>
	<?= BSocial::b('pinterest') ?>
	<?= BSocial::b('reddit') ?>
	<?= BSocial::b('soundcloud') ?>
	<?= BSocial::b('tumblr') ?>
	<?= BSocial::b('twitter') ?>
	<?= BSocial::b('vimeo') ?>
	<?= BSocial::b('vk') ?>
	<?= BSocial::b('yahoo') ?>
					</div>
					<div class="col-lg-12 text-center">
						<hr>
	<?= BSocial::i('adn') ?>
	<?= BSocial::i('bitbucket') ?>
	<?= BSocial::i('dropbox') ?>
	<?= BSocial::i('facebook') ?>
	<?= BSocial::i('flickr') ?>
	<?= BSocial::i('foursquare') ?>
	<?= BSocial::i('github') ?>
	<?= BSocial::i('google') ?>
	<?= BSocial::i('instagram') ?>
	<?= BSocial::i('linkedin') ?>
					</div>
					<div class="col-lg-12 text-center">
						<br>
	<?= BSocial::i('microsoft') ?>
	<?= BSocial::i('openid') ?>
	<?= BSocial::i('pinterest') ?>
	<?= BSocial::i('reddit') ?>
	<?= BSocial::i('soundcloud') ?>
	<?= BSocial::i('tumblr') ?>
	<?= BSocial::i('twitter') ?>
	<?= BSocial::i('vimeo') ?>
	<?= BSocial::i('vk') ?>
	<?= BSocial::i('yahoo') ?>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

	</div>

<!-- /### NOTE ### -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div><!-- /#content-wrapper -->
