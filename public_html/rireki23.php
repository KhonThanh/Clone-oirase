<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成23年度)";
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
<h3>平成23年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<!--
<dt>平成24年 5月1日</dt>
<dd>「奥入瀬渓流エコロードフェスタ」の実施結果（報告書 PDF：7,725KB）を掲載しました。<a href="../pdf/h23houkoku.pdf">PDFはこちら</a></dd>
-->
<!--<dt>平成24年9月19日</dt>
<dd>「奥入瀬渓流エコロードフェスタ」の実施結果（報告書 PDF：KB）を掲載しました。<a href="../pdf/H23houkoku.pdf" target="_blank">PDFはこちら</a></dd>-->
<dt>平成23年10月31日</dt>
<dd>マイカー交通規制は終了いたしました。奥入瀬エコロードフェスタと共に多くの皆様にご協力・ご来場いただき誠にありがとうございました。</dd>
<dt>平成23年10月24日</dt>
<dd>エコロードフェスタ当日のイベント概要が決まりました</dd>
<dt>平成23年10月5日</dt>
<dd>”ecoもび”ウォークのモニター募集を開始いたしました。　"ecoもび"ウォーク・モニター募集中！！</dd>
<dt>平成23年10月3日</dt>
<dd>本日開催された奥入瀬渓流適正化協議会にて、迂回路となる七曲区間の安全が確認さ れたことなどから、１０月２９日（土）、３０日（日）の二日間、「奥入瀬渓流エコ ロードフェスタ」（マイカー交通規制）が開催されることが正式に決定されました。</dd>
<dt>平成23年 6月30日</dt>
<dd>2011年度の奥入瀬エコロードフェスタの概要を掲載いたしました。<!-- a href="<?php echo $site_url;?>/pdf/h23gaiyou.pdf" target="_blank">PDFはこちら</a --></dd>
<dt>平成23年 6月14日</dt>
<dd>「第23回奥入瀬渓流利用適正化協議会」及び「平成23年度第1回奥入瀬渓流エコツーリズム実行委員会」が開催され、平成23年度の「奥入瀬マイカー交通規制」は2011年10月29日（土）～30日（日）の開催に向けて準備を進めることとなりました。</dd>
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
