<?php
/**
 * bootstrap-social.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;
use p2m\helpers\BSocial;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Bootstrap Social';

/**
 * Putting demo data as arrays of constants to provide examples
 * of accessing all the social network name constants.
 */
$socialIcons = array(
BSocial::ADN, BSocial::BITBUCKET, BSocial::DROPBOX, BSocial::FACEBOOK, BSocial::FLICKR,
BSocial::FOURSQUARE, BSocial::GITHUB, BSocial::GOOGLE, BSocial::INSTAGRAM, BSocial::LINKEDIN,
BSocial::MICROSOFT, BSocial::ODNOKLASSNIKI, BSocial::OPENID, BSocial::PINTEREST,
BSocial::REDDIT, BSocial::SOUNDCLOUD, BSocial::TUMBLR, BSocial::TWITTER, BSocial::VIMEO,
BSocial::VK, BSocial::YAHOO,
);
$sizes = [BSocial::SIZE_LARGE, BSocial::SIZE_SMALL, BSocial::SIZE_XSMALL];
/**
 * End of demo data
 */
?>
<div id="content-wrapper">

<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">Default Buttons</h3>
				</div>
			</div>

				<?php foreach ($socialIcons as $socialIcon) { ?>
					<div class="row">
						<div class="col-md-6">
							<code>BSocial::a('<?= $socialIcon ?>')</code><br class="clearfix">
						</div>
						<div class="col-md-6">
							<?= BSocial::a($socialIcon) ?><br class="clearfix">
						</div>
					</div>
				<?php } ?>

			</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">Without 'btn-block'</h3>
				</div>
			</div>

				<?php foreach ($socialIcons as $socialIcon) { ?>
					<div class="row">
						<div class="col-md-6">
							<code>BSocial::nb('<?= $socialIcon ?>')</code><br class="clearfix">
						</div>
						<div class="col-md-6">
							<?= BSocial::nb($socialIcon) ?><br class="clearfix"><br>
						</div>
					</div>
				<?php } ?>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Icon Buttons</h3>
		</div>

		<?php foreach ($socialIcons as $socialIcon) { ?>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-10">
						<code>BSocial::i('<?= $socialIcon ?>')</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i($socialIcon) ?><br class="clearfix"><br>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>

	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Different Sizes</h3>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::a('github')->size('lg')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::a('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::a('github')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::a('github') ?><br class="clearfix">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::a('github')->size('sm')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::a('github')->size(BSocial::SIZE_SMALL) ?><br class="clearfix">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::a('github')->size('xs')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::a('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix">
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::i('github')->size('lg')</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::i('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::i('github')</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::i('github') ?><br class="clearfix"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::a('github')->size('sm')->icon()</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::i('github')->size(BSocial::SIZE_SMALL) ?><br class="clearfix"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::a('github')->size('xs')->icon()</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::i('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix"><br>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Custom Captions</h3>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-7">
					<code>BSocial::a('github')->caption('Use @@@ to log in to our awesome site!')</code><br class="clearfix">
				</div>
				<div class="col-md-5">
					<?= BSocial::a('github')->caption('Use @@@ to log in to our awesome site!') ?><br class="clearfix">
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">As &lt;button&gt; Tags</h3>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::b('github')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::b('github') ?><br class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::bi('github')</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::bi('github') ?><br class="clearfix">
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<h4 class="text-center">in different sizes</h4>
		</div>

		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::b('github')->size('lg')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::b('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<code>BSocial::b('github')->size('xs')</code><br class="clearfix">
				</div>
				<div class="col-md-6">
					<?= BSocial::b('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::bi('github')->size('lg')</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::bi('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<code>BSocial::bi('github')->size('xs')</code><br class="clearfix">
				</div>
				<div class="col-md-2">
					<?= BSocial::bi('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix"><br>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<h4 class="text-center">&amp; with custom captions</h4>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-7">
					<code>BSocial::b('github')->caption('Use @@@ to log in to our awesome site!')</code><br class="clearfix">
				</div>
				<div class="col-md-5">
					<?= BSocial::b('github')->caption('Use @@@ to log in to our awesome site!') ?><br class="clearfix">
				</div>
			</div>
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
