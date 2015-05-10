p2y2sbAdminAsset
================

*Backend UI for Yii2 Framework, based on [SB Admin](http://startbootstrap.com/template-overviews/sb-admin-2/)*

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html)
which registers the CSS files for the SB Admin 2 user-interface.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install SB Admin run:

```
php composer.phar require p2made/p2y2metisMenuAsset "*"
```


The CSS files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/p2y2metisMenuAsset/example-views/sb-admin-2'
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `examples/`), they are **not meant to be customized directly in the `vendor/` folder**.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view the sample pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}

Known Issues
------------

- sample pages in `site/pages/` return a 403 error when viewed in the Y11 2 Advanced backend.

I've not been able to resolve this. It may be an issue on my development machine.

To Do
-----

- Calendar page.
- Original SB Admin.

Customization
-------------

- Copy files from `vendor/p2made/p2y2metisMenuAsset/example-views/sb-admin-2` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `http://startbootstrap.com/template-overviews/sb-admin-2/`

> Namespacing rules follow the Yii 2.0 framework structure, eg. `sbadmin\web` for the Asset Bundles.

