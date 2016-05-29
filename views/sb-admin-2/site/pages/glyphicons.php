<?php
/**
 * glyphicons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;
use p2made\helpers\GI;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Glyphicons';

/**
 * Putting demo data as arrays of constants to provide examples
 * of accessing all the social network name constants.
 */
$glyphicons = array(
	GI::_ASTERISK,
	GI::_PLUS,
	GI::_EURO,
	GI::_EUR,
	GI::_MINUS,
	GI::_CLOUD,
	GI::_ENVELOPE,
	GI::_PENCIL,
	GI::_GLASS,
	GI::_MUSIC,
	GI::_SEARCH,
	GI::_HEART,
	GI::_STAR,
	GI::_STAR_EMPTY,
	GI::_USER,
	GI::_FILM,
	GI::_TH_LARGE,
	GI::_TH,
	GI::_TH_LIST,
	GI::_OK,
	GI::_REMOVE,
	GI::_ZOOM_IN,
	GI::_ZOOM_OUT,
	GI::_OFF,
	GI::_SIGNAL,
	GI::_COG,
	GI::_TRASH,
	GI::_HOME,
	GI::_FILE,
	GI::_TIME,
	GI::_ROAD,
	GI::_DOWNLOAD_ALT,
	GI::_DOWNLOAD,
	GI::_UPLOAD,
	GI::_INBOX,
	GI::_PLAY_CIRCLE,
	GI::_REPEAT,
	GI::_REFRESH,
	GI::_LIST_ALT,
	GI::_LOCK,
	GI::_FLAG,
	GI::_HEADPHONES,
	GI::_VOLUME_OFF,
	GI::_VOLUME_DOWN,
	GI::_VOLUME_UP,
	GI::_QRCODE,
	GI::_BARCODE,
	GI::_TAG,
	GI::_TAGS,
	GI::_BOOK,
	GI::_BOOKMARK,
	GI::_PRINT,
	GI::_CAMERA,
	GI::_FONT,
	GI::_BOLD,
	GI::_ITALIC,
	GI::_TEXT_HEIGHT,
	GI::_TEXT_WIDTH,
	GI::_ALIGN_LEFT,
	GI::_ALIGN_CENTER,
	GI::_ALIGN_RIGHT,
	GI::_ALIGN_JUSTIFY,
	GI::_LIST,
	GI::_INDENT_LEFT,
	GI::_INDENT_RIGHT,
	GI::_FACETIME_VIDEO,
	GI::_PICTURE,
	GI::_MAP_MARKER,
	GI::_ADJUST,
	GI::_TINT,
	GI::_EDIT,
	GI::_SHARE,
	GI::_CHECK,
	GI::_MOVE,
	GI::_STEP_BACKWARD,
	GI::_FAST_BACKWARD,
	GI::_BACKWARD,
	GI::_PLAY,
	GI::_PAUSE,
	GI::_STOP,
	GI::_FORWARD,
	GI::_FAST_FORWARD,
	GI::_STEP_FORWARD,
	GI::_EJECT,
	GI::_CHEVRON_LEFT,
	GI::_CHEVRON_RIGHT,
	GI::_PLUS_SIGN,
	GI::_MINUS_SIGN,
	GI::_REMOVE_SIGN,
	GI::_OK_SIGN,
	GI::_QUESTION_SIGN,
	GI::_INFO_SIGN,
	GI::_SCREENSHOT,
	GI::_REMOVE_CIRCLE,
	GI::_OK_CIRCLE,
	GI::_BAN_CIRCLE,
	GI::_ARROW_LEFT,
	GI::_ARROW_RIGHT,
	GI::_ARROW_UP,
	GI::_ARROW_DOWN,
	GI::_SHARE_ALT,
	GI::_RESIZE_FULL,
	GI::_RESIZE_SMALL,
	GI::_EXCLAMATION_SIGN,
	GI::_GIFT,
	GI::_LEAF,
	GI::_FIRE,
	GI::_EYE_OPEN,
	GI::_EYE_CLOSE,
	GI::_WARNING_SIGN,
	GI::_PLANE,
	GI::_CALENDAR,
	GI::_RANDOM,
	GI::_COMMENT,
	GI::_MAGNET,
	GI::_CHEVRON_UP,
	GI::_CHEVRON_DOWN,
	GI::_RETWEET,
	GI::_SHOPPING_CART,
	GI::_FOLDER_CLOSE,
	GI::_FOLDER_OPEN,
	GI::_RESIZE_VERTICAL,
	GI::_RESIZE_HORIZONTAL,
	GI::_HDD,
	GI::_BULLHORN,
	GI::_BELL,
	GI::_CERTIFICATE,
	GI::_THUMBS_UP,
	GI::_THUMBS_DOWN,
	GI::_HAND_RIGHT,
	GI::_HAND_LEFT,
	GI::_HAND_UP,
	GI::_HAND_DOWN,
	GI::_CIRCLE_ARROW_RIGHT,
	GI::_CIRCLE_ARROW_LEFT,
	GI::_CIRCLE_ARROW_UP,
	GI::_CIRCLE_ARROW_DOWN,
	GI::_GLOBE,
	GI::_WRENCH,
	GI::_TASKS,
	GI::_FILTER,
	GI::_BRIEFCASE,
	GI::_FULLSCREEN,
	GI::_DASHBOARD,
	GI::_PAPERCLIP,
	GI::_HEART_EMPTY,
	GI::_LINK,
	GI::_PHONE,
	GI::_PUSHPIN,
	GI::_USD,
	GI::_GBP,
	GI::_SORT,
	GI::_SORT_BY_ALPHABET,
	GI::_SORT_BY_ALPHABET_ALT,
	GI::_SORT_BY_ORDER,
	GI::_SORT_BY_ORDER_ALT,
	GI::_SORT_BY_ATTRIBUTES,
	GI::_SORT_BY_ATTRIBUTES_ALT,
	GI::_UNCHECKED,
	GI::_EXPAND,
	GI::_COLLAPSE_DOWN,
	GI::_COLLAPSE_UP,
	GI::_LOG_IN,
	GI::_FLASH,
	GI::_LOG_OUT,
	GI::_NEW_WINDOW,
	GI::_RECORD,
	GI::_SAVE,
	GI::_OPEN,
	GI::_SAVED,
	GI::_IMPORT,
	GI::_EXPORT,
	GI::_SEND,
	GI::_FLOPPY_DISK,
	GI::_FLOPPY_SAVED,
	GI::_FLOPPY_REMOVE,
	GI::_FLOPPY_SAVE,
	GI::_FLOPPY_OPEN,
	GI::_CREDIT_CARD,
	GI::_TRANSFER,
	GI::_CUTLERY,
	GI::_HEADER,
	GI::_COMPRESSED,
	GI::_EARPHONE,
	GI::_PHONE_ALT,
	GI::_TOWER,
	GI::_STATS,
	GI::_SD_VIDEO,
	GI::_HD_VIDEO,
	GI::_SUBTITLES,
	GI::_SOUND_STEREO,
	GI::_SOUND_DOLBY,
	GI::_SOUND_5_1,
	GI::_SOUND_6_1,
	GI::_SOUND_7_1,
	GI::_COPYRIGHT_MARK,
	GI::_REGISTRATION_MARK,
	GI::_CLOUD_DOWNLOAD,
	GI::_CLOUD_UPLOAD,
	GI::_TREE_CONIFER,
	GI::_TREE_DECIDUOUS,
	GI::_CD,
	GI::_SAVE_FILE,
	GI::_OPEN_FILE,
	GI::_LEVEL_UP,
	GI::_COPY,
	GI::_PASTE,
	GI::_ALERT,
	GI::_EQUALIZER,
	GI::_KING,
	GI::_QUEEN,
	GI::_PAWN,
	GI::_BISHOP,
	GI::_KNIGHT,
	GI::_BABY_FORMULA,
	GI::_TENT,
	GI::_BLACKBOARD,
	GI::_BED,
	GI::_APPLE,
	GI::_ERASE,
	GI::_HOURGLASS,
	GI::_LAMP,
	GI::_DUPLICATE,
	GI::_PIGGY_BANK,
	GI::_SCISSORS,
	GI::_BITCOIN,
	GI::_BTC,
	GI::_XBT,
	GI::_YEN,
	GI::_JPY,
	GI::_RUBLE,
	GI::_RUB,
	GI::_SCALE,
	GI::_ICE_LOLLY,
	GI::_ICE_LOLLY_TASTED,
	GI::_EDUCATION,
	GI::_OPTION_HORIZONTAL,
	GI::_OPTION_VERTICAL,
	GI::_MENU_HAMBURGER,
	GI::_MODAL_WINDOW,
	GI::_OIL,
	GI::_GRAIN,
	GI::_SUNGLASSES,
	GI::_TEXT_SIZE,
	GI::_TEXT_COLOR,
	GI::_TEXT_BACKGROUND,
	GI::_OBJECT_ALIGN_TOP,
	GI::_OBJECT_ALIGN_BOTTOM,
	GI::_OBJECT_ALIGN_HORIZONTAL,
	GI::_OBJECT_ALIGN_LEFT,
	GI::_OBJECT_ALIGN_VERTICAL,
	GI::_OBJECT_ALIGN_RIGHT,
	GI::_TRIANGLE_RIGHT,
	GI::_TRIANGLE_LEFT,
	GI::_TRIANGLE_BOTTOM,
	GI::_TRIANGLE_TOP,
	GI::_CONSOLE,
	GI::_SUPERSCRIPT,
	GI::_SUBSCRIPT,
	GI::_MENU_LEFT,
	GI::_MENU_RIGHT,
	GI::_MENU_DOWN,
	GI::_MENU_UP,
);

$sizes = array(
	GI::SIZE_LARGE,
	null,
	GI::SIZE_SMALL,
	GI::SIZE_XSMALL,
);
/**
 * End of demo data
 */
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<div class="panel panel-info">
				<div class="panel-heading">All Glyphicons</div>
				<div class="panel-body">
					<div class="row">
					<?php foreach ($glyphicons as $icon): ?>
						<div class="fa col-md-4">
							<p>
								<?= GI::i($icon)->fixedWidth() ?>
								<?= Html::encode('GI::i(\'' . $icon . '\')') ?><br>
							</p>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>

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
