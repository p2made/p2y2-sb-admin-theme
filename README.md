P2 SB Admin Theme v4.0.0-dev
=================

[![License](https://poser.pugx.org/p2made/yii2-sb-admin-theme/license)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Total Downloads](https://poser.pugx.org/p2made/yii2-sb-admin-theme/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Monthly Downloads](https://poser.pugx.org/p2made/yii2-sb-admin-theme/d/monthly)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/yii2-sb-admin-theme/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Latest Unstable Version](https://poser.pugx.org/p2made/yii2-sb-admin-theme/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)

---

SB Admin from [Start Bootstrap](http://startbootstrap.com/) as a backend UI for Yii 2 Framework.

P2 SB Admin Theme contains [AssetBundles for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)
which registers the CSS & JS files for the SB Admin 2 UI.

It declares [`yii2-p2y2-things`](https://github.com/p2made/yii2-p2y2-things) as a dependancy.

¡¡ IMPORTANT !!
===============

Version 2.0.0 of all my Yii2 add-ons marks a breaking change where I've shortened my namespaces.
In P2 SB Admin Theme `p2made\theme\sbAdmin\rest\of\namespace` is now `p2m\sbAdmin\rest\of\namespace`.
In the rest of my Yii2 add-ons `p2made\rest\of\namespace` is now `p2m\rest\of\namespace`.

Installation
------------

The preferred way to install P2 SB Admin Theme is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require p2made/yii2-sb-admin-theme "~4.0"
```

or

```
php composer.phar require p2made/yii2-sb-admin-theme "~4.0"
```

Alternatively add:

```
	"p2made/yii2-sb-admin-theme": "~4.0"
```

to the requires section of your `composer.json` file & P2 SB Admin Theme will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/yii2-sb-admin-theme/views/sb-admin-2',
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `views/`), they are **not meant to be customized directly in the `vendor/` folder**. If you do that, your changes will be lost next time you run `composer update`.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

```php
	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}
```

And then...
-----------

P2 SB Admin Theme uses [P2Y2Things](https://github.com/p2made/yii2-p2y2-things) which requires some Yii 2 assets to be nullified to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		...
	],
```

Customization
-------------

- Copy files from `vendor/p2made/yii2-sb-admin-theme/views-preview/sb-admin-2` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `http://startbootstrap.com/template-overviews/sb-admin-2/` & the example views.

If you want to use the layout files *without* modifying them, then use this slightly different modification to the path mappings that only re-maps the `layouts` folder:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views/layouts' => '@vendor/p2made/yii2-sb-admin-theme/views/sb-admin-2/layouts',
				],
			],
		],
	],
```

Known Issues
------------

- sample pages in `site/pages/` return a 403 error when viewed in the Yii2 Advanced backend. This doesn't happen in the Yii2 Advanced frontend.

I've not been able to resolve this. It may be an issue on my development machine.

To Do
-----

- Calendar page.
- Original SB Admin.

