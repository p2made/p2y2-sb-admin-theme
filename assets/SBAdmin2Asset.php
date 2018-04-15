<?php
/**
 * SBAdmin2Asset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sbAdmin\assets\SBAdmin2Asset',
 */

namespace p2m\sbAdmin\assets;

class SBAdmin2Asset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

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
			'p2m\assets\P2CoreAsset',
			'p2m\assets\MetisMenuAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
