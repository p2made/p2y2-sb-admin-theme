<?php
/**
 * SBAdmin2UserAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\sbAdmin\assets\SBAdmin2UserAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sbAdmin\assets\SBAdmin2UserAsset',
 */

namespace p2m\sbAdmin\assets;

class SBAdmin2UserAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.0.0';

	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-sb-admin-theme/assets/lib',
			'css' => [
				'css/sb-admin-2-user.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2m\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
