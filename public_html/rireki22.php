<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成22年度)";
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
<h2><img src="img/title.png" alt=".*" /></h2>
<h3>平成22年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<!--<dt>平成24年5月1日</dt>
<dd>「奥入瀬渓流エコロードフェスタ」の実施結果（報告書 PDF：6,878KB）を掲載しました。<a href="../pdf/H22houkokusho.pdf">PDFはこちら</a></dd>-->
<dt>平成22年11月1日</dt>
<dd>マイカー交通規制は終了いたしました。奥入瀬エコロードフェスタと共に多くの皆様にご協力・ご来場いただき誠にありがとうございました。</dd>
<dt>平成22年10月25日</dt>
<dd>イベント当日に配布する<!-- a href="<?php echo $site_url;?>/pdf/h22_event_guide.pdf" target="_blank" -->チラシ<!-- /a -->を作成しました。<br />
スタンプラリーなどさまざまなイベントをご用意しております！　<br />
是非、ご参加ください。<!-- a href="<?php echo $site_url;?>/pdf/h22_event_guide.pdf" target="_blank">詳細PDFはこちら</a --></dd>
<dt>平成22年10月20日</dt>
<dd>「平成22年度第2回奥入瀬渓流エコツーリズムプロジェクト実行委員会」が開催されました。</dd>
<dt>平成22年10月13日</dt>
<dd>「第21回奥入瀬渓流利用適正化協議会」が開催されました。</dd>
<dt>平成22年 8月31日</dt>
<dd>「十和田奥入瀬認定ガイド養成講座」の受講者募集を締め切りました。</dd>
<dt>平成22年 7月23日</dt>
<dd>「<a href="http://www.npo-oirase.com" target="_blank">十和田奥入瀬認定ガイド養成講座</a>」の受講者を募集中です。<br />
・募集締切：8月25日(水)</dd>
<dt>平成22年 7月23日</dt>
<dd>「<a href="http://www.npo-oirase.com" target="_blank">奥入瀬渓流自然ガイドツアー</a>」参加者募集中!</dd>
<dt>平成22年 7月 9日</dt>
<dd>2010年度の<a href="<?php echo $site_url;?>/<?php echo $lang;?>/project_2010">奥入瀬渓流エコロードフェスタ開催概要</a>を掲載しました。
2010年10月30日、10月31日に行われるマイカー交通規制にあわせて奥入瀬渓流エコロードフェスタが開催されます。</dd>
<dt>平成22年 6月 1日</dt>
<dd>平成22年の「奥入瀬渓流マイカー交通規制」の日程が決まりました。<br />
・開催期間：2010年10月30日（土）～10月31日（日）</dd>
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
