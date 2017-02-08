<?php
/**
 * SBAdminAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\theme\sbAdmin\assets\SBAdminAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\theme\sbAdmin\assets\SBAdminAsset',
 */

namespace p2made\theme\sbAdmin\assets;

class SBAdminAsset extends \p2made\assets\base\P2AssetBundle
{
	protected $version = '0.0.0';

	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-sb-admin-theme/assets/lib',
			'css' => [
				'css/sb-admin.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2made\assets\P2CoreLoaderAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
