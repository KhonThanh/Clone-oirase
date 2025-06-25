<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "駐車場ガイド";
  $maintitle = "シャトルバス運行/駐車場ガイド";
  $text_0 = "マイカー・観光バス等でお越しの方へ";
  $map = "parkingmap2024new.png";
  $parking = "駐車場";
  $yakeyama_parking = "奥入瀬渓流温泉スキー場前駐車場（410台）";
  $yasumiya_parking = "休屋駐車場（計640台）";
  $parking1 = "奥入瀬渓流温泉スキー場前駐車場１";
  $parking2 = "奥入瀬渓流温泉スキー場前駐車場２";
  $parking5 = "奥入瀬渓流温泉スキー場前駐車場３";
  $parking3 = "休屋北駐車場";
  $parking4 = "休屋南駐車場";
  break;
 case 'en':
  $subtitle = "Parking lot guide";
  $maintitle = "Details of private vehicle traffic restrictions / parking lot guide";
  $text_0 = "To visitors coming by private vehicles during private vehicle restriction periods.";
  $map = "parkingmap17102024en.png";
  $parking = "Parking lot";
  $yakeyama_parking = "Parking lot in front of Oirase Keiryu Onsen Ski Resort (410 space)";
  $yasumiya_parking = "Yasumiya parking lot (640 space avaliable)";
  $parking1 = "Parking lot in front of Oirase Keiryu Onsen Ski Resort １";
  $parking2 = "Parking lot in front of Oirase Keiryu Onsen Ski Resort ２";
  $parking5 = "Parking lot in front of Oirase Keiryu Onsen Ski Resort ３";
  $parking3 = "Yasumiyakita parking lot";
  $parking4 = "Yasumiyaminami parking lot";
  break;
 case 'co':
  $subtitle = "주차장과 셔틀버스";
  $maintitle = "승용차운행 규제 내용/ 주차장 안내";
  $text_0 = "승용차운행 규제기간중 승용차로 오시는 분들께";
  $map = "parkingmap19102024_co.png";
  $parking = "주차장";
  $yakeyama_parking = "오이라세 스키장 앞 주차장（410개 주차 공간）";
  $yasumiya_parking = "야스미야주차장（총640대）";
  $parking1 = "오이라세 스키장 앞 주차장１";
  $parking2 = "오이라세 스키장 앞 주차장２";
  $parking5 = "오이라세 스키장 앞 주차장３";
  $parking3 = "야스미야 북문주차장";
  $parking4 = "야스미야 남문주차장";
  break;
 case 'chi':
  $subtitle = "停车场指南";
  $maintitle = "观光班车服务/停车场指南";
  $text_0 = "开车、乘坐观光巴士等来访的游客请注意";
  $map = "parkingmap19102024_chi.png";
  $parking = "停车场";
  $yakeyama_parking = "奥入濑溪流温泉滑雪场停车场（410 单位）";
  $yasumiya_parking = "休屋停车场（共计640台）";
  $parking1 = "奥入濑溪流温泉滑雪场停车场１";
  $parking2 = "奥入濑溪流温泉滑雪场停车场２";
  $parking5 = "奥入濑溪流温泉滑雪场停车场３";
  $parking3 = "休屋北停车场";
  $parking4 = "休屋南停车场";
  break;
 case 'tchi':
  $subtitle = "停車場指南";
  $maintitle = "觀光班車服務/停車場指南";
  $text_0 = "開車、乘坐觀光巴士等來訪的遊客請注意";
  $map = "parkingmap19102024_tchi.png";
  $parking = "停車場";
  $yakeyama_parking = "奧入瀨溪流溫泉滑雪場停車場（410 單位）";
  $yasumiya_parking = "休屋停車場（共計640台）";
  $parking1 = "奧入瀨溪流溫泉滑雪場停車場１";
  $parking2 = "奧入瀨溪流溫泉滑雪場停車場２";
  $parking5 = "奧入瀨溪流溫泉滑雪場停車場３";
  $parking3 = "休屋北停車場";
  $parking4 = "休屋南停車場";
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
<h3><?php echo $parking;?></h3>
<br>
<div class="right-inner parents"><strong style="font-size: 18px;"><?php echo $text_0;?></strong> <br />
<div class="box-1">
<?php if ($lang=='co'){?>
자가용차 교통규제기간에는, 규제구간으로의 차량진입을 삼가해주시기 바랍니다.<br>
<strong>오이라세 계류에 승용차・관광버스로 오실 때는, <span class="color_navy">오이라세 스키장 앞 주차장(무료), 야스야마주차장(유료)</span>에 주차하신후, <span class="color_navy">셔틀버스(유료)</span>를 이용해 주십시오</strong>
<?php } else if ($lang=='chi'){?>
私家车交通管制期间，请勿將车辆开入管制区间。<br>
<strong>开车、乘坐观光巴士等前来奥入濑溪流者，请将车辆停泊於<span class="color_navy">奥入濑溪流温泉滑雪场停车场（免费）</span>或<span class="color_navy">休屋停车场（收费）</span>内之后再搭乘<span class="color_navy">观光班车（收费）</span>。</strong>
<?php } else if ($lang=='tchi'){?>
私家車交通管制期間，請勿將車輛開入管制區間。<br>
<strong>開車、乘坐觀光巴士等前來奧入瀨溪流者，請將車輛停泊於<span class="color_navy">奧入瀨溪流溫泉滑雪場停車場（免費）</span>或<span class="color_navy">休屋停車場（收費）</span>內之後再搭乘<span class="color_navy">觀光班車（收費）</span>。</strong>
<?php } else if ($lang=='en'){?>
During private vehicles restriction periods, please refrain from driving into restricted areas.<br>
<strong>If you are traveling to Oirase Keiryu by private vehicle or sightseeing bus, please park at Parking lot in front of Oirase Keiryu Onsen Ski Resort(free) or Yasumiya parking lot (charged) then use the shuttle bus (charged).<span class="color_navy">Parking lot in front of Oirase Keiryu Onsen Ski Resort(free)</span> or <span class="color_navy">Yasumiya parking lot (charge)</span> then use <span class="color_navy">the shuttle bus (charge)</span>.</strong>
<?php } else {?>
マイカー交通規制期間は、規制区間への車両の進入はお控えください。<br>
<strong>奥入瀬渓流へマイカー・観光バス等でお越しの際は、<span class="color_navy">奥入瀬渓流温泉スキー場前駐車場（無料）・休屋駐車場（有料）</span>に駐車の上、<span class="color_navy">シャトルバス（有料）</span>をご利用ください</strong>
<?php } ?>
</div>
<div class="text_r">▶<a href="<?php echo $site_url;?>/<?php echo $lang;?>/bus-ship#timetable" class="td_n color_blk">
<?php if ($lang=='co'){?>
셔틀버스 시간표 보기
<?php } else if ($lang=='chi'){?>
请按此参阅观光班车时间表
<?php } else if ($lang=='tchi'){?>
請按此參閱觀光班車時間表
<?php } else if ($lang=='en'){?>
The bus shuttle schedule is here.
<?php } else {?>
シャトルバスの時刻はコチラ
<?php } ?>
</a></div>
</div>
<!-- p style="color: red">※平成28年度の情報です。</p -->
<div class="right-inner">
<center>
<img src="<?php echo $site_url;?>/pages/images/<?php echo $map;?>" alt="" /></td>
</center>
<a name="map"></a>
<div id="yasumiya-parking">
<strong>■ <span><?php echo $yasumiya_parking;?></span></strong>
<ul class="parents">
<li class="parking3"><?php echo $parking3;?></li>
<li class="parking4"><?php echo $parking4;?></li>
</ul>
<div id="map1"></div>
</div>
<div id="yakiyama-parking">
<strong>■ <span><?php echo $yakeyama_parking;?></span></strong>
<ul class="parents" style="font-size: 15px;">
<li class="parking1"><?php echo $parking1;?></li>
<li class="parking2"><?php echo $parking2;?></li>
<li class="parking5"><?php echo $parking5;?></li>
</ul>

<div id="map2"></div>
</div>
<br>
</div>

 </div>
 <div class="clear"></div>
</div>
</div>
<script>
<!--
yasumiya_pos = [[40.427770, 140.895092],[40.4296506,140.8952872],[40.4251965,140.8945589]];
yasumiya_title = ['<?php echo $parking3;?>','<?php echo $parking4;?>'];
yasumiya_icon = ['ico_p3.gif','ico_p4.gif'];
yakeyama_pos = [[40.577738, 140.993337],[40.578344, 140.992288],[40.577582, 140.994194],[40.577640, 140.989791]];
yakeyama_title = ['<?php echo $parking1;?>','<?php echo $parking2;?>'];
yakeyama_icon = ['ico_p1.gif','ico_p2.gif','ico_p5.gif'];

function initmap(id,title,position,icon) {
  var mapOptions = {
    center: { lat:  position[0][0],lng: position[0][1] },
    zoom: 16,
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
      icon:img,
    });
  }
}
jQuery(window).load(function(){
  initmap('map1',yasumiya_title,yasumiya_pos,yasumiya_icon);
  initmap('map2',yakeyama_title,yakeyama_pos,yakeyama_icon);
});
-->
</script>
<?php
include "footer.php";
?>
