<?php
/**
 * notifications.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Notifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Alert Styles
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<div class="alert alert-success">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-warning">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-danger">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
					</div>
					<!-- .panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Dismissable Alerts
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
						</div>
					</div>
					<!-- .panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.col-lg-6 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Sweet Alerts
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<div class="col-lg-6">
							<h4>Basic example</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-primary" id="sweet-1">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre class="code">swal("Here's a message!")</pre>
								</div>
							</div>

							<h4>A title with a text under</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-primary" id="sweet-2">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal("Here's a message!", "It's pretty, isn't it?")</pre>
								</div>
							</div>

							<h4>A success message!</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-success" id="sweet-3">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal("Good job!", "You clicked the button!", "success")</pre>
								</div>
							</div>

							<h4>A warning message!</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-warning" id="sweet-4">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal("Warning!", "You clicked the button!", "warning")</pre>
								</div>
							</div>

							<h4>An error message!</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-danger" id="sweet-5">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal("Error!", "You clicked the button!", "error")</pre>
								</div>
							</div>

							<h4>An info message!</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-info" id="sweet-6">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal("Info!", "You clicked the button!", "info")</pre>
								</div>
							</div>

							<h4>A message with a custom icon</h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-primary" id="sweet-7">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>swal({
	title: "Sweet!",
	text: "Here's a custom image.",
	imageUrl: 'thumbs-up.jpg'
	});</pre>
								</div>
							</div>
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<h4>A warning message<small>, with a function attached to the "Confirm" button...</small></h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-warning" id="sweet-8">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>
	swal({
	title: "Are you sure?",
	text: "Your will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonClass: "btn-danger",
	confirmButtonText: "Yes, delete it!",
	closeOnConfirm: false
	},
	function(){
	swal("Deleted!", "Your imaginary file has been deleted.", "success");
	});</pre>
								</div>
							</div>

							<h4><small>...and by passing a parameter, you can execute something else for "Cancel".</small></h4>
							<div class="row">
								<div class="col-lg-2 text-center">
									<p><button class="btn btn-warning" id="sweet-9">Try It</button></p>
								</div>
								<div class="col-lg-10">
									<pre>
	swal({
	title: "Are you sure?",
	text: "You will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonClass: "btn-danger",
	confirmButtonText: "Yes, delete it!",
	cancelButtonText: "No, cancel plx!",
	closeOnConfirm: false,
	closeOnCancel: false
	},
	function(isConfirm) {
	if (isConfirm) {
		swal("Deleted!", "Your imaginary file has been deleted.", "success");
	} else {
		swal("Cancelled", "Your imaginary file is safe :)", "error");
	}
	});</pre>
								</div>
							</div>
						</div><!-- /.col-lg-6 -->
					</div>
					<!-- .panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Modals
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Button trigger modal -->
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							Launch Demo Modal
						</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
									</div>
									<div class="modal-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>
					<!-- .panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Tooltips and Popovers
					</div><!-- /.panel-heading -->
					<div class="panel-body">
						<h4>Tooltip Demo</h4>
						<div class="tooltip-demo">
							<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
							<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
							<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
							<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
						</div>
						<br>
						<h4>Clickable Popover Demo</h4>
						<div class="tooltip-demo">
							<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								Popover on left
							</button>
							<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								Popover on top
							</button>
							<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								Popover on bottom
							</button>
							<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
								Popover on right
							</button>
						</div>
					</div>
					<!-- .panel-body -->
				</div><!-- /.panel -->
			</div><!-- /.col-lg-6 -->
		</div>

	</div><!-- /.body-content -->

</div><!-- /#content-wrapper -->
