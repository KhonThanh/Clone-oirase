<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(平成28年度)";
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
<h3>平成28年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<dl>
<dt>平成29年2月27日</dt>
<dd>
実施報告書をアップしました<br>
平成28年度の実施報告書をアップしました。<br><a href="<?php echo $site_url;?>/pdf/houkokusho2016.pdf" target="_blank">こちらから</a>どうぞ！<br>
<br>
</dd>
<dt>平成28年10月19日</dt>
<dd>
当日イベントパンフ掲載しました。<br>
シャトルバスの最終時刻が休屋発、焼山駐車場発ともに15：20と<br>なりました。<br>
<br>
</dd>
<dt>平成28年9月15日</dt>
<dd>
交通規制について<br>
9月14日（水）～15日（木）の交通規制が終了いたしました。<br>
ご協力ありがとうございました。<br>
<br>
</dd>
<dt>平成28年8月10日</dt>
<dd>
エコロードフェスタ開催について<<br>
今年のエコロードフェスタは10月29日(土)～30日(日)に開催されます。<br>
また、交通規制が以下の2回の期間に実施されます。※シャトルバスが運行されます<br>
<strong class="title">〔第１回〕9月14日(水)～15日(木)</strong><br>
　規制時間/10:00～14:00まで<br>
<strong class="title">〔第２回〕10月29日(土)～30日(日)</strong><br>
　規制時間/9:00～15:00まで<br>
<strong class="title">[規制区間-1]　国道102号奥入瀬渓流区間</strong><br>
　国道102号惣辺交差点～子ノ口交差点<br>
<strong class="title">[規制区間-2]　国道102号七曲区間</strong><br>
　子ノ口交差点～青撫山交差点<br>
<ul type="disc" style="margin: 5px 0 10px 15px">
<li>奥入瀬渓流区間は自動二輪(原付バイクも含む）も通行止めです</li>
<li>迂回路を利用し、子ノ口・休屋へ行けます</li>
<li>シャトルバスに乗って奥入瀬渓流の散策が楽しめます。</li>
</ul>
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
