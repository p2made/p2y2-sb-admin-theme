<?php
/**
 * SBAdmin2Asset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\theme\sbAdmin\assets\SBAdmin2Asset',
 */

namespace p2made\theme\sbAdmin\assets;

class SBAdmin2Asset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-sb-admin-theme/assets/lib',
			'css' => [
				'css/sb-admin-2.min.css',
			],
			'js' => [
				'js/sb-admin-2.min.js',
			],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
			'p2made\assets\MetisMenuAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
