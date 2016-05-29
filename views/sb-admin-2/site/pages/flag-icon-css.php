<?php
/**
 * flag-icon-css.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;
use p2made\helpers\FI;

p2made\theme\sbAdmin\assets\SBAdmin2Asset::register($this);
p2made\assets\FlagIconCssAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\assets\FlagIconsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Flag Icon CSS';

/**
 * Putting demo data as arrays of constants to provide examples
 * of accessing all the social network name constants.
 */
$allFlags = array(
	'iso-flags' => [
		FI::_AD, FI::_AE, FI::_AF, FI::_AG, FI::_AI, FI::_AL, FI::_AM, FI::_AO, FI::_AQ, FI::_AR,
		FI::_AS, FI::_AT, FI::_AU, FI::_AW, FI::_AX, FI::_AZ, FI::_BA, FI::_BB, FI::_BD, FI::_BE,
		FI::_BF, FI::_BG, FI::_BH, FI::_BI, FI::_BJ, FI::_BL, FI::_BM, FI::_BN, FI::_BO, FI::_BQ,
		FI::_BR, FI::_BS, FI::_BT, FI::_BV, FI::_BW, FI::_BY, FI::_BZ, FI::_CA, FI::_CC, FI::_CD,
		FI::_CF, FI::_CG, FI::_CH, FI::_CI, FI::_CK, FI::_CL, FI::_CM, FI::_CN, FI::_CO, FI::_CR,
		FI::_CU, FI::_CV, FI::_CW, FI::_CX, FI::_CY, FI::_CZ, FI::_DE, FI::_DJ, FI::_DK, FI::_DM,
		FI::_DO, FI::_DZ, FI::_EC, FI::_EE, FI::_EG, FI::_EH, FI::_ER, FI::_ES, FI::_ET, FI::_FI,
		FI::_FJ, FI::_FK, FI::_FM, FI::_FO, FI::_FR, FI::_GA, FI::_GB, FI::_GD, FI::_GE, FI::_GF,
		FI::_GG, FI::_GH, FI::_GI, FI::_GL, FI::_GM, FI::_GN, FI::_GP, FI::_GQ, FI::_GR, FI::_GS,
		FI::_GT, FI::_GU, FI::_GW, FI::_GY, FI::_HK, FI::_HM, FI::_HN, FI::_HR, FI::_HT, FI::_HU,
		FI::_ID, FI::_IE, FI::_IL, FI::_IM, FI::_IN, FI::_IO, FI::_IQ, FI::_IR, FI::_IS, FI::_IT,
		FI::_JE, FI::_JM, FI::_JO, FI::_JP, FI::_KE, FI::_KG, FI::_KH, FI::_KI, FI::_KM, FI::_KN,
		FI::_KP, FI::_KR, FI::_KW, FI::_KY, FI::_KZ, FI::_LA, FI::_LB, FI::_LC, FI::_LI, FI::_LK,
		FI::_LR, FI::_LS, FI::_LT, FI::_LU, FI::_LV, FI::_LY, FI::_MA, FI::_MC, FI::_MD, FI::_ME,
		FI::_MF, FI::_MG, FI::_MH, FI::_MK, FI::_ML, FI::_MM, FI::_MN, FI::_MO, FI::_MP, FI::_MQ,
		FI::_MR, FI::_MS, FI::_MT, FI::_MU, FI::_MV, FI::_MW, FI::_MX, FI::_MY, FI::_MZ, FI::_NA,
		FI::_NC, FI::_NE, FI::_NF, FI::_NG, FI::_NI, FI::_NL, FI::_NO, FI::_NP, FI::_NR, FI::_NU,
		FI::_NZ, FI::_OM, FI::_PA, FI::_PE, FI::_PF, FI::_PG, FI::_PH, FI::_PK, FI::_PL, FI::_PM,
		FI::_PN, FI::_PR, FI::_PS, FI::_PT, FI::_PW, FI::_PY, FI::_QA, FI::_RE, FI::_RO, FI::_RS,
		FI::_RU, FI::_RW, FI::_SA, FI::_SB, FI::_SC, FI::_SD, FI::_SE, FI::_SG, FI::_SH, FI::_SI,
		FI::_SJ, FI::_SK, FI::_SL, FI::_SM, FI::_SN, FI::_SO, FI::_SR, FI::_SS, FI::_ST, FI::_SV,
		FI::_SX, FI::_SY, FI::_SZ, FI::_TC, FI::_TD, FI::_TF, FI::_TG, FI::_TH, FI::_TJ, FI::_TK,
		FI::_TL, FI::_TM, FI::_TN, FI::_TO, FI::_TR, FI::_TT, FI::_TV, FI::_TW, FI::_TZ, FI::_UA,
		FI::_UG, FI::_UM, FI::_US, FI::_UY, FI::_UZ, FI::_VA, FI::_VC, FI::_VE, FI::_VG, FI::_VI,
		FI::_VN, FI::_VU, FI::_WF, FI::_WS, FI::_YE, FI::_YT, FI::_ZA, FI::_ZM, FI::_ZW,
	],
	'others' => [FI::_EU, FI::_GB_ENG, FI::_GB_SCT, FI::_GB_WLS, FI::_UN],
);

$sizes = [FI::SIZE_LARGE, FI::SIZE_SMALL, FI::SIZE_XSMALL];
$inlineItems = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'p class="lead"'];
$intro = 'au';
$wrappers = array(
	'col-lg-3 col-md-4 col-sm-4 col-xs-6', 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
	'col-lg-3 col-md-4 col-sm-4 col-xs-3', 'col-lg-3 col-sm-2 col-xs-3', 'col-sm-2 col-xs-3',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3 hidden-xs',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3 visible-lg'
);
/**
 * End of demo data
 */
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">

			<p>
				SVG flags &amp; CSS from <a href="https://lipis.github.io/flag-icon-css/" target="_blank">flag-icon-css<?= FA::icon(FA::_EXTERNAL_LINK) ?></a> as Yii 2 assets &amp; helpers.
			</p>
			<p>
				Here is <a href="https://lipis.github.io/flag-icon-css/" target="_blank">flag-icon-css <?= FA::icon(FA::_EXTERNAL_LINK) ?></a> as helpers for <a href="http://www.yiiframework.com" target="_blank">Yii2 <?= FA::icon(FA::_EXTERNAL_LINK) ?></a>. Modeled on <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::icon(FA::_EXTERNAL_LINK) ?></a> and working in much the same way.
			</p>

			<section id="examples">
				<div class="page-header">
					<h1>Examples (inline with text)</h1>
				</div>
				<div class="flag-no-wrap">
					<?php foreach ($inlineItems as $item): ?>
					<?= '<' . $item . '>' ?>
						<?= $item ?>
						<?= FI::i('au') . ' ' . FI::square('au') ?>
						<span class="label label-default"><?= FI::i($intro) . ' ' . $intro ?></span>
						<span class="label label-primary"><?= FI::i($intro) . ' ' . $intro ?></span>
						<span class="label label-success"><?= FI::i($intro) . ' ' . $intro ?></span>
						<span class="label label-info"><?= FI::i($intro) . ' ' . $intro ?></span>
						<span class="label label-warning"><?= FI::i($intro) . ' ' . $intro ?></span>
						<span class="label label-danger"><?= FI::i($intro) . ' ' . $intro ?></span>
					<?= '</' . $item . '>' ?>
					<?php endforeach; ?>
				</div>
			</section>

			<section id="more" class="d">
				<div class="page-header">
					<h1>Examples (on any element)</h1>
				</div>
				<div class="row">
					<?php
						$randKeys = array_rand($allFlags['iso-flags'], 15);
						$randFlags = [];
						shuffle($randKeys);
						foreach ($randKeys as $key) {
							$randFlags[] = $allFlags['iso-flags'][$key];
						}
					?>
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
						<div class="flag-wrapper"><?= FI::div('au') ?></div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-lg-3 col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3 hidden-xs">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
					<div class="col-sm-2 col-xs-3 visible-lg">
						<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
					</div>
				</div>
			</section>

			<section class="all-flags">
				<div class="page-header">
					<h1>ISO 3166-1 Flags</h1>
				</div>
				<div class="row">
					<?php foreach ($allFlags['iso-flags'] as $flag): ?>
					<div class="col-md-1 col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::divTitleId($flag) ?></div>
					</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="all-flags">
				<div class="page-header">
					<h1>More Flags</h1>
				</div>
				<div class="row">
					<?php foreach ($allFlags['others'] as $flag): ?>
					<div class="col-md-1 col-sm-2 col-xs-3">
						<div class="flag-wrapper"><?= FI::divTitleId($flag) ?></div>
					</div>
					<?php endforeach; ?>
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
