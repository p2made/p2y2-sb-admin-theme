<?php
namespace p2y2\sbAdminTheme\web;

/**
 * SB Admin AssetBundle
 * @since 0.1
 */
class SBAdminAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2y2/sbAdminTheme/assets/start-bootstrap';
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
