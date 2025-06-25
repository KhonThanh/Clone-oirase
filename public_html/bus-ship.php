<?php
global $lang;

$is_print = isset($_REQUEST['print']) ? 'noprn' : '';

$site_url = SITE_URL;

switch ($lang) {
  case 'ja':
    $subtitle = "駐車場とシャトルバス";
    $maintitle = "シャトルバス運行/シャトルバス・遊覧船";
    $title_1 = "シャトルバス、遊覧船のご利用について";
    $title_8 = "シャトルバス運行の目的・背景";
    $text_0 = "マイカー・観光バス等でお越しの方へ";
    $map = "busmap2024.png";
    $title_2 = "シャトルバス時刻表";
    $title_3_0 = "シャトルバス運賃";
    $title_3_0_1 = "チケット販売場所";
    $text_4 = "1日フリーパス券";
    $text_5 = "小学生以下無料";
    $text_6 = "大人";
    $text_7 = "1,500円";
    $title_3 = "運行期間";
    $from_1 = "焼山発";
    $from_2 = "休屋発";
    $to_1 = "休屋行き";
    $to_2 = "焼山行き";
    $first = "始発";
    $last = "最終";
    $sta_1 = "奥入瀬渓流温泉スキー場前駐車場";
    $sta_2 = "紫明渓";
    $sta_3 = "石ケ戸";
    $sta_4 = "馬門岩";
    $sta_5 = "雲井の滝";
    $sta_6 = "雲井の流れ";
    $sta_7 = "銚子大滝";
    $sta_8 = "子ノ口バス停";
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
    $text_1 = "大人 1,650円";
    $text_2 = "小人 880円";
    $text_3 = "（団体割引あり：15名以上～）";
    $text_8 = "シャトルバスチケットを持参すると、大人が100円割引になります。\n（※小人の割引はありません）";
    $text_9 = "(最終便を除く)";
    $text_10 = "詳細な時刻表はこちら>>";
    $text_11 = "平日：１０月21日（月）～25日（金）";
    $text_12 = "休日：１０月26日（土）・27日（日）";
    $text_13 = "シャトルバスのバス停";
    $pdf1 = "fin_24奥入瀬時刻表_A41004.pdf";
    $bus_stop = "";
    $auto_ticket = "";
    break;
  case 'en':
    $subtitle = "Parking lot guide and shuttle bus";
    $maintitle = "Shuttle bus service / Shuttle bus ∙ Tour boat";
    $title_1 = "Use of a shuttle bus and sightseeing boat";
    $title_8 = "Purpose and background of shuttle bus service";
    $text_0 = "For those travling by private vehicle or sightseeing bus";
    $map = "busmap17102024_en.jpg";
    $title_2 = "The timetable of a shuttle bus schedule";
    $title_3_0 = "The fare of a shuttle bus";
    $title_3_0_1 = "Ticket office";
    $text_4 = "One day pass";
    $text_5 = "Children under 12 is free";
    $text_6 = "Adult";
    $text_7 = "1,500yen";
    $title_3 = "Operational period ";
    $from_1 = "From Yakeyama";
    $from_2 = "From Yasumiya";
    $to_1 = "To Yasumiya";
    $to_2 = "To Yakeyama";
    $first = "First Departure";
    $last = "Last Departure";
    $sta_1 = "Parking lot in front of Oirase Keiryu Onsen Ski Resort";
    $sta_2 = "Shimeikei";
    $sta_3 = "Ishigedo";
    $sta_4 = "Makadoiwa";
    $sta_5 = "Kumoinotaki";
    $sta_6 = "Kumoinonagare";
    $sta_7 = "Choshiotaki";
    $sta_8 = "Nenokuchi";
    $sta_9 = "Yasumiya parking lot";
    $sta_10 = 'Oirase Stream Mansion';
    $sta_11 = 'JR Bus Towada Lake Station';
    $title_4 = "Towada lake sightseeing boat (Towada sightseeing railroad)";
    $title_5 = "Operation time";
    $title_6 = "Regular fare";
    $title_7 = "Contact us（sightseeing boat）";
    $place_1 = "Yasumiya";
    $place_2 = "Nenokuchi";
    $place_3 = "Yasumiya";
    $office_1 = "Towada lake sightseeing boat (Towada sightseeing railroad)";
    $office_2 = "Towada Lake sightseeing boat operation office organization reservation center";
    $text_1 = "Adults 1,650 yen";
    $text_2 = "Children 880 yen";
    $text_3 = "(Group discounts available : 15 people or more)";
    $text_8 = "If you present the shuttle bus ticket, adults get a discount of 100 yen. \n( ※ There is no discount for chidren)";
    $text_9 = "";
    $text_10 = "Click here for a detailed timetable>>>";
    $text_11 = "Weekdays: October 21st (Mon) to October 25th (Fri)";
    $text_12 = "Weekends: October 26th (Sat) and October 27th (Sun)";
    $text_13 = "Shuttle bus bus stop";
    $pdf1 = "fin_24%E5%A5%A5%E5%85%A5%E7%80%AC%E6%99%82%E5%88%BB%E8%A1%A8_A41004.pdf";
    $bus_stop = " bus stop";
    $auto_ticket = "";
    break;
  case 'co':
    $subtitle = "주차장과 셔틀버스";
    $maintitle = "셔틀버스 운행/셔틀버스・유람선";
    $title_1 = "셔틀버스, 유람선 이용에 관해서";
    $title_8 = "셔틀버스 운행의 목적・배경";
    $text_0 = "승용차・관광버스로 오시는 분에게";
    $map = "busmap23102024_co.png";
    $title_2 = "셔틀버스 시간표(예정)";
    $title_3_0 = "셔틀버스 버스요금";
    $title_3_0_1 = "Ticket office";
    $text_4 = "1일 버스자유이용권";
    $text_5 = "12세이하 무료";
    $text_6 = "대인";
    $text_7 = "1,500엔";
    $title_3 = "운행기간";
    $from_1 = "야케야마출발";
    $from_2 = "야스미야출발";
    $to_1 = "야스미야행";
    $to_2 = "야케야마행";
    $first = "첫차";
    $last = "막차";
    $sta_1 = "오이라세 스키장 앞 주차장";
    $sta_2 = "시메이케이";
    $sta_3 = "이시게도";
    $sta_4 = "마카도이와";
    $sta_5 = "구모이노타키";
    $sta_6 = "구모이노나가레";
    $sta_7 = "조시오타키";
    $sta_8 = "네노쿠치";
    $sta_9 = "야스야마주차장";
    $sta_10 = '오이라세 계류관 앞';
    $sta_11 = 'JR버스 도와다코역';
    $title_4 = "도와다호 유람선 가이드(운항코스안내)";
    $title_5 = "운항시간";
    $title_6 = "요금";
    $title_7 = "문의（유람선）";
    $place_1 = "야스미야";
    $place_2 = "네노쿠치";
    $place_3 = "야스미야";
    $office_1 = "도와다호 유람선(도와다관광전철회사)";
    $office_2 = "도와다호 유람선운항사무소 단체예약센터";
    $text_1 = "어른 1,650엔";
    $text_2 = "어린이 880엔";
    $text_3 = "(단체할인요금: 15명이상～)";
    $text_8 = "셔틀버스티켓을 지참하시면, 어른요금이 100엔 할인됩니다.\n(※어린이요금은 할인이 없습니다)";
    $text_9 = "";
    $text_10 = "자세한 시간표는 이쪽 >>>";
    $text_11 = "평일: 10월 21일 (월요일)부터 10월 25일 (금요일)까지";
    $text_12 = "휴일: 10월 26일 (토요일) 및 10월 27일 (일요일)";
    $text_13 = "셔틀버스 - 버스 정류장";
    $pdf1 = "fin_24奥入瀬時刻表_A41004.pdf";
    $bus_stop = " 버스정류장";
    $auto_ticket = "";
    break;
  case 'chi':
    $subtitle = "停车场指南";
    $maintitle = "观光班车运行服务/观光班车・游览船";
    $title_1 = "观光班车、游览船信息";
    $title_8 = "观光班车运行服务的目的与背景";
    $text_0 = "开车、乘坐观光巴士等来访的游客请注意";
    $map = "busmap23102024_chi.png";
    $title_2 = "观光班车时间表（预定）";
    $title_3_0 = "观光班车巴士车资";
    $title_3_0_1 = "Ticket office";
    $text_4 = "巴士一日券";
    $text_5 = "12岁以下免费";
    $text_6 = "成人";
    $text_7 = "1,500日元";
    $title_3 = "行驶期间";
    $from_1 = "烧山发车";
    $from_2 = "休屋发车";
    $to_1 = "往休屋";
    $to_2 = "往焼山";
    $first = "首班";
    $last = "末班";
    $sta_1 = "奥入濑溪流温泉滑雪场停车场";
    $sta_2 = "紫明溪";
    $sta_3 = "石之户";
    $sta_4 = "马门岩";
    $sta_5 = "云井瀑布";
    $sta_6 = "云井溪流";
    $sta_7 = "铫子大瀑布";
    $sta_8 = "子之口";
    $sta_9 = "休屋停车场";
    $sta_10 = '奥入濑溪流馆前';
    $sta_11 = 'JR巴士 十和田车站';
    $title_4 = "十和田湖游览船指南（航线说明）";
    $title_5 = "航行时间";
    $title_6 = "一般票价";
    $title_7 = "咨询（游览船）";
    $place_1 = "休　屋";
    $place_2 = "子之口";
    $place_3 = "休屋";
    $office_1 = "十和田湖游览船（十和田观光电铁）";
    $office_2 = "十和田湖游览船运航事务所团体预约中心";
    $text_1 = "成人 1650日元";
    $text_2 = "小孩 880日元";
    $text_3 = "（团体优惠票价：15名以上～）";
    $text_8 = "提示您的巴士车票，大人将享有100日元优惠。\n(※小孩无优惠)";
    $text_9 = "";
    $text_10 = "详细时刻表请点击>>>";
    $text_11 = "平日：10月21日（星期一）至10月25日（星期五）";
    $text_12 = "休息日：10月26日（周六）、27日（周日）";
    $text_13 = "接驳巴士巴士站";
    $pdf1 = "fin_24奥入瀬時刻表_A41004.pdf";
    $bus_stop = " 观光班车车站";
    $auto_ticket = "";
    break;
  case 'tchi':
    $subtitle = "停車場指南";
    $maintitle = "觀光班車運行服務/觀光班車・遊覽船";
    $title_1 = "觀光班車、遊覽船資訊";
    $title_8 = "觀光班車運行服務的目的與背景";
    $text_0 = "開車、乘坐觀光巴士等來訪的遊客請注意";
    $map = "busmap23102024_tchi.png";
    $title_2 = "觀光班車時間表（預定）";
    $title_3_0 = "觀光班車巴士車資";
    $title_3_0_1 = "Ticket office";
    $text_4 = "巴士一日券";
    $text_5 = "幼兒、小學生免費";
    $text_6 = "成人";
    $text_7 = "1,500日元";
    $title_3 = "行駛期間";
    $from_1 = "燒山發車";
    $from_2 = "休屋發車";
    $to_1 = "往休屋";
    $to_2 = "往燒山";
    $first = "首班";
    $last = "末班";
    $sta_1 = "奧入瀨溪流溫泉滑雪場停車場";
    $sta_2 = "紫明溪";
    $sta_3 = "石之戶";
    $sta_4 = "馬門岩";
    $sta_5 = "雲井瀑布";
    $sta_6 = "雲井之流";
    $sta_7 = "銚子大瀑布";
    $sta_8 = "子之口";
    $sta_9 = "休屋停車場";
    $sta_10 = '奧入瀨溪流館前';
    $sta_11 = 'JR巴士 十和田車站';
    $title_4 = "十和田湖遊覽船指南（航綫說明）";
    $title_5 = "航行時間";
    $title_6 = "一般票價";
    $title_7 = "咨詢（遊覽船）";
    $place_1 = "休　屋";
    $place_2 = "子之口";
    $place_3 = "休屋";
    $office_1 = "十和田湖遊覽船（十和田觀光電鐵）";
    $office_2 = "十和田湖遊覽船運航事務所團體預約中心";
    $text_1 = "成人 1650日元";
    $text_2 = "小孩 880日元";
    $text_3 = "（團體票價有優惠：15名以上～）";
    $text_8 = "提示您的巴士車票，成人將享有100日元優惠。\n（※幼兒、小學生無優惠）";
    $text_9 = "";
    $text_10 = "詳細時刻表請點選>>>";
    $text_11 = "平日：10月21日（星期一）至10月25日（星期五）";
    $text_12 = "休息日：10月26日（週六）、27日（週日）";
    $text_13 = "接駁巴士巴士站";
    $pdf1 = "fin_24奥入瀬時刻表_A41004.pdf";
    $bus_stop = " 巴士停靠站";
    $auto_ticket = "";
    break;
}

include "header.php";
?>
</div>
<div id="main_sub">
  <div id="sidebar">
    <?php include "sidebar.php"; ?>
  </div>
  <div id="main_contents">
    <?php if (!$is_print): ?>
      <h2><?php echo $maintitle; ?></h2>
      <h3><?php echo $title_8; ?></h3>
      <div class="right-inner">
        <p class="txt02">
          <?php if ($lang == 'co') { ?>
            오이라세 계류는, 우리 모두의 재산입니다.<br>
            우리 모두가 동등하게 그 혜택을 누릴 권리가 있습니다.
          <?php } else if ($lang == 'chi') { ?>
            奥入濑溪流，是我们大家的财富。<br>
            每个人都有权利平等的享有这大自然的恩惠。
          <?php } else if ($lang == 'tchi') { ?>
            奧入瀨溪流，是我們大家的財富。<br>
            每個人都有權利平等的享有這大自然的恩惠。
          <?php } else if ($lang == 'en') { ?>
            Oirase Stream is all of our property.<br>
            Everyone has the right to enjoy it.
          <?php } else { ?>
            奥入瀬渓流は、わたしたちみんなの財産。<br />
            誰もが等しくその恩恵を受ける権利があります。
          <?php } ?>
        </p>
        <br />
        <br />
        <p>
          <?php if ($lang == 'co') { ?>
            그러나 관광시즌에는 차가 몰려 교통정체와 환경에 악영향을 끼치는 등 여러 문제가 발생하고 있습니다. 또한 계류 주변의 국도102호는 원래 지역의 생활도로와 산업도로의 기능을 가진 도로이며, 계류를 우회하는 도로는, 차량이 많아짐으로 인해 대형차가 다니기는 힘든 상황이 되었습니다. <br />
          <?php } else if ($lang == 'chi') { ?>
            然而一到观光旺季车子蜂拥而至，导致拥堵、引起对环境的影响等等问题。 再来溪流沿路的102号国道原本即是当地的生活道路和产业道路，而迂回路上大型车辆却难以相互擦肩而过。<br />
          <?php } else if ($lang == 'tchi') { ?>
            然而一到觀光旺季車子蜂擁而至，導致擁堵、引起對環境的影響等等問題。 再來溪流沿路的102號國道原本即是當地的生活道路和產業道路，而迂迴路上大型車輛卻難以相互擦肩而過。<br />
          <?php } else if ($lang == 'en') { ?>
            On the other hand, a rise in vehicles pour in during the tourist season causing various problems, such as traffic congestion and other environmental concerns. Also, the National Highway No.102 along the mountain stream doubles as a local road with an industrial area because a segment of the road bypasses a mountain stream leading to difficulties passing large-size vehicles.<br />
          <?php } else { ?>
            　しかし、その反面、観光シーズンには車が殺到して、渋滞や環境への影響を引き起こすなどの様々な問題が生じています。また、渓流沿いの国道102号は、もともと地域の生活道路や産業道路としての機能を担っていますが、渓流を迂回する道路は、大型車のすれ違いが困難な状況となっています。<br />
          <?php } ?>
        </p>
        <br />
      </div>
    <?php endif; ?>
    <div class="w60">
      <h3><?php echo $title_1; ?></h3>
      <br>
      <!-- p style="color: red">※平成28年度の情報です。</p -->
      <div class="right-inner parents"><strong style="font-size: 18px;"><?php echo $text_0; ?></strong> <br />
        <!-- a href="../ivent/ShuttleBusMap_2015.pdf" target="_blank">シャトルバスマップはこちら（PDF：1.14MB）</a><br / -->
        <div class="box-1">
          <?php if ($lang == 'co') { ?>
            자가용차 교통규제기간에는, 규제구간으로의 차량진입을 삼가해주시기 바랍니다.<br>
            <strong>오이라세 계류에 승용차・관광버스로 오실 때는, <span class="color_navy">오이라세 스키장 앞 주차장 (무료), 야스야마주차장(유료)</span>에 주차하신후, <span class="color_navy">셔틀버스(유료)</span>를 이용해 주십시오</strong>
          <?php } else if ($lang == 'chi') { ?>
            私家车交通管制期间，请勿將车辆开入管制区间。<br>
            <strong>开车、乘坐观光巴士等前来奥入濑溪流者，请将车辆停泊於<span class="color_navy">奥入濑溪流温泉滑雪场停车场（免费）</span>或<span class="color_navy">休屋停车场（收费）</span>内之后再搭乘<span class="color_navy">观光班车（收费）</span>。</strong>
          <?php } else if ($lang == 'tchi') { ?>
            私家車交通管制期間，請勿將車輛開入管制區間。<br>
            <strong>開車、乘坐觀光巴士等前來奧入瀨溪流者，請將車輛停泊於<span class="color_navy">奧入瀨溪流溫泉滑雪場停車場（免費）</span>或<span class="color_navy">休屋停車場（收費）</span>內之後再搭乘<span class="color_navy">觀光班車（收費）</span>。</strong>
          <?php } else if ($lang == 'en') { ?>
            During private vehicles restriction periods, please refrain from driving into restricted areas.<br>
            <strong>If you are traveling to Oirase Keiryu by private vehicle or sightseeing bus, please park at <span class="color_navy">Parking lot in front of Oirase Keiryu Onsen Ski Resort(free)</span> or <span class="color_navy">Yasumiya parking lot (charge)</span> then use <span class="color_navy">the shuttle bus (charge)</span>.</strong>
          <?php } else { ?>
            マイカー交通規制期間は、規制区間への車両の進入はお控えください。<br>
            <strong>奥入瀬渓流へマイカー・観光バス等でお越しの際は、<span class="color_navy">奥入瀬渓流温泉スキー場前駐車場（無料）・休屋駐車場（有料）</span>に駐車の上、<span class="color_navy">シャトルバス（有料）</span>をご利用ください</strong>
          <?php } ?>
        </div>
        <div class="text_r">▶<a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/parking" class="td_n color_blk">
            <?php if ($lang == 'co') { ?>
              주차장 상세내용은 이쪽으로
            <?php } else if ($lang == 'chi') { ?>
              请按此参阅停车场信息
            <?php } else if ($lang == 'tchi') { ?>
              請按此參閱停車場信息
            <?php } else if ($lang == 'en') { ?>
              Parking lot details are here.
            <?php } else { ?>
              駐車場について詳しくはこちら
            <?php } ?>
          </a></div>
      </div>
      <center>
        <img src="<?php echo $site_url; ?>/pages/images/<?php echo $map; ?>" alt="<?php echo $title_1; ?>" <?php if ($is_print) echo ' style="width: 65%"'; ?> /><br />
        <!-- img src="<?php echo $site_url; ?>/regulation/img/b_zoom_ja.gif" width="82" height="19" alt="拡大する" onclick="MM_openBrWindow('<?php echo $site_url; ?>/bus-ship_zoom','win700','width=700,height=700')" /-->
        <br />
      </center>
      <?php if ($is_print): ?>
        <div id="qrcode">
          <img src="<?php echo $site_url . '/qr.php?lang=' . $lang; ?>">
        </div>
      <?php endif; ?>
    </div>
    <a name="timetable"></a>
    <div class="<?php echo $is_print; ?>">
      <h3><?php echo $title_3_0; ?></h3>
      <div class="right-inner time-table-detail">
        <div style="font-size: 15px;">
          <strong><?php echo $text_4; ?>　(<?php echo $text_5; ?>)</strong><br>
          <strong><?php echo $text_6; ?>：<?php echo $text_7; ?></strong>
        </div>
        <br>
        <?php if ($lang == 'ja') { ?>
          <h4>■<span>電子チケット販売</span></h4>
          <a href="https://travel.willer.co.jp/st/3/ja/pc/tour/package/?mcid=57908" target="_blank">お申込みはこちら</a><br>
          <br>
        <?php } ?>
        <a name="map"></a>
        <h4>■<span><?php echo $title_3_0_1; ?></span></h4>
        <div id="ticket-office">
          <ul class="parents">
            <li class="ticket-offic1"><?php echo $sta_1; ?></li>
            <li class="ticket-offic2"><?php echo $sta_8 . $bus_stop . $auto_ticket; ?></li>
            <li class="ticket-offic3"><?php echo $sta_11 . $bus_stop; ?></li>
          </ul>
          <div id="map1">
          </div>

        </div>
      </div>
    </div>
    <script>
      <!--
      to_pos = [
        [40.51089150900855, 140.96278550149808],
        [40.578511, 140.993489],
        [40.47883955737266, 140.94032451500172],
        [40.42648729738044, 140.8943412626255]
      ];
      to_title = ['<?php echo $sta_1 . $bus_stop; ?>', '<?php echo $sta_8 . $bus_stop; ?>', '<?php echo $sta_11 . $bus_stop; ?>'];
      to_icon = ['ico_to1.png', 'ico_to2.png', 'ico_to3.png'];

      function initmap(id, title, position, icon) {
        var mapOptions = {
          center: {
            lat: position[0][0],
            lng: position[0][1]
          },
          zoom: 11,
        };
        var map = new google.maps.Map(document.getElementById(id),
          mapOptions);
        showmarkers(map, title, position, icon);
      }

      function showmarkers(map, title, position, icon) {
        for (var i = 1; i < position.length; i++) {
          var pos = new google.maps.LatLng(position[i][0], position[i][1]);
          var img = "<?php echo $site_url; ?>/pages/images/" + icon[i - 1];
          var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: title[i - 1],
            icon: img
          });
        }
      }
      jQuery(window).load(function() {
        initmap('map1', to_title, to_pos, to_icon);
      });
      -->
    </script>

    <div class="w80">
      <h3><?php echo $title_2; ?></h3>
      <div class="right-inner time-table-detail" style="padding-bottom: 0;">
        <h4>■<span><?php echo $title_3; ?></span></h4>
        <p style="margin: 10px 0; display: none;">
          　※只今調整中です。決定次第掲載しますので、しばらくお待ちください。
        </p>
        <div>
          <?php if ($lang == 'ja') { ?>
            <!-- <strong>・2023年10月23日（月）～10月27日（金）<div class="disp_ib">【始発】9:00～【最終】15:30 </div></strong> -->
            <strong>・2024年10月21日（月）～25日（金）</strong>
          <?php } else if ($lang == 'en') { ?>
            <strong>·Monday October 21, 2024～Friday October 25, 2024 <div class="disp_ib">First Departure: 9:00am Final Departure: 4:00pm</div></strong>
          <?php } else if ($lang == 'co') { ?>
            <strong>・2024년10월21日（월）～10월25日（금）【첫차】9:00～【막차】16:00 </strong>
          <?php } else if ($lang == 'chi') { ?>
            <strong>・2024年10月21日（周一）～10月25日（周五）【首班】9:00～【末班】16:00</strong>
          <?php } else if ($lang == 'tchi') { ?>
            <strong>・2024年10月21日（週一）～10月25日（週五）【首班】9:00～【末班】16:00 </strong>
          <?php } ?>
        </div>
      </div>
      <!-- <div class="right-inner parents" style="padding-top: 0;">
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_1; ?><br />　
→<?php echo $to_1; ?></th>
<td align="center"><?php echo $first; ?></td>
<td rowspan="12" align="center" valign="center">
※1<br /><br />
<img src="<?php echo $site_url; ?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /><br />							</td>
<td align="center"><?php echo $last; ?> </td>
</tr>
<tr>
<td><?php echo $sta_1; ?></td>
<td align="center">9:00</td>
<td align="center">15:30</td>
</tr>
<tr>
<td><?php echo $sta_10; ?></td>
<td align="center">9:03</td>
<td align="center">15:33</td>
</tr>
<tr>
<td><?php echo $sta_2; ?></td>
<td align="center">9:06</td>
<td align="center">15:36</td>
</tr>
<tr>
<td><?php echo $sta_3; ?></td>
<td align="center">9:12</td>
<td align="center">15:42</td>
</tr>
<tr>
<td><?php echo $sta_4; ?></td>
<td align="center">9:15</td>
<td align="center">15:45</td>
</tr>
<tr>
<td><?php echo $sta_5; ?></td>
<td align="center">9:18</td>
<td align="center">15:48</td>
</tr>
<tr>
<td><?php echo $sta_6; ?></td>
<td align="center">9:22</td>
<td align="center">15:52</td>
</tr>
<tr>
<td><?php echo $sta_7; ?></td>
<td align="center">9:27</td>
<td align="center">15:57</td>
</tr>
<tr>
<td><?php echo $sta_8; ?></td>
<td align="center">9:33</td>
<td align="center">16:03</td>
</tr>
<tr>
<td><?php echo $sta_11; ?></td>
<td align="center">9:48</td>
<td align="center">16:18</td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_2; ?><br />　
→<?php echo $to_2; ?></th>
<td align="center"><?php echo $first; ?></td>
<td rowspan="12" align="center" valign="center">

※1<br /><br />
<img src="<?php echo $site_url; ?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /></td>
<td align="center"><?php echo $last; ?></td>
</tr>

<tr>
<td><?php echo $sta_11; ?></td>
<td align="center">9:10</td>
<td align="center">15:30</td>
</tr>
<tr>
<td><?php echo $sta_8; ?></td>
<td align="center">9:23</td>
<td align="center">15:46</td>
</tr>
<tr>
<td><?php echo $sta_7; ?></td>
<td align="center">9:26</td>
<td align="center">15:49</td>
</tr>
<tr>
<td><?php echo $sta_6; ?></td>
<td align="center">9:30</td>
<td align="center">15:53</td>
</tr>
<tr>
<td><?php echo $sta_5; ?></td>
<td align="center">9:33</td>
<td align="center">15:56</td>
</tr>
<tr>
<td><?php echo $sta_4; ?></td>
<td align="center">9:37</td>
<td align="center">16:00</td>
</tr>
<tr>
<td><?php echo $sta_3; ?></td>
<td align="center">9:42</td>
<td align="center">16:05</td>
</tr>
<tr>
<td><?php echo $sta_2; ?></td>
<td align="center">9:46</td>
<td align="center">16:09</td>
</tr>
<tr>
<td><?php echo $sta_10; ?></td>
<td align="center">9:50</td>
<td align="center">16:13</td>
</tr>
<tr>
<td><?php echo $sta_1; ?></td>
<td align="center">9:53</td>
<td align="center">16:16</td>
</tr>
</table>
<div class="clear">
<p class="float_l" style="margin-right: 4px;">※1</p>
<p class="ovf_h">
<?php if ($lang == 'co') { ?>
첫차부터 막차까지 <span style="color: #336600;">약30분간격으로 운행</span>
<?php } else if ($lang == 'chi') { ?>
首班与末班之间<span style="color: #336600;">约每隔30分钟一班</span>
<?php } else if ($lang == 'tchi') { ?>
首班與末班之間<span style="color: #336600;">約每隔30分鐘一班</span>
<?php } else if ($lang == 'en') { ?>
<span style="color: #336600;">Runs approximately every 30 minutes on the half hour</span> from the first bus to the last
<?php } else { ?>
始発から最終まで<span style="color: #336600;">約30分間隔で運行</span>
<?php } ?>
</p>
</div>
</div> -->
      <div class="right-inner time-table-detail" style="padding-bottom: 0;">
        <div>
          <?php if ($lang == 'ja') { ?>
            <!-- <strong>・2023年10月28日（土）～10月29日（日）<div class="disp_ib">【始発】8:00～【最終】16:00 </div></strong> -->
            <strong>・2024年10月26日（土）・27日（日）<div class="disp_ib"> </div></strong>
          <?php } else if ($lang == 'en') { ?>
            <strong>·Saturday October 26, 2024 ·Sunday October 27, 2024<div class="disp_ib">First Departure: 8:00am Final Departure: 4:00pm</div></strong>
          <?php } else if ($lang == 'co') { ?>
            <strong>・2024年10월26日（토）～10월27日（일）【첫차】8:00～【막차】16:00</strong>
          <?php } else if ($lang == 'chi') { ?>
            <strong>・2024년10月26日（周六）～10月27日（周日）【首班】8:00～【末班】16:00</strong>
          <?php } else if ($lang == 'tchi') { ?>
            <strong>・2024年10月26日（週六）～10月27日（週日）【首班】8:00～【末班】16:00 </strong>
          <?php } ?>
        </div>
      </div>
      <!-- <div class="right-inner parents" style="padding-top: 0;">
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_1; ?><br />　
→<?php echo $to_1; ?></th>
<td align="center"><?php echo $first; ?></td>
<td rowspan="12" align="center" valign="center">
※2<br /><br />
<img src="<?php echo $site_url; ?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /><br />							</td>
<td align="center"><?php echo $last; ?> </td>
</tr>
<tr>
<td><?php echo $sta_1; ?></td>
<td align="center">8:00</td>
<td align="center">16:00</td>
</tr>
<tr>
<td><?php echo $sta_10; ?></td>
<td align="center">8:03</td>
<td align="center">16:03</td>
</tr>
<tr>
<td><?php echo $sta_2; ?></td>
<td align="center">8:06</td>
<td align="center">16:06</td>
</tr>
<tr>
<td><?php echo $sta_3; ?></td>
<td align="center">8:12</td>
<td align="center">16:12</td>
</tr>
<tr>
<td><?php echo $sta_4; ?></td>
<td align="center">8:15</td>
<td align="center">16:15</td>
</tr>
<tr>
<td><?php echo $sta_5; ?></td>
<td align="center">8:18</td>
<td align="center">16:18</td>
</tr>
<tr>
<td><?php echo $sta_6; ?></td>
<td align="center">8:22</td>
<td align="center">16:22</td>
</tr>
<tr>
<td><?php echo $sta_7; ?></td>
<td align="center">8:27</td>
<td align="center">16:27</td>
</tr>
<tr>
<td><?php echo $sta_8; ?></td>
<td align="center">8:33</td>
<td align="center">16:33</td>
</tr>

<tr>
<td><?php echo $sta_11; ?></td>
<td align="center">8:48</td>
<td align="center">16:48</td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" class="time-table">
<tr>
<th align="left" bgcolor="#64AA44"><?php echo $from_2; ?><br />　
→<?php echo $to_2; ?></th>
<td align="center"><?php echo $first; ?></td>
<td rowspan="12" align="center" valign="center">

※2<br /><br />
<img src="<?php echo $site_url; ?>/pages/images/ico_lrarrow.gif" width="30" height="7" alt="←→" /></td>
<td align="center"><?php echo $last; ?></td>
</tr>

<tr>
<td><?php echo $sta_11; ?></td>
<td align="center">8:00</td>
<td align="center">16:00</td>
</tr>

<tr>
<td><?php echo $sta_8; ?></td>
<td align="center">8:13</td>
<td align="center">16:13</td>
</tr>
<tr>
<td><?php echo $sta_7; ?></td>
<td align="center">8:16</td>
<td align="center">16:16</td>
</tr>
<tr>
<td><?php echo $sta_6; ?></td>
<td align="center">8:20</td>
<td align="center">16:20</td>
</tr>
<tr>
<td><?php echo $sta_5; ?></td>
<td align="center">8:23</td>
<td align="center">16:23</td>
</tr>
<tr>
<td><?php echo $sta_4; ?></td>
<td align="center">8:27</td>
<td align="center">16:27</td>
</tr>
<tr>
<td><?php echo $sta_3; ?></td>
<td align="center">8:32</td>
<td align="center">15:52</td>
</tr>
<tr>
<td><?php echo $sta_2; ?></td>
<td align="center">8:36</td>
<td align="center">16:36</td>
</tr>

<tr>
<td><?php echo $sta_10; ?></td>
<td align="center">8:40</td>
<td align="center">16:40</td>
</tr>
<tr>
<td><?php echo $sta_1; ?></td>
<td align="center">8:43</td>
<td align="center">16:43</td>
</tr>
</table>
<div class="clear">
<p class="float_l" style="margin-right: 4px;">※2</p>
<p class="ovf_h">
<?php if ($lang == 'co') { ?>
첫차부터 막차까지 <span style="color: #336600;">약30분간격으로 운행</span>
<?php } else if ($lang == 'chi') { ?>
首班与末班之间<span style="color: #336600;">约每隔30分钟一班</span>
<?php } else if ($lang == 'tchi') { ?>
首班與末班之間<span style="color: #336600;">約每隔30分鐘一班</span>
<?php } else if ($lang == 'en') { ?>
<span style="color: #336600;">Runs approximately every 30 minutes on the half hour</span> from the first bus to the last
<?php } else { ?>
始発から最終まで<span style="color: #336600;">約30分間隔で運行</span>
<?php } ?>
<?php echo $text_9; ?>
</p>
</div> -->
      <a href="<?php echo $site_url; ?>/pdf/<?php echo $pdf1; ?>" target="_blank" style="display: block; margin-top: 10px;"><?php echo $text_10; ?>&gt;&gt;</a><br>


      <strong><?php echo $text_11; ?></strong>
      <center>
        <a href="https://eco-oirase.com/pdf/fin_24%E5%A5%A5%E5%85%A5%E7%80%AC%E6%99%82%E5%88%BB%E8%A1%A8_A41004.pdf" target="_blank" rel="noopener noreferrer"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/遊覧船時刻表1021.png" alt="シャトルバス、遊覧船のご利用について"></a><br>
      </center>
      <br>
      <strong><?php echo $text_12; ?></strong>
      <center>
        <a href="https://eco-oirase.com/pdf/fin_24%E5%A5%A5%E5%85%A5%E7%80%AC%E6%99%82%E5%88%BB%E8%A1%A8_A41004.pdf" target="_blank" rel="noopener noreferrer"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/遊覧船時刻表1026.png" alt="シャトルバス、遊覧船のご利用について"></a><br>
      </center>
      <br>
      <h3><?php echo $text_13; ?></h3>
      <br>
      <!-- <div id="map2">
          <iframe style="width:100%" src="https://www.google.com/maps/d/embed?mid=1tXJCMjSYrRuB_YO64e4ys6mCXjlMqYg&ehbc=2E312F" width="640" height="480"></iframe>
        </div> -->
      <div id="map2" style="width: 100%; height: 500px"></div>
      <script type="text/javascript" src="https://www.eco-oirase.com/scripts/jquery-1.9.1.min.js"></script>
      <script
        type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiTHNmQ41T-7T_1Ep-WK_4TABzNODzdeA&language=en"></script>
      <script>
        to_pos2 = [
          [40.53515631133499, 141.00884287925706],
          [40.596436, 140.953396],
          [40.578612, 140.993249],
          [40.574331, 140.979058],
          [40.56816, 140.977342],
          [40.563276, 140.974418],
          [40.551868, 140.973485],
          [40.540886, 140.979127],
          [40.532858, 140.979185],
          [40.520846, 140.971906],
          [40.508263, 140.961585],
          [40.495515, 140.954874],
          [40.487491, 140.949903],
          [40.478988, 140.940321],
          [40.429653, 140.894301],
          [40.426606, 140.894669],
        ];
        to_title2 = [
          "蔦温泉",
          "奥入瀬渓流温泉スキー場前",
          "奥入瀬渓流館",
          "紫明渓",
          "黄瀬",
          "惣辺交差点",
          "石ケ戸",
          "馬門岩",
          "雲井の滝",
          "雲井の流れ",
          "白糸の滝",
          "銚子大滝",
          "子ノ口",
          "十和田神社前",
          "休屋",
        ];

        function initmap2(id, title, position, icon) {
          var mapOptions = {
            center: {
              lat: position[0][0],
              lng: position[0][1]
            },
            zoom: 12,
          };
          var map = new google.maps.Map(document.getElementById(id), mapOptions);
          showmarkers2(map, title, position, icon);
        }

        function showmarkers2(map, title, position, icon) {
          for (var i = 1; i < position.length; i++) {
            var pos = new google.maps.LatLng(position[i][0], position[i][1]);
            var img = "<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/ico_to.png";

            // Tạo marker cho địa điểm
            var marker = new google.maps.Marker({
              position: pos,
              map: map,
              title: title[i - 1],
              icon: img,
            });

            // Tạo lớp OverlayView để hiển thị nhãn tùy chỉnh
            var label = new CustomLabel(map, pos, title[i - 1]);
          }
        }

        // Định nghĩa lớp CustomLabel để tạo nhãn
        function CustomLabel(map, position, text) {
          this.position = position;
          this.text = text;
          this.map = map;

          this.div = null;

          this.setMap(map); // Thêm lớp vào bản đồ
        }

        CustomLabel.prototype = new google.maps.OverlayView();

        // Tạo DOM element cho nhãn
        CustomLabel.prototype.onAdd = function() {
          var div = document.createElement("div");
          div.style.position = "absolute";
          div.style.backgroundColor = "white";
          div.style.padding = "2px 5px";
          div.style.border = "1px solid black";
          div.style.borderRadius = "3px";
          div.style.fontSize = "12px";
          div.style.whiteSpace = "nowrap";
          div.innerHTML = this.text;

          this.div = div;

          // Thêm nhãn vào overlay layer
          var panes = this.getPanes();
          panes.overlayLayer.appendChild(div);
        };

        // Định vị trí của nhãn trên bản đồ
        CustomLabel.prototype.draw = function() {
          var overlayProjection = this.getProjection();
          var position = overlayProjection.fromLatLngToDivPixel(this.position);

          var div = this.div;
          div.style.left = position.x + "px";
          div.style.top = position.y + "px";
        };

        // Xóa nhãn khi overlay bị loại bỏ
        CustomLabel.prototype.onRemove = function() {
          this.div.parentNode.removeChild(this.div);
          this.div = null;
        };

        jQuery(window).load(function() {
          initmap2("map2", to_title2, to_pos2);
        });
      </script>
      <br>
      <br>

    </div>
    <div calss="clear"></div>

    <div class="right-inner time-table-detail <?php echo $is_print; ?>">

    </div>
  </div>

  <div class="<?php echo $is_print; ?>">
    <h3><?php echo $title_4; ?></h3>
    <div class="right-inner">
      <div id="ship-guide" class="parents">
        <div>
          <div id="a-course">
            <table>
              <tr>
                <th><span><?php echo $place_1; ?>⇔<?php echo $place_2; ?></span></th>
              </tr>
              <tr>
                <td><span>
                    <?php if ($lang == 'co') { ?>
                      소요시간: 50분
                    <?php } else if ($lang == 'chi') { ?>
                      所需时间：50分钟
                    <?php } else if ($lang == 'tchi') { ?>
                      所需時間：50分鐘
                    <?php } else if ($lang == 'en') { ?>
                      The time required : 50 minutes
                    <?php } else { ?>
                      所要時間：50分
                    <?php } ?>
                  </span></td>
              </tr>
            </table>
            <p>
              <?php if ($lang == 'co') { ?>
                도와다호반의 주요관광지・야스미야와 오이라세 계류 산책입구인 네노쿠치를 연결해주는 코스. 나카야먀반도와 나카노우미, 오구라반도를 둘러 운항합니다.
              <?php } else if ($lang == 'chi') { ?>
                连接十和田湖畔的主要观光景点《休屋》与奥入濑溪流的散步小径之入口《子之口》的航线。巡游中山半岛、中之湖及御仓半岛的尖端
              <?php } else if ($lang == 'tchi') { ?>
                連接十和田湖畔的主要觀光景點《休屋》與奧入瀨溪流的散步小徑之入口《子之口》的航綫。巡遊中山半島、中之湖及御倉半島的尖端。
              <?php } else if ($lang == 'en') { ?>
                The main tourist spot in Towada lakeside , the course which connects the entrance of the Oirase Stream stroll, and Nenokuchi to Yasumiya. Tour of the tip of the Ogura peninsula, Nakayama peninsula, and Nakanoumi.
              <?php } else { ?>
                十和田湖畔の主要観光地・休屋と、奥入瀬渓流散策の入り口・子ノ口を結ぶコース。中山半島と中の湖、御倉半島の突端を巡ります。
              <?php } ?>
            </p>
          </div>
          <div id="b-course">
            <table>
              <tr>
                <th><span><?php echo $place_1; ?>→<?php echo $place_1; ?></span></th>
              </tr>
              <tr>
                <td><span>
                    <?php if ($lang == 'co') { ?>
                      소요시간: 50분
                    <?php } else if ($lang == 'chi') { ?>
                      所需时间：50分钟
                    <?php } else if ($lang == 'tchi') { ?>
                      所需時間：50分鐘
                    <?php } else if ($lang == 'en') { ?>
                      The time required : 50 minutes
                    <?php } else { ?>
                      所要時間：50分
                    <?php } ?>
                  </span></td>
              </tr>
            </table>
            <p>
              <?php if ($lang == 'co') { ?>
                나카야마반도와 나카노우미를 지나 호수 한가운데를 통과하는 야스미야 회항코스
              <?php } else if ($lang == 'chi') { ?>
                游览中山半岛及中之湖，回程经湖的中心返回休屋之航程。
              <?php } else if ($lang == 'tchi') { ?>
                遊覽中山半島及中之湖，回程經湖的中心返迴休屋之航程。
              <?php } else if ($lang == 'en') { ?>
                The Yasumiya arrival and departure course which passes near the middle of the lake on the way to Nakayama peninsula and Nakanoumi.
              <?php } else { ?>
                中山半島と中の湖をぐるり、帰路に湖の真ん中を通る休屋発着のコース。
              <?php } ?>
            </p>
          </div>
          <div style="clear: both; height: 1px; overflow: hidden;"></div>
        </div>
        <div>
          <div id="a-course">
            <dl>
              <dt>■<span><?php echo $title_5; ?></span></dt>
              <dd>
                <?php echo $place_3; ?>→<?php echo $place_2; ?><br />
                9：30～14：45<br />
                <?php echo $place_2; ?>→<?php echo $place_3; ?><br />
                11：00～13：30<br />
              </dd>
              <dd style="padding-top: 5px;">
                ※<?php if ($lang == 'co') { ?>
                자세한 시간표는 아래 사이트에서 확인해 주십시오
              <?php } else if ($lang == 'chi') { ?>
                请到以下网页确认详细时间表。
              <?php } else if ($lang == 'tchi') { ?>
                請到以下網頁確認詳細時間表。
              <?php } else if ($lang == 'en') { ?>
                Please check the detailed timetable from the following website.
              <?php } else { ?>
                詳しい時刻表は以下のサイトよりご確認ください。
              <?php } ?>
              <br>
              &nbsp;&gt;&gt;<a href="http://www.toutetsu.co.jp/ship.html" target="_blank"><?php echo $office_1; ?></a><br />
              </dd>
            </dl>

          </div>
          <div id="b-course">
            <dl>
              <dt>■<span><?php echo $title_5; ?></span></dt>
              <dd>
                <?php echo $place_3; ?>→<?php echo $place_3; ?><br />
                8：45～14：40<br />
                <!-- span class="caution">※上記の内容は、奥入瀬渓流マイカー交通規制実施時の情報です。</span -->
              </dd>
              <dd style="padding-top: 5px;">
                ※<?php if ($lang == 'co') { ?>
                자세한 시간표는 아래 사이트에서 확인해 주십시오
              <?php } else if ($lang == 'chi') { ?>
                请到以下网页确认详细时间表。
              <?php } else if ($lang == 'tchi') { ?>
                請到以下網頁確認詳細時間表。
              <?php } else if ($lang == 'en') { ?>
                Please check the detailed timetable from the following website.
              <?php } else { ?>
                詳しい時刻表は以下のサイトよりご確認ください。
              <?php } ?>
              <br>
              &nbsp;&gt;&gt;<a href="http://www.toutetsu.co.jp/ship.html" target="_blank"><?php echo $office_1; ?></a><br />
              </dd>
            </dl>
          </div>
          <div style="clear: both; height: 1px; overflow: hidden;"></div>
          <div>
            <div id="a-course">
              <strong>■<span><?php echo $title_6; ?></span></strong><br />
              <?php echo $office_1; ?>
              <ul>
                <li><span>　<?php echo $text_1; ?></span></li>
                <li><span>　<?php echo $text_2; ?></span></li>
              </ul>
              　<?php echo $text_3; ?><br /><br />
            </div>
            <div id="b-course">
              <strong>■<span><?php echo $title_6; ?></span></strong><br />
              <?php echo $office_1; ?>
              <ul>
                <li><span>　<?php echo $text_1; ?></span></li>
                <li><span>　<?php echo $text_2; ?></span></li>
              </ul>
              　<?php echo $text_3; ?><br><br>
            </div>
            <div style="clear: both; border: solid 2px #ff0000; padding: 10px 20px; margin-bottom: 20px; font-weight: bold; display: none;">
              <?php echo nl2br($text_8); ?>
            </div>
          </div>
          <div>
            <div id="a-course">
              <strong>■<span><?php echo $title_7; ?></span></strong><br />
              <?php echo $office_2; ?><br>
              <span class="tel">TEL:0176-75-2909</span>
            </div>
            <div id="b-course">
              <strong>■<span><?php echo $title_7; ?></span></strong><br />
              <?php echo $office_2; ?><br>
              <span class="tel">TEL:0176-75-2909</span>
            </div>
            <div style="clear: both; height: 1px; overflow: hidden;"></div>
          </div>
          <br />
          <div>
            <?php if ($lang == 'co') { ?>
              ※상기 운항시간은 통상 운항시간입니다.<br>
              페스티벌기간중에는 운항시간이 다를 수 있으므로 확인하시기 바랍니다.
            <?php } else if ($lang == 'chi') { ?>
              ※以上为全年的航行时间。<br>交通管制期间内航行时间将有更改的可能，敬请确认时间。
            <?php } else if ($lang == 'tchi') { ?>
              ※以上為全年的航行時間。<br>交通管制期間內航行時間將有更改的可能，敬請確認時間。
            <?php } else if ($lang == 'en') { ?>
              ※The above is the operation period for the year.<br>
              Please confirm during FESTA as activities may vary.
            <?php } else { ?>
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