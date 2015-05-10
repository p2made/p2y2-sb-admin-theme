<?php
namespace p2made\yii2theme\sbAdmin\web;

/**
 * Timeline AssetBundle
 * @since 0.1
 */
class TimelineAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/assets';

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
