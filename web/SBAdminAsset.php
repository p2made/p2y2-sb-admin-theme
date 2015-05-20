<?php
/**
 * SBAdminAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

namespace p2made\theme\sbAdmin\web;

class SBAdminAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $js = [
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
	];
}
