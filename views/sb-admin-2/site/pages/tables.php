<?php
/**
 * tables.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
p2m\assets\PdfMakeAsset::register($this);
p2m\assets\DataTablesBundleAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2m\demo\assets\DataTablesDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Tables';

$browserData = array(
	['browser' => 'Internet Explorer 4.0', 'platform' => 'Win 95+', 'engine' => 'Trident', 'version' => '4', 'css_grade' => 'X', 'even' => false],
	['browser' => 'Internet Explorer 5.0', 'platform' => 'Win 95+', 'engine' => 'Trident', 'version' => '5', 'css_grade' => 'C', 'even' => true],
	['browser' => 'Internet Explorer 5.5', 'platform' => 'Win 95+', 'engine' => 'Trident', 'version' => '5.5', 'css_grade' => 'A', 'even' => false],
	['browser' => 'Internet Explorer 6', 'platform' => 'Win 98+', 'engine' => 'Trident', 'version' => '6', 'css_grade' => 'A', 'even' => true],
	['browser' => 'Internet Explorer 7', 'platform' => 'Win XP SP2+', 'engine' => 'Trident', 'version' => '7', 'css_grade' => 'A', 'even' => false],
	['browser' => 'AOL browser (AOL desktop)', 'platform' => 'Win XP', 'engine' => 'Trident', 'version' => '6', 'css_grade' => 'A', 'even' => true],
	['browser' => 'Firefox 1.0', 'platform' => 'Win 98+ / OSX.2+', 'engine' => 'Gecko', 'version' => '1.7', 'css_grade' => 'A'],
	['browser' => 'Firefox 1.5', 'platform' => 'Win 98+ / OSX.2+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Firefox 2.0', 'platform' => 'Win 98+ / OSX.2+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Firefox 3.0', 'platform' => 'Win 2k+ / OSX.3+', 'engine' => 'Gecko', 'version' => '1.9', 'css_grade' => 'A'],
	['browser' => 'Camino 1.0', 'platform' => 'OSX.2+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Camino 1.5', 'platform' => 'OSX.3+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Netscape 7.2', 'platform' => 'Win 95+ / Mac OS 8.6-9.2', 'engine' => 'Gecko', 'version' => '1.7', 'css_grade' => 'A'],
	['browser' => 'Netscape Browser 8', 'platform' => 'Win 98SE+', 'engine' => 'Gecko', 'version' => '1.7', 'css_grade' => 'A'],
	['browser' => 'Netscape Navigator 9', 'platform' => 'Win 98+ / OSX.2+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.0', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.1', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.1', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.2', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.2', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.3', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.3', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.4', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.4', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.5', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.5', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.6', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.6', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.7', 'platform' => 'Win 98+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.7', 'css_grade' => 'A'],
	['browser' => 'Mozilla 1.8', 'platform' => 'Win 98+ / OSX.1+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Seamonkey 1.1', 'platform' => 'Win 98+ / OSX.2+', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Epiphany 2.20', 'platform' => 'Gnome', 'engine' => 'Gecko', 'version' => '1.8', 'css_grade' => 'A'],
	['browser' => 'Safari 1.2', 'platform' => 'OSX.3', 'engine' => 'Webkit', 'version' => '125.5', 'css_grade' => 'A'],
	['browser' => 'Safari 1.3', 'platform' => 'OSX.3', 'engine' => 'Webkit', 'version' => '312.8', 'css_grade' => 'A'],
	['browser' => 'Safari 2.0', 'platform' => 'OSX.4+', 'engine' => 'Webkit', 'version' => '419.3', 'css_grade' => 'A'],
	['browser' => 'Safari 3.0', 'platform' => 'OSX.4+', 'engine' => 'Webkit', 'version' => '522.1', 'css_grade' => 'A'],
	['browser' => 'OmniWeb 5.5', 'platform' => 'OSX.4+', 'engine' => 'Webkit', 'version' => '420', 'css_grade' => 'A'],
	['browser' => 'iPod Touch / iPhone', 'platform' => 'iPod', 'engine' => 'Webkit', 'version' => '420.1', 'css_grade' => 'A'],
	['browser' => 'S60', 'platform' => 'S60', 'engine' => 'Webkit', 'version' => '413', 'css_grade' => 'A'],
	['browser' => 'Opera 7.0', 'platform' => 'Win 95+ / OSX.1+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 7.5', 'platform' => 'Win 95+ / OSX.2+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 8.0', 'platform' => 'Win 95+ / OSX.2+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 8.5', 'platform' => 'Win 95+ / OSX.2+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 9.0', 'platform' => 'Win 95+ / OSX.3+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 9.2', 'platform' => 'Win 88+ / OSX.3+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera 9.5', 'platform' => 'Win 88+ / OSX.3+', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Opera for Wii', 'platform' => 'Wii', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Nokia N800', 'platform' => 'N800', 'engine' => 'Presto', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Nintendo DS browser', 'platform' => 'Nintendo DS', 'engine' => 'Presto', 'version' => '8.5', 'css_grade' => 'C/A'],
	['browser' => 'Konqureror 3.1', 'platform' => 'KDE 3.1', 'engine' => 'KHTML', 'version' => '3.1', 'css_grade' => 'C'],
	['browser' => 'Konqureror 3.3', 'platform' => 'KDE 3.3', 'engine' => 'KHTML', 'version' => '3.3', 'css_grade' => 'A'],
	['browser' => 'Konqureror 3.5', 'platform' => 'KDE 3.5', 'engine' => 'KHTML', 'version' => '3.5', 'css_grade' => 'A'],
	['browser' => 'Internet Explorer 4.5', 'platform' => 'Mac OS 8-9', 'engine' => 'Tasman', 'version' => '-', 'css_grade' => 'X'],
	['browser' => 'Internet Explorer 5.1', 'platform' => 'Mac OS 7.6-9', 'engine' => 'Tasman', 'version' => '1', 'css_grade' => 'C'],
	['browser' => 'Internet Explorer 5.2', 'platform' => 'Mac OS 8-X', 'engine' => 'Tasman', 'version' => '1', 'css_grade' => 'C'],
	['browser' => 'NetFront 3.1', 'platform' => 'Embedded devices', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'C'],
	['browser' => 'NetFront 3.4', 'platform' => 'Embedded devices', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'A'],
	['browser' => 'Dillo 0.8', 'platform' => 'Embedded devices', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'X'],
	['browser' => 'Links', 'platform' => 'Text only', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'X'],
	['browser' => 'Lynx', 'platform' => 'Text only', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'X'],
	['browser' => 'IE Mobile', 'platform' => 'Windows Mobile 6', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'C'],
	['browser' => 'PSP browser', 'platform' => 'PSP', 'engine' => 'Misc', 'version' => '-', 'css_grade' => 'C'],
	['browser' => 'All others', 'platform' => '-', 'engine' => 'Other browsers', 'version' => '-', 'css_grade' => 'U'],
);

$usersData = array(
	['number' => 1, 'first_name' => 'Mark', 'last_name' => 'Otto', 'username' => '@mdo', 'status' => 'success'],
	['number' => 2, 'first_name' => 'Jacob', 'last_name' => 'Thornton', 'username' => '@fat', 'status' => 'info'],
	['number' => 3, 'first_name' => 'Larry', 'last_name' => 'the Bird', 'username' => '@twitter', 'status' => 'warning'],
	['number' => 4, 'first_name' => 'John', 'last_name' => 'Smith', 'username' => '@jsmith', 'status' => 'danger'],
);
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					DataTables Advanced Tables
				</div>
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Rendering engine</th>
									<th>Browser</th>
									<th>Platform(s)</th>
									<th>Engine version</th>
									<th>CSS grade</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($browserData as $browser) { ?>
								<tr class="grade<?= $browser['css_grade'] ?>">
									<td><?= $browser['engine'] ?></td>
									<td><?= $browser['browser'] ?></td>
									<td><?= $browser['platform'] ?>+</td>
									<td class="center"><?= $browser['version'] ?></td>
									<td class="center"><?= $browser['css_grade'] ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="well">
						<h4>DataTables Usage Information</h4>
						<p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
						<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Kitchen Sink
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr>
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Basic Table
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr>
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Striped Rows
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr>
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Bordered Table
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive table-bordered">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr>
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Hover Rows
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr>
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Context Classes
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($usersData as $user) { ?>
								<tr class="<?= $user['status'] ?>">
									<td><?= $user['number'] ?></td>
									<td><?= $user['first_name'] ?></td>
									<td><?= $user['last_name'] ?>+</td>
									<td><?= $user['username'] ?>+</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
	</div>

	<!-- /### NOTE ### -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->
