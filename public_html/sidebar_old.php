<?php
if(isset($_SESSION['test'])){
 include 'sidebar_new.php';
 return;
}
global $site_url,$lang;

$menu['ja']
 = array('トップページ',
         'プロジェクト</span><span class="disp_ib">の概要',
         'マイカー交通規制</span><span class="disp_ib">の詳細',
         '駐車場ガイド',
         'シャトルバス</span><span class="disp_ib">・遊覧船',
         '交通規制に関するQ&A',
         '奥入瀬渓流の</span><span class="disp_ib">歩き方',
         'これまでの</span><span class="disp_ib">活動内容',
         'プロジェクト</span><span class="disp_ib">チーム員',
         'アクセス',
         'お問い合わせ',
         'リンク集');
$menu['en']
 = array('Top Page',
         'The overview of a project',
         'Details of private vehicle traffic restrictions',
         'Parking lot guide',
         'Shuttle bus · Sightseeing boat',
         'Traffic restrictions (questions and answers)',
         'How to walk around Oirase Stream',
         '',
         '',
         'Access',
         'Contact us',
         'Links');
$menu['co']
 = array('메인 페이지',
         '프로젝트 개요',
         '승용차운행규제 내용',
         '주차장 안내',
         '셔틀버스・유람선',
         '교통규제에 관한',
         '오이라세 계류 산책방법',
         '',
         '',
         '오시는 길',
         '문의',
         '관련사이트');
$menu['chi']
 = array('首页',
         '项目概要',
         '私家车交通管制详情',
         '停车场指南',
         '观光班车、游览船',
         '关于私家车交通管制的Q&A',
         '奥入濑溪流的漫步方式',
         '',
         '',
         '交通方式',
         '咨询',
         '链接集');

$menu['tchi']
 = array('首頁',
         '規劃概要',
         '私家車交通管制詳情',
         '停車場指南',
         '觀光班車、遊覽船',
         '關於私家車交通管制的Q&A',
         '奧入瀨溪流的漫步方式',
         '',
         '',
         '交通方式',
         '咨詢',
         '鏈接集');
?>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>" class="top">
<div><img src="<?php echo $site_url;?>/pages/images/menu-top-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][0];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/project" class="project topmenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-project-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][1];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/detail" class="detail topmenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-car-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][2];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/parking" class="parking submenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-parking-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][3];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/bus-ship" class="bus-ship submenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-flag-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][4];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/faq" class="faq submenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-faq-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][5];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/walking" class="walking topmenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-walking-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][6];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity" class="activity topmenu ja">
<div><img src="<?php echo $site_url;?>/pages/images/menu-activity-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][7];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/team" class="team bottommenu ja">
<div><img src="<?php echo $site_url;?>/pages/images/menu-team-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][8];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/access" class="access bottommenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-access-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][9];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/contact" class="contact bottommenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-contact-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][10];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/link" class="links bottommenu">
<div><img src="<?php echo $site_url;?>/pages/images/menu-links-icon.png" alt=""></div>
<p><span><?php echo $menu[$lang][11];?></span></p>
</a>

<a href="https://www.facebook.com/奥入瀬渓流エコロードフェスタ-1659801794348033/" class="facebook" target="_blank"><img src="<?php echo $site_url;?>/pages/images/banner_facebook.jpg" alt="facebookはこちら"></a>

<a href="https://www.instagram.com/ecoroadfesta/?hl=ja" class="facebook" target="_blank" style="margin-top: 20px;"><img src="<?php echo $site_url;?>/pages/images/banner_instagram.jpg" alt="instagramはこちら"></a>
