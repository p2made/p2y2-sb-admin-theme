<?php
namespace p2made\yii2theme\sbAdmin\web;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class SBAdmin2UserAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets';

	public $css = [
		'css/sb-admin-2-user.min.css',
	];

	public $js = [];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'\rmrevin\yii\fontawesome\AssetBundle',
	];
}
