<?php
global $site_url,$lang,$new;
$menu['ja']
 = array('トップページ',
         'プロジェクト</span><span class="disp_ib">の概要',
         'マイカー交通規制</span><span class="disp_ib">の詳細',
         'シャトルバス運行</span><span class="disp_ib">の詳細',
         '駐車場ガイド',
         'シャトルバス</span><span class="disp_ib">・遊覧船',
         'マイカー交通規制に関するQ＆A',
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
         'Shuttle bus service details',
         'Parking lot guide',
         'Shuttle bus · Sightseeing boat',
         'Q&A regarding private vehicle restrictions',
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
         '셔틀버스 운행의 상세내용',
         '주차장 안내',
         '셔틀버스・유람선',
         '개인 차량에 대한 교통 규정에 대한 질문과 답변',
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
         '观光班车运行服务详情',
         '停车场指南',
         '观光班车、游览船',
         '私家车交通法规问答',
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
         '觀光班車運行服務詳情',
         '停車場指南',
         '觀光班車、遊覽船',
         '私家車交通法規問答',
         '奧入瀨溪流的漫步方式',
         '',
         '',
         '交通方式',
         '咨詢',
         '鏈接集');

?>
<div class="mask"></div>
<div class="sellang pos_r">
<p>Language<img src="<?php echo $site_url;?>/pages/images<?php echo $new;?>/down-arrow.png" alt="" class="float_r"></p>
<ul>
 <li><a href="<?php echo $site_url;?>/ja">日本語</a></li>
 <li><a href="<?php echo $site_url;?>/co">한국어</a></li>
 <li><a href="<?php echo $site_url;?>/en">English</a></li>
 <li><a href="<?php echo $site_url;?>/tchi">中文(繁体)</a></li>
 <li><a href="<?php echo $site_url;?>/chi">中文(簡体)</a></li>
</ul>
</div>

<div class="mmenu">
<a href="<?php echo $site_url;?>/<?php echo $lang;?>" class="top">
<p><span><?php echo $menu[$lang][0];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/project" class="project topmenu">
<p><span><?php echo $menu[$lang][1];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/detail" class="detail topmenu">
<p><span><?php echo $menu[$lang][2];?></span></p>
</a>
<p style="text-align: left; line-height: 40px;"><span><?php echo $menu[$lang][3];?></span></p>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/parking" class="parking submenu">
<p class="float_l">・</p><p class="ovf_h"><span><?php echo $menu[$lang][4];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/bus-ship" class="bus-ship submenu">
<p class="float_l">・</p><p class="ovf_h"><span><?php echo $menu[$lang][5];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/faq" class="faq submenu">
<p class="float_l">・</p><p class="ovf_h"><span><?php echo $menu[$lang][6];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/walking" class="walking topmenu">
<p><span><?php echo $menu[$lang][7];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/activity" class="activity topmenu ja">
<p><span><?php echo $menu[$lang][8];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/team" class="team bottommenu ja">
<p><span><?php echo $menu[$lang][9];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/access" class="access bottommenu">
<p><span><?php echo $menu[$lang][10];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/contact" class="contact bottommenu">
<p><span><?php echo $menu[$lang][11];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/link" class="links bottommenu">
<p><span><?php echo $menu[$lang][12];?></span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/guide" class="links bottommenu ja">
<p><span>ご利用案内</span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/privacy" class="links bottommenu ja">
<p><span>個人情報の取り扱いについて</span></p>
</a>
<a href="<?php echo $site_url;?>/<?php echo $lang;?>/copyright" class="links bottommenu ja">
<p><span>著作権・リンク</span></p>
</a>
</div>

