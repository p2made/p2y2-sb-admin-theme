<?php
/**
 * calendar.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use p2m\helpers\FA;
use p2m\models\FullCalendarEvent;
use p2m\widgets\FullCalendarWidget;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
$this->title = 'Calendar';

$theYear = date("Y");
$theMonth = date("m");

$events = array();

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'All Day Event';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, $theMonth, 01, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Long Event';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, $theMonth, 07, $theYear));
	$newEvent->end = date("Y-m-d", mktime(0, 0, 0, $theMonth, 10, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(16, 00, 00, $theMonth, 09, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(16, 00, 00, $theMonth, 16, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Conference';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, $theMonth, 11, $theYear));
	$newEvent->end = date("Y-m-d", mktime(0, 0, 0, $theMonth, 13, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(10, 30, 00, $theMonth, 12, $theYear));
	$newEvent->end = date("Y-m-dTH-i-s", mktime(12, 30, 00, $theMonth, 12, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Lunch';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(12, 00, 00, $theMonth, 12, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(14, 30, 00, $theMonth, 12, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Happy Hour';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(17, 30, 00, $theMonth, 12, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Dinner';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(20, 00, 00, $theMonth, 12, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Birthday Party';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(07, 00, 00, $theMonth, 13, $theYear));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Click for Google';
	$newEvent->url = 'http://google.com/';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, $theMonth, 28, $theYear));
	$events[] = $newEvent;
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<?= FullCalendarWidget::widget(array(
				'events' => $events,
			)) ?>

		</div>
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
