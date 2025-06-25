<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成29年度)";
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
<h3>平成29年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<!-- h30.2.8 -->
<dt>平成30年2月8日</dt>
<dd>実施報告書をアップしました<br>
平成29年度の実施報告書をアップしました。<br><a href="<?php echo $site_url;?>/pdf/houkokusho2017.pdf" target="_blank">こちらから</a>どうぞ！<br>
<br>
</dd>
<!-- h29.10.05 -->
<dt>平成29年10月5日</dt>
<dd>WEBサイトリニューアル<br>
中国語版、韓国語版、英語版ページをリニューアル<br>
全ページスマートフォンからでも見易くなりました。<br>
また、「駐車場ガイド」はGoogleマップを採用しました。<br>
ぜひご覧ください。<br>
<br>
The Chinese,  Korean and English versions updates are available. <br>
All pages are compatible on smartphones, also [Parking lot guide] was adopted by Google maps,
Click to open.<br>
<br>
</dd>
<!-- h29.7.27 -->
<dt>平成29年7月27日</dt>
<dd>「せせらぎ体感プロジェクト」WEBサイトについて<br>
国土交通省 青森河川国道事務所 「せせらぎ体感プロジェクト」WEBサイトできました。<br>
詳しくは以下のURLをご覧ください。<br>
<a href="http://www.thr.mlit.go.jp/aomori/road/topic/oirase/index.html" target="_blank">せせらぎ体感プロジェクトWEBサイト</a><br>
<br>
</dd>
<!-- h29.7.11 -->
<dt>平成29年7月11日</dt>
<dd2>エコロードフェスタ開催について<br>
今年のエコロードフェスタは10月28日(土)～29日(日)の開催予定です。<br>
また、交通規制は以下の期間に実施予定です。<br>
<strong class="title">10月26日(木)～27日(金)</strong><br>
　規制時間/10:00～14:00まで<br>
<strong class="title">10月28日(土)～29日(日)</strong><br>
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
