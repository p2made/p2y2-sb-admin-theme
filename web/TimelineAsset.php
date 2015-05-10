<?php
namespace p2y2\sbAdminTheme\web;

/**
 * Timeline AssetBundle
 * @since 0.1
 */
class TimelineAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@p2y2/sbAdminTheme/assets/timeline';
	//public $sourcePath = null;
	public $css = [
		'css/timeline.css',
		//'//cdnjs.cloudflare.com/ajax/libs/timelinejs/2.35.6/css/timeline.css',
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
