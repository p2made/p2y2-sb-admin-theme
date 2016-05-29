<?php
/**
 * font-awesome-examples.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Font Awesome Examples';
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<p class="lead">
				With use <code>p2made\helpers\FA;</code> in your document header, you can place Font Awesome icons just about anywhere with <code>FA::i()</code>. Examples appreciatively re-used from the <a href="http://fontawesome.io/examples/">Font Awesome documentation <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a>.
			</p>
			<p>
				I love the elegance & cleverness of the recursive methods in <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a>, however the syntax starts out shorter than HTML for basic icons but becomes much longer as attributes are added. I've added a few shortcuts that reduce common combinations to method names of 2 letters. My shortcuts are annotated here with <em>p2made&nbsp;shortcut</em>.
			</p>

			<section id="basic">
				<h2>Basic Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->fixedWidth() ?>
							<code>FA::i(FA::_CAMERA_RETRO)</code>
						</p>
					</div>
					<div class="col-md-8 col-sm-7">
						<p>
							You can place Font Awesome icons just about anywhere using <code>FA::i($name, $options = [])</code>.
						</p>
						<div class="alert alert-success">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_INFO_CIRCLE)->li()->size(FA::SIZE_LARGE) ?>
									If you change the font-size of the icon's container, the icon gets bigger. Same things goes for color, drop shadow, and anything else that gets inherited using CSS.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- / Basic Icons -->

			<section id="larger">
				<h2>Larger Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->size(FA::SIZE_LARGE) ?>
							<code>FA::SIZE_LARGE</code>
						</p>
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->size(FA::SIZE_2X) ?>
							<code>FA::SIZE_2X</code>
						</p>
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->size(FA::SIZE_3X) ?>
							<code>FA::SIZE_3X</code>
						</p>
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->size(FA::SIZE_4X) ?>
							<code>FA::SIZE_4X</code>
						</p>
						<p>
							<?= FA::i(FA::_CAMERA_RETRO)->size(FA::SIZE_5X) ?>
							<code>FA::SIZE_5X</code>
						</p>
					</div>
					<div class="col-md-8 col-sm-7">
						<p>
							To increase icon sizes relative to their container, use
								<code>->size($value)</code> with
								<code>FA::SIZE_LARGE</code> (33% increase),
								<code>FA::SIZE_2X</code>,
								<code>FA::SIZE_3X</code>,
								<code>FA::SIZE_4X</code>, or
								<code>FA::SIZE_5X</code>
							constants.
						</p>
						<div class="alert alert-warning">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_EXCLAMATION_TRIANGLE)->li()->size(FA::SIZE_LARGE) ?>
									If your icons are getting chopped off on top and bottom, make sure you have sufficient line-height.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- / Larger Icons -->

			<section id="fixed-width">
				<h2>Fixed Width Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="list-group">
							<a class="list-group-item" href="#">
								<?= FA::fw(FA::_HOME) ?>&nbsp; Home
							</a>
							<a class="list-group-item" href="#">
								<?= FA::fw(FA::_BOOK) ?>&nbsp; Library
							</a>
							<a class="list-group-item" href="#">
								<?= FA::fw(FA::_PENCIL) ?>&nbsp; Applications
							</a>
							<a class="list-group-item" href="#">
								<?= FA::fw(FA::_COG) ?>&nbsp; Settings
							</a>
						</div>
					</div>
					<div class="col-md-8 col-sm-7">
						<p>
							<em>p2made shortcut</em><br>
							Use <code>FA::fw($name, $options = [])</code> to set icons at a fixed width. Great to use when different icon widths throw off alignment. Especially useful in things like nav lists &amp; list groups.
						</p>
					</div>
				</div>
			</section><!-- / Fixed Width Icons -->

			<section id="list">
				<h2>List Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<ul class="fa-ul">
							<li><?= FA::li(FA::_CHECK_SQUARE) ?> List icons</li>
							<li><?= FA::li(FA::_CHECK_SQUARE) ?> can be used</li>
							<li><?= FA::li(FA::_SPINNER)->spin() ?> as bullets</li>
							<li><?= FA::li(FA::_SQUARE) ?> in lists</li>
						</ul>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							<em>p2made shortcut</em><br>
							Use <code>FA::ul($name, $options = [])</code> and <code>FA::li($name, $options = [])</code> to easily replace default bullets in unordered lists.
						</p>
					</div>
				</div>
			</section><!-- /  -->

			<section id="bordered-pulled">
				<h2>Bordered & Pulled Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>
							<?= FA::bl(FA::_QUOTE_LEFT)->size(FA::SIZE_3X) ?>
							&hellip;tomorrow we will run faster, stretch out our arms farther&hellip; And then one fine morning — So we beat on, boats against the current, borne back ceaselessly into the past.
						</p>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							<em>p2made shortcut</em><br>
							Use <code>FA::bd($name, $options = [])</code> and <code>FA::pl($name, $options = [])</code> or <code>FA::pr($name, $options = [])</code> for easy pull quotes or article icons.
						</p>
						<div class="alert alert-warning">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_EXCLAMATION_TRIANGLE)->li()->size(FA::SIZE_LARGE) ?>
									My sortcuts don't (yet) recurse, so you'd have to combine, like <code>FA::bd($name, $options = [])->pullLeft()</code> for this example. Because these are commonly combined, I've added <code>FA::bl($name, $options = [])</code> (this example, border, pull left) &amp; <code>FA::br($name, $options = [])</code> (border, pull right) shortcuts.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- / Bordered & Pulled Icons -->

			<section id="animated">
				<h2>Animated Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>
							<?= FA::sp(FA::_SPINNER)->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
							<?= FA::sp(FA::_CIRCLE_O_NOTCH)->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
							<?= FA::sp(FA::_REFRESH)->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
							<?= FA::sp(FA::_COG)->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
						</p>
						<p>
							<?= FA::pu(FA::_SPINNER)->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
						</p>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							<em>p2made shortcut</em><br>
							Use the <code>FA::sp($name, $options = [])</code> class to get any icon to rotate, and use <code>FA::pu($name, $options = [])</code> to have it rotate
							with 8 steps. Works well with <code>FA::_SPINNER</code>, <code>FA::_REFRESH</code>, and <code>FA::_COG</code>.
						</p>
						<div class="alert alert-warning">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_EXCLAMATION_TRIANGLE)->li()->size(FA::SIZE_LARGE) ?>
									Some browsers on some platforms have issues with animated icons resulting in a jittery wobbling effect. See <a href="https://github.com/FortAwesome/Font-Awesome/issues/671" class="alert-link" target="_blank">issue #671</a> for examples and possible workarounds.
								</li>
							</ul>
						</div>
						<div class="alert alert-info">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_INFO_CIRCLE)->li()->size(FA::SIZE_LARGE) ?>
									CSS3 animations aren't supported in IE8 - IE9.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- / Animated Icons -->

			<section id="rotated-flipped">
				<h2>Rotated &amp; Flipped</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p style="font-size: 18px;">
							<?= FA::i(FA::_SHIELD) ?>&nbsp; normal<br>
							<?= FA::i(FA::_SHIELD)->rotate(FA::ROTATE_90) ?>&nbsp;
							<code>FA::ROTATE_90</code><br>
							<?= FA::i(FA::_SHIELD)->rotate(FA::ROTATE_180) ?>&nbsp;
							<code>FA::ROTATE_180</code><br>
							<?= FA::i(FA::_SHIELD)->rotate(FA::ROTATE_270) ?>&nbsp;
							<code>FA::ROTATE_270</code><br>
							<?= FA::i(FA::_SHIELD)->flip(FA::FLIP_HORIZONTAL) ?>&nbsp;
							<code>FA::FLIP_HORIZONTAL</code><br>
							<?= FA::i(FA::_SHIELD)->flip(FA::FLIP_VERTICAL) ?>&nbsp;
							<code>FA::FLIP_VERTICAL</code><br>
						</p>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							To arbitrarily rotate icons, use <code>->rotate($value)</code> with
								<code>FA::ROTATE_90</code>
								<code>FA::ROTATE_180</code>, or
								<code>FA::ROTATE_270</code>
							constants.
						</p>
						<p>
							To arbitrarily flip icons, use <code>->flip($value)</code> with
								<code>FA::FLIP_HORIZONTAL</code>, or
								<code>FA::FLIP_VERTICAL</code>
							constants.
						</p>
					</div>
				</div>
			</section><!-- / Rotated &amp; Flipped -->

			<section id="stacked">
				<h2>Stacked Icons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="margin-bottom">
							<?= FA::s(FA::_TWITTER, FA::_SQUARE_O, ['class' => 'fa-lg']) ?>
							<code>FA::s(FA::_TWITTER, FA::_SQUARE_O)</code><br>

							<?= FA::s(FA::vs(FA::_FLAG), FA::_CIRCLE, ['class' => 'fa-lg']) ?>
							<code>FA::s(FA::vs(FA::_FLAG), FA::_CIRCLE)</code><br>

							<?= FA::s(FA::vs(FA::_TERMINAL), FA::_SQUARE, ['class' => 'fa-lg']) ?>
							<code>FA::s(FA::vs(FA::_TERMINAL), FA::_SQUARE)</code><br>
						</div>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							To stack multiple icons, use the <code>fa-stack</code> class on the parent, the <code>fa-stack-1x</code>
							for the regularly sized icon, and <code>fa-stack-2x</code> for the larger icon. <code>fa-inverse</code>
							can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent
							to get further control of sizing.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="margin-bottom">
							<?= FA::is(
								FA::i(FA::_BAN)->addCssClass('text-danger'),
								FA::i(FA::_CAMERA),
								['class' => 'fa-lg']
							) ?>
							<code>FA::is(FA::i(FA::_BAN)->addCssClass('text-danger'), FA::i(FA::_CAMERA))</code><br>
						</div>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="alert alert-success">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_INFO_CIRCLE)->li()->size(FA::SIZE_LARGE) ?>
									<em>p2made shortcut</em><br>
									The original FA classes don't allow for the larger icon in the stack to be on top like this example. My <code>FA::is($foreground, $background, $options = [])</code> class provides a hacky workaround.
								</li>
							</ul>
						</div>
						<div class="alert alert-warning">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_EXCLAMATION_TRIANGLE)->li()->size(FA::SIZE_LARGE) ?>
									<em>p2made shortcut</em><br>
									Like I said, <code>FA::is()</code> is hacky. It doesn't provide the recursion &amp; icons must be handed in fully formed. The size must be set as a class in <code>$options</code>.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="margin-bottom">
							<?= FA::ban(FA::i(FA::_CAMERA), ['class' => 'fa-lg']) ?>
							<code>FA::ban(FA::i(FA::_CAMERA))</code><br>
						</div>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>
							<em>p2made shortcut</em><br>
							That hacky class is pretty verbose so <code>FA::ban($object, $options = [])</code> is a whole lot more concise for <code>FA::_BAN</code> stacks.
						</p>
						<div class="alert alert-warning">
							<ul class="fa-ul">
								<li>
									<?= FA::fw(FA::_EXCLAMATION_TRIANGLE)->li()->size(FA::SIZE_LARGE) ?>
									<em>p2made shortcut</em><br>
									It calls the first hacky effort so same limitations apply.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section><!-- / Stacked Icons -->

			<section id="bootstrap">
				<h2>Bootstrap 3 Examples</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>
							<a class="btn btn-danger" href="#">
								<?= FA::i(FA::_TRASH_O)->size(FA::SIZE_LARGE) ?> Delete
							</a>
							<a class="btn btn-default btn-sm" href="#">
								<?= FA::i(FA::_COG) ?> Settings
							</a>
						</p>
						<p>
							<a class="btn btn-lg btn-success" href="#">
								<?= FA::pl(FA::_FLAG)->size(FA::SIZE_2X) ?>
								Font Awesome<br>Version 4.5.0
							</a>
						</p>
						<div class="margin-bottom">
							<div class="btn-group">
								<a class="btn btn-default" href="#"><?= FA::i(FA::_ALIGN_LEFT) ?></a>
								<a class="btn btn-default" href="#"><?= FA::i(FA::_ALIGN_CENTER) ?></a>
								<a class="btn btn-default" href="#"><?= FA::i(FA::_ALIGN_RIGHT) ?></a>
								<a class="btn btn-default" href="#"><?= FA::i(FA::_ALIGN_JUSTIFY) ?></a>
							</div>
						</div><br>
						<div class="margin-bottom">
							<div class="input-group margin-bottom-sm">
								<span class="input-group-addon"><?= FA::fw(FA::_ENVELOPE_O) ?></span>
								<input class="form-control" type="text" placeholder="Email address">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><?= FA::fw(FA::_KEY) ?></span>
								<input class="form-control" type="password" placeholder="Password">
							</div>
						</div><br>
						<div class="margin-bottom">
							<div class="btn-group">
								<a class="btn btn-primary" href="#"><?= FA::fw(FA::_USER) ?> User</a>
								<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
									<?= FA::i(FA::_CARET_DOWN)->tag('span') ?></a>
								<ul class="dropdown-menu">
									<li><a href="#"><?= FA::fw(FA::_PENCIL) ?> Edit</a></li>
									<li><a href="#"><?= FA::fw(FA::_TRASH_O) ?> Delete</a></li>
									<li><a href="#"><?= FA::fw(FA::_BAN) ?> Ban</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="i"></i> Make admin</a></li>
								</ul>
							</div>
						</div>

					</div>
					<div class="col-md-9 col-sm-8">
						<p>Font Awesome works great with the full range of Bootstrap components.</p>
					</div>
				</div>
			</section><!-- / Bootstrap 3 Examples -->

	<!--
			<section id="custom">
				<h2>Custom CSS</h2>
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<p>Anything you can do with CSS font styles, you can do with Font Awesome.</p>
					</div>
					<div class="col-md-9 col-sm-8">
						<p>Star Ratings (inspired by <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
						<div class="well">
							<span class="rating">
								<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
							</span>
						</div>
					</div>
				</div>
			</section>
	-->

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
