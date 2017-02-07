<?php
/**
 * buttons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;
use p2made\helpers\BSocial;
use yii\bootstrap\Button;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);
p2made\assets\CircleButtonsAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);

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
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-default']]);  ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-primary']]);  ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-success']]);  ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-info']]);  ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-warning']]);  ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-danger']]);  ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-link']]);  ?>
					</p>
					<br>
					<h4>Disabled Buttons</h4>
					<p>
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-default disabled']]);  ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-primary disabled']]);  ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-success disabled']]);  ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-info disabled']]);  ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-warning disabled']]);  ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-danger disabled']]);  ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-link disabled']]);  ?>
					</p>
					<br>
					<h4>Button Sizes</h4>
					<p>
	<?= Button::widget(['label' => 'Large button', 'options' => ['class' => 'btn-primary btn-lg']]);  ?>
	<?= Button::widget(['label' => 'Default button', 'options' => ['class' => 'btn-primary']]);  ?>
	<?= Button::widget(['label' => 'Small button', 'options' => ['class' => 'btn-primary btn-sm']]);  ?>
	<?= Button::widget(['label' => 'Mini button', 'options' => ['class' => 'btn-primary btn-xs']]);  ?>
						<br>
						<br>
	<?= Button::widget(['label' => 'Block level button', 'options' => ['class' => 'btn-primary btn-lg btn-block']]);  ?>
					</p>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

			<div class="panel panel-default">
				<div class="panel-heading">
					Circle Icon Buttons with Font Awesome Icons
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Normal Circle Buttons</h4>
					<button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
					</button>
					<button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
					</button>
					<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
					</button>
					<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
					</button>
					<br>
					<br>
					<h4>Large Circle Buttons</h4>
					<button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
					</button>
					<button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
					</button>
					<button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
					</button>
					<button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
					</button>
					<br>
					<br>
					<h4>Extra Large Circle Buttons</h4>
					<button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i>
					</button>
					<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i>
					</button>
					<button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
					</button>
					<button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
					</button>
					<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i>
					</button>
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
	<?= Button::widget(['label' => 'Default', 'options' => ['class' => 'btn-outline btn-default']]);  ?>
	<?= Button::widget(['label' => 'Primary', 'options' => ['class' => 'btn-outline btn-primary']]);  ?>
	<?= Button::widget(['label' => 'Success', 'options' => ['class' => 'btn-outline btn-success']]);  ?>
	<?= Button::widget(['label' => 'Info', 'options' => ['class' => 'btn-outline btn-info']]);  ?>
	<?= Button::widget(['label' => 'Warning', 'options' => ['class' => 'btn-outline btn-warning']]);  ?>
	<?= Button::widget(['label' => 'Danger', 'options' => ['class' => 'btn-outline btn-danger']]);  ?>
	<?= Button::widget(['label' => 'Link', 'options' => ['class' => 'btn-outline btn-link']]);  ?>
					</p>
					<br>
					<h4>Outline Button Sizes</h4>
					<p>
	<?= Button::widget(['label' => 'Large button', 'options' => ['class' => 'btn-outline btn-primary btn-lg']]);  ?>
	<?= Button::widget(['label' => 'Default button', 'options' => ['class' => 'btn-outline btn-primary']]);  ?>
	<?= Button::widget(['label' => 'Small button', 'options' => ['class' => 'btn-outline btn-primary btn-sm']]);  ?>
	<?= Button::widget(['label' => 'Mini button', 'options' => ['class' => 'btn-outline btn-primary btn-xs']]);  ?>
						<br>
						<br>
	<?= Button::widget(['label' => 'Block level button', 'options' => ['class' => 'btn-outline btn-primary btn-lg btn-block']]);  ?>
					</p>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

			<div class="panel panel-default">
				<div class="panel-heading">
					Social Buttons with Font Awesome Icons
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<h4>Social Buttons</h4>
					<a class="btn btn-block btn-social btn-bitbucket">
						<i class="fa fa-bitbucket"></i> Sign in with Bitbucket
					</a>
					<a class="btn btn-block btn-social btn-dropbox">
						<i class="fa fa-dropbox"></i> Sign in with Dropbox
					</a>
					<a class="btn btn-block btn-social btn-facebook">
						<i class="fa fa-facebook"></i> Sign in with Facebook
					</a>
					<a class="btn btn-block btn-social btn-flickr">
						<i class="fa fa-flickr"></i> Sign in with Flickr
					</a>
					<a class="btn btn-block btn-social btn-github">
						<i class="fa fa-github"></i> Sign in with GitHub
					</a>
					<a class="btn btn-block btn-social btn-google-plus">
						<i class="fa fa-google-plus"></i> Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-instagram">
						<i class="fa fa-instagram"></i> Sign in with Instagram
					</a>
					<a class="btn btn-block btn-social btn-linkedin">
						<i class="fa fa-linkedin"></i> Sign in with LinkedIn
					</a>
					<a class="btn btn-block btn-social btn-pinterest">
						<i class="fa fa-pinterest"></i> Sign in with Pinterest
					</a>
					<a class="btn btn-block btn-social btn-tumblr">
						<i class="fa fa-tumblr"></i> Sign in with Tumblr
					</a>
					<a class="btn btn-block btn-social btn-twitter">
						<i class="fa fa-twitter"></i> Sign in with Twitter
					</a>
					<a class="btn btn-block btn-social btn-vk">
						<i class="fa fa-vk"></i> Sign in with VK
					</a>

					<hr>

					<div class="text-center">
						<a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
						<a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
						<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
						<a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
						<a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
						<a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
						<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
						<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
						<a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
						<a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
						<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
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
