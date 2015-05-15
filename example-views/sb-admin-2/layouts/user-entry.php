<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

p2made\theme\sbAdmin\web\SBAdmin2UserAsset::register($this);
p2made\assets\pub\BootstrapSocialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('html-header.php', []) ?>
</head>
<body>
<?php $this->beginBody() ?>

	<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
