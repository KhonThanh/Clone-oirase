<?php
global $lang, $title, $subtitle, $page, $keyword, $desc, $new;
$toptitle = '';
switch ($lang) {
	case 'ja':
		$toptitle = '奥入瀬に自動運転がやってくる！<br>青森県内初の自動運転実証実験を知る';
		$lang2 = 'ko';
		break;
	case 'en':
		$toptitle = "Autonomous Vehicles are coming to Oirase！<br>The first autonomous driving demonstration experiment in Aomori Prefecture";
		$lang2 = 'ko';
		break;
	case 'co':
		$toptitle = "오이라세에 자율주행 자동차가 등장했습니다. <br>아오모리시에서의 최초의 자율주행차 실증시험";
		$lang2 = 'ko';
		break;
	case 'chi':
		$toptitle = "自动驾驶汽车已来到奥入濑!. <br>青森省县首次自动驾驶汽车演示测试";
		$lang2 = 'zh-CN';
		break;
	case 'tchi':
		$lang2 = 'zh-TW';
		$toptitle = "自動駕駛汽車已來到奧入瀨!<br>青森省縣首次自動駕駛汽車展示測試";
		break;
	default:
		$lang2 = $lang;
		break;
}

$topimg = 'page';

$top = '';
$tmp = explode('--', $page);
switch ($tmp[0]) {
	case 'lp_project':
	case 'event':
	case 'project':
	case 'detail':
	case 'parking':
	case 'bus-ship':
	case 'oirase':
	case 'faq':

		$topimg = $tmp[0];
		break;
}
switch ($page) {
	case 'lp_project':
		$toptitle = 'プロジェクトの<span class="disp_ib">展望</span>';
		$top = '';
		break;
	case 'event':
		$toptitle = 'イベント';
		break;
	case 'oirase':
		$style = 'style="font-size: 23px;"';
		break;
}
$site_url = SITE_URL;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="<?php echo $keyword; ?>" />
	<meta name="description" content="<?php echo $desc; ?>" />
	<title><?php echo ($subtitle ? $subtitle . ' | ' : '') . $title; ?></title>
	<link rel="shortcut icon" type="img/x-icon" href="<?php echo $site_url; ?>/favicon.ico" />
	<!-- link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet" -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/main.css" />
	<?php if ($page != '' && $page != 'top') { ?>
		<link href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/base_sub.css" rel="stylesheet" type="text/css" />
	<?php } ?>
	<link href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/style<?php echo $page == 'top' ? '_1' : ''; ?>.css" rel="stylesheet" type="text/css" />
	<?php if (isset($_REQUEST['print'])) { ?>
		<link href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/print.css" rel="stylesheet" type="text/css" />

	<?php } ?>

	<style type="text/css">
		.<?php echo $lang; ?> {
			display: inherit !important;
		}
	</style>
	<script type="text/javascript" src="<?php echo $site_url; ?>/scripts/jquery-1.9.1.min.js"></script>
	<!--[if lt IE 9]>
  <script src="<?php echo $site_url; ?>/scripts/html5.js"></script>
  <script src="<?php echo $site_url; ?>/scripts/jquery-1.8.2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-shim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-sham.min.js"></script>
<![endif]-->
	<?php if ($page == '' || $page == 'top' || $page == 'top_0') { ?>
		<script type="text/javascript" src="<?php echo $site_url; ?>/scripts/slick.min.js"></script>
		<link href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/slick.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $site_url; ?>/pages/css<?php echo $new; ?>/slick-theme.css" rel="stylesheet" type="text/css" />
	<?php } ?>
	<script>
		(function($) {
			$(function() {
				// Nav Toggle Button
				$('#hmenu').click(function() {
					$('body').toggleClass('open');
					$('#sidebar').toggleClass('open');
					$('#mobile_menu').toggleClass('open2');
				});

				$('.sellang').click(function() {
					$('.sellang ul').toggleClass('open');
				});
				var timerID = setTimeout(function() {
					clearTimeout(timerID);
					doanime();
				}, 1000);
			});
		})(jQuery);
		jQuery(window).bind('scroll', function() {
			jQuery('#to_top').css({
				'visibility': jQuery(this).scrollTop() > 500 ? 'visible' : 'hidden'
			});

			var sctop = jQuery(this).scrollTop();
			if (sctop > 300) {
				jQuery('#mobile_menu').addClass('show');
				jQuery('#sidebar').addClass('show');
			} else {
				jQuery('#mobile_menu').removeClass('show');
				jQuery('#sidebar').removeClass('show');
			}
			doanime();
		});

		function doanime() {
			var sctop = jQuery(this).scrollTop();
			var windowHeight = jQuery(window).height();
			jQuery('.anime,.anime2,.anime3').each(function() {
				var objectPosition = jQuery(this.parentNode).offset().top;
				if (sctop > objectPosition - windowHeight + 100) {
					jQuery(this).addClass("fa");
				}
			});
		}

		function totop() {
			jQuery('html,body').animate({
				'scrollTop': 0
			}, 500, 'swing');
		}
		<?php if ($page == '' || $page == 'top_0') { ?>
			jQuery(document).ready(function() {
				jQuery('#slide').slick({
					centerMode: true,
					centerPadding: 0,
					autoplay: true,
					autoplaySpeed: 5000,
					speed: 1500,
					fade: true,
					pauseOnHover: false,
				});
				<?php if ($page == 'top_0' || $page == '') { ?>
					jQuery('.banner-box').slick({
						infinite: false,
						variableWidth: true,
						slidesToShow: 1,
						prevArrow: '<div class="prev"><div><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/arrows-left.png" alt="PREV"></div>PREV</div>',
						nextArrow: '<div class="next"><div><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/arrows-right.png" alt="NEXT"></div>NEXT</div>'
					});
				<?php } ?>
			});
		<?php } ?>
	</script>
	<?php if ($page == 'bus-ship' || $page == 'bus-ship--2022' || $page == 'parking' || $page == 'parking--2022') { ?>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiTHNmQ41T-7T_1Ep-WK_4TABzNODzdeA&language=<?php echo $lang2; ?>"></script>
	<?php } ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177512146-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-177512146-1');
	</script>
	<!--[if lt IE 9]>
<style type="text/css">
#container {
  min-width: 1430px;
  _width: 1430px;
}
#hmenu span.nth-1 {
	top: 0px;
}
#hmenu span.nth-2 {
	top: 12px;
}
#hmenu span.nth-3 {
	top: 24px;
}
.open2 #hmenu span.nth-1,
.open2 #hmenu span.nth-2,
.open2 #hmenu span.nth-3 {
	display: none;
}
.open2 #hmenu span.disp_n {
	font-size: 44px;
	display: inline;
	height: auto;
	background: transparent;
	top: -20px;
}
.top-infobox {
 left: 50%;
 margin-left: -700px;
 width: 487px;
}
</style>
<![endif]-->
</head>

<body id="<?php echo $lang; ?>">
	<!-- a href="javascript:void(0)"><img id="to_top" src="<?php echo $site_url; ?>/pages/images/to_top.png" alt="" title="To the Top" onclick="totop()"></a -->
	<div id="container">
		<?php if ($page != 'lp_project'): ?>
			<div id="mobile_menu">
				<div class="mask"></div>
				<div id="hmenu">
					<div class="mask"></div>
					<div class="pos_r">
						<span class="nth-1"></span>
						<span class="nth-2"></span>
						<span class="nth-3"></span>
						<span class="disp_n">×</span>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="mw1400 mg-lra pos_r noprn">
			<div id="logo">
				<a href="<?php echo $site_url; ?>/<?php echo $lang; ?><?php echo $top; ?>"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/logo.png" alt=""></a>
			</div>
		</div>

		<div class="pos_r noprn">
			<?php if ($page != '' && $page != 'top' && $page != 'top_0') {
				if ($page == 'event' || $page == 'oirase' || $page == 'lp_project') { ?>
					<div class="top-infobox page">
						<div class="mask"></div>
						<div class="inner pos_r">
							<p class="fs_30 font_b text_c" <?php echo $style; ?>><?php echo $toptitle; ?></p>
						</div>
					</div>
				<?php  } ?>
				<div class="mw1200 mg-lra">
					<div id="slidebox">
						<img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/<?php echo $topimg; ?>-top.jpg" alt="">
					</div>
				<?php } ?>
				</div>