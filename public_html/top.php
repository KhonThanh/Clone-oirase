<?php
global $lang,$new;

$site_url = SITE_URL;
$subtitle = "";

switch($lang){
 case 'ja':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'banner_sougou_b.jpg';
  $banner_3 = 'banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019.pdf';
  $title_1 = 'プロジェクトの概要';
  $text_1 = '奥入瀬渓流の自然環境保全のために<br>美しい清流とブナ林を<br>ゆっくり味わっていただくために';
  $btn_1 = '詳しく見る';
  $title_2 = 'パンフレット';
  $title_3 = 'アクセス';
  $title_4 = 'お問い合わせ';
  break;
 case 'en':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'en_banner_sougou_b.jpg';
  $banner_3 = 'en_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  $title_1 = 'Project outline';
  $text_1 = 'For the conservation of nature of Oirase Stream, to take your time slowly to beautiful clear Stream and Beech forest.';
  $btn_1 = 'See details';
  $title_2 = 'Brochure';
  $title_3 = 'Access';
  $title_4 = 'Contact us';
  break;
 case 'co':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'co_banner_sougou_b.jpg';
  $banner_3 = 'co_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  $title_1 = '프로젝트 개요';
  $text_1 = '오이라세 계류의 자연환경 보전을 위해 아름답고 맑은 계곡과 너도밤나무숲을 만끽하기 위해';
  $btn_1 = '자세히 보기';
  $title_2 = '팜플렛';
  $title_3 = '교통정보';
  $title_4 = '문의';
  break;
 case 'chi':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'cn_banner_sougou_b.jpg';
  $banner_3 = 'cn_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  $title_1 = '规划概要';
  $text_1 = '为了保护奥入濑溪流的自然环境也为了让大家更能优雅欣赏到美丽的溪流和山毛榉树林';
  $btn_1 = '参阅详情';
  $title_2 = '小册子';
  $title_3 = '交通方式';
  $title_4 = '咨询';
  break;
 case 'tchi':
  $banner_1 = 'banner_kisei.jpg';
  $banner_2 = 'tcn_banner_sougou_b.jpg';
  $banner_3 = 'tcn_banner_toujitsu_b.jpg';
  $banner_4 = 'youtube.jpg';
  $pdf_all = 'all2019_en.pdf';
  $title_1 = '規劃概要';
  $text_1 = '為了保護奧入瀨溪流的自然環境也為了讓大家更能優雅欣賞到美麗的溪流和山毛櫸樹林';
  $btn_1 = '參閲詳情';
  $title_2 = '小冊子';
  $title_3 = '交通方式';
  $title_4 = '聯絡我們';
  break;
}

include "header".$new.".php";
?>
<div class="pos_r">
<div class="top-infobox">
<div class="mask"></div>
<div class="inner pos_r">
 <p class="fs_23 bdr_b">
奥入瀬渓流は、<br>
歩行者のための空間へ<span class="disp_ib">変わります。</span>
 </p>
 <p class="text">
奥入瀬（青撫山）バイパス完成後は、奥入瀬渓流区間に通年の車両交通規制を導入する予定です。<br>
プロジェクトの展望は<a href="<?php echo $site_url;?>/ja/lp_project" class="hover" style="color: #fff">こちら>>></a>
 </p>
</div>
</div>

<div class="mw1200 mg-lra">
<div id="slidebox">
<ul id="slide">
<li><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/slide_1.jpg" alt="" /></li>
<li><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/slide_2.jpg" alt="" /></li>
<li><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/slide_3.jpg" alt="" /></li>
<li><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/slide_4.jpg" alt="" /></li>
</ul>
</div>
</div>
</div>
<?php if ($lang=='ja'):?>
<p class="sp767_b disp_n text_l" style="margin: 30px auto; padding: 0 15px;">
奥入瀬（青撫山）バイパス完成後は、奥入瀬渓流区間に通年の車両交通規制を導入する予定です。<br>
プロジェクトの展望は<a href="<?php echo $site_url;?>/ja/lp_project" class="hover" style="color: #000">こちら>>></a>
</p>
<?php endif; ?>

<div id="main">
 <div id="sidebar">
  <?php include "sidebar".$new.".php";?>
 </div>

 <div class="dbox ja">
  <div class="mw1200 mg-lra clearfix pos_r">
   <div class="leaf-1 anime3"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/leaf-1.png" alt="" /></div>
   <div class="infobox-1 float_l anime">
    <div>
     <p class="font_b fs_30 text_l">お知らせ</p>
     <!-- r2.10.9 -->
<!--
     <h2 class="col_g fs_20 text_l">奥入瀬渓流は、<br>
歩行者のための空間へ変わります。</h2>
      <p>
奥入瀬（青撫山）バイパスは、安全な通行が確保されるとともに奥入瀬渓流沿いの自然環境が保全され、散策時の安全性や快適性の向上を目的とする道路です。<br>
奥入瀬（青撫山）バイパス完成後は、奥入瀬渓流区間に通年の車両交通規制を導入する予定です。
      </p>
-->

<!-- r2.9.24 -->
     <div class="text_l">
      令和２年9月24日<br>
      <h2 class="title">エコロードフェスタ開催中止のおしらせ</h2>
『2020年度の「奥入瀬渓流マイカー交通規制」及び「奥入瀬渓流エコロードフェスタ」について、新型コロナウイルス感染拡大防止の観点から中止することとなりました。』<br>

      <p style="float: left;">中止内容　</p><p style="overflow: hidden;">■10月22日（木）～25日（日）「奥入瀬渓流マイカー交通規制」<br>
■10月24日（土）・25日（日）「奥入瀬渓流エコロードフェスタ」<br>
　<a href="<?php echo $site_url;?>/pdf/2020ecoroad-tyuusi.pdf" target="_blank">渋滞回避・迂回情報（PDF)</a>
      </p>
     
     </div>

      <a href="<?php echo $site_url;?>/<?php echo $lang;?>/rireki_r2" class="btn">過去の記事はこちら</a>
    </div>
   </div>
   <div class="imgbox-1 float_r anime2">
    <div class="img-r">
     <img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-1.jpg" alt="" />
    </div>
   </div>
  </div>
 </div>

 <div class="dbox-1">
  <div class="top-project mg-lra pos_r anime">
   <div>
    <table>
     <tr>
      <td>
       <p class="text_c fs_30 font_b"><?php echo $title_1;?></p>
       <p class="text_c text mg-lra"><?php echo $text_1;?></p>
       <a href="<?php echo $site_url;?>/<?php echo $lang;?>/project" class="btn mg-lra"><?php echo $btn_1;?></a>
      </td>
     </tr>
    </table>
    <img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-project.jpg" alt="" />
   </div>
  </div>
 </div>

 <div class="dbox ja">
  <div class="mw1200 mg-lra pos_r">
   <div class="clearfix">
    <div class="leaf-2 anime3"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/leaf-2.png" alt="" /></div>
   </div>

   <div class="clearfix">
    <div class="infobox-1 float_r anime">
     <div>
      <p class="font_b fs_30 text_l">イベント</p>
       <p class="col_g">
奥入瀬渓流の見所３km満喫。<br>
十和田西高等学校の生徒さんのご協力により、<span class="disp_ib">奥入瀬渓流の魅力をご紹介します。</span>
       </p>

       <a href="<?php echo $site_url;?>/<?php echo $lang;?>/event" class="btn">詳しく見る</a>
     </div>
    </div>
    <div class="imgbox-1 float_l anime2">
     <div class="img-l">
      <img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-2.jpg" alt="" />
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="dbox">
  <div class="pamphlet mw1400 mg-lra anime">
   <div class="mw1200 mg-lra clearfix">
    <div class="col-1">
     <p class="fs_30 font_b"><?php echo $title_2;?></p>
    </div>
    <div class="col-2">
     <a href="pdf/<?php echo $pdf_all;?>" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/<?php echo $banner_2;?>" alt="" /></a>
    </div>
    <div class="col-2">
     <a href="pdf/2019_daily_use_pamphlet.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/<?php echo $banner_3;?>" alt="" /></a>
    </div>

   </div>
  </div>
 </div>

 <div class="dbox bg_gr">
  <div class="youtube mw1400 mg-lra anime">
   <table class="mg-lra sp420_tbl pos_r">
    <tr>
     <td class="col1"><div class="top-leaf-1"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-leaf-1.png" alt="" /</td>
     <td class="fs_30 font_b" nowrap>Youtube Video</td>
     <td class="col3 v_btm"><div class="top-leaf-2"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-leaf-2.png" alt="" /></div></td>
    </tr>
   </table>

   <a href="https://www.youtube.com/watch?v=sZ-NPHN-SD0" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/youtube.jpg" alt="" /></a>
  </div>
 </div>

 <div class="dbox leaf">
  <div class="mw1400 mg-lra anime">
   <ul class="banner-box">
    <li>
     <a href="https://www.oiken.org/" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-1.png" alt="" /></a>
    </li>
    <li>
     <a href="https://www.youtube.com/channel/UCVD_aGvmCf5nF7GySYWmTAw" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-2.png" alt="" /></a>
    </li>
    <li>
     <a href="pdf/aki_sanpo.pdf" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-3.png" alt="" /></a>
    </li>
    <li>
     <a href="http://www.aosya.com/" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-4.png" alt="" /></a>
    </li>
    <li>
     <a href="http://www.aptinet.jp/" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-5.png" alt="" /></a>
    </li>
    <li>
     <a href="http://oirase-seseragi.com/" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-6.png" alt="" /></a>
    </li>
   </ul>
  </div>
 </div>

 <div class="dbox-1">
  <div class="page-links clearfix anime">
   <div>
    <a href="<?php echo $site_url;?>/<?php echo $lang;?>/access">
    <img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-access.jpg" alt="" />
    <table>
     <tr>
      <td>
       <div class="icon"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/access-icon.png" alt="" /></div>
       <p class="fs_30 font_b"><?php echo $title_3;?></p>
      </td>
     </tr>
    </table></a>
   </div>
   <div>
    <a href="<?php echo $site_url;?>/<?php echo $lang;?>/contact">
    <img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/top-contact.jpg" alt="" />
    <table>
     <tr>
      <td>
       <div class="icon"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/contact-icon.png" alt="" /></div>
       <p class="fs_30 font_b"><?php echo $title_4;?></p>
      </td>
     </tr>
    </table></a>
   </div>
  </div>
 </div>

 <div class="dbox">
  <div class="mw1400 mg-lra anime">
   <div class="banner-box2 clearfix">
    <div><a href="https://tenki.jp/leisure/camp/2/5/23017/" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-7.png" alt="" /></a></div>
    <div><a href="http://towadako-livecam-01.aa0.netvolante.jp:8080/viewer/live/ja/live.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-8.png" alt="" /></a></div>
    <div><a href="http://www.koutsu-aomori.com/Road/livecamera.html" target="_blank"><img src="<?php echo $site_url;?>/pages/images<?php echo $new; ?>/banner-9.png" alt="" /></a></div>
   </div>
  </div>
 </div>

 </div>

</div>
<?php
include "footer".$new.".php";
?>
