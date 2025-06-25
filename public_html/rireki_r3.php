<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(令和3年度)";
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
<h3>令和3年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<!-- r3.10.19 -->
<dl>
<dt>令和3年10月19日</dt>
<dd>奥入瀬エコロードフェスタ中止のおしらせ<br>
『2021年度の「奥入瀬渓流エコロードフェスタ」について、新型コロナウイルス感染拡大防止の観点からすべてのイベントを中止することとなりました。』<br>

<p style="float: left;">中止内容　</p><p style="overflow: hidden;">■10月30日（土）～31日（日）「奥入瀬渓流エコロードフェスタ」<br>
　<a href="<?php echo $site_url;?>/pdf/2021oirase_ukairo_annai-2.pdf" target="_blank">渋滞回避・迂回情報（PDF)</a>
</p>
</dd>
</dl>
<!-- r2.9.24 -->
<dl>
<dt>令和3年9月24日</dt>
<dd>奥入瀬渓流マイカー交通規制中止のおしらせ<br>
『2021年度の「奥入瀬渓流マイカー交通規制」について、新型コロナウイルス感染拡大防止の観点から中止することとなりました。』<br>

<p style="float: left;">中止内容　</p><p style="overflow: hidden;">■10月21日（木）～24日（日）「奥入瀬渓流マイカー交通規制」<br>

　<a href="pdf/2021oirase_ukairo_annai.pdf" target="_blank">渋滞回避・迂回情報（PDF)</a></p>
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
