<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成30年度)";
  break;
 case 'en':
  $subtitle = "";
  break;
 case 'co':
  $subtitle = "";
  break;
 case 'chi':
  $subtitle = "";
  break;
}

include "header.php";
?>
</div>
<div id="main_sub">
 <div id="sidebar">
   <?php include "sidebar.php";?>
 </div>
 <div id="main_contents">
<h2>ニュース</h2>
<h3>平成30年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<!-- h30.10.26 -->
<dl>
<dt>平成30年10月26日</dt>
<dd>シャトルバスチケット<br>
★シャトルバスチケット販売中<br>
<p class="group">
<strong class="title">焼山駐車場発券所</strong><br>
<strong class="title">子ノ口発券所</strong><br>
<strong class="title">休屋発券所</strong>
</p>
で販売しております。<br>
</dd>
<!-- h30.10.19 -->
<dt>平成30年10月19日</dt>
<dd>当日パンフレット<br>
2018年度版当日パンフレットをアップロードしました。<br>
<br>
バスの時刻表<br>
本年度のバスの時刻表が決まりました。<br>
10月25日・26日の時刻表(PDF)は<a href="<?php echo $site_url;?>/pdf/181025_timetable.pdf" target="_balnk" class="f16">こちら</a><br>
10月27日・28日の時刻表(PDF)は<a href="<?php echo $site_url;?>/pdf/181025_timetable_2.pdf" target="_balnk" class="f16">こちら</a><br>
</dd>
<!-- h30.9.18 -->
<dt>平成30年9月18日</dt>
<dd>総合パンフレット<br>
2018年度版総合パンフレットをアップロードしました。<br>
<br>
シャトルバスの時刻表<br>
シャトルバスの時刻表を更新しました。<br>
</dd>
<!-- h30.8.6 -->
<dt>平成30年6月26日</dt>
<dd>奥入瀬渓流の歩き方のページ<br>
十和田湖自然ガイドクラブの情報を更新しました。<br>
</dd>
<!-- h30.6.26 -->
<dt>平成30年6月26日</dt>
<dd2>エコロードフェスタ開催について<br>
今年のエコロードフェスタは10月27日(土)～28日(日)の開催予定です。<br>
また、交通規制は以下の期間に実施予定です。<br>
<strong class="title">10月25日(木)～26日(金)</strong><br>
　規制時間/10:00～14:00まで<br>
<strong class="title">10月27日(土)～28日(日)</strong><br>
　規制時間/9:00～15:00まで<br>
</dd>
</dl>
<!-- ▲新着情報入力ここまで▲ -->
</div>
</div>
<div id="rireki">
<?php include "rirekilist.php";?>
</div>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
