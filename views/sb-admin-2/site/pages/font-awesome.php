<?php
/**
 * font-awesome.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Font Awesome';

/**
 * Putting demo data as arrays of constants to provide examples
 * of accessing all the social network name constants.
 */
$iconGroups = array(
	'web-application' => array(
		'title' => 'Web Application Icons',
		'icons' => array(
			FA::_ADJUST,
			FA::_ANCHOR,
			FA::_ARCHIVE,
			FA::_AREA_CHART,
			FA::_ARROWS,
			FA::_ARROWS_H,
			FA::_ARROWS_V,
			FA::_ASTERISK,
			FA::_AT,
			FA::_AUTOMOBILE,
			FA::_BALANCE_SCALE,
			FA::_BAN,
			FA::_BANK,
			FA::_BAR_CHART,
			FA::_BAR_CHART_O,
			FA::_BARCODE,
			FA::_BARS,
			FA::_BATTERY_0,
			FA::_BATTERY_1,
			FA::_BATTERY_2,
			FA::_BATTERY_3,
			FA::_BATTERY_4,
			FA::_BATTERY_EMPTY,
			FA::_BATTERY_FULL,
			FA::_BATTERY_HALF,
			FA::_BATTERY_QUARTER,
			FA::_BATTERY_THREE_QUARTERS,
			FA::_BED,
			FA::_BEER,
			FA::_BELL,
			FA::_BELL_O,
			FA::_BELL_SLASH,
			FA::_BELL_SLASH_O,
			FA::_BICYCLE,
			FA::_BINOCULARS,
			FA::_BIRTHDAY_CAKE,
			FA::_BLUETOOTH,
			FA::_BLUETOOTH_B,
			FA::_BOLT,
			FA::_BOMB,
			FA::_BOOK,
			FA::_BOOKMARK,
			FA::_BOOKMARK_O,
			FA::_BRIEFCASE,
			FA::_BUG,
			FA::_BUILDING,
			FA::_BUILDING_O,
			FA::_BULLHORN,
			FA::_BULLSEYE,
			FA::_BUS,
			FA::_CAB,
			FA::_CALCULATOR,
			FA::_CALENDAR,
			FA::_CALENDAR_CHECK_O,
			FA::_CALENDAR_MINUS_O,
			FA::_CALENDAR_O,
			FA::_CALENDAR_PLUS_O,
			FA::_CALENDAR_TIMES_O,
			FA::_CAMERA,
			FA::_CAMERA_RETRO,
			FA::_CAR,
			FA::_CARET_SQUARE_O_DOWN,
			FA::_CARET_SQUARE_O_LEFT,
			FA::_CARET_SQUARE_O_RIGHT,
			FA::_CARET_SQUARE_O_UP,
			FA::_CART_ARROW_DOWN,
			FA::_CART_PLUS,
			FA::_CC,
			FA::_CERTIFICATE,
			FA::_CHECK,
			FA::_CHECK_CIRCLE,
			FA::_CHECK_CIRCLE_O,
			FA::_CHECK_SQUARE,
			FA::_CHECK_SQUARE_O,
			FA::_CHILD,
			FA::_CIRCLE,
			FA::_CIRCLE_O,
			FA::_CIRCLE_O_NOTCH,
			FA::_CIRCLE_THIN,
			FA::_CLOCK_O,
			FA::_CLONE,
			FA::_CLOSE,
			FA::_CLOUD,
			FA::_CLOUD_DOWNLOAD,
			FA::_CLOUD_UPLOAD,
			FA::_CODE,
			FA::_CODE_FORK,
			FA::_COFFEE,
			FA::_COG,
			FA::_COGS,
			FA::_COMMENT,
			FA::_COMMENT_O,
			FA::_COMMENTING,
			FA::_COMMENTING_O,
			FA::_COMMENTS,
			FA::_COMMENTS_O,
			FA::_COMPASS,
			FA::_COPYRIGHT,
			FA::_CREATIVE_COMMONS,
			FA::_CREDIT_CARD,
			FA::_CREDIT_CARD_ALT,
			FA::_CROP,
			FA::_CROSSHAIRS,
			FA::_CUBE,
			FA::_CUBES,
			FA::_CUTLERY,
			FA::_DASHBOARD,
			FA::_DATABASE,
			FA::_DESKTOP,
			FA::_DIAMOND,
			FA::_DOT_CIRCLE_O,
			FA::_DOWNLOAD,
			FA::_EDIT,
			FA::_ELLIPSIS_H,
			FA::_ELLIPSIS_V,
			FA::_ENVELOPE,
			FA::_ENVELOPE_O,
			FA::_ENVELOPE_SQUARE,
			FA::_ERASER,
			FA::_EXCHANGE,
			FA::_EXCLAMATION,
			FA::_EXCLAMATION_CIRCLE,
			FA::_EXCLAMATION_TRIANGLE,
			FA::_EXTERNAL_LINK,
			FA::_EXTERNAL_LINK_SQUARE,
			FA::_EYE,
			FA::_EYE_SLASH,
			FA::_EYEDROPPER,
			FA::_FAX,
			FA::_FEED,
			FA::_FEMALE,
			FA::_FIGHTER_JET,
			FA::_FILE_ARCHIVE_O,
			FA::_FILE_AUDIO_O,
			FA::_FILE_CODE_O,
			FA::_FILE_EXCEL_O,
			FA::_FILE_IMAGE_O,
			FA::_FILE_MOVIE_O,
			FA::_FILE_PDF_O,
			FA::_FILE_PHOTO_O,
			FA::_FILE_PICTURE_O,
			FA::_FILE_POWERPOINT_O,
			FA::_FILE_SOUND_O,
			FA::_FILE_VIDEO_O,
			FA::_FILE_WORD_O,
			FA::_FILE_ZIP_O,
			FA::_FILM,
			FA::_FILTER,
			FA::_FIRE,
			FA::_FIRE_EXTINGUISHER,
			FA::_FLAG,
			FA::_FLAG_CHECKERED,
			FA::_FLAG_O,
			FA::_FLASH,
			FA::_FLASK,
			FA::_FOLDER,
			FA::_FOLDER_O,
			FA::_FOLDER_OPEN,
			FA::_FOLDER_OPEN_O,
			FA::_FROWN_O,
			FA::_FUTBOL_O,
			FA::_GAMEPAD,
			FA::_GAVEL,
			FA::_GEAR,
			FA::_GEARS,
			FA::_GIFT,
			FA::_GLASS,
			FA::_GLOBE,
			FA::_GRADUATION_CAP,
			FA::_GROUP,
			FA::_HAND_GRAB_O,
			FA::_HAND_LIZARD_O,
			FA::_HAND_PAPER_O,
			FA::_HAND_PEACE_O,
			FA::_HAND_POINTER_O,
			FA::_HAND_ROCK_O,
			FA::_HAND_SCISSORS_O,
			FA::_HAND_SPOCK_O,
			FA::_HAND_STOP_O,
			FA::_HASHTAG,
			FA::_HDD_O,
			FA::_HEADPHONES,
			FA::_HEART,
			FA::_HEART_O,
			FA::_HEARTBEAT,
			FA::_HISTORY,
			FA::_HOME,
			FA::_HOTEL,
			FA::_HOURGLASS,
			FA::_HOURGLASS_1,
			FA::_HOURGLASS_2,
			FA::_HOURGLASS_3,
			FA::_HOURGLASS_END,
			FA::_HOURGLASS_HALF,
			FA::_HOURGLASS_O,
			FA::_HOURGLASS_START,
			FA::_I_CURSOR,
			FA::_IMAGE,
			FA::_INBOX,
			FA::_INDUSTRY,
			FA::_INFO,
			FA::_INFO_CIRCLE,
			FA::_INSTITUTION,
			FA::_KEY,
			FA::_KEYBOARD_O,
			FA::_LANGUAGE,
			FA::_LAPTOP,
			FA::_LEAF,
			FA::_LEGAL,
			FA::_LEMON_O,
			FA::_LEVEL_DOWN,
			FA::_LEVEL_UP,
			FA::_LIFE_BOUY,
			FA::_LIFE_BUOY,
			FA::_LIFE_RING,
			FA::_LIFE_SAVER,
			FA::_LIGHTBULB_O,
			FA::_LINE_CHART,
			FA::_LOCATION_ARROW,
			FA::_LOCK,
			FA::_MAGIC,
			FA::_MAGNET,
			FA::_MAIL_FORWARD,
			FA::_MAIL_REPLY,
			FA::_MAIL_REPLY_ALL,
			FA::_MALE,
			FA::_MAP,
			FA::_MAP_MARKER,
			FA::_MAP_O,
			FA::_MAP_PIN,
			FA::_MAP_SIGNS,
			FA::_MEH_O,
			FA::_MICROPHONE,
			FA::_MICROPHONE_SLASH,
			FA::_MINUS,
			FA::_MINUS_CIRCLE,
			FA::_MINUS_SQUARE,
			FA::_MINUS_SQUARE_O,
			FA::_MOBILE,
			FA::_MOBILE_PHONE,
			FA::_MONEY,
			FA::_MOON_O,
			FA::_MORTAR_BOARD,
			FA::_MOTORCYCLE,
			FA::_MOUSE_POINTER,
			FA::_MUSIC,
			FA::_NAVICON,
			FA::_NEWSPAPER_O,
			FA::_OBJECT_GROUP,
			FA::_OBJECT_UNGROUP,
			FA::_PAINT_BRUSH,
			FA::_PAPER_PLANE,
			FA::_PAPER_PLANE_O,
			FA::_PAW,
			FA::_PENCIL,
			FA::_PENCIL_SQUARE,
			FA::_PENCIL_SQUARE_O,
			FA::_PERCENT,
			FA::_PHONE,
			FA::_PHONE_SQUARE,
			FA::_PHOTO,
			FA::_PICTURE_O,
			FA::_PIE_CHART,
			FA::_PLANE,
			FA::_PLUG,
			FA::_PLUS,
			FA::_PLUS_CIRCLE,
			FA::_PLUS_SQUARE,
			FA::_PLUS_SQUARE_O,
			FA::_POWER_OFF,
			FA::_PRINT,
			FA::_PUZZLE_PIECE,
			FA::_QRCODE,
			FA::_QUESTION,
			FA::_QUESTION_CIRCLE,
			FA::_QUOTE_LEFT,
			FA::_QUOTE_RIGHT,
			FA::_RANDOM,
			FA::_RECYCLE,
			FA::_REFRESH,
			FA::_REGISTERED,
			FA::_REMOVE,
			FA::_REORDER,
			FA::_REPLY,
			FA::_REPLY_ALL,
			FA::_RETWEET,
			FA::_ROAD,
			FA::_ROCKET,
			FA::_RSS,
			FA::_RSS_SQUARE,
			FA::_SEARCH,
			FA::_SEARCH_MINUS,
			FA::_SEARCH_PLUS,
			FA::_SEND,
			FA::_SEND_O,
			FA::_SERVER,
			FA::_SHARE,
			FA::_SHARE_ALT,
			FA::_SHARE_ALT_SQUARE,
			FA::_SHARE_SQUARE,
			FA::_SHARE_SQUARE_O,
			FA::_SHIELD,
			FA::_SHIP,
			FA::_SHOPPING_BAG,
			FA::_SHOPPING_BASKET,
			FA::_SHOPPING_CART,
			FA::_SIGN_IN,
			FA::_SIGN_OUT,
			FA::_SIGNAL,
			FA::_SITEMAP,
			FA::_SLIDERS,
			FA::_SMILE_O,
			FA::_SOCCER_BALL_O,
			FA::_SORT,
			FA::_SORT_ALPHA_ASC,
			FA::_SORT_ALPHA_DESC,
			FA::_SORT_AMOUNT_ASC,
			FA::_SORT_AMOUNT_DESC,
			FA::_SORT_ASC,
			FA::_SORT_DESC,
			FA::_SORT_DOWN,
			FA::_SORT_NUMERIC_ASC,
			FA::_SORT_NUMERIC_DESC,
			FA::_SORT_UP,
			FA::_SPACE_SHUTTLE,
			FA::_SPINNER,
			FA::_SPOON,
			FA::_SQUARE,
			FA::_SQUARE_O,
			FA::_STAR,
			FA::_STAR_HALF,
			FA::_STAR_HALF_EMPTY,
			FA::_STAR_HALF_FULL,
			FA::_STAR_HALF_O,
			FA::_STAR_O,
			FA::_STICKY_NOTE,
			FA::_STICKY_NOTE_O,
			FA::_STREET_VIEW,
			FA::_SUITCASE,
			FA::_SUN_O,
			FA::_SUPPORT,
			FA::_TABLET,
			FA::_TACHOMETER,
			FA::_TAG,
			FA::_TAGS,
			FA::_TASKS,
			FA::_TAXI,
			FA::_TELEVISION,
			FA::_TERMINAL,
			FA::_THUMB_TACK,
			FA::_THUMBS_DOWN,
			FA::_THUMBS_O_DOWN,
			FA::_THUMBS_O_UP,
			FA::_THUMBS_UP,
			FA::_TICKET,
			FA::_TIMES,
			FA::_TIMES_CIRCLE,
			FA::_TIMES_CIRCLE_O,
			FA::_TINT,
			FA::_TOGGLE_DOWN,
			FA::_TOGGLE_LEFT,
			FA::_TOGGLE_OFF,
			FA::_TOGGLE_ON,
			FA::_TOGGLE_RIGHT,
			FA::_TOGGLE_UP,
			FA::_TRADEMARK,
			FA::_TRASH,
			FA::_TRASH_O,
			FA::_TREE,
			FA::_TROPHY,
			FA::_TRUCK,
			FA::_TTY,
			FA::_TV,
			FA::_UMBRELLA,
			FA::_UNIVERSITY,
			FA::_UNLOCK,
			FA::_UNLOCK_ALT,
			FA::_UNSORTED,
			FA::_UPLOAD,
			FA::_USER,
			FA::_USER_PLUS,
			FA::_USER_SECRET,
			FA::_USER_TIMES,
			FA::_USERS,
			FA::_VIDEO_CAMERA,
			FA::_VOLUME_DOWN,
			FA::_VOLUME_OFF,
			FA::_VOLUME_UP,
			FA::_WARNING,
			FA::_WHEELCHAIR,
			FA::_WIFI,
			FA::_WRENCH,
		),
	),
	'hand' => array(
		'title' => 'Hand Icons',
		'icons' => array(
			FA::_HAND_GRAB_O,
			FA::_HAND_LIZARD_O,
			FA::_HAND_O_DOWN,
			FA::_HAND_O_LEFT,
			FA::_HAND_O_RIGHT,
			FA::_HAND_O_UP,
			FA::_HAND_PAPER_O,
			FA::_HAND_PEACE_O,
			FA::_HAND_POINTER_O,
			FA::_HAND_ROCK_O,
			FA::_HAND_SCISSORS_O,
			FA::_HAND_SPOCK_O,
			FA::_HAND_STOP_O,
			FA::_THUMBS_DOWN,
			FA::_THUMBS_O_DOWN,
			FA::_THUMBS_O_UP,
			FA::_THUMBS_UP,
		),
	),
	'transportation' => array(
		'title' => 'Transportation Icons',
		'icons' => array(
			FA::_AMBULANCE,
			FA::_AUTOMOBILE,
			FA::_BICYCLE,
			FA::_BUS,
			FA::_CAB,
			FA::_CAR,
			FA::_FIGHTER_JET,
			FA::_MOTORCYCLE,
			FA::_PLANE,
			FA::_ROCKET,
			FA::_SHIP,
			FA::_SPACE_SHUTTLE,
			FA::_SUBWAY,
			FA::_TAXI,
			FA::_TRAIN,
			FA::_TRUCK,
			FA::_WHEELCHAIR,
		),
	),
	'gender' => array(
		'title' => 'Gender Icons',
		'icons' => array(
			FA::_GENDERLESS,
			FA::_INTERSEX,
			FA::_MARS,
			FA::_MARS_DOUBLE,
			FA::_MARS_STROKE,
			FA::_MARS_STROKE_H,
			FA::_MARS_STROKE_V,
			FA::_MERCURY,
			FA::_NEUTER,
			FA::_TRANSGENDER,
			FA::_TRANSGENDER_ALT,
			FA::_VENUS,
			FA::_VENUS_DOUBLE,
			FA::_VENUS_MARS,
		),
	),
	'file-type' => array(
		'title' => 'File Type Icons',
		'icons' => array(
			FA::_FILE,
			FA::_FILE_ARCHIVE_O,
			FA::_FILE_AUDIO_O,
			FA::_FILE_CODE_O,
			FA::_FILE_EXCEL_O,
			FA::_FILE_IMAGE_O,
			FA::_FILE_MOVIE_O,
			FA::_FILE_O,
			FA::_FILE_PDF_O,
			FA::_FILE_PHOTO_O,
			FA::_FILE_PICTURE_O,
			FA::_FILE_POWERPOINT_O,
			FA::_FILE_SOUND_O,
			FA::_FILE_TEXT,
			FA::_FILE_TEXT_O,
			FA::_FILE_VIDEO_O,
			FA::_FILE_WORD_O,
			FA::_FILE_ZIP_O,
		),
	),
	'spinner' => array(
		'title' => 'Spinner Icons',
		'icons' => array(
			FA::_CIRCLE_O_NOTCH,
			FA::_COG,
			FA::_GEAR,
			FA::_REFRESH,
			FA::_SPINNER,
		),
	),
	'form-control' => array(
		'title' => 'Form Control Icons',
		'icons' => array(
			FA::_CHECK_SQUARE,
			FA::_CHECK_SQUARE_O,
			FA::_CIRCLE,
			FA::_CIRCLE_O,
			FA::_DOT_CIRCLE_O,
			FA::_MINUS_SQUARE,
			FA::_MINUS_SQUARE_O,
			FA::_PLUS_SQUARE,
			FA::_PLUS_SQUARE_O,
			FA::_SQUARE,
			FA::_SQUARE_O,
		),
	),
	'payment' => array(
		'title' => 'Payment Icons',
		'icons' => array(
			FA::_CC_AMEX,
			FA::_CC_DINERS_CLUB,
			FA::_CC_DISCOVER,
			FA::_CC_JCB,
			FA::_CC_MASTERCARD,
			FA::_CC_PAYPAL,
			FA::_CC_STRIPE,
			FA::_CC_VISA,
			FA::_CREDIT_CARD,
			FA::_CREDIT_CARD_ALT,
			FA::_GOOGLE_WALLET,
			FA::_PAYPAL,
		),
	),
	'chart' => array(
		'title' => 'Chart Icons',
		'icons' => array(
			FA::_AREA_CHART,
			FA::_BAR_CHART,
			FA::_BAR_CHART_O,
			FA::_LINE_CHART,
			FA::_PIE_CHART,
		),
	),
	'currency' => array(
		'title' => 'Currency Icons',
		'icons' => array(
			FA::_BITCOIN,
			FA::_BTC,
			FA::_CNY,
			FA::_DOLLAR,
			FA::_EUR,
			FA::_EURO,
			FA::_GBP,
			FA::_GG,
			FA::_GG_CIRCLE,
			FA::_ILS,
			FA::_INR,
			FA::_JPY,
			FA::_KRW,
			FA::_MONEY,
			FA::_RMB,
			FA::_ROUBLE,
			FA::_RUB,
			FA::_RUBLE,
			FA::_RUPEE,
			FA::_SHEKEL,
			FA::_SHEQEL,
			FA::_TRY,
			FA::_TURKISH_LIRA,
			FA::_USD,
			FA::_WON,
			FA::_YEN,
		),
	),
	'text-editor' => array(
		'title' => 'Text Editor Icons',
		'icons' => array(
			FA::_ALIGN_CENTER,
			FA::_ALIGN_JUSTIFY,
			FA::_ALIGN_LEFT,
			FA::_ALIGN_RIGHT,
			FA::_BOLD,
			FA::_CHAIN,
			FA::_CHAIN_BROKEN,
			FA::_CLIPBOARD,
			FA::_COLUMNS,
			FA::_COPY,
			FA::_CUT,
			FA::_DEDENT,
			FA::_ERASER,
			FA::_FILE,
			FA::_FILE_O,
			FA::_FILE_TEXT,
			FA::_FILE_TEXT_O,
			FA::_FILES_O,
			FA::_FLOPPY_O,
			FA::_FONT,
			FA::_HEADER,
			FA::_INDENT,
			FA::_ITALIC,
			FA::_LINK,
			FA::_LIST,
			FA::_LIST_ALT,
			FA::_LIST_OL,
			FA::_LIST_UL,
			FA::_OUTDENT,
			FA::_PAPERCLIP,
			FA::_PARAGRAPH,
			FA::_PASTE,
			FA::_REPEAT,
			FA::_ROTATE_LEFT,
			FA::_ROTATE_RIGHT,
			FA::_SAVE,
			FA::_SCISSORS,
			FA::_STRIKETHROUGH,
			FA::_SUBSCRIPT,
			FA::_SUPERSCRIPT,
			FA::_TABLE,
			FA::_TEXT_HEIGHT,
			FA::_TEXT_WIDTH,
			FA::_TH,
			FA::_TH_LARGE,
			FA::_TH_LIST,
			FA::_UNDERLINE,
			FA::_UNDO,
			FA::_UNLINK,
		),
	),
	'directional' => array(
		'title' => 'Directional Icons',
		'icons' => array(
			FA::_ANGLE_DOUBLE_DOWN,
			FA::_ANGLE_DOUBLE_LEFT,
			FA::_ANGLE_DOUBLE_RIGHT,
			FA::_ANGLE_DOUBLE_UP,
			FA::_ANGLE_DOWN,
			FA::_ANGLE_LEFT,
			FA::_ANGLE_RIGHT,
			FA::_ANGLE_UP,
			FA::_ARROW_CIRCLE_DOWN,
			FA::_ARROW_CIRCLE_LEFT,
			FA::_ARROW_CIRCLE_O_DOWN,
			FA::_ARROW_CIRCLE_O_LEFT,
			FA::_ARROW_CIRCLE_O_RIGHT,
			FA::_ARROW_CIRCLE_O_UP,
			FA::_ARROW_CIRCLE_RIGHT,
			FA::_ARROW_CIRCLE_UP,
			FA::_ARROW_DOWN,
			FA::_ARROW_LEFT,
			FA::_ARROW_RIGHT,
			FA::_ARROW_UP,
			FA::_ARROWS,
			FA::_ARROWS_ALT,
			FA::_ARROWS_H,
			FA::_ARROWS_V,
			FA::_CARET_DOWN,
			FA::_CARET_LEFT,
			FA::_CARET_RIGHT,
			FA::_CARET_SQUARE_O_DOWN,
			FA::_CARET_SQUARE_O_LEFT,
			FA::_CARET_SQUARE_O_RIGHT,
			FA::_CARET_SQUARE_O_UP,
			FA::_CARET_UP,
			FA::_CHEVRON_CIRCLE_DOWN,
			FA::_CHEVRON_CIRCLE_LEFT,
			FA::_CHEVRON_CIRCLE_RIGHT,
			FA::_CHEVRON_CIRCLE_UP,
			FA::_CHEVRON_DOWN,
			FA::_CHEVRON_LEFT,
			FA::_CHEVRON_RIGHT,
			FA::_CHEVRON_UP,
			FA::_EXCHANGE,
			FA::_HAND_O_DOWN,
			FA::_HAND_O_LEFT,
			FA::_HAND_O_RIGHT,
			FA::_HAND_O_UP,
			FA::_LONG_ARROW_DOWN,
			FA::_LONG_ARROW_LEFT,
			FA::_LONG_ARROW_RIGHT,
			FA::_LONG_ARROW_UP,
			FA::_TOGGLE_DOWN,
			FA::_TOGGLE_LEFT,
			FA::_TOGGLE_RIGHT,
			FA::_TOGGLE_UP,
		),
	),
	'video-player' => array(
		'title' => 'Video Player Icons',
		'icons' => array(
			FA::_ARROWS_ALT,
			FA::_BACKWARD,
			FA::_COMPRESS,
			FA::_EJECT,
			FA::_EXPAND,
			FA::_FAST_BACKWARD,
			FA::_FAST_FORWARD,
			FA::_FORWARD,
			FA::_PAUSE,
			FA::_PAUSE_CIRCLE,
			FA::_PAUSE_CIRCLE_O,
			FA::_PLAY,
			FA::_PLAY_CIRCLE,
			FA::_PLAY_CIRCLE_O,
			FA::_RANDOM,
			FA::_STEP_BACKWARD,
			FA::_STEP_FORWARD,
			FA::_STOP,
			FA::_STOP_CIRCLE,
			FA::_STOP_CIRCLE_O,
			FA::_YOUTUBE_PLAY,
		),
	),
	'brand' => array(
		'title' => 'Brand Icons',
		'icons' => array(
			FA::_500PX,
			FA::_ADN,
			FA::_AMAZON,
			FA::_ANDROID,
			FA::_ANGELLIST,
			FA::_APPLE,
			FA::_BEHANCE,
			FA::_BEHANCE_SQUARE,
			FA::_BITBUCKET,
			FA::_BITBUCKET_SQUARE,
			FA::_BITCOIN,
			FA::_BLACK_TIE,
			FA::_BLUETOOTH,
			FA::_BLUETOOTH_B,
			FA::_BTC,
			FA::_BUYSELLADS,
			FA::_CC_AMEX,
			FA::_CC_DINERS_CLUB,
			FA::_CC_DISCOVER,
			FA::_CC_JCB,
			FA::_CC_MASTERCARD,
			FA::_CC_PAYPAL,
			FA::_CC_STRIPE,
			FA::_CC_VISA,
			FA::_CHROME,
			FA::_CODEPEN,
			FA::_CODIEPIE,
			FA::_CONNECTDEVELOP,
			FA::_CONTAO,
			FA::_CSS3,
			FA::_DASHCUBE,
			FA::_DELICIOUS,
			FA::_DEVIANTART,
			FA::_DIGG,
			FA::_DRIBBBLE,
			FA::_DROPBOX,
			FA::_DRUPAL,
			FA::_EDGE,
			FA::_EMPIRE,
			FA::_EXPEDITEDSSL,
			FA::_FACEBOOK,
			FA::_FACEBOOK_F,
			FA::_FACEBOOK_OFFICIAL,
			FA::_FACEBOOK_SQUARE,
			FA::_FIREFOX,
			FA::_FLICKR,
			FA::_FONTICONS,
			FA::_FORT_AWESOME,
			FA::_FORUMBEE,
			FA::_FOURSQUARE,
			FA::_GE,
			FA::_GET_POCKET,
			FA::_GG,
			FA::_GG_CIRCLE,
			FA::_GIT,
			FA::_GIT_SQUARE,
			FA::_GITHUB,
			FA::_GITHUB_ALT,
			FA::_GITHUB_SQUARE,
			FA::_GITTIP,
			FA::_GOOGLE,
			FA::_GOOGLE_PLUS,
			FA::_GOOGLE_PLUS_SQUARE,
			FA::_GOOGLE_WALLET,
			FA::_GRATIPAY,
			FA::_HACKER_NEWS,
			FA::_HOUZZ,
			FA::_HTML5,
			FA::_INSTAGRAM,
			FA::_INTERNET_EXPLORER,
			FA::_IOXHOST,
			FA::_JOOMLA,
			FA::_JSFIDDLE,
			FA::_LASTFM,
			FA::_LASTFM_SQUARE,
			FA::_LEANPUB,
			FA::_LINKEDIN,
			FA::_LINKEDIN_SQUARE,
			FA::_LINUX,
			FA::_MAXCDN,
			FA::_MEANPATH,
			FA::_MEDIUM,
			FA::_MIXCLOUD,
			FA::_MODX,
			FA::_ODNOKLASSNIKI,
			FA::_ODNOKLASSNIKI_SQUARE,
			FA::_OPENCART,
			FA::_OPENID,
			FA::_OPERA,
			FA::_OPTIN_MONSTER,
			FA::_PAGELINES,
			FA::_PAYPAL,
			FA::_PIED_PIPER,
			FA::_PIED_PIPER_ALT,
			FA::_PINTEREST,
			FA::_PINTEREST_P,
			FA::_PINTEREST_SQUARE,
			FA::_PRODUCT_HUNT,
			FA::_QQ,
			FA::_RA,
			FA::_REBEL,
			FA::_REDDIT,
			FA::_REDDIT_ALIEN,
			FA::_REDDIT_SQUARE,
			FA::_RENREN,
			FA::_SAFARI,
			FA::_SCRIBD,
			FA::_SELLSY,
			FA::_SHARE_ALT,
			FA::_SHARE_ALT_SQUARE,
			FA::_SHIRTSINBULK,
			FA::_SIMPLYBUILT,
			FA::_SKYATLAS,
			FA::_SKYPE,
			FA::_SLACK,
			FA::_SLIDESHARE,
			FA::_SOUNDCLOUD,
			FA::_SPOTIFY,
			FA::_STACK_EXCHANGE,
			FA::_STACK_OVERFLOW,
			FA::_STEAM,
			FA::_STEAM_SQUARE,
			FA::_STUMBLEUPON,
			FA::_STUMBLEUPON_CIRCLE,
			FA::_TENCENT_WEIBO,
			FA::_TRELLO,
			FA::_TRIPADVISOR,
			FA::_TUMBLR,
			FA::_TUMBLR_SQUARE,
			FA::_TWITCH,
			FA::_TWITTER,
			FA::_TWITTER_SQUARE,
			FA::_USB,
			FA::_VIACOIN,
			FA::_VIMEO,
			FA::_VIMEO_SQUARE,
			FA::_VINE,
			FA::_VK,
			FA::_WECHAT,
			FA::_WEIBO,
			FA::_WEIXIN,
			FA::_WHATSAPP,
			FA::_WIKIPEDIA_W,
			FA::_WINDOWS,
			FA::_WORDPRESS,
			FA::_XING,
			FA::_XING_SQUARE,
			FA::_Y_COMBINATOR,
			FA::_Y_COMBINATOR_SQUARE,
			FA::_YAHOO,
			FA::_YC,
			FA::_YC_SQUARE,
			FA::_YELP,
			FA::_YOUTUBE,
			FA::_YOUTUBE_PLAY,
			FA::_YOUTUBE_SQUARE,
		),
	),
	'medical' => array(
		'title' => 'Medical Icons',
		'icons' => array(
			FA::_AMBULANCE,
			FA::_H_SQUARE,
			FA::_HEART,
			FA::_HEART_O,
			FA::_HEARTBEAT,
			FA::_HOSPITAL_O,
			FA::_MEDKIT,
			FA::_PLUS_SQUARE,
			FA::_STETHOSCOPE,
			FA::_USER_MD,
			FA::_WHEELCHAIR,
		),
	),
);
/**
 * End of demo data
 */
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<p>The iconic font and CSS toolkit</p>
			<p>
				Here is <a href="http://fontawesome.io" target="_blank">Font Awesome <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a> and <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a> bundled for easy use in your <a href="http://www.yiiframework.com" target="_blank">Yii2 <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a> projects. I have subclassed the yii2-fontawesome classes to map to the p2made namespace. I have not copied or modified any of the code, and it works exactly the same. It is simply a convenience to myself that I have one less namespace to work with. All credit for yii2-fontawesome remains with <a href="https://github.com/rmrevin" target="_blank">rmrevin <?= FA::i(FA::icon(FA::_EXTERNAL_LINK)) ?></a>
			</p>

			<?php
				$groupId = 'web-application';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'hand';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'transportation';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'gender';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'file-type';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'spinner';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>

						<br>
						<div class="alert alert-success">
							<ul class="fa-ul">
								<li>
									<i class="fa fa-info-circle fa-lg fa-li"></i>
									These icons work great with <code>->spin()</code> added...
								</li>
							</ul>
						</div>

						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth()->spin() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')->spin()') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'form-control';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'payment';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'chart';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'currency';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'text-editor';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'directional';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'video-player';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'brand';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>

						<br>
						<div class="alert alert-success">
							<ul>
								<li>All brand icons are trademarks of their respective owners.</li>
								<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
								<li>Brand icons should only be used to represent the company or product to which they refer.</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<?php
				$groupId = 'medical';
				$group = $iconGroups[$groupId];
				$icons = $group['icons'];
			?>
			<section id="<?= $groupId ?>">
				<div class="panel panel-info">
					<div class="panel-heading"><?= $group['title'] ?></div>
					<div class="panel-body">
						<div class="row">
						<?php foreach ($icons as $icon) { ?>
							<div class="fa-hover col-md-3">
								<p>
									<?= FA::i($icon)->fixedWidth() ?>
									<?= Html::encode('FA::i(\'' . $icon . '\')') ?><br>
								</p>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</section>

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
