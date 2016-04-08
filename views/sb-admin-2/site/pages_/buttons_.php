<?php
/**
 * buttons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);
p2made\assets\CircleButtonsAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Buttons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>

	<div class="body-content">
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Default Buttons
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<h4>Normal Buttons</h4>
						<p>
							<button type="button" class="btn btn-default">Default</button>
							<button type="button" class="btn btn-primary">Primary</button>
							<button type="button" class="btn btn-success">Success</button>
							<button type="button" class="btn btn-info">Info</button>
							<button type="button" class="btn btn-warning">Warning</button>
							<button type="button" class="btn btn-danger">Danger</button>
							<button type="button" class="btn btn-link">Link</button>
						</p>
						<br>
						<h4>Disabled Buttons</h4>
						<p>
							<button type="button" class="btn btn-default disabled">Default</button>
							<button type="button" class="btn btn-primary disabled">Primary</button>
							<button type="button" class="btn btn-success disabled">Success</button>
							<button type="button" class="btn btn-info disabled">Info</button>
							<button type="button" class="btn btn-warning disabled">Warning</button>
							<button type="button" class="btn btn-danger disabled">Danger</button>
							<button type="button" class="btn btn-link disabled">Link</button>
						</p>
						<br>
						<h4>Button Sizes</h4>
						<p>
							<button type="button" class="btn btn-primary btn-lg">Large button</button>
							<button type="button" class="btn btn-primary">Default button</button>
							<button type="button" class="btn btn-primary btn-sm">Small button</button>
							<button type="button" class="btn btn-primary btn-xs">Mini button</button>
							<br>
							<br>
							<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
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
							<button type="button" class="btn btn-outline btn-default">Default</button>
							<button type="button" class="btn btn-outline btn-primary">Primary</button>
							<button type="button" class="btn btn-outline btn-success">Success</button>
							<button type="button" class="btn btn-outline btn-info">Info</button>
							<button type="button" class="btn btn-outline btn-warning">Warning</button>
							<button type="button" class="btn btn-outline btn-danger">Danger</button>
							<button type="button" class="btn btn-outline btn-link">Link</button>
						</p>
						<br>
						<h4>Outline Button Sizes</h4>
						<p>
							<button type="button" class="btn btn-outline btn-primary btn-lg">Large button</button>
							<button type="button" class="btn btn-outline btn-primary">Default button</button>
							<button type="button" class="btn btn-outline btn-primary btn-sm">Small button</button>
							<button type="button" class="btn btn-outline btn-primary btn-xs">Mini button</button>
							<br>
							<br>
							<button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block level button</button>
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
							<a class="btn btn-block btn-social btn-adn">
								<i class="fa fa-adn"></i> Sign in with App.net
							</a>
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
							<a class="btn btn-block btn-social btn-foursquare">
								<i class="fa fa-foursquare"></i> Sign in with Foursquare
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
						</div>
						<div class="col-lg-6">
							<a class="btn btn-block btn-social btn-microsoft">
								<i class="fa fa-windows"></i> Sign in with Microsoft
							</a>
							<a class="btn btn-block btn-social btn-openid">
								<i class="fa fa-openid"></i> Sign in with OpenID
							</a>
							<a class="btn btn-block btn-social btn-pinterest">
								<i class="fa fa-pinterest"></i> Sign in with Pinterest
							</a>
							<a class="btn btn-block btn-social btn-reddit">
								<i class="fa fa-reddit"></i> Sign in with Reddit
							</a>
							<a class="btn btn-block btn-social btn-soundcloud">
								<i class="fa fa-soundcloud"></i> Sign in with SoundCloud
							</a>
							<a class="btn btn-block btn-social btn-tumblr">
								<i class="fa fa-tumblr"></i> Sign in with Tumblr
							</a>
							<a class="btn btn-block btn-social btn-twitter">
								<i class="fa fa-twitter"></i> Sign in with Twitter
							</a>
							<a class="btn btn-block btn-social btn-vimeo">
								<i class="fa fa-vimeo-square"></i> Sign in with Vimeo
							</a>
							<a class="btn btn-block btn-social btn-vk">
								<i class="fa fa-vk"></i> Sign in with VK
							</a>
							<a class="btn btn-block btn-social btn-yahoo">
								<i class="fa fa-yahoo"></i> Sign in with Yahoo!
							</a>
						</div>
						<div class="col-lg-12 text-center">
							<hr>
							<a class="btn btn-social-icon btn-adn"><i class="fa fa-adn"></i></a>
							<a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
							<a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
							<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
							<a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
							<a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
							<a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
							<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
							<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="col-lg-12 text-center">
							<br>
							<a class="btn btn-social-icon btn-microsoft"><i class="fa fa-windows"></i></a>
							<a class="btn btn-social-icon btn-openid"><i class="fa fa-openid"></i></a>
							<a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
							<a class="btn btn-social-icon btn-reddit"><i class="fa fa-reddit"></i></a>
							<a class="btn btn-social-icon btn-soundcloud"><i class="fa fa-soundcloud"></i></a>
							<a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
							<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
							<a class="btn btn-social-icon btn-vimeo"><i class="fa fa-vimeo-square"></i></a>
							<a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
							<a class="btn btn-social-icon btn-yahoo"><i class="fa fa-yahoo"></i></a>
						</div>
					</div><!-- /.panel-body -->
				</div><!-- /.panel -->
			</div>
		</div>
	</div><!-- /.body-content -->

</div><!-- /#content-wrapper -->
