<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成21年度)";
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
<h3>平成21年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<dt>平成22年 3月31日</dt>
<dd>「奥入瀬渓流エコロードフェスタ」の<a href="<?php echo $site_url;?>/pdf/h21_oiraseeco_houkoku.pdf" target="_blank">実施結果（報告書 PDF：2,196KB）</a>を掲載しました。<a href="<?php echo $site_url;?>/pdf/h21_oiraseeco_houkoku.pdf" target="_blank">PDFはこちら</a></dd>
<dt>平成21年11月 6日</dt>
<dd>「奥入瀬渓流エコロードフェスタ」の<a href="http://www.pref.aomori.lg.jp/soshiki/kendo/doro/files/eco-road-jissikekka.pdf" target="_blank">実施結果（速報・記者発表資料）</a>をお知らせいたします。<a href="http://www.pref.aomori.lg.jp/soshiki/kendo/doro/files/eco-road-jissikekka.pdf" target="_blank">PDFはこちら</a></dd>
<dt>平成21年11月 2日</dt>
<dd>マイカー交通規制は終了いたしました。奥入瀬エコロードフェスタと共に多くの皆様にご協力・ご来場いただき誠にありがとうございました。</dd>
<dt>平成21年11月 1日</dt>
<dd>11月1日のマイカー交通規制は悪天候のため中止となりました。</dd>
<dt>平成21年10月20日</dt>
<dd>奥入瀬渓流エコロードフェスタの期間に「<!-- a href="<?php echo $site_url;?>/pdf/ecar2009.pdf" target="_blank" -->電気自動車展示試乗会<!-- /a -->」が行われます。<!-- a href="<?php echo $site_url;?>/pdf/ecar2009.pdf" target="_blank">詳細情報はこちら</a -->。</dd>
<dt>平成21年10月 6日</dt>
<dd><a href="<?php echo $site_url;?>/<?php echo $lang;?>/project_2009#project-2009" >「奥入瀬渓流三里半ウオーク</a>」の参加者を募集しています。<br />
申し込み期限は10月26日(月)です。</dd>
<dt>平成21年10月 5日</dt>
<dd><a href="<?php echo $site_url;?>/oirase_guide/" target="_blank">「十和田奥入瀬認定ガイド養成講座</a>」の受講生を募集します。<br />
募集期限 平成21年10月22日(木) </dd>
<dt>平成21年10月 1日</dt>
<dd>「青森500選4コースチャレンジウオーク」の申し込みは終了しました。多数お申し込みいただきありがとうございました。</dd>
<dt>平成21年 9月29日</dt>
<dd>「奥入瀬渓流におけるパーク＆EVライドの導入検討調査」企画コンペの募集は終了しました。</dd>
<dt>平成21年 9月28日</dt>
<dd>「<!-- a href="<?php echo $site_url;?>/pdf/2009folum.pdf" target="_blank" -->第三回奥入瀬渓流エコツーリズムフォーラム<!-- /a -->」終了のお知らせ。<br />
2009年9月26日に開催されました。多数のご来場ありがとうございました。</dd>
<dt>平成21年 9月 2日</dt>
<dd>今年度の<a href="<?php echo $site_url;?>/<?php echo $lang;?>/team_2009">プロジェクト協賛企業の一覧</a>を掲載しました。</dd>
<dt> 平成21年 7月 8日</dt>
<dd>2009年度の<a href="<?php echo $site_url;?>/<?php echo $lang;?>/project_2009">奥入瀬渓流エコロードフェスタ開催概要</a>を掲載しました。 <br />
2009年10月31日、11月1日に行われるマイカー交通規制にあわせて奥入瀬渓流エコロードフェスタが開催されます。<!-- a href="<?php echo $site_url;?>/pdf/09all.pdf" target="_blank">詳細パンフレットはこちら</a --></dd></dl>
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
