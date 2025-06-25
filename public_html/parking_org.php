<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "駐車場ガイド";
  $maintitle = "マイカー交通規制/駐車場ガイド";
  $text_0 = "マイカー交通規制期間にマイカーでお越しの方へ";
  $map = "parkingmap2019.png";
  $parking = "駐車場";
  $yakeyama_parking = "焼山駐車場（計420台）";
  $yasumiya_parking = "休屋駐車場（計640台）";
  $parking1 = "奥入瀬渓流温泉スキー場１";
  $parking2 = "奥入瀬渓流温泉スキー場２";
  $parking5 = "奥入瀬渓流温泉スキー場３";
  $parking3 = "休屋北駐車場";
  $parking4 = "休屋南駐車場";
  break;
 case 'en':
  $subtitle = "Parking lot guide";
  $maintitle = "Details of private vehicle traffic restrictions / parking lot guide";
  $text_0 = "To the person(s) arriving by privatly owned vehicle during a private vehicle traffic restriction.";
  $map = "parkingmap2019_en.png";
  $parking = "Parking lot";
  $yakeyama_parking = "Yakeyama parking lot (420 space avaliable)";
  $yasumiya_parking = "Yasumiya parking lot (640 space avaliable)";
  $parking1 = "Oirase Keiryu Onsen Ski Resort １";
  $parking2 = "Oirase Keiryu Onsen Ski Resort ２";
  $parking5 = "Oirase Keiryu Onsen Ski Resort ３";
  $parking3 = "Yasumiyakita parking lot";
  $parking4 = "Yasumiyaminami parking lot";
  break;
 case 'co':
  $subtitle = "주차장과 셔틀버스";
  $maintitle = "승용차운행 규제 내용/ 주차장 안내";
  $text_0 = "승용차운행 규제기간중 승용차로 오시는 분들께";
  $map = "parkingmap2019_co.png";
  $parking = "주차장";
  $yakeyama_parking = "야케야마주차장（총420대）";
  $yasumiya_parking = "야스미야주차장（총640대）";
  $parking1 = "오이라세 계류　온천스키장１";
  $parking2 = "오이라세 계류　온천스키장２";
  $parking5 = "오이라세 계류　온천스키장３";
  $parking3 = "야스미야 북문주차장";
  $parking4 = "야스미야 남문주차장";
  break;
 case 'chi':
  $subtitle = "停车场指南";
  $maintitle = "私家车交通管制详情/停车场指南";
  $text_0 = "致私家车交通管制期间内开车来访的游客们";
  $map = "parkingmap2019_chi.png";
  $parking = "停车场";
  $yakeyama_parking = "烧山停车场（共计420台）";
  $yasumiya_parking = "休屋停车场（共计640台）";
  $parking1 = "奥入濑溪流温泉滑雪场１";
  $parking2 = "奥入濑溪流温泉滑雪场２";
  $parking5 = "奥入濑溪流温泉滑雪场３";
  $parking3 = "休屋北停车场";
  $parking4 = "休屋南停车场";
  break;
 case 'tchi':
  $subtitle = "停車場指南";
  $maintitle = "私家車交通管制詳情/停車場指南";
  $text_0 = "私家車交通管制期間內開車來訪的遊客請注意";
  $map = "parkingmap2019_tchi.png";
  $parking = "停車場";
  $yakeyama_parking = "燒山停車場（共計420台）";
  $yasumiya_parking = "休屋停車場（共計640台）";
  $parking1 = "奧入瀨溪流温泉滑雪場１";
  $parking2 = "奧入瀨溪流温泉滑雪場２";
  $parking5 = "奧入瀨溪流温泉滑雪場３";
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
승용차운행규제기간에 실시하는 「에코로드구간」은 자동차・자동이륜차(스쿠터포함) 통행 금지구간입니다.<br>
<strong>오이라세 계류에 승용차로 오실때는, <span class="color_navy">야케(오이라세 계류　온천스키장)야마주차장(무료), 야스야마주차장(유료)</span>에 주차하신후, <span class="color_navy">셔틀버스(유료)</span>를 이용해주십시오</strong>
<?php } else if ($lang=='chi'){?>
於私家车交通管制期间，《生态路线区间》内禁止汽车・摩托车（包括轻型摩托车）通行。<br>
开车前来奥入濑溪流者，请将车辆停泊於<span class="color_navy">烧山（奥入濑溪流温泉滑雪场）停车场（免费）或休屋停车场（收费）</span>内，然后再搭乘<span class="color_navy">观光班车（收费）</span>至目的地。
<?php } else if ($lang=='tchi'){?>
在私家車交通管制期間內實施的“生態路綫區間”，禁止汽車・摩托車（包括輕型機車）通行。<br>
開車前來奧入瀨溪流者，請將車輛停泊於<span class="color_navy">燒山（奧入瀨溪流温泉滑雪場）停車場（免費）或休屋停車場（收費）</span>內之後再搭乘<span class="color_navy">觀光班車（收費）</span>至目的地。
<?php } else if ($lang=='en'){?>
The Eco- road section affected during the private vehicle traffic restriction are all private vehicles and a motorcycle (include motorbike).<br>
For person(s) arriving to Oirase Stream by privately owned vehicles.  Please use <span class="color_navy">the upper shuttle bus charge</span> for parking, Parking in <span class="color_navy">the Yakeyama (Oirase Keiryu Onsen Ski Resort) parking lot is free</span>, there is <span class="color_navy">a fee for parking in the Yasumiya parking lot</span>.
<?php } else {?>
マイカー交通規制期間に実施する「エコロード区間」は、自動車・自動二輪（原付バイクを含む）は通行止めとなります。<br>
<strong>奥入瀬渓流へマイカーでお越しの際は、<span class="color_navy">焼山(奥入瀬渓流温泉スキー場)駐車場（無料）・休屋駐車場（有料）</span>に駐車の上、<span class="color_navy">シャトルバス（有料）</span>をご利用ください</strong>
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
<ul class="parents">
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
