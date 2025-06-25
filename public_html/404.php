<?php
global $lang;

$site_url = SITE_URL;
$subtitle = "404 Error";
switch($lang){
 case 'ja':
  break;
 case 'en':
  break;
 case 'co':
  break;
 case 'chi':
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
  <h2><?php echo $subtitle;?></h2>
  <div class="right-inner">
<?php if ($lang=='ja'){?>
   <p style="font-size: 30px; margin-bottom: 30px;">指定されたURLは存在しません</p>
   <p>
誠に申し訳ありませんが、<br>
指定されたURLのページは存在しません。<br>
<br>
サイト更新などによってURLが変更になったか、正しく入力されていない可能性があります。<br>
恐れ入りますが、メニューまたは下記リンクからご希望のページをお探し下さい。
   </p>
<?php } else {?>
   <p style="font-size: 30px; margin-bottom: 30px;">404 Page Not Found.</p>
   <p>
    The page you requested could not be found. <br>
    Use the navigation menu or the links below instead.
   </p>
<?php }?>
  </div>
 </div>
 <div class="clear"></div>
</div>
<?php
include "footer.php";
?>
