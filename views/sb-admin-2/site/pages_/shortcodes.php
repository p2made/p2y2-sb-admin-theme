<?php
/**
 * shortcodes.php
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

$this->title = 'Shortcodes';
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

		<div class="container">

			<div id="buttons-container">
				<h2 class="page-header">Buttons</h2>
				<div class="bs-example">
					<button type="button" class="btn btn-xs btn-default">Default</button>
					<button type="button" class="btn btn-xs btn-primary">Primary</button>
					<button type="button" class="btn btn-xs btn-success">Success</button>
					<button type="button" class="btn btn-xs btn-info">Info</button>
					<button type="button" class="btn btn-xs btn-warning">Warning</button>
					<button type="button" class="btn btn-xs btn-danger">Danger</button>
				</div>
				<div class="bs-example">
					<button type="button" class="btn btn-sm btn-default">Default</button>
					<button type="button" class="btn btn-sm btn-primary">Primary</button>
					<button type="button" class="btn btn-sm btn-success">Success</button>
					<button type="button" class="btn btn-sm btn-info">Info</button>
					<button type="button" class="btn btn-sm btn-warning">Warning</button>
					<button type="button" class="btn btn-sm btn-danger">Danger</button>
				</div>
				<div class="bs-example">
					<button type="button" class="btn btn-default">Default</button>
					<button type="button" class="btn btn-primary">Primary</button>
					<button type="button" class="btn btn-success">Success</button>
					<button type="button" class="btn btn-info">Info</button>
					<button type="button" class="btn btn-warning">Warning</button>
					<button type="button" class="btn btn-danger">Danger</button>
				</div>

				<div class="bs-example">
					<button type="button" class="btn btn-lg btn-default"><i class="fa fa-cog"></i> Default</button>
					<button type="button" class="btn btn-lg btn-primary"><i class="fa fa-heart"></i> Primary</button>
					<button type="button" class="btn btn-lg btn-success">Success</button>
					<button type="button" class="btn btn-lg btn-info">Info</button>
					<button type="button" class="btn btn-lg btn-warning">Warning</button>
					<button type="button" class="btn btn-lg btn-danger">Danger</button>
				</div>
			</div><!--/#buttons-container-->

			<div id="feature-container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-header">Features</h2>
					</div>
					<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="feature-inner">
							<div class="icon-wrapper">
								<i class="fa fa-2x fa-envelope-o"></i>
							</div>
							<h2>Incredibly Responsive</h2>
							<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
						</div>
					</div>
					<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="feature-inner">
							<div class="icon-wrapper">
								<i class="fa fa-2x fa-heart-o"></i>
							</div>
							<h2>Incredibly Responsive</h2>
							<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
						</div>
					</div>
					<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="feature-inner">
							<div class="icon-wrapper">
								<i class="fa fa-2x fa-star-o"></i>
							</div>
							<h2>Incredibly Responsive</h2>
							<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
						</div>
					</div>
					<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
						<div class="feature-inner">
							<div class="icon-wrapper">
								<i class="fa fa-2x fa-comments-o"></i>
							</div>
							<h2>Incredibly Responsive</h2>
							<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
						</div>
					</div>
				</div>
			</div><!--/#feature-container-->

			<hr>

			<div id="tab-container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-header">Tab</h2>
					</div>
					<div class="col-md-6">
						<ul id="tab1" class="nav nav-tabs">
							<li class="active"><a href="#tab1-item1" data-toggle="tab">Tab 1</a></li>
							<li><a href="#tab1-item2" data-toggle="tab">Tab 2</a></li>
							<li><a href="#tab1-item3" data-toggle="tab">Tab 3</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tab1-item1">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="tab1-item2">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							</div>
							<div class="tab-pane fade" id="tab1-item3">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<ul id="tab2" class="nav nav-pills">
							<li class="active"><a href="#tab2-item1" data-toggle="tab">Tab 1</a></li>
							<li><a href="#tab2-item2" data-toggle="tab">Tab 2</a></li>
							<li><a href="#tab2-item3" data-toggle="tab">Tab 3</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tab2-item1">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="tab2-item2">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
							</div>
							<div class="tab-pane fade" id="tab2-item3">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--/#table-container-->

			<div id="accordion-container">
				<h2 class="page-header">Accordion</h2>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Collapsible Group Item #1
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									Collapsible Group Item #2
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									Collapsible Group Item #3
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div><!--/#accordion-->
			</div><!--/#accordion-container-->

			<div id="progressbar-container">
				<h2 class="page-header">Progress Bars</h2>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						40% Complete (success)
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						20% Complete
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						60% Complete (warning)
					</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						80% Complete
					</div>
				</div>
			</div><!--/#progressbar-container-->

			<div id="map-container">
				<h2 class="page-header">Google Map</h2>
				<div id="gmap"></div>
			</div><!--/#map-container-->

			<div id="video-container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="page-header">Responsive Vimeo Video</h2>
						<iframe src="https://player.vimeo.com/video/95995577"></iframe>
					</div>
					<div class="col-md-6">
						<h2 class="page-header">Responsive YouTube Video</h2>
						<iframe src="https://www.youtube.com/embed/4x-aHGCD8Pc" ></iframe>
					</div>
				</div>
			</div><!--/#video-container-->

			<div id="carousel-container">
				<h2 class="page-header">Carousel</h2>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://placehold.it/1140x487/green" alt="">
							<div class="carousel-caption">
								<h3>First slide label</h3>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placehold.it/1140x487/blue" alt="">
							<div class="carousel-caption">
								<h3>Second slide label</h3>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://placehold.it/1140x487/red" alt="">
							<div class="carousel-caption">
								<h3>Third slide label</h3>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
							</div>
						</div>
					</div>
					<a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!--/#carousel-example-generic-->
			</div><!--/#carousel-container-->

			<div id="alert-container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-header">Alert</h2>
					</div>
					<div class="col-md-6">
						<div class="alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oh snap! You got an error!</h4>
							<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
						</div>
						<div class="alert alert-warning fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oh snap! You got an error!</h4>
							<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="alert alert-info fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oh snap! You got an error!</h4>
							<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
						</div>
						<div class="alert alert-success fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oh snap! You got an error!</h4>
							<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
						</div>
					</div>
				</div>
			</div><!--/#alert-container-->

			<div id="testimonial-container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="page-header">Testimonial</h2>
						<div class="testimonial">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img src="/images/people/profile-1.png" alt=""></a>
								</div>
								<div class="media-body">
									<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
									<h3><a href="#">- Jhon Kalis</a></h3>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
									<a href="#"><img src="/images/people/profile-2.png" alt=""></a>
								</div>
								<div class="media-body">
									<blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
									<h3><a href="">- Abraham Josef</a></h3>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<h2 class="page-header">Blockquote</h2>
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
				</div>
			</div><!--/#testimonial-container-->

			<div class="padding"></div>

		</div>

	</div><!-- /.body-content -->

</div><!-- /#content-wrapper -->
