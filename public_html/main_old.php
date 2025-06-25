<?php
global $lang;

$site_url = SITE_URL;
$subtitle = "";

switch($lang){
 case 'ja':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'banner_sougou_b.jpg';
  $banner_3 = 'banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019.pdf';
  break;
 case 'en':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'en_banner_sougou_b.jpg';
  $banner_3 = 'en_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  break;
 case 'co':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'co_banner_sougou_b.jpg';
  $banner_3 = 'co_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  break;
 case 'chi':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'cn_banner_sougou_b.jpg';
  $banner_3 = 'cn_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  break;
 case 'tchi':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'tcn_banner_sougou_b.jpg';
  $banner_3 = 'tcn_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  break;
}

include "header.php";
?>
<div id="logo_wrapper">
 <div id="logo">
  <a href="<?php echo $site_url;?>/<?php echo $lang;?>"><img src="<?php echo $site_url;?>/pages/images/logo.png" alt=""></a>
 </div>
 <div id="for_slide">
  <img src="<?php echo $site_url;?>/pages/images/for_slide.png" alt="">
 </div>
</div>
<div id="slidebox">
<img src="<?php echo $site_url;?>/pages/images/slide_1.jpg" alt="">
<img src="<?php echo $site_url;?>/pages/images/slide_2.jpg" alt="" class="vis_h">
<img src="<?php echo $site_url;?>/pages/images/slide_3.jpg" alt="" class="vis_h">
</div>
<script type="text/javascript">
<!--
var BR_TYPE_NN = "NETSCAPE";
var BR_TYPE_NN4 = "NN4";
var BR_TYPE_IE = "MSIE";
var BR_TYPE_OPERA = "opera";
var BR_TYPE_FF = "FIREFOX";
var BR_TYPE_CHROME = "CHROME";
var BR_TYPE_SAFARI = "SAFARI";
var BR_TYPE_MOZILLA = "MOZILLA";
var BR_TYPE_IPHONE = "IPHONE";
var BR_TYPE_IPAD = "IPAD";
var BR_TYPE_ANDROID = "ANDROID";
var BR_TYPE_ANDROIDTAB = "Android Tab";
var BR_TYPE_WINDOWS = "WINDOWS PHONE";

window.onload = function() {
  var tm = 100;
  var timerID = setTimeout(function _check(){
   var imgs = document.getElementById('slidebox').getElementsByTagName('img');
   if (imgs.length<2) {
     clearTimeout(timerID);
     return;
   }
   var done = 0;
   for(var i=0; i<imgs.length;i++){
    if(imgs[i].complete) done++;
   }
   if (done==imgs.length){
     clearTimeout(timerID);
     slideshow(imgs);
     return;
   }
   timerID = setTimeout(_check,tm);
  },tm);
}

function slideshow(imgs) {
  var idx = 0;
  var tm = 1000;
  var cnt = 0;
  var timerID = setTimeout(function _slide(){
   tm = 50;
   if(cnt==60){
     setAlpha2(imgs[idx],100);
     cnt=0;
     tm = 1000;
   } else if (cnt==40){
     cnt++;
     setAlpha2(imgs[idx],0);
     imgs[idx].style.top = '0px';
     imgs[idx].style.left = '0px';
     imgs[idx].style.bottom = '0px';
     imgs[idx].style.right = '0px';
     imgs[idx].style.visibility = 'hidden';

     idx++;
     if (idx==imgs.length) idx = 0;
     setAlpha2(imgs[idx],0);
     imgs[idx].style.visibility = 'visible';
   } else if (cnt>=20&&cnt<40){
     cnt++;
     setAlpha2(imgs[idx],100-5*(cnt-20));
   } else {
     cnt++;
     if(cnt<=20){
/*       imgs[idx].style.top = -1 * cnt + 'px';
       imgs[idx].style.left = -1 * cnt + 'px';
       imgs[idx].style.bottom = -1 * cnt + 'px';
       imgs[idx].style.right = -1 * cnt + 'px';*/
     } else {
       setAlpha2(imgs[idx],5*(cnt-40));
     }
   }

   timerID = setTimeout(_slide,tm);
  },tm);
}
function setAlpha2(img,a) {
		if (document.all) {
			img.style.filter = "alpha(opacity=" + a + ")";
			img.style.opacity = a / 100;
	} else {
		var btype= getBrowserType();
		if (btype==BR_TYPE_FF || btype== BR_TYPE_NN) {
			img.style.MozOpacity = a / 100;
		} else {
			img.style.opacity = a / 100;
		}
	}
}
function getBrowserType() {
  var brtype = "";
  var uName = navigator.userAgent.toUpperCase();
  var aName = navigator.appName.toUpperCase();

  if (window.opera) {
    brtype = BR_TYPE_OPERA;
  } else if (uName.indexOf(BR_TYPE_NN) >=0) {
    brtype = BR_TYPE_NN;
  } else if (uName.indexOf(BR_TYPE_FF) >=0) {
    brtype = BR_TYPE_FF;
  } else if (uName.indexOf(BR_TYPE_IE) >=0||uName.indexOf('TRIDENT') >=0) {
    brtype = BR_TYPE_IE;
  } else if (uName.indexOf(BR_TYPE_CHROME) >=0) {
    brtype = BR_TYPE_CHROME;
  } else if (uName.indexOf(BR_TYPE_SAFARI) >=0) {
    brtype = BR_TYPE_SAFARI;
  } else if (document.layers) {
    brtype = BR_TYPE_NN4;
  } else if (uName.indexOf(BR_TYPE_MOZILLA) == 0) {
    brtype = BR_TYPE_MOZILLA;
  } else if (uName.indexOf(BR_TYPE_IPHONE) == 0) {
    brtype = BR_TYPE_IPHONE;
  } else if (uName.indexOf(BR_TYPE_IPAD) == 0) {
    brtype = BR_TYPE_IPAD;
  } else if (uName.indexOf(BR_TYPE_ANDROID) == 0) {
    brtype = BR_TYPE_ANDROID;
  } else if (uName.indexOf(BR_TYPE_WINDOWS) == 0) {
    brtype = BR_TYPE_WINDOWS;
  }

  return brtype;
}

-->
</script>
<div id="main">
 <div class="pos_r">
  <img src="<?php echo $site_url;?>/pages/images/new_bg.png" alt="" class="top_bg1">
 </div>
 <div class="padding_20">
 <div class="top_box">
  <div class="top_banner_box top_banner_box-1 text_c">
   <img src="<?php echo $site_url;?>/pages/images/<?php echo $banner_1;?>" alt="奥入瀬渓流マイカー交通規制" style="display: none">
<?php if($lang=='ja'){ ?>
   <a href="https://eco-oirase2020.reserven.jp/" target="_blank"><img src="<?php echo $site_url;?>/images/2020_parking_banner.jpg" alt=""></a>
<?php } else { ?>
   <a href="pdf/<?php echo $pdf_all;?>" target="_blank"><img src="<?php echo $site_url;?>/pages/images/<?php echo $banner_2;?>" alt="2019年度版パンフレット"></a>
   <a href="pdf/2019_daily_use_pamphlet.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images/<?php echo $banner_3;?>" alt="2019年度版当日パンフレット"></a>
<?php } ?>
  </div>
  <div class="top_main_box ja">
   <img src="<?php echo $site_url;?>/pages/images/news_title.png" alt="最新ニュース">
   <div id="news_box" style="padding-right: 10px;">
<!-- r2.11.2 -->
令和２年11月1日<br>

    <h2>高校生ボランティアガイド中止のおしらせ</h2>
2020年度の高校生ボランティアガイドは中止となりました。<br>
<br>

<!-- r2.10.21 -->
令和２年10月22日<br>
    <h2>高校生ボランティアガイド延期のおしらせ</h2>
新型コロナウイルス感染症拡大の影響を鑑み、１０月２４日（土）２５日（日）に予定しておりました高校生ボランティアガイドは１１月７日（土）８日（日）に延期となりました。<br>
<br>

<!-- r2.10.21 -->
令和２年10月22日<br>
繁体字ページ掲載いたしました。<br>
<br>

<!-- r2.9.24 -->
令和２年9月23日<br>
    <h2>エコロードフェスタ開催中止のおしらせ</h2>
『2020年度の「奥入瀬渓流マイカー交通規制」及び「奥入瀬渓流エコロードフェスタ」について、新型コロナウイルス感染拡大防止の観点から中止することとなりました。』<br>

<p style="float: left;">中止内容　</p><p style="overflow: hidden;">■10月22日（木）～25日（日）「奥入瀬渓流マイカー交通規制」<br>

■10月24日（土）・25日（日）「奥入瀬渓流エコロードフェスタ」<br>

　<a href="pdf/2020ecoroad-tyuusi.pdf" target="_blank">渋滞回避・迂回情報（PDF)</a></p>
<br>

<!-- p style="font-size: 16px;">お知らせはありません。</p -->

<br>
<br>
<div id="rireki">
<?php include "rirekilist.php";?>
</div>

   </div>
  </div>
 </div>
  <div class="top_main_box">
   <div id="sidebar">
    <?php include "sidebar.php";?>
   </div>
   <div id="top_banner_box2">
    <a href="https://www.youtube.com/watch?v=sZ-NPHN-SD0" target="_blank"><img src="<?php echo $site_url;?>/pages/images/<?php echo $banner_4;?>" alt="奥入瀬エコロードフェスタの開催状況を集約したビデオを御覧ください。（YouTube動画・約5分）" /></a>
    <a href="https://www.oiken.org/" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_oiken.png" alt="おいけん" /></a>
    <a href="https://www.youtube.com/channel/UCVD_aGvmCf5nF7GySYWmTAw" target="_blank"><img src="<?php echo $site_url;?>/pages/images/youtube_c.jpg" alt="
奥入瀬渓流エコツーリズムプロジェクト実行委員会" /></a>
    <a href="pdf/aki_sanpo.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images/aki_sanpo.png" alt="秋さんぽ" /></a>
    <a href="http://www.thr.mlit.go.jp/aomori/road/topic/oirase/index.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images/seseragi_project.gif" alt="せせらぎ体感プロジェクト" /></a>
    <a href="http://www.npo-oirase.com" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_nintei.png" alt="十和田奥入瀬認定ガイド" /></a>
    <a href="http://www.aptinet.jp/" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_aptynet.png" alt="AptiNet 青森県観光情報サイト" /></a>
    <a href="http://www.toutetsu.co.jp/ship.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_ship.png" alt="十和田湖遊覧船" /></a>
    <a href="http://www.aosya.com/" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_aosya.png" alt="無料壁紙写真素材～『青い森の写真館』リンク" /></a>
   </div>
   <div class="clear"></div>
  </div>
  <div class="top_banner_box text_c">
   <a href="http://www.pref.aomori.lg.jp/nature/kankyo/smartmove-2019.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_smart_move.jpg" alt="スマートムーブキャンペーン"></a>
   <a href="https://tenki.jp/leisure/camp/2/5/23017/" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_weather.png" alt="十和田湖の天気（日本気象協会）"></a>
   <a href="http://towadako-livecam-01.aa0.netvolante.jp:8080/viewer/live/ja/live.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_livecamera.png" alt="十和田湖畔ライブカメラ"></a>
   <a href="http://www.koutsu-aomori.com/Road/livecamera.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_aomorilivecamera.png" alt="青森県内ライブカメラ（青森みち情報）"></a>
  </div>
  <div class="clear"></div>
 </div>
 <div class="pos_r">
  <img src="<?php echo $site_url;?>/pages/images/top_bg2.png" alt="" class="top_bg2">
 </div>
</div>
<?php
include "footer.php";
?>
