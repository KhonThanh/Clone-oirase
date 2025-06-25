<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "これまでの活動内容(2011年)";
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
<h2>これまでの活動内容</h2>
<h3>平成23年度の活動内容</h3>
<div class="right-inner">
<table cellpadding="5">
<tr>
<td><a href="<?php echo $site_url;?>/pdf/houkoku2011.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images/activity/ev_pam_all2011.jpg" alt="2011年度 実施報告" style="width: 250px;" border="0" /></a></td>
</tr>
<tr>
<td><div align="center">
  <p><a href="<?php echo $site_url;?>/pdf/houkoku2010.pdf" target="_blank">2011年度 実施報告書</a></p>
</div></td>
</tr>
</table>
<span style="color:#333333; font-size:85%; margin-top:10px; display:block;"><a href="http://get.adobe.com/jp/reader/?promoid=BPBQN" target="_blank"><img src="<?php echo $site_url;?>/pages/images/get_adobe_reader.gif" width="112" height="33" align="left" longdesc="http://get.adobe.com/jp/reader/?promoid=BPBQN" border="0" /></a>　PDFファイルを表示するためには「Adobe Reader」(無償)が必要です。<br />
　お持ちでない場合はボタンをクリックしてインストールしてください。</span></div>

<p class="detail">&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity">令和5年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2022">令和4年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2019">令和元年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2018">平成30年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2017">平成29年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2016">平成28年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2015">平成27年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2014">平成26年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2013">平成25年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2012">平成24年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2011">平成23年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2010">平成22年度活動内容</a>	<br />
&gt;&gt; <a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity_2009">平成21年度活動内容</a>	<br />
<!--&gt;&gt; <a href="ever_2008.html">平成20年度活動内容</a>-->
</p>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
