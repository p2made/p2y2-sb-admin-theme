<?php
/**
 * primary.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<?= $this->render('_html-header.php', []) ?>
<body>
	<?php $this->beginBody() ?>
	<div class="wrapper">

		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

			<?= $this->render('_navigation-top.php', []) ?>

			<?= $this->render('_navigation-left.php', []) ?>

		</nav>

		<?= $this->render('_content.php', ['content' => $content]) ?>

	</div>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
