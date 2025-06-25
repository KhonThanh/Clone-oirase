<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お知らせ(令和元年度)";
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
<h3>令和元年度のニュース</h3>
<div class="right-inner">
<div id="news-rireki">
<!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
<!-- ▼新着情報入力ここから▼ -->
<!-- r2.1.28 -->
<dl>
<dt>令和2年1月28日</dt>
<dd>実施報告書<br>
令和元年度の実施報告書をアップしました。<br><a href="<?php echo $site_url;?>/pdf/houkokusho2019.pdf" target="_blank">こちらから</a>どうぞ！<br>
</dd>
</dl>
<!-- r1.10.23 -->
<dl>
<dt>令和元年10月23日</dt>
<dd>当日パンフレット<br>
2019年度版当日パンフレットをアップロードしました。<br>
</dd>
</dl>
<!-- r1.10.16 -->
<dl>
<dt>令和元年10月16日</dt>
<dd>シャトルバス前売りチケット販売開始します！！<br>
予定していた日より早く、17日から発売となります。<br>
十和田奥入瀬観光機構（アートステーショントワダ内・ぷらっと）・奥入瀬渓流館にてお買い求めください。<br>
</dd>
</dl>
<!-- r1.10.4 -->
<dl>
<dt>令和元年10月4日</dt>
<dd>『パンフレット訂正とお詫び』<br>
配付中のパンフレットに記載誤りがございました。<br>
大変申し訳ございません。<br>
Ｐ８の手荷物宅配サービスは終了しております。<br>
新しく佐川急便で『手ぶら観光サービス』の実証実験をしておりますのでご利用ください。<br>
詳しくは<a href="https://www2.sagawa-exp.co.jp/newsrelease/detail/2019/0911_1489.html" target="_blank">こちら(佐川急便サイト)</a>をご覧ください。<br>
また、今年度はＰ１０に記載があります『足湯』はございません。<br>
</dd>
</dl>
<!-- r1.9.5 -->
<dl>
<dt>令和元年9月5日</dt>
<dd>総合パンフレット<br>
2019年度版総合パンフレットをアップロードしました。<br>
</dd>
</dl>
<!-- r1.9.5 -->
<dl>
<dt>令和元年9月5日</dt>
<dd>エコロードフェスタ開催について<br>
今年のエコロードフェスタは10月26日(土)～27日(日)の開催予定です。<br>
また、交通規制は以下の期間に実施予定です。<br>
<strong class="title">10月24日(木)～25日(金)</strong><br>
　規制時間/10:00～14:00まで<br>
<strong class="title">10月26日(土)～27日(日)</strong><br>
　規制時間/9:00～15:00まで<br>
</dd>
</dl>
<!-- h31.2.6 -->
<dl>
<dt>平成31年2月6日</dt>
<dd>マイカー交通規制とエコロードフェスタの開催<br>
例年10月の最終週にはマイカー交通規制とエコロードフェスタの開催を予定しております。<br>
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
