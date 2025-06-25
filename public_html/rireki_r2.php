<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(令和2年度)";
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
<h3>令和2年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<!-- r2.9.24 -->
<dl>
<dt>令和3年2月24日</dt>
<dd>奥入瀬渓流360°動画のバナーを設置しました。<br>
「現地の臨場感を体験できる奥入瀬渓流360°ビュー動画を配信中！<br>
お家で奥入瀬渓流散策の気分を味わってみませんか？」<br>
<p style="margin-top: 10px">
　<a href="https://www.youtube.com/channel/UCeRiy0lg_3j3N_DpZ3CatFw" target="_blank">動画一覧はこちら＞＞</a>
</p>
</dd>
</dl>
<dl>
<dt>令和2年9月24日</dt>
<dd>エコロードフェスタ開催中止のおしらせ<br>
『2020年度の「奥入瀬渓流マイカー交通規制」及び「奥入瀬渓流エコロードフェスタ」について、新型コロナウイルス感染拡大防止の観点から中止することとなりました。』<br>

<p style="float: left;">中止内容　</p><p style="overflow: hidden;">■10月22日（木）～25日（日）「奥入瀬渓流マイカー交通規制」<br>

■10月24日（土）・25日（日）「奥入瀬渓流エコロードフェスタ」<br>

　<a href="pdf/2020ecoroad-tyuusi.pdf" target="_blank">渋滞回避・迂回情報（PDF)</a></p>
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
