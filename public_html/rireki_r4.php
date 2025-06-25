<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(令和4年度)";
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
<h3>令和4年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<!-- r4.10.24 -->
<dl>
<dd>シャトルバス運行について</h2>
１０月24日（月）～30日（日）のシャトルバス運行は無事終了いたしました。<br>
ご協力ありがとうございました。
</dd>
</dl>

<!-- r4.9.30 -->
<dl>
<dt>令和4年9月30日</dt>
<dd>総合パンフレットについて<br>
『2022年度の「奥入瀬渓流エコロードフェスタ総合パンフレット」をアップしました。』<br>

<p>こちらのリンクをご利用ください。<br>
　<a href="pdf/<?php echo $pdf_all;?>" target="_blank">奥入瀬渓流エコロードフェスタ総合パンフレット（PDF)</a>
</p>
</dd>
</dl>

<!-- r4.9.30 -->
<dl>
<dt>令和4年9月30日</dt>
<dd>シャトルバス運行のおしらせ<br>
『シャトルバスについて、以下の日程で運行します。』<br>

      <p style="float: left;">運行期間　</p><p style="overflow: hidden;">■10月24日（月）～30日（日）までの7日間<br>&nbsp;<a href="<?php echo $site_url;?>/ja/bus-ship#timetable">シャトルバス時刻表はこちら</a></p><br>
      <p>今年度はマイカー交通規制はしませんが、マイカーでの「エコーロード区間」への車両進入を控えてくださるようお願いします。<br>
以下のページをご確認ください。<br>
　<a href="<?php echo $site_url;?>/ja/parking">駐車場ガイド（2022年)</a><br>
　<a href="<?php echo $site_url;?>/ja/bus-ship">シャトルバス・遊覧船（2022年)</a><br>
　<a href="<?php echo $site_url;?>/ja/faq">シャトルバス運行に関するQ&A（2022年)</a><br><br>
運行期間中は、10月24日（月）～27日（水）に<a href="http://oirase-seseragi.com/" target="_blank">「奥入瀬せせらぎ体感プロジェクト」</a>、
29日（土）～30日（日）に「奥入瀬エコロードフェスタ」を開催します。
      </p>
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
