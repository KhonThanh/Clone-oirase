<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成20年度)";
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
<h3>平成20年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl><dt>平成21年 1月30日</dt>
<dd>十和田湖冬物語２００９[十和田市]が開催されました。<BR>
・期間：2009年1月30日（金）～2月22日（日）<BR>
・場所:十和田湖畔休屋特設イベント会場</dd>
<dt>平成20年12月 1日</dt>
<dd><!-- a href="<?php echo $site_url;?>/pdf/h20_hokoku.pdf" target="_blank" -->平成20年度マイカー交通規制実施結果<!--（報告書 PDF：4,965KB）</a -->を掲載しました。</dd>
<dt>平成20年10月16日</dt>
<dd>シャトルバス利用者の皆様へ”チケット提示で割引特典多数有り！！</dd>
<dt>平成20年10月15日</dt>
<dd>10月18日(土)～19日(日)　「奥入瀬渓流マイカー規制・併催イベント いよいよ開催！！」紅葉真っ盛りの奥入瀬渓流にぜひお越しください。</dd>
<dt>平成20年 9月29日</dt>
<dd>9月28日に「<!-- a href="<?php echo $site_url;?>/pdf/eco.pdf" target="_blank" -->奥入瀬渓流エコツーリズムフォーラム2008<!-- /a -->」が開催されました。多数のご来場まことにありがとうございました。</dd>
<dt>平成20年 9月18日</dt>
<dd>10月18日～19日に<!-- a href="<?php echo $site_url;?>/pdf/1018-1019.pdf" target="_blank" -->「奥入瀬渓流マイカー交通規制併催イベント<!--（PDF：1,271KB）」</a -->が開催されます。</dd>
<dt>平成20年 8月22日</dt>
<dd>マイカー交通規制の詳細情報を更新しました。</dd>
<dt>平成20年 9月10日</dt>
<dd>9月28日に<!-- a href="<?php echo $site_url;?>/pdf/eco.pdf" target="_blank" -->「奥入瀬渓流エコツーリズムフォーラム2008<!-- （PDF：404KB）」</a-->が開催されます。</dd>
<dt>平成20年 8月18日</dt>
<dd><a href="<?php echo $site_url;?>/<?php echo $lang;?>/team_2008" target="_blank">奥入瀬渓流エコツーリズムプロジェクトチーム員</a>（協賛）の募集を終了しました。ご協力ありがとうございました。</dd>
<dt>平成20年 7月29日</dt>
<dd>地震の影響による奥入瀬渓流の通行止めは平成20年7月29日に解除になりました。</p>
<dt>平成20年 7月24日</dt>
<dd><!-- a href="<?php echo $site_url;?>/pdf/walk.pdf" target="_blank" -->第１回歩きゃ奥入瀬三里半ウォーク<!-- /a -->（7/26)は地震の影響により中止となりました。</dd>
<dt>平成20年 7月15日</dt>
<dd>奥入瀬渓流エコツーリズムプロジェクトチーム員（協賛）の募集をはじめました。</dd>
<dt>平成20年 7月15日</dt>
<dd>プロジェクトの趣旨、プロジェクトの概要を更新しました。</dd>
<dt>平成20年 6月12日</dt>
<dd><!-- a href="<?php echo $site_url;?>/pdf/walk.pdf" target="_blank" -->第１回歩きゃ奥入瀬三里半ウォークの参加者募集について<!--［PDF:555KB］</a --></dd>
<dt>平成20年 5月27日</dt>
<dd><!-- a href="http://www.pref.aomori.lg.jp/soshiki/kendo/doro/files/mycarkiseiosirase.pdf" target="_blank" -->【記者発表資料】「奥入瀬渓流マイカー交通規制」実施のお知らせ<!-- [PDF:647KB]</a --></dd>
<dt>平成20年 5月20日</dt>
<dd>奥入瀬渓流エコツーリズムプロジェクトHPを開設しました。</dd>
</dl><!-- ▲新着情報入力ここまで▲ -->
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
