<?php
/**
 * is.gd.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'is.gd';
$this->params['breadcrumbs'][] = $this->title;

$sampleUrl = 'http://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=louth&sll=53.800651,-4.064941&sspn=33.219383,38.803711&ie=UTF8&hq=&hnear=Louth,+United+Kingdom&ll=53.370272,-0.004034&spn=0.064883,0.075788&z=14';
$shortenedUrl = \p2made\helpers\IsGd::shortenUrl($sampleUrl);
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="row">
		<div class="col-lg-12">
			<h1>URL shortening with <a href="http://is.gd" target="_blank">is.gd</a>...</h1>
		</div>
	</div>

	<section>
		<div class="row">
			<div class="col-lg-2 text-right">
				<p><strong>Full URL:</strong></p>
			</div>
			<div class="col-lg-10">
				<p><a href="<?= $sampleUrl ?>" target="_blank">http://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=louth&sll=53.800651,<br>-4.064941&sspn=33.219383,38.803711&ie=UTF8&hq=&hnear=Louth,<br>+United+Kingdom&ll=53.370272,-0.004034&spn=0.064883,0.075788&z=14</a></p>
			</div>
			<div class="col-lg-2 text-right">
				<p><strong>Shortened URL:</strong></p>
			</div>
			<div class="col-lg-10">
				<p><a href="<?= $shortenedUrl ?>" target="_blank"><?= $shortenedUrl ?></a></p>
			</div>
			<div class="col-lg-offset-2 col-lg-10">
				<p>Line breaks in source URL are only for better screen presentation, &amp; <strong>not</strong> part of the URL submitted for shortening.</p>
			</div>
			<div class="col-lg-2 text-right">
				<p><strong>Usage:</strong></p>
			</div>
			<div class="col-lg-10">
				<p><code>$shortenedUrl = \p2made\helpers\IsGd::shortenUrl($sampleUrl);</code></p>
			</div>
			<div class="col-lg-2 text-right">
				<p><strong>Be considerate:</strong></p>
			</div>
			<div class="col-lg-10">
				<p>Save shortened links to your application database so they don't have to be shortened again.</p>
			</div>
		<div class="row">
		</div>
		</div>
	</section>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div>
