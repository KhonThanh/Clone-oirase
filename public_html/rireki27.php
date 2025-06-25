<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成27年度)";
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
<h3>平成27年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<dt>平成27年10月22日</dt>
<dd>当日用のパンフレットをアップしました。<!-- br><a href="<?php echo $site_url;?>/pdf/2015_daily_use_pamphlet.pdf" target="_blank">こちらから</a>どうぞ！ --></dd>
<dt>平成27年10月1日</dt>
<dd>シャトルバスチケット特典が変更になりました。<br>
休屋駐車場<br>
　普通自動車　５００円割引<br>
　自動二輪車　２００円割引<br>
遊覧船運賃割引<br>
　十和田湖観光電鉄株式会社<br>
　　休屋⇔休屋　　１４００円▶１０００円<br>
　　休屋⇔子ノ口　１４００円▶１０００円<br>
十和田湖遊覧船企業組合<br>
　　休屋⇔子ノ口　１１００円▶１０００円
</dd>
<dt>平成27年9月30日</dt>
<dd>シャトルバス最終便の時刻が１５：００から<br>１５：２０に変更になりました。</dd>
<dt>平成27年8月21日</dt>
<dd>平成２７年度日本語版ホームページを更新しました。</dd>
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
