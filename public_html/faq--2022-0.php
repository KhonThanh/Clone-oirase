<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "シャトルバス運行に関するQ&A";
  $title_1 = "Q&A一覧";
  $title_2 = "質問内容";
  $title_3 = "回答例";
  $title_4 = "特定中型車とは";
  $title_5 = "小特車とは";
  $title_6 = "ナンバーで整理すると";
  $text_1 = "１ナンバー大板";
  $text_2 = "大型車、特定中型自動車（トラック）";
  $text_3 = "２ナンバー大板";
  $text_4 = "大型車（バス）";
  $text_5 = "２ナンバー中板";
  $text_6 = "特定中型車（マイクロバス）";
  break;
 case 'en':
  $subtitle = "Private Vehicle Traffic Restriction (questions and answers)";
  $title_1 = "List of Questions and Answers";
  $title_2 = "The question contents";
  $title_3 = "Answer examples";
  $title_4 = "Specific mid-size vehicle";
  $title_5 = "Small Special Vehicle";
  $title_6 = "To summarize in a license plate ";
  $text_1 = "license plate Ooban";
  $text_2 = "Large-size vehicle, specific mid-size vehicle (truck)";
  $text_3 = "license plate Ooban";
  $text_4 = "Large-size vehicle (bus)";
  $text_5 = "license plate  Chuban";
  $text_6 = "Specific mid-size vehicle (chartered bus)";
  break;
 case 'co':
  $subtitle = "승용차운행규제에 관한Q&A";
  $title_1 = "Q&A일람";
  $title_2 = "질문내용";
  $title_3 = "응답례";
  $title_4 = "특정중형차란";
  $title_5 = "소형특수차란";
  $title_6 = "차넘버로 정리하면";
  $text_1 = "１넘버- 대형";
  $text_2 = "대형차,특정중형자동차(트럭)";
  $text_3 = "２넘버- 대형";
  $text_4 = "대형차(버스)";
  $text_5 = "２넘버- 중형";
  $text_6 = "특정중형차(미니버스)";
  break;
 case 'chi':
  $subtitle = "关于私家车交通管制的Q&A";
  $title_1 = "Q&A问答一览";
  $title_2 = "问题内容";
  $title_3 = "回答内容";
  $title_4 = "所谓特定中型车辆是";
  $title_5 = "所谓小型特殊车辆是";
  $title_6 = "依车牌号码分类";
  $text_1 = "大型1号牌";
  $text_2 = "大型车辆、特定中型车辆（货车）";
  $text_3 = "大型２号牌";
  $text_4 = "大型车辆（巴士）";
  $text_5 = "中型２号牌";
  $text_6 = "特定中型车辆（中型巴士）";
  break;
 case 'tchi':
  $subtitle = "關於私家車交通管制的Q&A";
  $title_1 = "Q&A一覧表";
  $title_2 = "問題內容";
  $title_3 = "回答內容";
  $title_4 = "所謂特定中型車輛是";
  $title_5 = "所謂小型特殊車輛是";
  $title_6 = "依車牌號碼分類";
  $text_1 = "大型1號牌";
  $text_2 = "大型車輛、特定中型車輛（貨車）";
  $text_3 = "大型２號牌";
  $text_4 = "大型車輛（巴士）";
  $text_5 = "中型２號牌";
  $text_6 = "特定中型車輛（中型巴士）";
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
<table id="faq">
<tr><td rowspan="2" class="table-text">NO.</td><th><?php echo $title_2;?></th></tr>
<tr><td><?php echo $title_3;?></td></tr>
<tr><td rowspan="2" class="table-text">1</td>
<th>
<?php if ($lang=='co'){?>
에코로드페스타(페스티벌)란?
<?php } else if ($lang=='chi'){?>
何谓 《生态路线节》?
<?php } else if ($lang=='tchi'){?>
何謂 《生態路綫節》?
<?php } else if ($lang=='en'){?>
What is an Eco Road Festa?
<?php } else {?>
エコロードフェスタって何？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
오이라세 계류를 보전하고, 계곡의 매력을 많은 사람들에게 알리는 것이 목적이며, 경치좋은 계곡를 만끽하실 수 있는 이벤트입니다.
<?php } else if ($lang=='chi'){?>
目的是为了保护奥入濑溪流，将溪流的魅力传达给更多的人知道，也希望大家能宁静的享受溪流美景的一个活动。
<?php } else if ($lang=='tchi'){?>
目的是為了保護奧入瀨溪流，將溪流的魅力傳達給更多的人知道，也希望大家能寧靜的享受溪流美景的一個活動。
<?php } else if ($lang=='en'){?>
It is the event to slowly and quietly enjoy the Valley Stream preserving the Oirase Stream sharing the charm of a Valley Stream.
<?php } else {?>
奥入瀬渓流を保全し、渓流の魅力を多くの皆さんに知っていただこうという目的で、渓流を静かにゆっくり楽しんで頂くためのイベントです。
<?php } ?>
</p></li>
<li><p>
<?php if ($lang=='co'){?>
이벤트당일은 승용차운행을 규제하오니 주의 바랍니다.
<?php } else if ($lang=='chi'){?>
请注意当天将会限制车辆的通行（私家车交通管制）。
<?php } else if ($lang=='tchi'){?>
請注意當天將會限制車輛的通行（私家車交通管制）。
<?php } else if ($lang=='en'){?>
Please note that on this day vehicles will be regulated (Private Vehicle Traffic Restriction).
<?php } else {?>
当日は、エコロード区間の車両の乗り入れはご遠慮ください。
<?php } ?>
</p></li>
</ul>
</td>
</tr> 
<tr><td rowspan="2" class="table-text">2</td>
<th>
<?php if ($lang=='co'){?>
매년 교통규제를 합니까?
<?php } else if ($lang=='chi'){?>
每年都会实施吗？
<?php } else if ($lang=='tchi'){?>
每年都會實施嗎？
<?php } else if ($lang=='en'){?>
Does this traffic restriction occur at these events every year?
<?php } else {?>
毎年やっているの？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
단풍시즌 교통규제를 2008년부터 실시하고 있습니다.
<?php } else if ($lang=='chi'){?>
红叶季节时的限制车辆通行活动是从2008年开始实施的
<?php } else if ($lang=='tchi'){?>
2008年紅葉季節期間開始實施管制車輛通行。
<?php } else if ($lang=='en'){?>
Vehicle Entrance regulations of the Autumn leaves seasons has been in effect since year 2008.
<?php } else {?>
紅葉シーズンの車の乗り入れ規制は、平成２０年度から実施しています。
<?php } ?>
</p></li>
<li><p>
<?php if ($lang=='co'){?>
매년 10월 마지막주 토,일에 실시할 예정입니다.
<?php } else if ($lang=='chi'){?>
每年实施於10月的最后一个周六与周日。
<?php } else if ($lang=='tchi'){?>
每年實施於10月的最後一個週六與週日。
<?php } else if ($lang=='en'){?>
Every year it is scheduled to be held on the last Saturday and Sunday in October.
<?php } else {?>
毎年、10月最終週の土日に開催する予定としています。
<?php } ?>
</p></li>
</ul>
</td>
</tr>
<tr><td rowspan="2" class="table-text">3</td>
<th>
<?php if ($lang=='co'){?>
당일은 차로 오이라세계류에 갈 수 없나요?
<?php } else if ($lang=='chi'){?>
交通管制当天能不能开车去奥入濑溪流？
<?php } else if ($lang=='tchi'){?>
交通管制當天能不能開車去奧入瀨溪流？
<?php } else if ($lang=='en'){?>
On this day can I go to Oirase Stream in my vehicle?
<?php } else {?>
当日は車で奥入瀬渓流に行けないの？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
죄송하지만, 평일 10:00～14:00,  토,일요일 9:00～15:00 에는 대형차등을 제외한 승용차운행은 통행금지이므로, 협력을 부탁드립니다.
<?php } else if ($lang=='chi'){?>
请注意，平日10:00～14:00，周末9:00～15:00之间，除了大型车辆等以外都禁止通行，敬请谅解与配合。
<?php } else if ($lang=='tchi'){?>
平日10:00～14:00、六日9:00～15:00之間，除了大型車輛等以外都禁止通行，敬請諒解與配合。
<?php } else if ($lang=='en'){?>
We apologize and thank you for your cooperation. We close from 10:00 - 14:00 on weekdays, and 09:00 - 15:00 on weekends except for large vehicles.
<?php } else {?>
ご遠慮ください。
<?php } ?>
</p></li>
</ul>
</td>
</tr>
<tr><td rowspan="2" class="table-text">4</td>
<th>
<?php if ($lang=='co'){?>
왜 교통규제를 합니까?
<?php } else if ($lang=='chi'){?>
为何须要交通管制呢？
<?php } else if ($lang=='tchi'){?>
為何需要交通管制呢？
<?php } else if ($lang=='en'){?>
Why is it regulated?
<?php } else {?>
なぜシャトルバスに乗り換えをするのですか？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
오이라세계류는 계곡주변에 도로가 있어서 평상시에는 자동차로 움직이기 좋은 곳입니다.
<?php } else if ($lang=='chi'){?>
沿着奥入濑溪流旁就有一条道路了，开车观光其实非常的方便。
<?php } else if ($lang=='tchi'){?>
沿著奧入瀨溪流徬就有一條道路了，開車觀光其實非常的方便。
<?php } else if ($lang=='en'){?>
Oirase Stream runs along a mountain stream, so you can go there easily by car.
<?php } else {?>
奥入瀬渓流は、渓流沿いを道路が走っていますので、普通ですと手軽に自動車で行けます。
<?php } ?>
</p></li>
<li><p>
<?php if ($lang=='co'){?>
하지만 자동차소음과 배기가스는 산책하는 사람과 자연에게는 좋지않은영향을 끼칩니다.
<?php } else if ($lang=='chi'){?>
可是对於大自然及溪流漫游者来说，汽车的噪音和废气并不是个很好环境。
<?php } else if ($lang=='tchi'){?>
可是對於大自然及溪流漫遊者來說，汽車的噪音和廢氣並不是個很好的環境。
<?php } else if ($lang=='en'){?>
However, the noise and exhaust gas are never a good environment for mountain streams and nature.
<?php } else {?>
しかし、自動車の騒音や排気ガスは、渓流散策者や自然にとって、決して良い環境とは言えません。
<?php } ?>
</p></li>
<li><p>
<?php if ($lang=='co'){?>
깨끗한 계곡과 너도밤나무숲을 지키며 여유롭게 자연을 만끽하실 수 있도록 규제하오니 이해와 협력을 부탁드립니다.
<?php } else if ($lang=='chi'){?>
为了让大家能在宁静的环境里欣赏溪流与山毛榉树林，我们采取了交通管制的方式，敬请谅解及给于合作。
<?php } else if ($lang=='tchi'){?>
為了讓大家能在寧靜的環境裡欣賞溪流與山毛櫸樹林，我們採取了交通管制的方式，敬請諒解及給予合作。
<?php } else if ($lang=='en'){?>
We regulate to enjoy the streams of Mountain Streams and Beech Forest in a quiet environment, we thank you for your cooperation and understanding.
<?php } else {?>
渓流のせせらぎやブナ林を静かな環境で楽しんでいただくため、シャトルバスに乗り換えをお願いさせていただいていますので、ご理解とご協力をお願いします。
<?php } ?>
</p></li>
</ul>
</td>
</tr>
<tr><td rowspan="2" class="table-text">5</td>
<th>
<?php if ($lang=='co'){?>
저공해차(하이브리드 자동차)도 통행할 수 없습니까?
<?php } else if ($lang=='chi'){?>
环保车（混合动力车）也不能通行吗？
<?php } else if ($lang=='tchi'){?>
環保車（混合動力車）也不能通行嗎？
<?php } else if ($lang=='en'){?>
Is it also not possible to pass with low-pollution emission vehicles (hybrid cars)?
<?php } else {?>
低公害車（ハイブリッドカー）もシャトルバスに乗り換えが必要ですか？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
도로혼잡해소, 계곡산책자 환경향상을 위해 통제하오니 양해해 주시기바랍니다.
<?php } else if ($lang=='chi'){?>
为了解决道路的拥堵问题，及提供溪流漫游者一个更良好的环境，敬请谅解不能通行之理由。
<?php } else if ($lang=='tchi'){?>
為了解決道路的擁堵問題，及提供溪流漫遊者一個更良好的環境，才實施禁止通行管制，環保車也一樣不能通行，敬請諒解。
<?php } else if ($lang=='en'){?>
It designed to eliminate road congestion and improve the environment of the mountain stream.  We are sorry, but thank you for you cooperation with the road closure.
<?php } else {?>
道路の混雑解消、渓流散策者の環境向上などを目的としていますので、申し訳ありませんが、ご協力お願い致します。
<?php } ?>
</p></li>
</ul>
</td>
</tr>
<tr><td rowspan="2" class="table-text">6</td>
<th>
<?php if ($lang=='co'){?>
내년에도 교통규제가 있습니까?
<?php } else if ($lang=='chi'){?>
明年也有打算实施私家车交通管制吗？
<?php } else if ($lang=='tchi'){?>
明年也有打算實施私家車交通管制嗎？
<?php } else if ($lang=='en'){?>
Will you regulate my car next year too?
<?php } else {?>
来年もシャトルバスを運行するのですか？
<?php } ?>
</th>
</tr>
<tr>
<td>
<ul>
<li><p>
<?php if ($lang=='co'){?>
같은 시기에 실시할 예정이며, 공식적인 날짜는 정해지지 않았습니다.
<?php } else if ($lang=='chi'){?>
将会在同一时期实施，至于实施日期还尚未决定。
<?php } else if ($lang=='tchi'){?>
預計在同一時期實施，至於實施日期還尚未確定。
<?php } else if ($lang=='en'){?>
It is scheduled to continue next year but the official date and time has not yet been decided.
<?php } else {?>
同時期に実施する予定ですが、正式な日時はまだ決定していません。
<?php } ?>
</p></li>
</ul>
</td>
</tr>
</table>
</div>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
