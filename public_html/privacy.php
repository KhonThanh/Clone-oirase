<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "個人情報の取り扱いについて";
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
<h2>個人情報の取り扱いについて</h2>
<div class="right-inner">
<p class="cap-01">当サイトでは、個人情報の収集・利用・管理について、「<a href="http://www.pref.aomori.lg.jp/kensei/jkoukai/ko-jourei.html" target="_blank">青森県個人情報保護条例</a>」に基づき、次のとおり適切に取り扱います。</p>
</div>
<h3>個人情報とは</h3>
<div class="right-inner">
<p class="cap-01">当サイトを通じて提供を受けた、住所、氏名、電話番号、e-mailアドレス等、特定の個人を識別できる情報をいいます。</p>
</div>
<h3>個人情報の収集について</h3>
<div class="right-inner">
<p class="cap-01">当サイトを通じて個人情報を収集する際は、利用者ご本人の意思による情報の提供（登録）を原則とします。</p>
<p class="cap-01">個人情報の収集にあたっては、その収集目的を明示いたします。</p>
<p class="cap-01">個人情報の収集は、明示した目的を達成するために必要な範囲内でこれを行います。</p>
</div>
<h3>個人情報の利用制限</h3>
<div class="right-inner">
<p class="cap-01">皆様から提供（登録）いただいた個人情報は、あらかじめ明示した収集目的の範囲内で利用いたします。</p>
<p class="cap-01">個人情報の収集目的を越えた利用及び提供は、個人情報保護条例で定める場合を除き、一切いたしません。</p>
</div>
<h3>個人情報の管理</h3>
<div class="right-inner">
<p class="cap-01">収集しました個人情報については、厳重に管理し、漏洩、不正流用、改ざん等の防止に適切な対策を講じます。</p>
</div>
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
