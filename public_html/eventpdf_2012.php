<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "各種パンフレット";
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
  <h2>各種パンフレット</h2>
<h3>各種パンフレットはこちらから</h3>
<div class="right-inner">
<table cellpadding="5">
<tr>
<td><a href="<?php echo $site_url;?>/pdf/all2012.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images/ev_pam_all2012.jpg" alt="2012年度 総合パンフレット" width="250" height="354" border="0" /></a></td>
<!--td><a href="../pdf/h22_event_guide.pdf" target="_blank"><img src="img/ev_pam_day.jpg" alt="2010年度 当日イベントチラシ" width="250" height="354" border="0" /></a></td-->
</tr>

<tr>
<td><div align="center"><a href="<?php echo $site_url;?>/pdf/all2012.pdf" target="_blank">2012年度 総合パンフレット</a><br><hr></div></td>
<!--td><div align="center"><a href="../pdf/h22_event_guide.pdf" target="_blank">2010年度 当日イベントガイドチラシ</a></div></td-->
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><div align="center"><a href="<?php echo $site_url;?>/pdf/ecogaiyou2012.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images/ecogaiyou.png" alt="2012年度 当日用パンフレット" width="250" height="354" border="0" style="width:250px" /></a></div>
</tr>
<tr>
<td align="center"><a href="<?php echo $site_url;?>/pdf/ecogaiyou2012.pdf" target="_blank">2012年度 当日用パンフレット</a></td>
</tr>
</table>
<span style="color:#333333; font-size:85%; margin-top:10px; display:block;"><a href="http://get.adobe.com/jp/reader/?promoid=BPBQN" target="_blank"><img src="<?php echo $site_url;?>/pages/images/get_adobe_reader.gif" width="112" height="33" align="left" longdesc="http://get.adobe.com/jp/reader/?promoid=BPBQN" border="0" /></a>　PDFファイルを表示するためには「Adobe Reader」(無償)が必要です。<br />
　お持ちでない場合はボタンをクリックしてインストールしてください。</span></div>
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
