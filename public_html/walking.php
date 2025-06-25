<?php
global $lang;

$site_url = SITE_URL;
switch ($lang) {
  case 'ja':
    $subtitle = "奥入瀬渓流の歩き方";
    $pdf = "walking.pdf";
    $mainimage = "pict02_2022.jpg";
    $title_1 = "自然ボランティアガイド";
    $office_1 = "十和田湖奥入瀬観光ボランティアの会";
    $office_2 = "十和田湖自然ガイドクラブ";
    $office_3 = "十和田・奥入瀬・八甲田エコツアーガイドクラブ";
    $item_1 = "案内範囲";
    $item_2 = "案内期間";
    $item_3 = "案内時間";
    $item_4 = "費用";
    $item_5 = "申込み";
    $text_1 = "ホームページを見る";
    $text_6 = "ガイドと一緒にもっと楽しむ奥入瀬渓流";
    $text_7 = "天然の自然博物館を、ガイドと一緒にもっと体験しませんか。ガイドツアーやアクティビティ等、詳しくはパンフレットをご覧ください。";
    break;
  case 'en':
    $subtitle = "How to walk around in Oirase Stream";
    $pdf = "walking_en.pdf";
    $mainimage = "pict02_en.jpg";
    $title_1 = "Natural volunteer guide";
    $office_1 = "Sightseeing Volunteer Association of Towada - Lake Oirase Stream";
    $office_2 = "Towada Lake Nature Guide Club";
    $office_3 = "Towada, Oirase, and Hakkoda Eco-tour Guide Club";
    $item_1 = "Tour area";
    $item_2 = "Tour period";
    $item_3 = "Hours of Operation";
    $item_4 = "Cost";
    $item_5 = "Application";
    $text_1 = "check on the Website";
    $text_6 = "Enjoy the Oirase Stream with a guide";
    $text_7 = "Why not experience a natural museum in the wild with a guide? For more information on guided tours and activities, please see our brochure.";
    break;
  case 'co':
    $subtitle = "오이라세 계류 산책방법";
    $pdf = "walking_co.pdf";
    $mainimage = "pict02_co.jpg";
    $title_1 = "자연 볼런티어가이드";
    $office_1 = "도와다호 오이라세관광볼런티어모임";
    $office_2 = "도와다호 자연가이드 클럽(동호회)";
    $office_3 = "도와다・ 오이리세・ 핫코다 에코투어가이드클럽(동호회)";
    $item_1 = "안내범위";
    $item_2 = "안내기간";
    $item_3 = "안내시간";
    $item_4 = "비용";
    $item_5 = "신청";
    $text_1 = "홈페이지로 가기";
    $text_6 = "가이드와 함께 오이라세 온천을 더욱 즐겨보세요.";
    $text_7 = "가이드와 함께 이 자연 박물관을 경험해보고 싶으신가요? 투어 및 활동에 대한 추가 정보는 전단지를 참조해 주세요.";
    break;
  case 'chi':
    $subtitle = "奥入濑溪流漫步方式";
    $pdf = "walking_chi.pdf";
    $mainimage = "pict02_chi.jpg";
    $title_1 = "大自然义工向导";
    $office_1 = "十和田湖奥入濑观光义工之会";
    $office_2 = "十和田湖自然向导俱乐部";
    $office_3 = "十和田・奥入濑・八甲田生态旅游向导俱乐部";
    $item_1 = "向导范围";
    $item_2 = "向导期间";
    $item_3 = "向导时间";
    $item_4 = "费用";
    $item_5 = "报名方式";
    $text_1 = "请按此参阅网页";
    $text_6 = "在导游的带领下进一步享受奥入濑溪流";
    $text_7 = "为什么不在导游的带领下更多地体验自然博物馆呢？有关导游和活动的更多信息，请参阅手册。";
    break;
  case 'tchi':
    $subtitle = "奥入瀨溪流漫步方式";
    $pdf = "walking_chi.pdf";
    $mainimage = "pict02_tchi.jpg";
    $title_1 = "大自然義工嚮導";
    $office_1 = "十和田湖奧入瀨觀光義工之會";
    $office_2 = "十和田湖自然嚮導俱樂部";
    $office_3 = "十和田・奧入瀨・八甲田生態旅遊嚮導俱樂部";
    $item_1 = "導覽範圍";
    $item_2 = "導覽期間 ";
    $item_3 = "導覽時間";
    $item_4 = "費用";
    $item_5 = "報名方式";
    $text_1 = "請按此參閱網頁";
    $text_6 = "在導遊的帶領下進一步享受奧入瀨溪流";
    $text_7 = "為什麼不在導遊的帶領下更多地體驗自然博物館？有關導遊和活動的更多信息，請參閱手冊。";
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
    <h2><?php echo $subtitle; ?></h2>
    <br />
    <p style="text-align: center"><!-- a href="<?php echo $site_url; ?>/pdf/<?php echo $pdf; ?>" target="_blank" --><img src="<?php echo $site_url; ?>/pages/images/walking/<?php echo $mainimage; ?>" alt="" border="0" /><!-- /a --></p>
    <div class="right-inner">
      <p class="cap01">
        <?php if ($lang == 'co') { ?>
          [도보]<br>
          야케야마～네노쿠치(전구간)약5시간 약14km<br>
          이시게도～네노쿠치(관광포인트구간) 약2시간반 약9km
        <?php } else if ($lang == 'chi') { ?>
          [步行]<br>
          烧山～子之口（全程） 约14km 所须时间约5小时<br>
          石之户～子之口（看点区间） 约9km 所须时间约2小时30分钟
        <?php } else if ($lang == 'tchi') { ?>
          [步行]<br>
          燒山～子之口（全程） 約14km 所需時間約5小時<br>
          石之戶～子之口（名所區間） 約9km 所需時間約2小時30分鐘
        <?php } else if ($lang == 'en') { ?>
          [ Walking ]<br>
          Yakeyama through Nenokuchi (All sections) about 5 hours about 14 km (about 8.7 miles)<br>
          Ishigedo through Nenokuchi (highligh section) about 2 hours and a half about 9 km (about 5.6 miles)
        <?php } else { ?>
          [徒歩]<br />
          焼山～子ノ口（全区間）　約5時間　約14km<br />
          石ケ戸～子ノ口（見所区間）　約2時間半　約9km
        <?php } ?>
      </p>
    </div>
    <h3><?php echo $title_1; ?></h3>
    <div class="right-inner">
      <p class="volunteer-name"><?php echo $office_2; ?></p>
      <p>
        <?php if ($lang == 'co') { ?>
          도와다호 숙박시설을 이용하시는 관광객에게, 지역주민 가이드도우미가, 매일 아침1시간씩, 다양한 모습을 보이는 호반의 아름다운 자연과 아가씨 동상, 도와다신사등을 안내하고 있습니다. 관광객들과 함께 자연의 아름다움을 감동체험하며, 선인들이 남긴 귀중한 문화유산인 국립공원을 더욱 소중히 지키며 보전해 나가고자 힘쓰고 있습니다.
        <?php } else if ($lang == 'chi') { ?>
          地区的向导们利用每天早上1小时的时间，为住宿於十和田湖的观光游客们向导千变万化的湖畔风景、乙女之像及十和田神社等地方。与观光游客们一起沉醉于此优美的大自然，共缅怀祖先们留下的文化遗产，并提高大家对保护此雄伟壮观的国立公园之意识。
        <?php } else if ($lang == 'tchi') { ?>
          地區的嚮導們利用每天早上1小時的時間，為住宿於十和田湖的觀光遊客們導覽千變萬化的湖畔風景、乙女像及十和田神社等地方。與觀光遊客們一起沉醉于此優美的大自然，共緬懷祖先們留下的文化遺產，並提高大家對保護雄偉壯觀的國立公園之意識。
        <?php } else if ($lang == 'en') { ?>
          A local tour guide will show tourist staying at Towada Lake, the natural day-to-day changes in the Lake and Otomenozou (Statue of Maiden) in the early morning on daily basis for one hour. As natural beauty impresses upon all tourist in attendence, the guide will provide cultural heritage in efforts to increase the amazement of the national park.
        <?php } else { ?>
          十和田湖に宿泊される観光客の皆さまに対し、湖畔の日々変化する自然や乙女の像、十和田神社などを地元在住のガイドが、毎日早朝1時間案内しています。観光客の皆さまとともに自然の美しさを感動し合い、先人の残した文化遺産を偲び、国立公園のすばらしさや保護意識を高めたいと考えています。
        <?php } ?>
      </p>
      <br />
      <div class="walking">
        <div class="imgbox"><img src="<?php echo $site_url; ?>/pages/images/walking/br04.jpg" alt="<?php echo $office_2; ?>" width="200" height="142" /></div>
        <div class="infobox">
          <p>
            <?php if ($lang == 'co') { ?>
              018-5501 도와다시 오오아자 오쿠세지도와다486번지(요시자키씨)<br>
              전화:090-5181-7658 FAX:0176-75-1860
            <?php } else if ($lang == 'chi') { ?>
              〒018-5501 十和田市大字奥濑字十和田486番地 （吉崎家）<br>
              電話:090-5181-7658　FAX:0176-75-1860
            <?php } else if ($lang == 'tchi') { ?>
              〒018-5501 十和田市大字奧瀨字十和田486番地 （吉崎傢）<br>
              電話:090-5181-7658　FAX:0176-75-2672
            <?php } else if ($lang == 'en') { ?>
              〒018-5501 486 Towada Aza Oirase Oaza Towada- City (Mr/Mrs Yoshizaki)<br>
              Tel 090-5181-7658 Fax 0176-75-1860
            <?php } else { ?>
              〒018-5501 十和田市大字奥瀬字十和田486番地
              （吉崎方）<br />
              電話:090-5181-7658　FAX:0176-75-1860
            <?php } ?>
          </p>
          <br />
          <table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top" nowrap="nowrap">●<?php echo $item_1; ?></td>
              <td valign="top">／</td>
              <td valign="top">
                <?php if ($lang == 'co') { ?>
                  도와다호반 야스미야주변(약1시간)<br>
                  야스미야호반～오토메노조(아가씨 동상) 도와다신사～가이운오솔길
                <?php } else if ($lang == 'chi') { ?>
                  十和田湖畔休屋周边（約1小时）<br>
                  休屋湖畔～乙女之像～十和田神社～开运小径
                <?php } else if ($lang == 'tchi') { ?>
                  十和田湖畔休屋週邊（約1小時）<br>
                  休屋湖畔～乙女像～十和田神社～開運小徑
                <?php } else if ($lang == 'en') { ?>
                  around Towadakohanyasumiya ( about 1 hour )<br>
                  Yasumiyakohan ～ Otomenozou (Statue of Maiden) ～ Towada Temple ～ kaiun no komich (Path of Good Luck)
                <?php } else { ?>
                  十和田湖畔休屋周辺（約1時間）<br />
                  休屋湖畔～乙女の像～十和田神社～開運の小道
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td valign="top" nowrap="nowrap">●<?php echo $item_2; ?></td>
              <td valign="top">／</td>
              <td valign="top">
                <?php if ($lang == 'co') { ?>
                  안내기간/4월 하순~11월초순경(화,수 정기휴일)
                <?php } else if ($lang == 'chi') { ?>
                  4月下旬～11月上旬（星期二丶三休息）
                <?php } else if ($lang == 'tchi') { ?>
                  4月中旬～11月上旬（週二丶三休息）
                <?php } else if ($lang == 'en') { ?>
                  End of April through Early November (Closed on Tuesdays and Wednesdays)
                <?php } else { ?>
                  ４月下旬～11月初旬（火水定休日）
                <?php } ?>
              </td>
            </tr>

            <tr>
              <td valign="top" nowrap="nowrap">●<?php echo $item_4; ?></td>
              <td valign="top">／</td>
              <td valign="top">
                <?php if ($lang == 'co') { ?>
                  500엔
                <?php } else if ($lang == 'chi') { ?>
                  500日元
                <?php } else if ($lang == 'tchi') { ?>
                  500日元
                <?php } else if ($lang == 'en') { ?>
                  500yen
                <?php } else { ?>
                  500円
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td valign="top" nowrap="nowrap">●<?php echo $item_5; ?></td>
              <td valign="top">／</td>
              <td valign="top">
                <?php if ($lang == 'co') { ?>
                  사전신청 필요없음<br>
                  아침5시55분 도와다관광교류센터'프랏토'에 집합해서 6시출발<br>
                  <p class="float_l">※</p>
                  <p class="ovf_h">화요일은, 집합장소가 '호텔도와다소'앞입니다.</p>
                  <p class="float_l">※</p>
                  <p class="ovf_h">야스미야가이드도우미 이외에도, 도와다호, 오이라세에서 가이드도우미 파견가능합니다. (유료)</p>
                <?php } else if ($lang == 'chi') { ?>
                  无须事先报名<br>
                  直接早上5点55分钟到十和田湖观光交流中心「Purato」前集合→6点出发<br>
                  <p class="float_l">※</p>
                  <p class="ovf_h">请注意，星期一在「十和田荘酒店」前集合</p>
                  <p class="float_l">※</p>
                  <p class="ovf_h">除了早晨的向导外，随时都能为您安排十和田湖、奥入濑的向导（收费）</p>
                <?php } else if ($lang == 'tchi') { ?>
                  無需事先報名<br>
                  直接早上5點55分鐘於十和田湖觀光交流中心【Purrato】前集合→6點出發<br>
                  <p class="float_l">※</p>
                  <p class="ovf_h">請注意，週一於「十和田莊飯店」前集合</p>
                  <p class="float_l">※</p>
                  <p class="ovf_h">除了早晨的導覽外，隨時都能為您安排十和田湖、奧入瀨的導覽（收費）</p>
                <?php } else if ($lang == 'en') { ?>
                  No pre-acceptance necessary<br>
                  It gathers around the Towada Lake Tourist Exchange Center (Purrato) beginning at 5:55 in the morning. Departure time 6:00 in the morning. On Mondays, the meeting place will be at the Hotel Towada Sou. <br>
                  <p class="float_l">※</p>
                  <p class="ovf_h">Except for the Yasumiya early morning tour, guides may be available via request at Oirase Stream for a nonminal fee.</p>
                <?php } else { ?>
                  事前受付不要<br>
                  直接朝5時55分　十和田湖観光交流センター「ぷらっと」集合→6時出発<br>
                  <p class="float_l">※</p>
                  <p class="ovf_h">月曜日のみ集合場所は「ホテル十和田荘」前になります</p>
                  <p class="float_l">※</p>
                  <p class="ovf_h">休屋早朝ガイド以外でも、十和田湖・奥入瀬でのガイド派遣等に応じています（有料）</p>
                <?php } ?>
              </td>
            </tr>
          </table>
          <br />
          <!-- p class="cap01">※旅行会社からの派遣要請については、別途有料で相談致します。</p --></td>
        </div>
      </div>
      <br />
      <br />
    </div>
    <h3><?php echo $text_6; ?></h3>
    <div class="right-inner">
      <p><?php echo $text_7; ?></p>

      <p style="text-align: center"><a href="/pdf/10_奥入瀬自然博物館パンフ.pdf" target="_blank"><img src="<?php echo $site_url; ?>/pages/images/walking/screenshot_1725519251.png" alt="" border="0" /></a></p>

      <br />
      <br />
      <br />
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>