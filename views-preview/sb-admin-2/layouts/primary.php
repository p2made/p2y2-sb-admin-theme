<?php
/**
 * primary.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<?= $this->render('html-header.php', []) ?>
<body>
	<?php $this->beginBody() ?>
	<div class="wrapper">

		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

			<?= $this->render('navigation-top.php', []) ?>

			<?= $this->render('navigation-left.php', []) ?>

		</nav>

		<?= $this->render('content.php', ['content' => $content]) ?>

	</div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
