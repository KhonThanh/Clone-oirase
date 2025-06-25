<?php
global $lang, $menu;

$site_url = SITE_URL;

switch($lang){
 case 'ja':
  $subtitle = 'アクセス';
  $title_1 = "十和田湖・奥入瀬渓流までのアクセス";
  $map = "access_2022.png";
  break;
 case 'en':
  $subtitle = 'Access';
  $title_1 = "Access method to Towada Lake and Oirase Stream";
  $map = "access_2022_en.png";
  break;
 case 'co':
  $subtitle = '교통정보';
  $title_1 = "도와다호・오이라세 계류까지 교통정보";
  $map = "access_2022_co.png";
  break;
 case 'chi':
  $subtitle = '交通方式';
  $title_1 = "前往十和田湖・奥入濑溪流之交通方式";
  $map = "access_2022_chi.png";
  break;
 case 'tchi':
  $subtitle = '交通方式';
  $title_1 = "前往十和田湖・奥入濑溪流之交通方式";
  $map = "access_2022_tchi.png";
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
  <div class="ja">
  <h3>バス時刻・道路情報</h3>
  <br>
  <div style="margin-left: 5px;">
  <h4 style="font-size: 14px;">バス時刻の詳細はこちら</h4>
  <div style="margin-left: 8px;">
  <p><a href="https://www.jrbustohoku.co.jp/route/" target="_blank">JRバス東北ＨＰ</a>　
  <span class="disp_ib"></span></p></div><br>
  <h4 style="font-size: 14px;">遊覧船時刻の詳細はこちら</h4>
  <div style="margin-left: 8px;">
  <p><a href="http://www.toutetsu.co.jp/ship.html" target="_blank">十和田観光電鉄ＨＰ</a>　
  <span class="disp_ib"></span></p></div><br>
  <h4 style="font-size: 14px;">道路情報（規制情報など）</h4>
  <div style="margin-left: 8px;">
  <p><strong>高速道路</strong></p>
  <p style="margin-bottom: 10px;">　<a href="https://www.jartic.or.jp/" target="_blank">日本道路交通情報センター</a></p>
  <p><strong>青森県内</strong></p>
  <p style="margin-bottom: 10px;">　<a href="http://www.koutsu-aomori.com/cgi-bin/index.cgi" target="_blank"><img src="<?php echo $site_url;?>/pages/images/access/banner_m.gif" alt="青森みち情報" width="116" height="29" border="0"></a></p>
  <p><strong>秋田県内</strong></p>
  <p>　<a href="http://road.pref.akita.lg.jp/modules/tinyd0/" target="_blank"><img src="<?php echo $site_url;?>/pages/images/access/img45a4ec69c5205.gif" width="105" height="35" border="0" alt="あきたのみち情報"></a></p>
  </div>
  </div>
  <BR>
  <br />
  </div>
  <h3><?php echo $title_1;?></h3>
  <div class="right-inner">
  <p class="text_c"><img src="<?php echo $site_url;?>/pages/images/access/<?php echo $map;?>" alt="" border="0" />
  </p>
  <br />
  </div>
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
