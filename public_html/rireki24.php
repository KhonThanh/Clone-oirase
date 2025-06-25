<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成24年度)";
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
<h3>平成24年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<dt>平成24年10月19日</dt>
<dd>平成２４年度版当日用パンフレットを掲載しました。<!-- 詳しくは、<a href="<?php echo $site_url;?>/<?php echo $lang;?>/eventpdf_2012">こちらから</a --></dd>
<dt>平成24年8月7日</dt>
<dd>平成２４年度版パンフレットに更新しました。</dd>
<dt>平成24年5月1日</dt>
<dd>平成２４年のエコロードフェスタ（奥入瀬渓流マイカー交通規制）の日程は
10月27日（土）～10月28日（日）の予定です。<br /><span class="red">※災害発生時、現地状況により交通規制を実施しない場合があります。</span></dd>
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
