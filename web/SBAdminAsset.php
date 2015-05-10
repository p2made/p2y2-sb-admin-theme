<?php
namespace p2made\yii2theme\sbAdmin\web;

/**
 * SB Admin AssetBundle
 * @since 0.1
 */
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
		'\rmrevin\yii\fontawesome\AssetBundle',
	];
}
