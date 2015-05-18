<?php
namespace p2made\theme\sbAdmin\web;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class SBAdmin2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets';

	public $css = [
		'css/sb-admin-2.min.css',
	];

	public $js = [
		'js/sb-admin-2.min.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\MetisMenuAsset',
	];
}
