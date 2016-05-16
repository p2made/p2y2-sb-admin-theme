<?php
/**
 * SBAdmin2Asset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

namespace p2made\theme\sbAdmin\assets;

class SBAdmin2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets/lib';

	public $css = [
		'css/sb-admin-2.min.css',
	];

	public $js = [
		'js/sb-admin-2.min.js'
	];

	public $depends = [
		'p2made\assets\P2CoreAsset',
		'p2made\assets\MetisMenuAsset',
	];
}
