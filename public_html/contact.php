<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "お問い合わせ";
  $title_1 = "奥入瀬渓流利用適正化協議会";
  $title_2 = "観光案内";
  $title_3 = "バス・鉄道";
  $title_4 = "タクシー";
  $title_5 = "エコロードフェスタについて";
  $title_6 = "マイカー交通規制について";
  $title_7 = "シャトルバスの運行について";
  break;
 case 'en':
  $subtitle = "Contact us";
  $title_1 = "The Oirase Stream Use Optimization Council";
  $title_2 = "Tourist information";
  $title_3 = "Bus ∙ Railroad";
  $title_4 = "Taxi";
  $title_5 = "About Eco-Road Festa";
  $title_6 = "About private vehicle traffic restrictions";
  $title_7 = "About the shuttle bus service";
  break;
 case 'co':
  $subtitle = "문의";
  $title_1 = "오이라세계류 이용적정화협의회";
  $title_2 = "관광안내";
  $title_3 = "버스・철도";
  $title_4 = "タ택시";
  $title_5 = "에코로드페스타에 관해서";
  $title_6 = "승용차운행 규제에 관해서";
  $title_7 = "셔틀버스 운행에 대해서";
  break;
 case 'chi':
  $subtitle = "咨询";
  $title_1 = "奥入濑溪流利用适正化协议会";
  $title_2 = "观光向导";
  $title_3 = "巴士・电车";
  $title_4 = "出租车";
  $title_5 = "关于生态路线节之详情";
  $title_6 = "关于私家车交通管制";
  $title_7 = "关于观光班车运行服务";
  break;
 case 'tchi':
  $subtitle = "咨詢";
  $title_1 = "奧入瀨溪流利用適正化協議會";
  $title_2 = "觀光導覽";
  $title_3 = "巴士・鐵道";
  $title_4 = "計程車";
  $title_5 = "關於生態路綫節之詳情";
  $title_6 = "關於私家車交通管制";
  $title_7 = "關于觀光班車運行服務";
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
<div><strong><p class="float_l">○</p><p class="ovf_h"><?php echo $title_7;?></strong></p></div>
<?php if ($lang=='co'){?>
・아오모리현 현토정비부 도로과 017-734-9651
<?php } else if ($lang=='chi'){?>
・青森县县土整备部道路课 017-734-9651
<?php } else if ($lang=='tchi'){?>
・青森縣縣土整備部道路課 017-734-9651
<?php } else if ($lang=='en'){?>
・Aomori prefectural land Motor Service Department Road Maintenance Section 017-734-9651
<?php } else {?>
・青森県県土整備部道路課　017-734-9651
<?php } ?>
</p>
<br />
<div><strong><p class="float_l">○</p><p class="ovf_h"><?php echo $title_5;?></strong></p></div>
<!-- p class="cap01">・<?php echo $title_5;?></p -->
<p class="float_l">　</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
(일반사단법인)토와다 오이라세관광기구 0176-24-3006
<?php } else if ($lang=='chi'){?>
(一般社团)十和田奥入濑观光机构 0176-24-3006
<?php } else if ($lang=='tchi'){?>
社團法人 十和田市觀光協會 0176-24-3006
<?php } else if ($lang=='en'){?>
(General Incorporated Association)<br>
Towada Oirase Tourism Organization <span class="disp_ib">0176-24-3006</span>
<?php } else {?>
（一社）十和田奥入瀬観光機構　0176-24-3006
<?php } ?>
</p>
<!-- p class="cap01">・<?php echo $title_6;?></p>
<p class="float_l">　</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
아오모리현 상북지역현민국 지역정비부 <span class="disp_ib">0176-23-4311</span>
<?php } else if ($lang=='chi'){?>
青森县上北地域县民局地域整备部  <span class="disp_ib">0176-23-4311</span>
<?php } else if ($lang=='tchi'){?>
青森縣上北地域縣民居地域整備部  <span class="disp_ib">0176-23-4311</span>
<?php } else if ($lang=='en'){?>
Aomori prefecture Kamikita area residents station area facilities　<span class="disp_ib">0176-23-4311</span>
<?php } else {?>
青森県上北地域県民局地域整備部　<span class="disp_ib">0176-23-4311</span>
<?php } ?>
</p -->
<br />
<p><strong>○<?php echo $title_2;?></strong><br />
<?php if ($lang=='co'){?>
・(일반사단법인)토와다 오이라세관광기구 0176-24-3006<br />
・토와다코 관광교류센터 프랏토 0176-75-1531
<?php } else if ($lang=='chi'){?>
・(一般社团)十和田奥入濑观光机构 0176-24-3006<br />
・十和田湖观光交流中心 Puratto 0176-75-1531
<?php } else if ($lang=='tchi'){?>
・社團法人  十和田奧入瀨觀光機構 0176-24-3006<br>
・十和田湖觀光交流中心 Pulatto 0176-75-1531
<?php } else if ($lang=='en'){?>
・(General Incorporated Association)<br>
　Towada Oirase Tourism Organization<span class="disp_ib">　0176-24-3006</span><br />
・Towada Lake Tourism Exchange Center, Platt<span class="disp_ib">　0176-75-1531</span>
<?php } else {?>
・（一社）十和田奥入瀬観光機構　0176-24-3006<br />
・十和田湖観光交流センター ぷらっと　0176-75-1531
<?php } ?>
</p>
<br />
<p><strong>○<?php echo $title_3;?></strong><br />
<?php if ($lang=='co'){?>
・도와다 관광전철주식회사 0176-23-3131<br />
・JR버스 아오모리지점 0570-000448
<?php } else if ($lang=='chi'){?>
・十和田观光电铁 0176-23-3131<br />
・JR巴士青森分店  0570-000448
<?php } else if ($lang=='tchi'){?>
・十和田觀光電鐵 0176-23-3131<br>
・JR巴士青森分店  0570-000448
<?php } else if ($lang=='en'){?>
・Towada sightseeing railroad<span class="disp_ib">　0176-23-3131</span><br />
・JR bus Aomori branch　0570-000448
<?php } else {?>
・十和田観光電鉄　0176-23-3131<br />
・ＪＲバス青森支店　0570-000448
<?php } ?>
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
