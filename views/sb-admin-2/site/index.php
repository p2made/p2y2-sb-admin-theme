<?php
/**
 * index.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
p2m\assets\TimelineAsset::register($this);
p2m\assets\MorrisAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2m\demo\assets\MorrisDemoData::register($this);

/* @var $this yii\web\View */

$this->title = 'Dashboard';
/* @var $form yii\bootstrap\ActiveForm */
?>
<div id="content-wrapper">

	<div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('comments fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">26</div>
							<div>New Comments!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('tasks fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">12</div>
							<div>New Tasks!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('shopping-cart fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">124</div>
							<div>New Orders!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<?= FA::i('support fa-5x') ?>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">13</div>
							<div>Support Tickets!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><?= FA::i('arrow-circle-right') ?></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div><!-- Example Panels -->
	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= FA::i('bar-chart-o fa-fw') ?> Area Chart Example
					<div class="pull-right">
						<?= ButtonDropdown::widget([
							'label' => 'Actions',
							'dropdown' => [
								'items' => [
									['label' => 'Action', 'url' => '#'],
									['label' => 'Another action', 'url' => '#'],
									['label' => 'Something else here', 'url' => '#'],
									'<li class="divider"></li>',
									['label' => 'Separated link', 'url' => '#'],
								],
								'options' => ['class' => 'pull-right', 'role' => 'menu'],
							],
							'options' => ['class' => 'btn btn-default btn-xs dropdown-toggle', 'type' => 'button'],
						]) ?>
					</div>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
				<!-- /.panel-body -->
			</div><!-- /.panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= FA::i('bar-chart-o fa-fw') ?> Bar Chart Example
					<div class="pull-right">
						<?= ButtonDropdown::widget([
							'label' => 'Actions',
							'dropdown' => [
								'items' => [
									['label' => 'Action', 'url' => '#'],
									['label' => 'Another action', 'url' => '#'],
									['label' => 'Something else here', 'url' => '#'],
									'<li class="divider"></li>',
									['label' => 'Separated link', 'url' => '#'],
								],
								'options' => ['class' => 'pull-right', 'role' => 'menu'],
							],
							'options' => ['class' => 'btn btn-default btn-xs dropdown-toggle', 'type' => 'button'],
						]) ?>
					</div>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Date</th>
											<th>Time</th>
											<th>Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>3326</td>
											<td>10/21/2013</td>
											<td>3:29 PM</td>
											<td>$321.33</td>
										</tr>
										<tr>
											<td>3325</td>
											<td>10/21/2013</td>
											<td>3:20 PM</td>
											<td>$234.34</td>
										</tr>
										<tr>
											<td>3324</td>
											<td>10/21/2013</td>
											<td>3:03 PM</td>
											<td>$724.17</td>
										</tr>
										<tr>
											<td>3323</td>
											<td>10/21/2013</td>
											<td>3:00 PM</td>
											<td>$23.71</td>
										</tr>
										<tr>
											<td>3322</td>
											<td>10/21/2013</td>
											<td>2:49 PM</td>
											<td>$8345.23</td>
										</tr>
										<tr>
											<td>3321</td>
											<td>10/21/2013</td>
											<td>2:23 PM</td>
											<td>$245.12</td>
										</tr>
										<tr>
											<td>3320</td>
											<td>10/21/2013</td>
											<td>2:15 PM</td>
											<td>$5663.54</td>
										</tr>
										<tr>
											<td>3319</td>
											<td>10/21/2013</td>
											<td>2:13 PM</td>
											<td>$943.45</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.table-responsive -->
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-8">
							<div id="morris-bar-chart"></div>
						</div>
						<!-- /.col-lg-8 (nested) -->
					</div>
				</div>
				<!-- /.panel-body -->
			</div><!-- /.panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= FA::i('clock-o fa-fw') ?> Responsive Timeline
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<ul class="timeline">
						<li>
							<div class="timeline-badge"><?= FA::i('check') ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
									<p><small class="text-muted"><?= FA::i('clock-o') ?> 11 hours ago via Twitter</small>
									</p>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge warning"><?= FA::i('credit-card') ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge danger"><?= FA::i('bomb') ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge info"><?= FA::i('save') ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
									<hr>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
											<?= FA::i('gear') ?>  <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a>
											</li>
											<li><a href="#">Another action</a>
											</li>
											<li><a href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge success"><?= FA::i('graduation-cap') ?>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.panel-body -->
			</div><!-- /.panel -->
		</div>

		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= FA::i('bell fa-fw') ?> Notifications Panel
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<?= FA::i('comment fa-fw') ?> New Comment
							<span class="pull-right text-muted small"><em>4 minutes ago</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('twitter fa-fw') ?> 3 New Followers
							<span class="pull-right text-muted small"><em>12 minutes ago</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('envelope fa-fw') ?> Message Sent
							<span class="pull-right text-muted small"><em>27 minutes ago</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('tasks fa-fw') ?> New Task
							<span class="pull-right text-muted small"><em>43 minutes ago</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('upload fa-fw') ?> Server Rebooted
							<span class="pull-right text-muted small"><em>11:32 AM</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('bolt fa-fw') ?> Server Crashed!
							<span class="pull-right text-muted small"><em>11:13 AM</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('warning fa-fw') ?> Server Not Responding
							<span class="pull-right text-muted small"><em>10:57 AM</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('shopping-cart fa-fw') ?> New Order Placed
							<span class="pull-right text-muted small"><em>9:49 AM</em>
							</span>
						</a>
						<a href="#" class="list-group-item">
							<?= FA::i('money fa-fw') ?> Payment Received
							<span class="pull-right text-muted small"><em>Yesterday</em>
							</span>
						</a>
					</div>
					<!-- /.list-group -->
					<a href="#" class="btn btn-default btn-block">View All Alerts</a>
				</div>
				<!-- /.panel-body -->
			</div><!-- /.panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= FA::i('bar-chart-o fa-fw') ?> Donut Chart Example
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
					<a href="#" class="btn btn-default btn-block">View Details</a>
				</div>
				<!-- /.panel-body -->
			</div><!-- /.panel -->
			<div class="chat-panel panel panel-default">
				<div class="panel-heading">
					<?= FA::i('comments fa-fw') ?>
					Chat
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
							<?= FA::i('chevron-down') ?>
						</button>
						<ul class="dropdown-menu slidedown">
							<li>
								<a href="#">
									<?= FA::i('refresh fa-fw') ?> Refresh
								</a>
							</li>
							<li>
								<a href="#">
									<?= FA::i('check-circle fa-fw') ?> Available
								</a>
							</li>
							<li>
								<a href="#">
									<?= FA::i('times fa-fw') ?> Busy
								</a>
							</li>
							<li>
								<a href="#">
									<?= FA::i('clock-o fa-fw') ?> Away
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<?= FA::i('sign-out fa-fw') ?> Sign Out
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<ul class="chat">
						<li class="left clearfix">
							<span class="chat-img pull-left">
								<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font">Jack Sparrow</strong>
									<small class="pull-right text-muted">
										<?= FA::i('clock-o fa-fw') ?> 12 mins ago
									</small>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
								</p>
							</div>
						</li>
						<li class="right clearfix">
							<span class="chat-img pull-right">
								<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header">
									<small class=" text-muted">
										<?= FA::i('clock-o fa-fw') ?> 13 mins ago</small>
									<strong class="pull-right primary-font">Bhaumik Patel</strong>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
								</p>
							</div>
						</li>
						<li class="left clearfix">
							<span class="chat-img pull-left">
								<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font">Jack Sparrow</strong>
									<small class="pull-right text-muted">
										<?= FA::i('clock-o fa-fw') ?> 14 mins ago</small>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
								</p>
							</div>
						</li>
						<li class="right clearfix">
							<span class="chat-img pull-right">
								<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
							</span>
							<div class="chat-body clearfix">
								<div class="header">
									<small class=" text-muted">
										<?= FA::i('clock-o fa-fw') ?> 15 mins ago</small>
									<strong class="pull-right primary-font">Bhaumik Patel</strong>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
								</p>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.panel-body -->
				<div class="panel-footer">
					<div class="input-group">
						<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
						<span class="input-group-btn">
							<?= Button::widget([
								'label' => 'Send',
								'options' => ['class' => 'btn btn-warning btn-sm', 'id' => 'btn-chat'],
							]); ?>
						</span>
					</div>
				</div>
				<!-- /.panel-footer -->
			</div><!-- /.panel .chat-panel -->
		</div>
	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->
