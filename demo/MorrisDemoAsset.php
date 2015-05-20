<?php
/**
 * MorrisDemoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

namespace p2made\theme\sbAdmin\demo;

class MorrisDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-sb-admin-theme/data';

	public $js = [
		'morris-data.js'
	];
}
