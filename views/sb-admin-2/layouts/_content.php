<?php
/**
 * content.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\widgets\Breadcrumbs;
use p2m\widgets\Alert;
?>
<div id="page-wrapper">
	<div class="container-fluid">

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

</div>
