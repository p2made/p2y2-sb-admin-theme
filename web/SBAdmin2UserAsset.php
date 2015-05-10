<?php
namespace p2y2\sbAdminTheme\web;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class SBAdmin2UserAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2y2/sbAdminTheme/assets/start-bootstrap';
	public $css = [
		'css/sb-admin-2-user.min.css',
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'\rmrevin\yii\fontawesome\AssetBundle',
		//'p2y2\bootstrapSocialAsset\AssetBundle',
	];
}
