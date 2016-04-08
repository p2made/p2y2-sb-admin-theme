<?php
/**
 * SBAdminAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

namespace p2made\theme\sbAdmin\assets;

class SBAdminAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets/lib';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $js = [
	];

	public $depends = [
		'p2made\assets\P2CoreLoaderAsset',
	];
}
