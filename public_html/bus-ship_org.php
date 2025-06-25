<?php
global $lang;


$is_print = isset($_REQUEST['print'])?'noprn':'';

$site_url = SITE_URL;

switch($lang){
 case 'ja':
  $subtitle = "駐車場とシャトルバス";
  $maintitle = "マイカー交通規制/シャトルバス・遊覧船";
  $title_1 = "シャトルバス、遊覧船のご利用について";
  $text_0 = "マイカー交通規制期間にマイカーでお越しの方へ";
  $map = "busmap2022.jpg";
  $title_2 = "シャトルバス時刻表";
  $title_3_0 = "シャトルバス運賃";
  $title_3_0_1 = "チケット販売場所";
  $text_4 = "1日フリーパス券";
  $text_5 = "小学生以下無料";
  $text_6 = "大人";
  $text_7 = "1,000円";
  $title_3 = "運行期間";
  $from_1 = "焼山発";
  $from_2 = "休屋発";
  $to_1 = "休屋行き";
  $to_2 = "焼山行き";
  $first = "始発";
  $last = "最終";
  $sta_1 = "焼山(奥入瀬渓流温泉スキー場)駐車場";
  $sta_2 = "紫明渓";
  $sta_3 = "石ケ戸";
  $sta_4 = "馬門岩";
  $sta_5 = "雲井の滝";
  $sta_6 = "雲井の流れ";
  $sta_7 = "銚子大滝";
  $sta_8 = "子ノ口";
  $sta_9 = "休屋駐車場";
  $sta_10 = '奥入瀬渓流館前';
  $sta_11 = 'JRバス十和田湖駅';
  $title_4 = "十和田湖遊覧船ガイド（運航コース案内）";
  $title_5 = "運行時間";
  $title_6 = "通常運賃";
  $title_7 = "お問い合せ（遊覧船）";
  $place_1 = "休　屋";
  $place_2 = "子ノ口";
  $place_3 = "休屋";
  $office_1 = "十和田湖遊覧船（十和田観光電鉄）";
  $office_2 = "十和田湖遊覧船運航事務所団体予約センター";
  $text_1 = "大人 1,500円";
  $text_2 = "小人 750円";
  $text_3 = "（団体割引あり：11名以上～）";
  $text_8 = "シャトルバスチケットを持参すると、大人が1,000円割引になります。\n（※小人の割引はありません）";
  $text_9 = "(最終便を除く)";
  $text_10 = "詳細な時刻表はこちら";
  $pdf1 = "2022_bus_timetable.pdf";
  $bus_stop = "バス停";
  break;
 case 'en':
  $subtitle = "Parking lot guide and shuttle bus";
  $maintitle = "Details of private vehicle traffic restriction / shuttle bus・sightseeing boat";
  $title_1 = "Use of a shuttle bus and sightseeing boat";
  $text_0 = "To the person coming by private vehicle during a private vehicle restriction";
  $map = "busmap2019_en.png";
  $title_2 = "The timetable of a shuttle bus schedule";
  $title_3_0 = "The fare of a shuttle bus";
  $title_3_0_1 = "Ticket office";
  $text_4 = "One day pass";
  $text_5 = "Children under 12 is free";
  $text_6 = "Adult";
  $text_7 = "1,000yen";
  $title_3 = "Operational period ";
  $from_1 = "From Yakeyama";
  $from_2 = "From Yasumiya";
  $to_1 = "To Yasumiya";
  $to_2 = "To Yakeyama";
  $first = "First Departure";
  $last = "Last Departure";
  $sta_1 = "Yakeyama (Oirase Keiryu Onsen Ski Resort) parking lot";
  $sta_2 = "Shimeikei";
  $sta_3 = "Ishigedo";
  $sta_4 = "Makadoiwa";
  $sta_5 = "Kumoinotaki";
  $sta_6 = "Kumoinonagare";
  $sta_7 = "Choshiotaki";
  $sta_8 = "Nenokuchi";
  $sta_9 = "Yasumiya parking lot";
  $sta_10 = 'Oirase Stream Mansion';
  $sta_11 = 'Towada Temple';
  $title_4 = "Towada lake sightseeing boat (Towada sightseeing railroad)";
  $title_5 = "Operation time";
  $title_6 = "Regular fare";
  $title_7 = "Contact us（sightseeing boat）";
  $place_1 = "Yasumiya";
  $place_2 = "Nenokuchi";
  $place_3 = "Yasumiya";
  $office_1 = "Towada lake sightseeing boat (Towada sightseeing railroad)";
  $office_2 = "Towada Lake sightseeing boat operation office organization reservation center";
  $text_1 = "Adults 1,500 yen";
  $text_2 = "Children 750 yen";
  $text_3 = "(Group discounts available : 11 people or more)";
  $text_8 = "If you present the shuttle bus ticket, adults get a discount of 1000 yen. \n( ※ There is no discount for chidren)";
  $text_9 = "";
  $text_10 = "詳細な時刻表はこちら";
  $pdf1 = "2022_bus_timetable.pdf";
  $bus_stop = " bus stop";
  break;
 case 'co':
  $subtitle = "주차장과 셔틀버스";
  $maintitle = "승용차운행 규제 내용/셔틀버스・유람선";
  $title_1 = "셔틀버스, 유람선 이용에 관해서";
  $text_0 = "승용차운행 규제기간중 승용차로 오시는 분들께";
  $map = "busmap2019_co.png";
  $title_2 = "셔틀버스 시간표";
  $title_3_0 = "셔틀버스 버스요금";
  $title_3_0_1 = "Ticket office";
  $text_4 = "1일 버스자유이용권";
  $text_5 = "12세이하 무료";
  $text_6 = "대인";
  $text_7 = "1,000엔";
  $title_3 = "운행기간";
  $from_1 = "야케야마출발";
  $from_2 = "야스미야출발";
  $to_1 = "야스미야행";
  $to_2 = "야케야마행";
  $first = "첫차";
  $last = "막차";
  $sta_1 = "야케(오이라세 계류　온천스키장)야마주차장";
  $sta_2 = "시메이케이";
  $sta_3 = "이시게도";
  $sta_4 = "마카도이와";
  $sta_5 = "구모이노타키";
  $sta_6 = "구모이노나가레";
  $sta_7 = "조시오타키";
  $sta_8 = "네노쿠치";
  $sta_9 = "야스미야주차장";
  $sta_10 = '오이라세 계류관 앞';
  $sta_11 = '도와다진자 앞';
  $title_4 = "도와다호 유람선 가이드(운항코스안내)";
  $title_5 = "운항시간";
  $title_6 = "요금";
  $title_7 = "문의（유람선）";
  $place_1 = "야스미야";
  $place_2 = "네노쿠치";
  $place_3 = "야스미야";
  $office_1 = "도와다호 유람선(도와다관광전철회사)";
  $office_2 = "도와다호 유람선운항사무소 단체예약센터";
  $text_1 = "어른 1,500엔";
  $text_2 = "어린이 750엔";
  $text_3 = "(단체할인요금: 11명이상～)";
  $text_8 = "셔틀버스티켓을 지참하시면, 어른요금이 1000엔 할인됩니다.\n(※어린이요금은 할인이 없습니다)";
  $text_9 = "";
  $text_10 = "詳細な時刻表はこちら";
  $pdf1 = "2022_bus_timetable.pdf";
  $bus_stop = " 버스정류장";
  break;
 case 'chi':
  $subtitle = "停车场指南";
  $maintitle = "私家车交通管制详情/观光班车・游览船";
  $title_1 = "观光班车、游览船信息";
  $text_0 = "致私家车交通管制期间内开车来访的游客们";
  $map = "busmap2019_chi.png";
  $title_2 = "观光班车时间表";
  $title_3_0 = "观光班车巴士车资";
  $title_3_0_1 = "Ticket office";
  $text_4 = "巴士一日券";
  $text_5 = "12岁以下免费";
  $text_6 = "成人";
  $text_7 = "1,000日元";
  $title_3 = "行驶期间";
  $from_1 = "烧山发车";
  $from_2 = "休屋发车";
  $to_1 = "往休屋";
  $to_2 = "往焼山";
  $first = "首班";
  $last = "末班";
  $sta_1 = "烧山（奥入濑溪流温泉滑雪场）停车场";
  $sta_2 = "紫明溪";
  $sta_3 = "石之户";
  $sta_4 = "马门岩";
  $sta_5 = "云井瀑布";
  $sta_6 = "云井溪流";
  $sta_7 = "铫子大瀑布";
  $sta_8 = "子之口";
  $sta_9 = "休屋停车场";
  $sta_10 = '奥入濑溪流馆前';
  $sta_11 = '十和田神社前';
  $title_4 = "十和田湖游览船指南（航线说明）";
  $title_5 = "航行时间";
  $title_6 = "一般票价";
  $title_7 = "咨询（游览船）";
  $place_1 = "休　屋";
  $place_2 = "子之口";
  $place_3 = "休屋";
  $office_1 = "十和田湖游览船（十和田观光电铁）";
  $office_2 = "十和田湖游览船运航事务所团体预约中心";
  $text_1 = "成人 1500日元";
  $text_2 = "小孩 750日元";
  $text_3 = "（团体优惠票价：11名以上～）";
  $text_8 = "提示您的巴士车票，大人将享有1000日元优惠。\n(※小孩无优惠)";
  $text_9 = "";
  $text_10 = "詳細な時刻表はこちら";
  $pdf1 = "2022_bus_timetable.pdf";
  $bus_stop = " 观光班车车站";
  break;
 case 'tchi':
  $subtitle = "停車場指南";
  $maintitle = "私家車交通管制詳情/觀光班車・遊覽船";
  $title_1 = "觀光班車、遊覽船資訊";
  $text_0 = "致私家車交通管製期間內開車來訪的遊客們";
  $map = "busmap2019_tchi.png";
  $title_2 = "觀光班車時間表";
  $title_3_0 = "觀光班車巴士車資";
  $title_3_0_1 = "Ticket office";
  $text_4 = "巴士一日券";
  $text_5 = "幼兒、小學生免費";
  $text_6 = "成人";
  $text_7 = "1,000日元";
  $title_3 = "行駛期間";
  $from_1 = "燒山發車";
  $from_2 = "休屋發車";
  $to_1 = "往休屋";
  $to_2 = "往燒山";
  $first = "首班";
  $last = "末班";
  $sta_1 = "燒山（奧入瀨溪流温泉滑雪場）停車場";
  $sta_2 = "紫明溪";
  $sta_3 = "石之戶";
  $sta_4 = "馬門岩";
  $sta_5 = "雲井瀑布";
  $sta_6 = "雲井之流";
  $sta_7 = "銚子大瀑布";
  $sta_8 = "子之口";
  $sta_9 = "休屋停車場";
  $sta_10 = '奧入瀨溪流館前';
  $sta_11 = '十和田神社前';
  $title_4 = "十和田湖遊覽船指南（航綫說明）";
  $title_5 = "航行時間";
  $title_6 = "一般票價";
  $title_7 = "咨詢（遊覽船）";
  $place_1 = "休　屋";
  $place_2 = "子之口";
  $place_3 = "休屋";
  $office_1 = "十和田湖遊覽船（十和田觀光電鐵）";
  $office_2 = "十和田湖遊覽船運航事務所團體預約中心";
  $text_1 = "成人 1500日元";
  $text_2 = "小孩 750日元";
  $text_3 = "（團體票價有優惠：11名以上～）";
  $text_8 = "提示您的巴士車票，成人將享有1000日元優惠。\n（※幼兒、小學生無優惠）";
  $text_9 = "";
  $text_10 = "詳細な時刻表はこちら";
  $pdf1 = "2022_bus_timetable.pdf";
  $bus_stop = " 巴士停靠站";
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
<h2><?php echo $maintitle;?></h2>
<div class="w60">
<h3><?php echo $title_1;?></h3>
<br>
<!-- p style="color: red">※平成28年度の情報です。</p -->
<div class="right-inner parents"><strong style="font-size: 18px;"><?php echo $text_0;?></strong> <br />
<!-- a href="../ivent/ShuttleBusMap_2015.pdf" target="_blank">シャトルバスマップはこちら（PDF：1.14MB）</a><br / -->
<div class="box-1">
<?php if ($lang=='co'){?>
승용차운행규제기간에 실시하는 「에코로드구간」은 자동차・자동이륜차(스쿠터포함) 통행 금지구간입니다.<br>
<strong>오이라세 계류에 승용차로 오실때는, <span class="color_navy">야케(오이라세 계류　온천스키장)야마주차장(무료) 야스야마주차장(유료)</span>에 주차하신후, <span class="color_navy">셔틀버스(유료)</span>를 이용해주십시오</strong>
<?php } else if ($lang=='chi'){?>
於私家车交通管制期间，《生态路线区间》内禁止汽车・摩托车（包括轻型摩托车）通行。<br>
开车前来奥入濑溪流者，请将车辆停泊於<span class="color_navy">烧山（奥入濑溪流温泉滑雪场）停车场（免费）或休屋停车场（收费）</span>内，然后再搭乘<span class="color_navy">观光班车（收费）</span>至目的地。
<?php } else if ($lang=='tchi'){?>
於私家車交通管制期間，《生態路綫區間》內禁止汽車・摩托車（包括輕型機車）通行。<br>
開車前來奧入瀨溪流者，請將車輛停泊於<span class="color_navy">燒山（奧入瀨溪流温泉滑雪場）停車場（免費）或休屋停車場（收費）</span>內，然後再搭乘<span class="color_navy">觀光班車（收費）</span>至目的地。
<?php } else if ($lang=='en'){?>
The Eco- road section affected during the private vehicle traffic restriction are all private vehicles and a motorcycle (include motorbike).<br>
For person(s) arriving to Oirase Stream by privately owned vehicles.  Please use <span class="color_navy">the upper shuttle bus charge</span> for parking, Parking in <span class="color_navy">the Yakeyama (Oirase Keiryu Onsen Ski Resort) parking lot is free</span>, there is <span class="color_navy">a fee for parking in the Yasumiya parking lot</span>.
<?php } else {?>
マイカー交通規制期間に実施する「エコロード区間」は、自動車・自動二輪（原付バイクを含む）は通行止めとなります。<br>
<strong>奥入瀬渓流へマイカーでお越しの際は、<span class="color_navy">焼山駐車場（無料）・休屋駐車場（有料）</span>に駐車の上、<span class="color_navy">シャトルバス（有料）</span>をご利用ください</strong>
<?php } ?>
</div>
<div class="text_r">▶<a href="<?php echo $site_url;?>/<?php echo $lang;?>/parking" class="td_n color_blk">
<?php if ($lang=='co'){?>
주차장 상세내용은 이쪽으로
<?php } else if ($lang=='chi'){?>
请按此参阅停车场信息
<?php } else if ($lang=='tchi'){?>
請按此參閱停車場信息
<?php } else if ($lang=='en'){?>
Parking lot details are here.
<?php } else {?>
駐車場について詳しくはこちら
<?php } ?>
</a></div>
</div>
<center>
<img src="<?php echo $site_url;?>/pages/images/<?php echo $map;?>" alt="<?php echo $title_1;?>"<?php if ($is_print) echo ' style="width: 65%"';?> /><br />
<!-- img src="<?php echo $site_url;?>/regulation/img/b_zoom_ja.gif" width="82" height="19" alt="拡大する" onclick="MM_openBrWindow('<?php echo $site_url;?>/bus-ship_zoom','win700','width=700,height=700')" /-->
<br />
</center>
<?php if ($is_print): ?>
<div id="qrcode">
<img src="<?php echo $site_url.'/qr.php?lang='.$lang;?>">
</div>
<?php endif;?>
</div>
<a name="timetable"></a>
<div class="<?php echo $is_print;?>">
<h3><?php echo $title_3_0;?></h3>
<div class="right-inner time-table-detail">
<div style="font-size: 15px;">
<strong><?php echo $text_4;?>　(<?php echo $text_5;?>)</strong><br>
<strong><?php echo $text_6;?>：<?php echo $text_7;?></strong>
</div>
<br>
<a name="map"></a>
<h4>■<span><?php echo $title_3_0_1;?></span></h4>
<div id="ticket-office">
<ul class="parents">
<li class="ticket-offic1"><?php echo $sta_1.$bus_stop;?></li>
<li class="ticket-offic2"><?php echo $sta_8.$bus_stop;?></li>
<li class="ticket-offic3"><?php echo $sta_11.$bus_stop;?></li>
</ul>
<div id="map1">
</div>
</div>
</div>
</div>
<script>
<!--
to_pos = [[40.51089150900855, 140.96278550149808],[40.578511, 140.993489],[40.47883955737266, 140.94032451500172],[40.42648729738044, 140.8943412626255]];
to_title = ['<?php echo $sta_1.$bus_stop;?>','<?php echo $sta_8.$bus_stop;?>','<?php echo $sta_11.$bus_stop;?>'];
to_icon = ['ico_to1.png','ico_to2.png','ico_to3.png'];

function initmap(id,title,position,icon) {
  var mapOptions = {
    center: { lat:  position[0][0],lng: position[0][1] },
    zoom: 11,
  };
  var map = new google.maps.Map(document.getElementById(id),
      mapOptions);
  showmarkers(map,title,position,icon);
}
function showmarkers(map,title,position,icon) {
  for(var i=1; i<position.length; i++){
    var pos = new google.maps.LatLng(position[i][0],position[i][1]);
    var img = "<?php echo $site_url;?>/pages/images/"+icon[i-1];
    var marker = new google.maps.Marker({
      position: pos,
      map: map,
      title: title[i-1],
      icon: img
    });
  }
}
jQuery(window).load(function(){
  initmap('map1',to_title,to_pos,to_icon);
});
-->
</script>

<div class="w80">
<h3><?php echo $title_2;?></h3>
<div class="right-inner time-table-detail" style="padding-bottom: 0;">
<h4>■<span><?php echo $title_3;?></span></h4>
<p style="margin: 10px 0; display: none;">
　※只今調整中です。決定次第掲載しますので、しばらくお待ちください。
</p>
<div>
<?php if ($lang=='ja'){ ?>
<strong>・2022年10月24日（月）～10月28日（金）<div class="disp_ib">【始発】9:00～【最終】14:30 </div></strong>
<?php } else if ($lang=='en'){ ?>
<strong>·Monday October 24, 2022 ～Friday October 28, 2022 <div class="disp_ib">First Departure: 9:00am  Final Departure: 2:30pm</div></strong>
<?php } else if ($lang=='co'){ ?>
<strong>・2022년10월24日（월）～10월28日（금）<div class="disp_ib">【첫차】9:00～【막차】14:30 </div></strong>
<?php } else if ($lang=='chi'){ ?>
<strong>・2022年10月24日（周一）～10月28日（周五）<div class="disp_ib">【首班】9:00～【末班】14:30 </div></strong>
<?php } else if ($lang=='tchi'){ ?>
<strong>・2022年10月24日（週一）～10月28日（週五）<div class="disp_ib">【首班】9:00～【末班】14:30</div></strong>
<?php } ?>
</div>
</div>
<div class="right-inner parents" style="padding-top: 0;">
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_1;?><br />　
→<?php echo $to_1;?></th>
<td align="center"><?php echo $first;?></td>
<td rowspan="12" align="center" valign="center">
<!--span>30</span>　始<br />
<span>分</span>　発<br />
<span>間</span>　か<br />
<span>隔</span>　ら<br />
<span>で</span>　最<br />
<span>運</span>　終<br />
<span>行</span>　ま<br />
　　で<br /-->
※1<br /><br />
<img src="<?php echo $site_url;?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /><br />							</td>
<td align="center"><?php echo $last;?> </td>
</tr>
<tr>
<td><?php echo $sta_1;?></td>
<td align="center">9:00</td>
<td align="center">14:30</td>
</tr>
<tr>
<td><?php echo $sta_10;?></td>
<td align="center">9:01</td>
<td align="center">14:31</td>
</tr>
<tr>
<td><?php echo $sta_2;?></td>
<td align="center">9:06</td>
<td align="center">14:36</td>
</tr>
<tr>
<td><?php echo $sta_3;?></td>
<td align="center">9:12</td>
<td align="center">14:42</td>
</tr>
<tr>
<td><?php echo $sta_4;?></td>
<td align="center">9:15</td>
<td align="center">14:45</td>
</tr>
<tr>
<td><?php echo $sta_5;?></td>
<td align="center">9:18</td>
<td align="center">14:48</td>
</tr>
<tr>
<td><?php echo $sta_6;?></td>
<td align="center">9:22</td>
<td align="center">14:52</td>
</tr>
<tr>
<td><?php echo $sta_7;?></td>
<td align="center">9:26</td>
<td align="center">14:56</td>
</tr>
<tr>
<td><?php echo $sta_8;?></td>
<td align="center">9:33</td>
<td align="center">15:03</td>
</tr>
<!-- tr>
<td>宇樽部</td>
<td align="center">8:38</td>
<td align="center">15:38</td>
</tr -->
<!-- tr>
<td>下宇樽部</td>
<td align="center">8:39</td>
<td align="center">15:39</td>
</tr -->
<tr>
<td><?php echo $sta_9;?></td>
<td align="center">9:48</td>
<td align="center">15:18</td>
</tr>
<tr>
<td><?php echo $sta_11;?></td>
<td align="center">9:49</td>
<td align="center">15:19</td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_2;?><br />　
→<?php echo $to_2;?></th>
<td align="center"><?php echo $first;?></td>
<td rowspan="12" align="center" valign="center">
<!--span>30</span>　始<br />
<span>分</span>　発<br />
<span>間</span>　か<br />
<span>隔</span>　ら<br />
<span>で</span>　最<br />
<span>運</span>　終<br />
<span>行</span>　ま<br />
　　で<br /-->
※1<br /><br />
<img src="<?php echo $site_url;?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /></td>
<td align="center"><?php echo $last;?></td>
</tr>
<tr>
<td><?php echo $sta_9;?></td>
<td align="center">9:00</td>
<td align="center">14:30</td>
</tr>
<tr>
<td><?php echo $sta_11;?></td>
<td align="center">9:01</td>
<td align="center">14:31</td>
</tr>
<!-- tr>
<td>下宇樽部</td>
<td align="center">8:05</td>
<td align="center">15:05</td>
</tr -->
<!-- tr>
<td>宇樽部</td>
<td align="center">8:06</td>
<td align="center">15:06</td>
</tr -->
<tr>
<td><?php echo $sta_8;?></td>
<td align="center">9:18</td>
<td align="center">14:48</td>
</tr>
<tr>
<td><?php echo $sta_7;?></td>
<td align="center">9:21</td>
<td align="center">14:51</td>
</tr>
<tr>
<td><?php echo $sta_6;?></td>
<td align="center">9:25</td>
<td align="center">14:55</td>
</tr>
<tr>
<td><?php echo $sta_5;?></td>
<td align="center">9:28</td>
<td align="center">14:58</td>
</tr>
<tr>
<td><?php echo $sta_4;?></td>
<td align="center">9:32</td>
<td align="center">15:02</td>
</tr>
<tr>
<td><?php echo $sta_3;?></td>
<td align="center">9:37</td>
<td align="center">15:07</td>
</tr>
<tr>
<td><?php echo $sta_2;?></td>
<td align="center">9:41</td>
<td align="center">15:11</td>
</tr>
<tr>
<td><?php echo $sta_10;?></td>
<td align="center">9:47</td>
<td align="center">15:17</td>
</tr>
<tr>
<td><?php echo $sta_1;?></td>
<td align="center">9:48</td>
<td align="center">15:18</td>
</tr>
</table>
<div class="clear">
<p class="float_l" style="margin-right: 4px;">※1</p>
<p class="ovf_h">
<?php if ($lang=='co'){ ?>
첫차부터 막차까지<span style="color: #336600;">30분간격으로 운행</span>
<?php } else if ($lang=='chi'){?>
首班与末班之间<span style="color: #336600;">每隔30分钟一班</span>
<?php } else if ($lang=='tchi'){?>
首班與末班之間<span style="color: #336600;">每隔30分鐘一班</span>
<?php } else if ($lang=='en'){?>
<span style="color: #336600;">Runs every 30 minutes on the half hour</span> until final departure
<?php } else { ?>
始発から最終まで<span style="color: #336600;">30分間隔で運行</span>
<?php } ?>
</p>
</div>
</div>
<div class="right-inner time-table-detail" style="padding-bottom: 0;">
<div>
<?php if ($lang=='ja'){ ?>
<strong>・2022年10月29日（土）～10月30日（日）<div class="disp_ib">【始発】8:00～【最終】15:20 </div></strong>
<?php } else if ($lang=='en'){ ?>
<strong>·Saturday October 29, 2022 ·Sunday October 30, 2022 <div class="disp_ib">First Departure: 8:00am  Final Departure: 3:20pm</div></strong>
<?php } else if ($lang=='co'){ ?>
<strong>・2022年10월29日（토）～10월30日（일）<div class="disp_ib">【첫차】8:00～【막차】15:20 </div></strong>
<?php } else if ($lang=='chi'){ ?>
<strong>・2022년10月29日（周六）～10月30日（周日）<div class="disp_ib">【首班】8:00～【末班】15:20 </div></strong>
<?php } else if ($lang=='tchi'){ ?>
<strong>・2022年10月29日（週六）～10月30日（週日）<div class="disp_ib">【首班】8:00～【末班】15:20</div></strong>
<?php } ?>
</div>
</div>
<div class="right-inner parents" style="padding-top: 0;">
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_1;?><br />　
→<?php echo $to_1;?></th>
<td align="center"><?php echo $first;?></td>
<td rowspan="12" align="center" valign="center">
<!--span>20</span>　始<br />
<span>分</span>　発<br />
<span>間</span>　か<br />
<span>隔</span>　ら<br />
<span>で</span>　最<br />
<span>運</span>　終<br />
<span>行</span>　ま<br />
　　で<br / -->
※2<br /><br />
<img src="<?php echo $site_url;?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /><br />							</td>
<td align="center"><?php echo $last;?> </td>
</tr>
<tr>
<td><?php echo $sta_1;?></td>
<td align="center">9:00</td>
<td align="center">14:30</td>
</tr>
<tr>
<td><?php echo $sta_10;?></td>
<td align="center">9:03</td>
<td align="center">14:33</td>
</tr>
<tr>
<td><?php echo $sta_2;?></td>
<td align="center">9:06</td>
<td align="center">14:36</td>
</tr>
<tr>
<td><?php echo $sta_3;?></td>
<td align="center">9:12</td>
<td align="center">14:42</td>
</tr>
<tr>
<td><?php echo $sta_4;?></td>
<td align="center">9:15</td>
<td align="center">14:45</td>
</tr>
<tr>
<td><?php echo $sta_5;?></td>
<td align="center">9:18</td>
<td align="center">14:48</td>
</tr>
<tr>
<td><?php echo $sta_6;?></td>
<td align="center">9:22</td>
<td align="center">14:52</td>
</tr>
<tr>
<td><?php echo $sta_7;?></td>
<td align="center">9:27</td>
<td align="center">14:57</td>
</tr>
<tr>
<td><?php echo $sta_8;?></td>
<td align="center">9:33</td>
<td align="center">15:03</td>
</tr>
<!-- tr>
<td>宇樽部</td>
<td align="center">8:38</td>
<td align="center">15:38</td>
</tr -->
<!-- tr>
<td>下宇樽部</td>
<td align="center">8:39</td>
<td align="center">15:39</td>
</tr -->
<!--tr>
<td><?php echo $sta_9;?></td>
<td align="center">9:48</td>
<td align="center">15:18</td>
</tr -->
<tr>
<td><?php echo $sta_11;?></td>
<td align="center">9:48</td>
<td align="center">15:18</td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_2;?><br />　
→<?php echo $to_2;?></th>
<td align="center"><?php echo $first;?></td>
<td rowspan="12" align="center" valign="center">
<!--span>20</span>　始<br />
<span>分</span>　発<br />
<span>間</span>　か<br />
<span>隔</span>　ら<br />
<span>で</span>　最<br />
<span>運</span>　終<br />
<span>行</span>　ま<br />
　　で<br /-->
※2<br /><br />
<img src="<?php echo $site_url;?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /></td>
<td align="center"><?php echo $last;?></td>
</tr>
<!-- tr>
<td><?php echo $sta_9;?></td>
<td align="center">9:00</td>
<td align="center">14:30</td>
</tr -->
<tr>
<td><?php echo $sta_11;?></td>
<td align="center">9:00</td>
<td align="center">14:30</td>
</tr>
<!-- tr>
<td>下宇樽部</td>
<td align="center">8:05</td>
<td align="center">15:05</td>
</tr -->
<!-- tr>
<td>宇樽部</td>
<td align="center">8:06</td>
<td align="center">15:06</td>
</tr -->
<tr>
<td><?php echo $sta_8;?></td>
<td align="center">9:13</td>
<td align="center">14:43</td>
</tr>
<tr>
<td><?php echo $sta_7;?></td>
<td align="center">9:16</td>
<td align="center">14:46</td>
</tr>
<tr>
<td><?php echo $sta_6;?></td>
<td align="center">9:20</td>
<td align="center">14:50</td>
</tr>
<tr>
<td><?php echo $sta_5;?></td>
<td align="center">9:23</td>
<td align="center">14:53</td>
</tr>
<tr>
<td><?php echo $sta_4;?></td>
<td align="center">9:27</td>
<td align="center">14:57</td>
</tr>
<tr>
<td><?php echo $sta_3;?></td>
<td align="center">9:32</td>
<td align="center">15:02</td>
</tr>
<tr>
<td><?php echo $sta_2;?></td>
<td align="center">9:36</td>
<td align="center">15:06</td>
</tr>
<tr>
<td><?php echo $sta_10;?></td>
<td align="center">9:40</td>
<td align="center">15:10</td>
</tr>
<tr>
<td><?php echo $sta_1;?></td>
<td align="center">9:43</td>
<td align="center">15:13</td>
</tr>
</table>
<div class="clear">
<p class="float_l" style="margin-right: 4px;">※2</p>
<p class="ovf_h">
<?php if ($lang=='co'){ ?>
첫차부터 막차까지<span style="color: #336600;">30분간격으로 운행</span>
<?php } else if ($lang=='chi'){?>
首班与末班之间<span style="color: #336600;">每隔30分钟一班</span>
<?php } else if ($lang=='tchi'){?>
首班與末班之間<span style="color: #336600;">每隔30分鐘一班</span>
<?php } else if ($lang=='en'){?>
<span style="color: #336600;">Runs every 30 minutes on the half hour</span> until final departure
<?php } else { ?>
始発から最終まで<span style="color: #336600;">30分間隔で運行</span>
<?php } ?>
<?php echo $text_9;?>
</p>
</div>

<a href="<?php echo $site_url;?>/pdf/<?php echo $pdf1;?>" target="_blank" style="display: block; margin-top: 10px;"><?php echo $text_10;?>&gt;&gt;</a><br>
</div>
<div calss="clear"></div>
<!-- p>《混雑時は15分間隔で運行します》</p -->
<!-- div class="timeline">
<span class="font_b">＞＞詳しくはこちら</span><br>
　<a href="../pdf/timetable_2014.pdf" target="_blank">シャトルバスおよびJR路線バス時刻表（PDF：5.9MB）</a><br>
　<a href="../pdf/busstop_2014.pdf" target="_blank">シャトルバス区間･バス停留所（PDF：7.55MB）</a>
</div -->
<div class="right-inner time-table-detail <?php echo $is_print;?>">
<!--h4><img src="img/tickettokuten.png" alt="シャトルバスチケット特典　シャトルバスチケット800円→400円" height="300" align="right" />■<span>バス運賃</span></h4>
<p style="height: 290px;">
<strong><span>　1日フリーパス券</strong><br />
　大人 800円（小学生以下無料）<br />
　※シャトルバスのチケットでは路線<br />
　　バスはご乗車できません。<br />
　　また、路線バスチケットではシャ<br />
　　トルバスにご乗車できません。<br />
<br />
</p -->
<!--
<p>
<strong>　<span>TICKET B</span>／片道フリーパス券</strong><br />
　大人 500円（小学生以下無料）<br />
　<span>※片道方向に限り何回でも乗降できます。</span></p>
<h4>■<span>チケット販売場所（7ヶ所）</span></h4>
<p>
　焼山駐車場、焼山観光センター、休屋駐車場、<br />
　石ヶ戸・子ノ口のバス停、雲井の滝、銚子大滝<br />
　<span>※JR路線バスもご利用になれます。</span></p>
-->
</div>
</div>

<div class="<?php echo $is_print;?>">
<h3><?php echo $title_4;?></h3>
<div class="right-inner">
<div id="ship-guide" class="parents">
<div>
<div id="a-course">
<table>
<tr>
<th><span><?php echo $place_1;?>⇔<?php echo $place_2;?></span></th>
</tr>
<tr>
<td><span>
<?php if ($lang=='co'){?>
소요시간: 50분
<?php } else if ($lang=='chi'){?>
所需时间：50分钟
<?php } else if ($lang=='tchi'){?>
所需時間：50分鐘
<?php } else if ($lang=='en'){?>
The time required : 50 minutes
<?php } else {?>
所要時間：50分
<?php } ?>
</span></td>
</tr>
</table>
<p>
<?php if ($lang=='co'){?>
도와다호반의 주요관광지・야스미야와 오이라세 계류 산책입구인 네노쿠치를 연결해주는 코스. 나카야먀반도와 나카노우미, 오구라반도를 둘러 운항합니다.
<?php } else if ($lang=='chi'){?>
连接十和田湖畔的主要观光景点《休屋》与奥入濑溪流的散步小径之入口《子之口》的航线。巡游中山半岛、中之湖及御仓半岛的尖端
<?php } else if ($lang=='tchi'){?>
連接十和田湖畔的主要觀光景點《休屋》與奧入瀨溪流的散步小徑之入口《子之口》的航綫。巡遊中山半島、中之湖及御倉半島的尖端。
<?php } else if ($lang=='en'){?>
The main tourist spot in Towada lakeside , the course which connects the entrance of the Oirase Stream stroll, and Nenokuchi to Yasumiya.  Tour of the tip of the Ogura peninsula, Nakayama peninsula, and Nakanoumi.
<?php } else {?>
十和田湖畔の主要観光地・休屋と、奥入瀬渓流散策の入り口・子ノ口を結ぶコース。中山半島と中の湖、御倉半島の突端を巡ります。
<?php } ?>
</p>
</div>
<div id="b-course">
<table>
<tr>
<th><span><?php echo $place_1;?>→<?php echo $place_1;?></span></th>
</tr>
<tr>
<td><span>
<?php if ($lang=='co'){?>
소요시간: 50분
<?php } else if ($lang=='chi'){?>
所需时间：50分钟
<?php } else if ($lang=='tchi'){?>
所需時間：50分鐘
<?php } else if ($lang=='en'){?>
The time required : 50 minutes
<?php } else {?>
所要時間：50分
<?php } ?>
</span></td>
</tr>
</table>
<p>
<?php if ($lang=='co'){?>
나카야마반도와 나카노우미를 지나 호수 한가운데를 통과하는 야스미야 회항코스
<?php } else if ($lang=='chi'){?>
游览中山半岛及中之湖，回程经湖的中心返回休屋之航程。
<?php } else if ($lang=='tchi'){?>
遊覽中山半島及中之湖，回程經湖的中心返迴休屋之航程。
<?php } else if ($lang=='en'){?>
The Yasumiya arrival and departure course which passes near the middle of the lake on the way to Nakayama peninsula and Nakanoumi.
<?php } else {?>
中山半島と中の湖をぐるり、帰路に湖の真ん中を通る休屋発着のコース。
<?php } ?>
</p>
</div>
<div style="clear: both; height: 1px; overflow: hidden;"></div>
</div>
<div>
<div id="a-course">
<dl>
<dt>■<span><?php echo $title_5;?></span></dt>
<dd>
<?php echo $place_3;?>→<?php echo $place_2;?><br />
9：15～14：45<br />
<?php echo $place_2;?>→<?php echo $place_3;?><br />
11：30～13：30<br />
</dd>
<dd style="padding-top: 5px;">
※<?php if ($lang=='co'){?>
자세한 시간표는 아래 사이트에서 확인해 주십시오
<?php } else if ($lang=='chi'){?>
请到以下网页确认详细时间表。
<?php } else if ($lang=='tchi'){?>
請到以下網頁確認詳細時間表。
<?php } else if ($lang=='en'){?>
Please check the detailed timetable from the following website.
<?php } else {?>
詳しい時刻表は以下のサイトよりご確認ください。
<?php } ?>
<br>
&nbsp;&gt;&gt;<a href="http://www.toutetsu.co.jp/ship.html" target="_blank"><?php echo $office_1;?></a><br />
</dd>
</dl>

</div>
<div id="b-course">
<dl>
<dt>■<span><?php echo $title_5;?></span></dt>
<dd>
<?php echo $place_3;?>→<?php echo $place_3;?><br />
8：45～14：40<br />
<!-- span class="caution">※上記の内容は、奥入瀬渓流マイカー交通規制実施時の情報です。</span -->
</dd>
<dd style="padding-top: 5px;">
※<?php if ($lang=='co'){?>
자세한 시간표는 아래 사이트에서 확인해 주십시오
<?php } else if ($lang=='chi'){?>
请到以下网页确认详细时间表。
<?php } else if ($lang=='tchi'){?>
請到以下網頁確認詳細時間表。
<?php } else if ($lang=='en'){?>
Please check the detailed timetable from the following website.
<?php } else {?>
詳しい時刻表は以下のサイトよりご確認ください。
<?php } ?>
<br>
&nbsp;&gt;&gt;<a href="http://www.toutetsu.co.jp/ship.html" target="_blank"><?php echo $office_1;?></a><br />
</dd>
</dl>
</div>
<div style="clear: both; height: 1px; overflow: hidden;"></div>
<div>
<div id="a-course">
<strong>■<span><?php echo $title_6;?></span></strong><br />
<?php echo $office_1;?>
<ul>
<li><span>　<?php echo $text_1;?></span></li>
<li><span>　<?php echo $text_2;?></span></li>
</ul>
　<?php echo $text_3;?><br /><br />
</div>
<div id="b-course">
<strong>■<span><?php echo $title_6;?></span></strong><br />
<?php echo $office_1;?>
<ul>
<li><span>　<?php echo $text_1;?></span></li>
<li><span>　<?php echo $text_2;?></span></li>
</ul>
　<?php echo $text_3;?><br><br>
</div>
<div style="clear: both; border: solid 2px #ff0000; padding: 10px 20px; margin-bottom: 20px; font-weight: bold; display: none;">
<?php echo nl2br($text_8);?>
</div>
</div>
<div>
<div id="a-course">
<strong>■<span><?php echo $title_7;?></span></strong><br />
<?php echo $office_2;?><br>
<span class="tel">TEL:0176-75-2909</span>
</div>
<div id="b-course">
<strong>■<span><?php echo $title_7;?></span></strong><br />
<?php echo $office_2;?><br>
<span class="tel">TEL:0176-75-2909</span>
</div>
<div style="clear: both; height: 1px; overflow: hidden;"></div>
</div>
<br />
<div>
<?php if ($lang=='co'){?>
※상기 운항시간은 통상 운항시간입니다.<br>
페스티벌기간중에는 운항시간이 다를 수 있으므로 확인하시기 바랍니다.
<?php } else if ($lang=='chi'){?>
※以上为全年的航行时间。<br>交通管制期间内航行时间将有更改的可能，敬请确认时间。
<?php } else if ($lang=='tchi'){?>
※以上為全年的航行時間。<br>交通管制期間內航行時間將有更改的可能，敬請確認時間。
<?php } else if ($lang=='en'){?>
※The above is the operation period for the year.<br>
Please confirm during FESTA as activities may vary.
<?php } else {?>
※上記運行期間は通年の運行期間です。<br />フェスタ期間中は異なる場合がございますのでご確認ください。
<?php } ?>
</div>
<br>
<!-- div><strong>※シャトルバスチケットの提示で遊覧船乗船券売所で割引があります。</strong><br>
十和田湖遊覧船（十和田観光電鉄） 　休屋⇔休屋　および　休屋⇔子ノ口 1400円→1000円<br>
</div -->
</div>
</div>
</div>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
}
//-->
</script>
            
 </div>
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
