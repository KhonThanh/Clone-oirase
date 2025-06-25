<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "マイカー交通規制の詳細";
  $title_1 = "マイカー交通規制の目的・背景";
  $title_2 = "奥入瀬渓流マイカー交通規制";
  $title_3 = "規制日時";
  $title_4 = "規制区間";
  $title_5 = "規制対象車種";
  $title_6 = "規制対象外車種";
  $detail_map = "detailmap2024.png";
  $year = "年";
  $month = "月";
  $day = "日";
  $thu = "月";
  $fri = "金";
  $sat = "土";
  $sun = "日";
  $made = "まで";
  break;
 case 'en':
  $subtitle = "Details of private vehicle traffic restrictions";
  $title_1 = "The purpose and background of private vehicle traffic restrictions";
  $title_2 = "The Oirase Stream private vehicle traffic restrictions";
  $title_3 = "Restricted time";
  $title_4 = "Restricted section";
  $title_5 = "Restricted models";
  $title_6 = "No restricted models";
  $detail_map = "detailmap17102024_en.png";
  $year = "";
  $month = "";
  $day = "th";
  $thu = "Mon";
  $fri = "Fri";
  $sat = "Sat";
  $sun = "Sun";
  $made = "";
  break;
 case 'co':
  $subtitle = "승용차운행 규제 내용";
  $title_1 = "승용차운행 규제의 목적과 배경";
  $title_2 = "오이라세 계류 승용차운행 규제";
  $title_3 = "규제일시";
  $title_4 = "규제구간";
  $title_5 = "규제대상차종";
  $title_6 = "규제대상외차종";
  $detail_map = "detailmap19102024_co.jpg";
  $year = "년";
  $month = "월";
  $day = "일";
  $thu = "월";
  $fri = "금";
  $sat = "토";
  $sun = "일";
  $made = "까지";
  break;
 case 'chi':
  $subtitle = "私家车交通管制详情";
  $title_1 = "私家车交通管制的目的、背景";
  $title_2 = "奥入濑溪流私家车交通管制";
  $title_3 = "管制期间";
  $title_4 = "管制区间";
  $title_5 = "管制对象车型";
  $title_6 = "非管制对象车型";
  $detail_map = "detailmap19102024_chi.jpg";
  $year = "年";
  $month = "月";
  $day = "日";
  $thu = "周一";
  $fri = "周五";
  $sat = "周六";
  $sun = "周日";
  $made = "";
  break;
 case 'tchi':
  $subtitle = "私家車交通管制詳情";
  $title_1 = "私家車交通管制的目的、背景";
  $title_2 = "奧入瀨溪流私家車交通管制";
  $title_3 = "管制期間";
  $title_4 = "管制區間";
  $title_5 = "管制對象車型";
  $title_6 = "非管制對象車型";
  $detail_map = "detailmap19102024_tchi.jpg";
  $year = "年";
  $month = "月";
  $day = "日";
  $thu = "周一";
  $fri = "周五";
  $sat = "周六";
  $sun = "周日";
  $made = "";
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
<h3><?php echo $title_1;?></h3>
<div class="right-inner">
<p class="txt02">
<?php if ($lang=='co'){?>
오이라세 계류는, 우리 모두의 재산입니다.<br>
우리 모두가 동등하게 그 혜택을 누릴 권리가 있습니다.
<?php } else if ($lang=='chi'){?>
奥入濑溪流，是我们大家的财富。<br>
每个人都有权利平等的享有这大自然的恩惠。
<?php } else if ($lang=='tchi'){?>
奧入瀨溪流，是我們大家的財富。<br>
每個人都有權利平等的享有這大自然的恩惠。
<?php } else if ($lang=='en'){?>
Oirase Stream is all of our property.<br>
Everyone has the right to enjoy it.
<?php } else {?>
奥入瀬渓流は、わたしたちみんなの財産。<br />
誰もが等しくその恩恵を受ける権利があります。
<?php } ?>
</p>
<br />
<br />
<p>
<?php if ($lang=='co'){?>
그러나 관광시즌에는 차가 몰려 교통정체와 환경에 악영향을 끼치는 등 여러 문제가 발생하고 있습니다. 또한 계류 주변의 국도102호는 원래 지역의 생활도로와 산업도로의 기능을 가진 도로이며, 계류를 우회하는 도로는, 차량이 많아짐으로 인해 대형차가 다니기는 힘든 상황이 되었습니다. <br /><br />

이러한 문제점을 해결하기 위해 2013년부터 오이라세 계류를 안전하게 우회할 수 있는「아오부나야마 바이패스」 도로사업이 실행되어 도로를 정비하게 되었습니다.<br /><br />

오이라세 도와다 활용협의회에서는 지금까지「자연환경보전과 교통체증해소」를 위해 일시적으로 승용차교통규제를 해왔으나, 앞으로는 본격적인 교통규제를 위해  규제차종과 규제확대를 위해  매년 시행운행을 하오니 여러분의 많은 이해와 협력을 부탁드립니다.
<?php } else if ($lang=='chi'){?>
然而一到观光旺季车子蜂拥而至，导致拥堵、引起对环境的影响等等问题。 再来溪流沿路的102号国道原本即是当地的生活道路和产业道路，而迂回路上大型车辆却难以相互擦肩而过。<br /><br />

为了解决这些问题，2013年开始整顿一条能够安全迂回奥入濑溪流的“青橅山迂回路”。<br /><br />

本奥入濑十和田利活用协议会至今以“保护自然环境及解决拥堵问题”为目的尝试实施了私家车交通管制，预期将正式采取管制车辆通行、扩大管制车型。今后也将每年继续尝试实施，力图落实本措施，敬请谅解与配合。 
<?php } else if ($lang=='tchi'){?>
然而一到觀光旺季車子蜂擁而至，導致擁堵、引起對環境的影響等等問題。 再來溪流沿路的102號國道原本即是當地的生活道路和產業道路，而迂迴路上大型車輛卻難以相互擦肩而過。<br /><br />

為了解決這些問題，2013年開始整頓一條能夠安全迂迴奧入瀨溪流的“青橅山迂迴路”。<br /><br />

奧入瀨十和田利活用協議會至今以“保護自然環境及解決擁堵問題”為目的嘗試實施了私家車交通管制，預期將正式採取管制車輛通行、擴大管制車型。今後也將每年繼續實施，力圖落實本措施，敬請諒解與配合。 
<?php } else if ($lang=='en'){?>
On the other hand, a rise in vehicles pour in during the tourist season causing various problems, such as traffic congestion and other environmental concerns. Also, the National Highway No.102 along the mountain stream doubles as a local road with an industrial area because a segment of the road bypasses a mountain stream leading to difficulties passing large-size vehicles.<br /><br />

To solves these problems ˹ The Aobunazan bypass ˼ which detours the Oirase Stream has been safely industrialized from 2013.<br /><br />

Although trials of private vehicle traffic restriction aimed at the conservation of nature and traffic congestion has so far been tackled by the Oirase Towada Utilization Council, measures have developed monitoring entrance regulations of full scale vehicles and continuing annual trials regulating vehicle types. Thank you for your understanding and cooperation.
<?php } else {?>
　しかし、その反面、観光シーズンには車が殺到して、渋滞や環境への影響を引き起こすなどの様々な問題が生じています。また、渓流沿いの国道102号は、もともと地域の生活道路や産業道路としての機能を担っていますが、渓流を迂回する道路は、大型車のすれ違いが困難な状況となっています。<br /><br />

　これらの問題を解決するため、平成25年度より奥入瀬渓流を安全に迂回できる「青撫山バイパス」が事業化され、整備されることになりました。<br /><br />

　わたしたち奥入瀬十和田利活用協議会では、これまで「自然環境保全と渋滞解消」を目的に、マイカー交通規制の試行に取り組んできましたが、今後は、本格的な車両の乗り入れ規制を見据え、規制車種や規制拡大のため、毎年の試行を継続しながら、本取り組みを進展させてまいりますので、どうぞ皆様のご理解、ご協力をお願い致します。
<?php } ?>
</p>
<br />

<div>
<p class="detail_title-1"><?php echo $title_2;?></p>
<div>
<img src="<?php echo $site_url;?>/pages/images/stop-1.png" class="v_mid" alt="">
<span class="detail_title-2 v_mid"><?php echo $title_3;?></span>
</div>
<table class="restriction_table">
<tr>
<td class="border_b1">
<?php if ($lang=='en'){?>
<span class="font_m font_b">October</span>
<span class="font_l font_b">21</span><span class="font_m weekday">(<?php echo $thu;?>)</span><span class="font_m font_b">,2024</span>
<span class="font_m">▶</span><span class="font_l font_b">25</span><span class="font_m weekday"><?php echo $day;?>(<?php echo $fri;?>)</span>
<span style="text-align: right; display: inline-block"><span class="font_m font_b" style="margin-left: 15px;">10 a.m.～4 p.m.</span><span class="font_s"><?php echo $made;?></span></span>
<?php } else {?>
<span class="font_m font_b">2024</span><span class="font_s"><?php echo $year;?></span>
<span class="disp_ib">
<span class="font_l font_b">10</span><span class="font_m"><?php echo $month;?></span>
<span class="font_l font_b">21</span><span class="font_m"><?php echo $day;?><span class="weekday">(<?php echo $thu;?>)</span></span>
<span class="font_m">▶</span><span class="font_l font_b">25</span><span class="font_m"><?php echo $day;?><span class="weekday">(<?php echo $fri;?>)</span></span>
</span>
<span style="text-align: right; display: inline-block"><span class="font_m font_b" style="margin-left: 15px;">10:00～16:00</span><span class="font_s"><?php echo $made;?></span></span>
<?php } ?>
</td>
</tr>
<tr>
<td class="border_b2">
<?php if ($lang=='en'){?>
<span class="font_m font_b">October</span>
<span class="font_l font_b">26</span><span class="font_m col_sky weekday">(<?php echo $sat;?>)</span><span class="font_m font_b">,2024</span>
<span class="font_m">▶</span><span class="font_l font_b">27</span><span class="font_m col_red weekday"><?php echo $day;?>(<?php echo $sun;?>)</span>
<span style="text-align: right; display: inline-block"><span class="font_m font_b" style="margin-left: 15px;">9 a.m.～4 p.m.</span><span class="font_s"><?php echo $made;?></span></span>
<?php } else {?>
<span class="font_m font_b">2024</span><span class="font_s"><?php echo $year;?></span>
<span class="disp_ib">
<span class="font_l font_b">10</span><span class="font_m"><?php echo $month;?></span>
<span class="font_l font_b">26</span><span class="font_m"><?php echo $day;?><span class="col_sky weekday">(<?php echo $sat;?>)</span></span>
<span class="font_m">▶</span><span class="font_l font_b">27</span><span class="font_m"><?php echo $day;?><span class="col_red weekday">(<?php echo $sun;?>)</span></span>
</span>
<span class="disp_ib"><span class="font_m font_b" style="margin-left: 26px;">9:00～16:00</span><span class="font_s"><?php echo $made;?></span></span>
<?php } ?>
</td>
</tr>
</table>
</div>
<br />

<div class="restrict_info">
<div class="restrict_title">
<?php echo $title_4;?>
<img src="<?php echo $site_url;?>/pages/images/num-1.png" class="number" alt="">
</div>
<div class="restrict_inner mgn_b1">
<p class="font_m2 mgn_b2">
<?php if ($lang=='co'){?>
일반국도102호《소베교차로에서 네노쿠치교차로(약10km)구간》
<?php } else if ($lang=='chi'){?>
一般国道102号的《惣边十字路口～子之口十字路口（約10km）》
<?php } else if ($lang=='tchi'){?>
一般國道102號的《惣邊十字路口～子之口十字路口（約10km）》
<?php } else if ($lang=='en'){?>
General National Highway No.102 section {Soube intersection through Nenokuchi intersection} about 10 km (about 6.2 miles)
<?php } else {?>
一般国道102号の《惣辺交差点から子ノ口交差点（約10km）区間》
<?php } ?>
</p>

<div class="mgn_b2 clearfix">
<div class="restrict_arrow">
<p><span class="v_mid"><?php echo $title_5;?></span></p>
<img src="<?php echo $site_url;?>/pages/images/detail-arrow-1.png" alt="">
</div>
<div class="restrict_content">
<p class="font_m2">
<?php if ($lang=='co'){?>
자동차・자동이륜차(스쿠터도 포함)
<?php } else if ($lang=='chi'){?>
汽车・摩托车（包括轻型摩托车）
<?php } else if ($lang=='tchi'){?>
汽車・摩托車（包括輕型機車）
<?php } else if ($lang=='en'){?>
Vehicles, motorcycle (include motorbike) 
<?php } else {?>
自動車・自動二輪（原付バイク・電動キックボードも含む）
<?php } ?>
</p>
<p class="float_l">
※
</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
렌트카도 규제대상이 되오니 주의바랍니다
<?php } else if ($lang=='chi'){?>
请注意租赁汽车也是管制的对象之一。
<?php } else if ($lang=='tchi'){?>
請注意租借車也是管制的對象之一。
<?php } else if ($lang=='en'){?>
Please keep mind that a rental vehicle also serves as a control vehicle.
<?php } else {?>
レンタカーも規制対象となりますのでご注意ください。
<?php } ?>
</p>
</div>
</div>
<div class="clearfix mgn_b2">
<div class="restrict_arrow">
<p><?php echo $title_6;?></p>
<img src="<?php echo $site_url;?>/pages/images/detail-arrow-2.png" alt="">
</div>
<div class="restrict_content">
<p>
<?php if ($lang=='co'){?>
버스, 대형차. 중형차와 택시는 통행가능하지만, 규제당일은 운행을 자제해주시기 바랍니다. <span style="color: #0000ff" class="font_b disp_ib">▶보행이 어려우신분이 탑승한 차량은 통행가능합니다.</span>
<?php } else if ($lang=='chi'){?>
公共汽车、大型车辆、中型车辆、出租车等可以通行。<span style="color: #0000ff" class="font_b disp_ib">▶但是还是请尽量不要利用此道路。</span>
<?php } else if ($lang=='tchi'){?>
巴士、大型車輛、中型車輛、計程車等可以通行。但是還是請盡量不要使用此道路。<span style="color: #0000ff" class="font_b disp_ib">▶行動不便人士的車輛可以通行。</span>
<?php } else if ($lang=='en'){?>
Buses, large-size vehicle, mid-sized vehicle, and taxi may pass, but please adhere to environmental regulations.<span style="color: #0000ff" class="font_b disp_ib">▶Individuals with a difficulty walking who may pass. </span>
<?php } else {?>
バス、大型車、中型車、タクシー等は通行できますが、当日の乗り入れ自粛にご協力をお願いします。<span style="color: #0000ff" class="font_b disp_ib">▶歩行困難者使用車両は通行できます。</span>
<?php } ?>
</p>
</div>
</div>
</div>

<div class="restrict_title clear">
<?php echo $title_4;?>
<img src="<?php echo $site_url;?>/pages/images/num-2.png" class="number" alt="">
</div>
<div class="restrict_inner mgn_b1">
<p class="font_m2 mgn_b2">
<?php if ($lang=='co'){?>
일반국도102호의《네노쿠치교차로에서 아오부나야마교차로(약6km)구간》
<?php } else if ($lang=='chi'){?>
一般国道102号《子之口十字路口～青橅山十字路口（約6km）区间》
<?php } else if ($lang=='tchi'){?>
一般國道102號《 七曲區間    子之口十字路口～青橅山十字路口（大約6km）》
<?php } else if ($lang=='en'){?>
General National Highway No.102 section {Nenokuchi intersection through Aobunazan intersection} about  6 km  (about 3.7 miles)
<?php } else {?>
一般国道102号の《七曲区間～子ノ口交差点から青橅山交差点（約6km）区間》
<?php } ?>
</p>

<div class="clearfix">
<div class="restrict_arrow">
<p><span class="v_mid"><?php echo $title_5;?></span></p>
<img src="<?php echo $site_url;?>/pages/images/detail-arrow-1.png" alt="">
</div>
<div class="restrict_content">
<p class="font_m2">
<?php if ($lang=='co'){?>
대형차, 특정중형차
<?php } else if ($lang=='chi'){?>
大型车辆、特定中型车辆
<?php } else if ($lang=='tchi'){?>
大型車輛、特定中型車輛
<?php } else if ($lang=='en'){?>
Large size vehicle,  specific mid-size vehicle
<?php } else {?>
大型車、特定中型車
<?php } ?>
</p>
<p>
<?php if ($lang=='co'){?>
차량총중량8t이상, 최대적재량5t이상, 승차정원11명이상
<?php } else if ($lang=='chi'){?>
车辆的总重量8t以上、最大容量5ｔ以上、乘车人数11人以上
<?php } else if ($lang=='tchi'){?>
車輛的總重量8t以上、最大容量5ｔ以上、乘車人數11人以上
<?php } else if ($lang=='en'){?>
Vehicle total weigh 8 or more tons, Maximum loading capacity 5 or more tons, the passenger capacity 11 or more
<?php } else {?>
車両総重量8t以上、最大積載量5t以上、乗車定員11人以上
<?php } ?>
</p>
</div>
</div>
</div>
</div>

<div align="center">
<img src="<?php echo $site_url;?>/pages/images/<?php echo $detail_map;?>" alt="" />
</div>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top: 20px;">
<tr>
<td><strong>
<?php if ($lang=='co'){?>
우회도로인 나나마가리구간은, 급커브, 급경사가 많은 곳이므로 대형차운행이 불가합니다. 이에 대형차는 부득이하게 오이라세 계류를 통행할 수 밖에 없사오니 양해해주시기 바랍니다.
<?php } else if ($lang=='chi'){?>
由于迂回路的七曲区间，连续多处有急转弯及陡坡的关系，大型车辆无法相互路过。所以在没办法的情况下只好允许大型车辆通行奥入濑溪流沿道，敬请谅解。
<?php } else if ($lang=='tchi'){?>
由於迂迴路的七曲區間，連續多處有急轉彎及陡坡的關係，大型車輛無法相互路過。所以在沒辦法的情況下只好允許大型車輛通行奧入瀨溪流沿道，敬請諒解。
<?php } else if ($lang=='en'){?>
Sharp curve and a steep slope ahead.  The Nanamagari section is used as a detour therefore passing large-sized vehicle is prohibited.
<?php } else {?>
迂回路となっている七曲区間は、急カーブ、急勾配が連続するため、大型車のすれ違いが出来ません。このため、やむを得ず大型車両は奥入瀬渓流を通行してもよいこととしていますのでご理解をお願いします。
<?php } ?>
</strong></td>
</tr>
</table>
</div>
</div>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
}
//-->
</script>
            
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
