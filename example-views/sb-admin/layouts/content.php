<?php
use yii\widgets\Breadcrumbs;
use p2made\yii2theme\sbAdmin\widgets\Alert;
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<header class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					<?php echo $this->title; ?> <small></small>
				</h1>
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
				<?= Alert::widget() ?>
			</div>
		</header>

		<?= $content ?>

	</div>
</div>
