<?php
namespace p2made\yii2theme\sbAdmin\demo;

use yii\web\AssetBundle;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class FlotDemoAsset extends AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/data';

	public $js = [
		'flot-data.js'
	];
}
