<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "プロジェクトチーム員";
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
<h2>プロジェクトチーム員</h2>
<div class="right-inner team">
<h3><span>令和6</span><span>年度　奥入瀬渓流エコツーリズムプロジェクトチーム員一覧</span></h3>
<p class="intro">奥入瀬渓流エコツーリズムプロジェクトには、<span class="disp_ib">十和田市内をはじめとし、</span><br />県内の多くの企業の皆様に支えられています。</p>

<div id="team-list">
<!--
<ul id="s-class">
<li>
<a href="http://www.kddi.com/" target="_blank"><span class="name">KDDI 株式会社　コンシューマ東北支社</span>
</a>
</li>
</ul>
-->

<ul id="b-class" class="parents">
<!-- <li><a href="http://www.aomoriwalk-kyokai.com/" target="_blank"><span>(特非)青森県ウオーキング協会</span></a></li>
<li><a href="http://knktare.com/" target="_blank"><span>上北農産加工(株)</span></a></li>
<li><a href="http://www.tanaka-net.co.jp/homepage/hmpg/index.html" target="_blank"><span>田中建設(株)</span></a></li> -->
<li><a href="http://tanaka-net.co.jp" target="_blank"><span>田中建設㈱</span></a></li>
<li><a href="https://www.aomoriwalk-kyokai.com" target="_blank"><span>NPO法人 青森県ウオーキング協会</span></a></li>
<li><a href="https://www.knktare.com" target="_blank"><span>上北農産加工㈱</span></a></li>
<li><a href="https://nw.tohoku-epco.co.jp/index.html" target="_blank"><span>東北電力ネットワーク㈱十和田電力センター</span></a></li>
</ul>

<ul id="c-class" class="parents">
<li><a href="http://www.seikoh-web.co.jp/" target="_blank"><span>(株)青工　十和田支店</span></a></li>
<!-- <li><a href="http://www.konnok.co.jp/" target="_blank"><span>紺野建設(株)</span></a></li> -->
<li><a href="https://www.jrbustohoku.co.jp/" target="_blank"><span>ジェイアールバス東北（株）</span></a</li>
<li><a href="https://www.tanaken-1982.co.jp/ja/index.html" target="_blank"><span>田中建設工業(株)</span></a></li>
<!-- <li><a href="http://www.tohoku-epco.co.jp/" target="_blank"><span>東北電力(株)十和田電力センター</span></a></li> -->
<li><a href="http://www.jatowada-o.or.jp/" target="_blank"><span>十和田おいらせ農業協同組合</span></a></li>
<li><a href="http://www.oirase.or.jp/" target="_blank"><span>(一財)十和田湖ふるさと活性化公社</span></a></li>
<!-- <li><a href="http://towadacity.com/" target="_blank"><span>十和田シティホテル</span></a></li> -->
<!-- <li><a href="http://www.towada-jc.com/" target="_blank"><span>(公社)十和田青年会議所</span></a></li> -->
<li><span>(株)十和田ビルサービス</span></li>
<li><span>(株)中達組</span></li>
<li><a href="https://hodokawa-denki.com/" target="_blank"><span>程川電気工事(株)</span></a</li>
<li><a href="http://www.marui-jk.co.jp/" target="_blank"><span>丸井重機建設(株)</span></a></li>
<!-- <li><span><a href="http://www.michinoku.ccbc.co.jp/" target="_blank">みちのくコカ・コーラボトリング(株)</a></span></li> -->
<li><a href="http://www.yoshidasangyo.co.jp/" target="_blank"><span>(株)吉田産業</span></a></li>
</ul><span style="font-size:85%;">※五十音順</span>
</div>
</div>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
