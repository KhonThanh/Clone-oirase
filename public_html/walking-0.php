<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "奥入瀬渓流の歩き方";
  $pdf = "walking.pdf";
  $mainimage = "pict02.png";
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
  break;
 case 'en':
  $subtitle = "How to walk around in Oirase Stream";
  $pdf = "walking_en.pdf";
  $mainimage = "pict02_en.png";
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
  break;
 case 'co':
  $subtitle = "오이라세 계류 산책방법";
  $pdf = "walking_co.pdf";
  $mainimage = "pict02_co.png";
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
  break;
 case 'chi':
  $subtitle = "奥入濑溪流漫步方式";
  $pdf = "walking_chi.pdf";
  $mainimage = "pict02_chi.png";
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
<br />
<p style="text-align: center"><!-- a href="<?php echo $site_url;?>/pdf/<?php echo $pdf;?>" target="_blank" --><img src="<?php echo $site_url;?>/pages/images/walking/<?php echo $mainimage;?>" alt="" border="0" /><!-- /a --></p>
<div class="right-inner">
<p class="cap01">
<?php if ($lang=='co'){?>
[도보]<br>
야케야마～네노쿠치(전구간)약5시간 약14km<br>
이시게도～네노쿠치(관광포인트구간) 약2시간반 약9km
<?php } else if ($lang=='chi'){?>
[步行]<br>
烧山～子之口（全程） 约14km  所须时间约5小时<br>
石之户～子之口（看点区间） 约9km  所须时间约2小时30分钟
<?php } else if ($lang=='en'){?>
[ Walking ]<br>
Yakeyama through Nenokuchi (All sections) about 5 hours about 14 km (about 8.7 miles)<br>
Ishigedo through Nenokuchi (highligh section) about 2 hours and a half about 9 km (about 5.6 miles)
<?php } else {?>
[徒歩]<br />
焼山～子ノ口（全区間）　約5時間　約14km<br />
石ヶ戸～子ノ口（見所区間）　約2時間半　約9km
<?php } ?>
</p>
</div>
<h3><?php echo $title_1;?></h3>
<div class="right-inner">
<p class="volunteer-name"><?php echo $office_1;?></p>
<p>
<?php if ($lang=='co'){?>
즐거운 여행을 도와주는 주민들의 모임으로 환경미화와 관광안내를 하고 있습니다. <br>
가이드회원들은 대부분 농사짓는 분들이시고 연령층도 다양합니다. 그 지역 아오모리말로 정감있게 고향을 소개하는 것이 매력입니다.
<?php } else if ($lang=='chi'){?>
地区居民为了想让游客们有个更愉快的旅程而聚集一起美化环境及担当观光向导。<br>
向导们大多是农家，有各年龄层的人士。使用方言为大家介绍他们的家乡，溢满了家乡味，魅力十足。
<?php } else if ($lang=='en'){?>
Residents wanting to help with a pleasant journey gather in cooperation for beatification and sightseeing guidelines.   The guides are mostly farmers in varying ages. They convey a spiritual atmosphere in their native dialect.
<?php } else {?>
楽しい旅のお手伝いがしたいという住民が集まり美化協力や観光案内をしています。<br />
ガイドは農家の方がほとんどで年代も様々。ふるさとの言葉でふるさとを紹介するふるさとの香りと味わいが魅力です。
<?php } ?>
</p>
<p>
<?php if ($lang=='co'){?>
『로망타이 활동』<br>
역휴게시설 「오이라세」에서 관광안내, 각종 이벤트협력, 계곡청소.
<?php } else if ($lang=='chi'){?>
『罗曼队的活动』<br>
…於道路休息站「Oirase」帮忙观光向导、协助举办各类活动及清洁溪流。
<?php } else if ($lang=='en'){?>
[ The activities of the Roman Crops ]<br>
They conduct sightseeing tours, organize various events, and Valley Stream cleaning at Michinoeki (Oirase Roadside Station)
<?php } else {?>
『ろまん隊の活動』<br />
…道の駅「おいらせ」での観光案内、各種イベントへの協力、渓流清掃をしています。
<?php } ?>
</p>
<p>
<?php if ($lang=='co'){?>
『잇쇼니 아루키타이(같이 걷기) 』<br>
로망타이 활동도 하면서, 오이라세 계류 안내도 하고 있습니다.
<?php } else if ($lang=='chi'){?>
『一起步行队』<br>
…除了罗曼队的活动外，还有帮忙向导奥入濑溪流。
<?php } else if ($lang=='en'){?>
[ Crops walking together ]<br>
In additions to the activity of a Roman crops , they showcase the Oirase Stream.
<?php } else {?>
『一緒に歩き隊』<br />
…ろまん隊の活動に加え、奥入瀬渓流の案内をしています。
<?php } ?>
</p>
<br />
<div class="walking">
<div class="imgbox"><img src="<?php echo $site_url;?>/pages/images/walking/br01.jpg" alt="<?php echo $office_1;?>" width="200" height="142" /></div>
<div class="infobox">
<p>
<?php if ($lang=='co'){?>
034-0302 도와다시 오오아자사와다 지미즈시리84-1(다나카씨)<br>
전화:0176-73-2521 또는 0176-72-2642<br>
FAX:0176-73-2521 또는 0176-72-2642
<?php } else if ($lang=='chi'){?>
〒034-0302 十和田市大字泽田字水尻84-1（田中家）
电话:0176-73-2521 或  0176-72-2642
FAX:0176-73-2521　或  0176-72-2642
<?php } else if ($lang=='en'){?>
〒034-0302 84-1 Mizushiri Aza Sawata Oaza Towada-city (Mr/Mrs Tanaka)<br>
Tel 0176-73-2521 or  0176-72-2642<br>
Fax 0176-73-2521 or  0176-72-2642
<?php } else {?>
〒034-0302 十和田市大字沢田字水尻84-1（田中方）<br />
電話:0176-73-2521　または0176-72-2642<br />
FAX:0176-73-2521　または0176-72-2642
<?php } ?>
</p>
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_1;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
오이라세계류와 그 주변
<?php } else if ($lang=='chi'){?>
奥入濑溪流与其周边
<?php } else if ($lang=='en'){?>
Oirase Stream and surrounding area
<?php } else {?>
奥入瀬渓流とその周辺
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_2;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
4월 하순～11월중순경
<?php } else if ($lang=='chi'){?>
4月下旬～11月中旬左右
<?php } else if ($lang=='en'){?>
End of April through the middle of November
<?php } else {?>
4月下旬～11月中旬頃
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_3;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
8：30～17：00
<?php } else if ($lang=='chi'){?>
8:30～17:00（可以洽谈）
<?php } else if ($lang=='en'){?>
8:30 a.m. - 5 p.m. (flexible hours by appointment)
<?php } else {?>
8:30～17:00（相談に応じます）
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_4;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
유료(요금은 홈페이지에 게재)
<?php } else if ($lang=='chi'){?>
收费（请上网页参阅）
<?php } else if ($lang=='en'){?>
Fee (prices posted on the Website)
<?php } else {?>
有料（料金はホームページに掲載）
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_5;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
홈페이지에 게재된 신청서를 써서 FAX로 신청해주십시오.
<?php } else if ($lang=='chi'){?>
请上网下载申请表格，填写完毕后以传真方式报名。
<?php } else if ($lang=='en'){?>
please apply via Fax with application form posted on the Website.
<?php } else {?>
ホームページ掲載の申込書によりFAXにてお申込み下さい。
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●URL</td>
<td valign="top">／</td>
<td valign="top"><a href="http://www.towadakb.com/" target="_blank"><?php echo $text_1;?></a></td>
</tr>
</table>
</div>
</div>
<br />
<br />
<p class="volunteer-name"><?php echo $office_2;?></p>
<p>
<?php if ($lang=='co'){?>
도와다호 숙박시설을 이용하시는 관광객에게, 지역주민 가이드도우미가, 매일 아침1시간씩, 다양한 모습을 보이는 호반의 아름다운 자연과 아가씨 동상, 도와다신사등을 안내하고 있습니다. 관광객들과 함께 자연의 아름다움을 감동체험하며, 선인들이 남긴 귀중한 문화유산인 국립공원을 더욱 소중히 지키며 보전해 나가고자 힘쓰고 있습니다.
<?php } else if ($lang=='chi'){?>
地区的向导们利用每天早上1小时的时间，为住宿於十和田湖的观光游客们向导千变万化的湖畔风景、乙女之像及十和田神社等地方。与观光游客们一起沉醉于此优美的大自然，共缅怀祖先们留下的文化遗产，并提高大家对保护此雄伟壮观的国立公园之意识。
<?php } else if ($lang=='en'){?>
A local tour guide will show tourist staying at Towada Lake, the natural day-to-day changes in the Lake and Otomenozou (Statue of Maiden) in the early morning on daily basis for one hour. As natural beauty impresses upon all tourist in attendence, the guide will provide cultural heritage in efforts to increase the amazement of the national park.
<?php } else {?>
十和田湖に宿泊される観光客の皆さまに対し、湖畔の日々変化する自然や乙女の像、十和田神社などを地元在住のガイドが、毎日早朝1時間案内しています。観光客の皆さまとともに自然の美しさを感動し合い、先人の残した文化遺産を偲び、国立公園のすばらしさや保護意識を高めたいと考えています。
<?php } ?>
</p>
<br />
<div class="walking">
<div class="imgbox"><img src="<?php echo $site_url;?>/pages/images/walking/br04.jpg" alt="<?php echo $office_2;?>" width="200" height="142" /></div>
<div class="infobox">
<p>
<?php if ($lang=='co'){?>
018-5501 도와다시 오오아자 오쿠세지도와다486번지(요시자키씨)<br>
전화:090-5181-7658  FAX:0176-75-2672
<?php } else if ($lang=='chi'){?>
〒018-5501 十和田市大字奥濑字十和田486番地 （吉崎家）
電話:090-5181-7658　FAX:0176-75-2672
<?php } else if ($lang=='en'){?>
〒018-5501 486 Towada Aza Oirase Oaza Towada- City (Mr/Mrs Yoshizaki)<br>
Tel 090-5181-7658  Fax 0176-75-2672
<?php } else {?>
〒018-5501 十和田市大字奥瀬字十和田486番地
（吉崎方）<br />
電話:090-5181-7658　FAX:0176-75-2672
<?php } ?>
</p>
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_1;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
도와다호반 야스미야주변(약1시간)<br>
야스미야호반～오토메노조(아가씨 동상) 도와다신사～가이운오솔길
<?php } else if ($lang=='chi'){?>
十和田湖畔休屋周边（約1小时）<br>
休屋湖畔～乙女之像～十和田神社～开运小径
<?php } else if ($lang=='en'){?>
around  Towadakohanyasumiya ( about 1 hour )<br>
Yasumiyakohan ～ Otomenozou (Statue of Maiden) ～ Towada Temple ～ kaiun no komich (Path of Good Luck)
<?php } else {?>
十和田湖畔休屋周辺（約1時間）<br />
休屋湖畔～乙女の像～十和田神社～開運の小道
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_2;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
4월 중순～11월초순경(악천후이외에는 매일)
<?php } else if ($lang=='chi'){?>
4月中旬～11月上旬（除恶天气外 每天实施）
<?php } else if ($lang=='en'){?>
Mid-April through Early November  (everyday except in bad weather)
<?php } else {?>
４月中旬～11月初旬（荒天除き毎日）
<?php } ?>
</td>
</tr>

<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_4;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
무료
<?php } else if ($lang=='chi'){?>
免费
<?php } else if ($lang=='en'){?>
Free
<?php } else {?>
無料
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_5;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
사전신청 필요없음<br>
아침6시15분  도와다종합안내소앞 집합<br>
※야스미야가이드도우미 이외에도, 도와다호, 오이라세에서 가이드도우미 파견가능합니다. (유료)
<?php } else if ($lang=='chi'){?>
无须事先报名<br>
直接早上6点15分钟到十和田湖综合询问处（十和田湖総合案内所）前集合<br>
※除了早晨的向导外，随时都能为您安排十和田湖、奥入濑的向导（收费）
<?php } else if ($lang=='en'){?>
No pre-acceptance necessary<br>
It gathers in front of the Towada Lake information desk beginning at 6:15 in the morning.<br>
※Except for the Yasumiya early morning tour, guides may be available via request at Oirase Stream for a nonminal fee.
<?php } else {?>
事前受付不要<br>
直接朝6時15分　十和田湖総合案内所前集合<br>
※休屋早朝ガイド以外でも、十和田湖・奥入瀬でのガイド派遣等に応じています（有料）
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
<p class="volunteer-name"><?php echo $office_3;?></p>
<p>
<?php if ($lang=='co'){?>
도와다하치만타이 국립공원의 도와다호・ 오이라세 계류・ 핫코다산을 중심으로, 국립공원의 아름다운　경치감상, 다양한 생태관찰, 자연보호 계발 등의 활동을 하고 있습니다. 이를 통해, 자연을 사랑하는 마음으로 국립공원을 이용할 것을 목표로 삼고있는 에코투어를 서포트하고 있습니다.
<?php } else if ($lang=='chi'){?>
向导范围以十和田八幡平国立公园的十和田湖、奥入濑溪流、八甲田山为中心，通过介绍国立公园的优美风景、观察各种生物及启发保护大自然等活动来支援保护国立公园大自然为目标的生态旅游。
<?php } else if ($lang=='en'){?>
Towada Lake, Oirase Stream of a Towada-Hachimantai National park to support the Eco-tour which is aimed at using in the nature-friendly National park for its beautiful scenery, appreciation of the National park , a variety wildlife, awareness of nature protection.
<?php } else {?>
十和田八幡平国立公園の十和田湖・奥入瀬渓流・八甲田山を中心に、国立公園の美しい風景鑑賞、多様な生き物観察、自然保護の啓発などをとおし、自然にやさしい国立公園の利用を目指したエコツアーをサポートします。
<?php } ?>
</p>
<p>
<?php if ($lang=='co'){?>
당재단은, 10년에 걸쳐서 다양한 테마로 자연관찰회를 열고 있으며, 그 중에서 대표적인 테마를 선별하여, 경험이 풍부한 10명의 가이드가 자연관찰해설과 등산가이드를 하고 있습니다.
<?php } else if ($lang=='chi'){?>
本财团，在这10年的时间里举办了许多的大自然观察会，在众多的观察会当中选择了具代表性的行程，并由约10名经验丰富的向导为大家做大自然介绍及登山指引。
<?php } else if ($lang=='en'){?>
The foundations have held various natural observation meetings over the past 10 years and uses this expertise to coordinate structured activities.  There are 10 veteran guides of a wealth of experience leading descriptions of nature, mountain-climbs, and etc.
<?php } else {?>
当財団は、10年にわたり様々な自然観察会を催しており、その中から代表的なメニューを選別し、経験豊かなガイド約10名が自然解説や登山ガイドなどをします。
<?php } ?>
</p>
<br />
<div class="walking">
<div class="imgbox"><img src="<?php echo $site_url;?>/pages/images/walking/br05.jpg" alt="<?php echo $office_3;?>" width="200" height="142" /></div>
<div class="infobox"><p>
<?php if ($lang=='co'){?>
도와다 ・오이리세・ 핫코다에코투어클럽사무국<br>
파크서비스 자연공원재단 도와다지부<br>
전화:0176-75-2368   FAX:0176-75-2672<br>
도와다시 오오아자 오쿠세지도와다486
<?php } else if ($lang=='chi'){?>
十和田・奥入濑・八甲田生态旅游俱乐部事务局<br>
Park Service 自然公园财团 十和田分会<br>
电话:0176-75-2368　FAX:0176-75-2672<br>
青森县十和田市大字奥濑字十和田486
<?php } else if ($lang=='en'){?>
Towada・Oirase・Hakkoda Eco- Tour Club Office<br>
Park Service Nature Park Foundation Towada Branch<br>
Tel 0176-75-2368   Fax 0176-75-2672<br>
486 Towada Aza Okuse Oaza Towada-City Aomori
<?php } else {?>
十和田・奥入瀬・八甲田エコツアークラブ事務局<br />
パークサービス 自然公園財団 十和田支部<br />
電話:0176-75-2368　FAX:0176-75-2672<br />
青森県十和田市大字奥瀬字十和田486
<?php } ?>
</p>
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_1;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
도와다호, 오이라세계류, 핫코다산
<?php } else if ($lang=='chi'){?>
十和田湖、奥入濑溪流、八甲田山
<?php } else if ($lang=='en'){?>
Towada-Lake, Oirase Stream, Mt.Hakkoda
<?php } else {?>
十和田湖、奥入瀬渓流、八甲田山
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_2;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
연중
<?php } else if ($lang=='chi'){?>
全年
<?php } else if ($lang=='en'){?>
Daily
<?php } else {?>
通年
<?php } ?>
</td>
</tr>

<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_4;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
유료(요금은 홈페이지에 게재)
<?php } else if ($lang=='chi'){?>
收费（请上网页参阅）
<?php } else if ($lang=='en'){?>
Fee (prices posted on the Website)
<?php } else {?>
有料（料金はホームページに掲載）
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●<?php echo $item_5;?></td>
<td valign="top">／</td>
<td valign="top">
<?php if ($lang=='co'){?>
홈페이지게재된 신청서를 써서 FAX로 신청해주십시오.
<?php } else if ($lang=='chi'){?>
请上网下载申请表格，填写完毕后以传真方式报名。
<?php } else if ($lang=='en'){?>
please apply via Fax with application form posted on the Website.
<?php } else {?>
ホームページ掲載の申込書によりFAXにてお申込み下さい。
<?php } ?>
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap">●URL</td>
<td valign="top">／</td>
<td valign="top"><a href="http://www.bes.or.jp/towada/" target="_blank"><?php echo $text_1;?></a></td>
</tr>
</table>
</div>
</div>
</div>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
