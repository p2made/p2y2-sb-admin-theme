<?php
use yii\widgets\Breadcrumbs;
use p2made\theme\sbAdmin\widgets\Alert;
?>
<div id="page-wrapper">
	<header class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $this->title; ?></h1>
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
		</div>
	</header>

	<?= $content ?>

</div>
