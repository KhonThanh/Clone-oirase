<?php
if(isset($_SESSION['test'])){
 include 'footer_new.php';
 return;
}
global $lang,$title,$menu;

$site_url = SITE_URL;

switch($lang){
 case 'ja':
  $footer = '奥入瀬渓流利用適正化協議会・奥入瀬渓流</span><span class="disp_ib">エコツーリズムプロジェクト実行委員会';
  break;
 case 'en':
  $footer = ' Oirase Stream Use Otimization Conference・</span><span class="disp_ib">Oirase Stream Eco-Tourism Project Executive Comittee';
  break;
 case 'co':
  $footer = '오이라세계류이용적정화협의회・<span class="disp_ib">오이라세계류 에코투어리즘 프로젝트실행위원회';
  break;
 case 'chi':
  $footer = '奥入濑溪流利用适正化协议会、<span class="disp_ib">奥入濑溪流生态旅游规划实行委员会';
  break;
}
?>
</div>
<div id="footer">
 <div id="footer_inner">
  <div id="footer_logo"><img src="<?php echo $site_url;?>/pages/images/footer_logo.png" alt=""></div>
  <div class="fmenu_wrap">
  <div class="fmenu">
  <ul>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>"><?php echo $menu[$lang][0];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/project"><?php echo $menu[$lang][1];?></a></li>
  </ul>
  <ul>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/detail"><?php echo $menu[$lang][2];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/parking"><?php echo $menu[$lang][3];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/bus-ship"><?php echo $menu[$lang][4];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/faq"><?php echo $menu[$lang][5];?></a></li>
  </ul>
  <ul>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/walking"><?php echo $menu[$lang][6];?></a></li>
   <?php if($lang=='ja') :?>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity"><?php echo $menu[$lang][7];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/team"><?php echo $menu[$lang][8];?></a></li>
   <?php endif;?>
  </ul>
  </div>
  <div class="fmenu">
  <ul>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/access"><?php echo $menu[$lang][9];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/contact"><?php echo $menu[$lang][10];?></a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/link"><?php echo $menu[$lang][11];?></a></li>
  </ul>
  <?php if($lang=='ja') :?>
  <ul>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/guide">ご利用案内</a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/privacy">個人情報の取り扱いについて</a></li>
   <li><a href="<?php echo $site_url;?>/<?php echo $lang;?>/copyright">著作権・リンク</a></li>
  </ul>
  <?php endif;?>
 </div>
 </div>
 </div>
 <div id="copy_right">
  <span><?php echo $footer;?></span>
 </div>
</div>
<!-- container end -->
</div>
</body>
</html>
