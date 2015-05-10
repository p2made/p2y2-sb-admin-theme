<?php
namespace p2y2\sbAdminTheme\demo;

use yii\web\AssetBundle;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class MorrisDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2y2/sbAdminTheme/data';
	public $css = [
	];
	public $js = [
		'morris-data.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
