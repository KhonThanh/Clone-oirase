<?php
if(isset($_SESSION['test'])){
 include 'header_new.php';
 return;
}

global $lang,$title,$subtitle,$page,$keyword,$desc;

switch($lang){
  case 'co':
   $lang2 = 'ko';
   break;
  case 'chi':
   $lang2 = 'zh';
   break;
  default:
   $lang2 = $lang;
   break;
}

$site_url = SITE_URL;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="<?php echo $keyword;?>" />
<meta name="description" content="<?php echo $desc;?>" />
<title><?php echo ($subtitle?$subtitle.' | ':'').$title; ?></title>
<link rel="shortcut icon" type="img/x-icon" href="<?php echo $site_url;?>/favicon.ico" />
<?php if ($page!=''){ ?>
<link href="<?php echo $site_url;?>/pages/css/base_sub.css" rel="stylesheet" type="text/css" />
<?php } ?>
<link href="<?php echo $site_url;?>/pages/css/style.css" rel="stylesheet" type="text/css" />
<?php if (isset($_REQUEST['print'])){ ?>
<link href="<?php echo $site_url;?>/pages/css/print.css" rel="stylesheet" type="text/css" />
<?php } ?>

<style type="text/css">
.<?php echo $lang;?> {
 display: inherit !important;
}
</style>
<script type="text/javascript" src="<?php echo $site_url;?>/scripts/jquery-1.9.1.min.js"></script>
<script>
	(function($) {
		$(function() {
			// Nav Toggle Button
			$('#hmenu').click(function(){
				$('#sidebar').toggleClass('open');
				$('#mobile_menu').toggleClass('open2');
			});

		});
	})(jQuery);
	jQuery(window).bind('scroll',function(){
	 jQuery('#to_top').css({'visibility': jQuery(this).scrollTop() > 500?'visible':'hidden'});
	});
	function totop(){
	  jQuery('html,body').animate({'scrollTop': 0},500,'swing');
	}
</script>
<?php if ($page=='parking'){ ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiTHNmQ41T-7T_1Ep-WK_4TABzNODzdeA&language=<?php echo $lang2;?>"></script>
<?php } ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177512146-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177512146-1');
</script>


</head>
<body id="<?php echo $lang;?>">
<a href="javascript:void(0)"><img id="to_top" src="<?php echo $site_url;?>/pages/images/to_top.png" alt="" title="To the Top" onclick="totop()"></a>
<div id="container">
<div id="mobile_menu">
<div id="hmenu">
<div class="pos_r">
<span></span>
<span></span>
<span></span>
</div>
<p class="spmenu c_text">menu</p>
<p class="spclose c_text">close</p>
</div>
<?php if ($page!=''){ ?>
<div id="header_sub">
<?php } ?>
<div id="header_wrapper">
 <div id="header">
  <ul>
   <li><a href="<?php echo $site_url;?>/ja" class="hf">日本語</a></li><li><a href="<?php echo $site_url;?>/co" class="hf">한국어</a></li><li><a href="<?php echo $site_url;?>/en" class="hf">English</a></li><li><a href="<?php echo $site_url;?>/tchi">中文<span class="disp_ib">(繁体)</span></a></li><li><a href="<?php echo $site_url;?>/chi">中文<span class="disp_ib">(簡体)</span></a></li>
  </ul>
 </div>
<?php if ($page!=''){ ?>
 <div id="subheader">
  <div id="logo">
   <a href="<?php echo $site_url;?>/<?php echo $lang;?>"><img src="<?php echo $site_url;?>/pages/images/logo.png" alt=""></a>
  </div>
  <div id="subheaderimg">
   <img src="<?php echo $site_url;?>/pages/images/subheader_bg.jpg" alt="">
  </div>
 </div>
<?php } ?>
</div>
