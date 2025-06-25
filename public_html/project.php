<?php
global $lang;

$site_url = SITE_URL;
switch($lang){
 case 'ja':
  $subtitle = "奥入瀬渓流エコツーリズムプロジェクトの概要";
  $title_1 = "趣旨";
  $title_2 = "目的";
  break;
 case 'en':
  $subtitle = "The overview of the Oirase Stream Eco-tourism project";
  $title_1 = "Effect";
  $title_2 = "Purpose";
  break;
 case 'co':
  $subtitle = "오이라세 계류 에코투어리즘 프로젝트 개요";
  $title_1 = "취지";
  $title_2 = "목적";
  break;
 case 'chi':
  $subtitle = "奥入濑溪流生态旅游项目概要";
  $title_1 = "宗旨";
  $title_2 = "目的";
  break;
 case 'tchi':
  $subtitle = "奧入瀨溪流生態旅遊規劃概要";
  $title_1 = "宗旨";
  $title_2 = "目的";
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
<p class="txt01">
<?php if ($lang=='co'){?>
오이라세 계류의 자연환경 보전을 위해 <span class="disp_ib">아름답고 맑은 계곡과 너도밤나무숲을 만끽하기 위해</span>
<?php } else if ($lang=='chi') {?>
为了保护奥入濑溪流的自然环境<span class="disp_ib">也为了让大家更能优雅欣赏到美丽的溪流和山毛榉树林</span>
<?php } else if ($lang=='tchi') {?>
為了保護奧入瀨溪流的自然環境<span class="disp_ib">也為了讓大家更能優雅欣賞到美麗的溪流和山毛櫸樹林</span>
<?php } else if ($lang=='en') {?>
For the natural environment of the conservation of the Oirase Stream.<br>Take your time to enjoy the beautiful clear stream and Beech forest.
<?php } else {?>
奥入瀬渓流の自然環境保全のために<span class="disp_ib">美しい清流とブナ林をゆっくり味わっていただくために</span>
<?php } ?>

</p>
<br />
<p class="cap-01">
<?php if ($lang=='co'){?>
도와다하치만타이 국립공원에 있는「오이라세 계류」는 후세에 길이 남길만한 아름다운 경관을 가진 귀중한 자연환경으로서 이를 보전하는 것이 매우 중요합니다. 또한 이곳은 연간 200만명이 찾는 아오모리를 대표하는 경승지이자 관광지로, 앞으로 더 많은 관광활성화가 기대되고 있습니다.
<?php } else if ($lang=='chi') {?>
十和田八幡平国立公园“奥入濑溪流”拥有宝贵的自然环境和美丽风景，这些都必流传给后世的珍宝，因此保护工作非常的重要。同时，也是青森县代表性名胜观光景点，每年县内外将近280万观光客造访此地，希望今后能更进一步的推动观光活性化。 
<?php } else if ($lang=='tchi') {?>
十和田八幡平國立公園“奧入瀨溪流”擁有寶貴的自然環境和美麗風景，這些都是必流傳給後世的珍寶，因此保護工作是非常的重要。同時，也是青森縣内代表性名勝觀光景點之一，每年縣內外將近280萬觀光客造訪此地，亦被期待今後能更深一層活性其觀光。
<?php } else if ($lang=='en') {?>
Towada-Hachimantai ˹ Oirase Stream ˼ possesses the valuable natural environment and the beautiful landscape which should leave it in posterity, and the importance to preservation it. At the same time, scenic spots to represent the Aomori prefecture to visit from outside the prefecture about 2 million people per year, as a tourist destination to further tourism in the future.
<?php } else {?>
十和田八幡平国立公園『奥入瀬渓流』は、後世に残すべき貴重な自然環境や美しい風景を有しており、その保全が大切です。同時に、県内外から年間約200万人が訪れる青森県を代表する景勝地、観光地として、今後より一層の観光活性化が望まれています。
<?php } ?>
</p>
<br />
<p class="cap-01">
<?php if ($lang=='co'){?>
이를 위해, 「오이라세 계류」자연환경보전에 기여하는 활동을 하자는 취지로, 산업관광기관, 자연환경기관, 행정기관 등으로 조직된<a href="<?php echo $site_url;?>/pdf/【最新版】奥入瀬渓流エコツーリズムプロジェクト実行委員会規約(R6.4.15改正).pdf" target="_blank">「오이라세 계류 에코투어리즘 프로젝트 실행위원회」 ＜PDF:89KB＞</a>에서, 2008년부터「오이라세 계류 에코리즘 프로젝트」를 실행하게 되었습니다.
<?php } else if ($lang=='chi') {?>
为此，官民合力，携手推动保护“奥入濑溪流”自然环境之活动。产业观光、自然环境、行政各机关合作成立了<a href="<?php echo $site_url;?>/pdf/【最新版】奥入瀬渓流エコツーリズムプロジェクト実行委員会規約(R6.4.15改正).pdf" target="_blank">“奥入濑溪流生态旅游规划实行委员会”[PDF:89KB]</a>，并于2008年开始实行“奥入濑溪流生态旅游规划”。
<?php } else if ($lang=='tchi') {?>
為此，官民合力，攜手推動保護“奧入瀨溪流”自然環境之活動。產業觀光、自然環境、行政各機關合作成立了<a href="<?php echo $site_url;?>/pdf/【最新版】奥入瀬渓流エコツーリズムプロジェクト実行委員会規約(R6.4.15改正).pdf" target="_blank">“奧入瀨溪流生態旅遊規劃實行委員會”[PDF:89KB]</a>，並於2008年開始實行“奧入瀨溪流生態旅遊規劃”。
<?php } else if ($lang=='en') {?>
Therefore, let the govenrment and the people recommend the acitivites necessary to ensure the natural conservation of the [Oirase Stream].  Industrial tourism and natural environmental preservations were organized by the institution of administrative <a href="<?php echo $site_url;?>/pdf/【最新版】奥入瀬渓流エコツーリズムプロジェクト実行委員会規約(R6.4.15改正).pdf" target="_blank">"Oirase Stream  Eco-Tourism project Executive Committee" [PDF:89KB]</a> thus developing the Oirase Stream Eco Tourism project of 2008.
<?php } else {?>
このため、『奥入瀬渓流』の自然環境保全に資する活動を官民一体となって推進することを趣旨として、産業観光・自然環境・行政の各機関で組織する<a href="<?php echo $site_url;?>/pdf/【最新版】奥入瀬渓流エコツーリズムプロジェクト実行委員会規約(R6.4.15改正).pdf" target="_blank">「奥入瀬渓流エコツーリズムプロジェクト実行委員会」[PDF:89KB]</a>では、平成20年から『奥入瀬渓流エコツーリズムプロジェクト』を展開することとしました。
<?php } ?>
</p>
<br />
<p class="cap-01">
<?php if ($lang=='co'){?>
 이 프로젝트의 목적은 오이라세 계류의 자연환경 보전활동과 10월 제5주에 실시하는 승용차교통 규제운동를 통해서, 이곳을 방문하는 관광객과 아오모리현 주민에게 자연환경보전을 널리 알리고 계몽하여, 해당지역을 영속적으로 보전하고 자연환경을 활용하여 지역발전과 관광진흥을 도모하는 것입니다.
<?php } else if ($lang=='chi') {?>
奥入濑溪流生态旅游规划是通过保护奥入濑溪流自然环境的活动以及10月第5周实行的私家车交通管制的活动来启发及加深来访游客、青森县民对自然环境保护之理解，以求该区域的永久性保护与活用自然环境，实现该区域的地域振兴和观光振兴。
<?php } else if ($lang=='tchi') {?>
奧入瀨溪流生態旅遊規劃是通過保護奧入瀨溪流自然環境的活動以及10月第5週實行的私家車交通管制的活動來啓發及加深來訪遊客、青森縣民對自然環境保護之理解，以求該區域的永久性保護與活用其自然環境來振興該區域的地域和觀光。
<?php } else if ($lang=='en') {?>
Oirase Stream Eco-Tourism project is the activity contributing to natural environmental protection of Oirase Stream.  Tourists participating in the private vehicle traffic restriction measures during in 5th week of October, understand the true value environmental protection for Aomori residents and the surrounding area.  It is aimed at regional earthly improvements concerned which harnessing the natural environment and sightseeing promotions.
<?php } else {?>
奥入瀬渓流エコツーリズムプロジェクトは、奥入瀬渓流の自然環境保全に資する活動や10月第5週に行うマイカー交通規制の取り組みをとおして、訪れる観光客や青森県民に自然環境保全の理解浸透・啓発を図り、もって当該地域の永続的な保全と、自然環境を活かした当該地域の地域振興・観光振興を図ることを目的としています。
<?php } ?>
</p>
<br />
<p class="cap-01">
<?php if ($lang=='co'){?>
민관이 하나되어 협력활동을 함으로써, 오이라세 계류의 자연가치를 향상시키며, 오이라세 계류의 매력을 일본 전역에 전하고자 합니다.
<?php } else if ($lang=='chi') {?>
官民携手举办活动可以提升奥入濑溪流的自然价值，还可以向全国宣传奥入濑溪流原本的魅力的一个大好机会。
<?php } else if ($lang=='tchi') {?>
官民攜手舉辦活動可以提升奧入瀨溪流的自然價值，還可以向全國宣傳奧入瀨溪流原本的魅力的一個大好機會。
<?php } else if ($lang=='en') {?>
By cooperating with the Public and Private sectors we hope to provide an opportunity which improves the value of nature and the disseminate the original charm of Oirase Stream across the nation.
<?php } else {?>
官民協力し、一体となった活動を行うことで、奥入瀬渓流の自然価値の向上と、奥入瀬渓流本来の魅力を全国に発信する契機にしたいと考えています。
<?php } ?>
</p>
</div>
<h3><?php echo $title_1;?></h3>
<div class="right-inner">
<div class="cap01">
<p class="float_l">○</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
「오이라세계류의 자연환경보전」에 이바지하는 활동을 민관이 하나되어 추진해 나간다.
<?php } else if ($lang=='chi') {?>
官民合力，携手推动有助于“保护奥入濑溪流自然环境”之活动。
<?php } else if ($lang=='tchi') {?>
官民合力，攜手推動有助於“保護奧入瀨溪流自然環境”之活動。
<?php } else if ($lang=='en') {?>
To jointly promote activities in the Public and Private sectors to sustain the natural environment of the Oirase Stream.
<?php } else {?>
「奥入瀬渓流の自然環境保全」に資する活動を官民一体となって推進すること。
<?php } ?>
</p>
</div>
</div>
<h3><?php echo $title_2;?></h3>
<div class="right-inner">
<div class="cap01">
<p class="float_l">○</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
오이라세 계류의 자연환경보전 활동과 10월 제5주에 행하는 승용차교통규제 실시를 통해,
<?php } else if ($lang=='chi') {?>
通过保护奥入濑溪流自然环境的活动以及10月第5周实施的私家车交通管制之活动，达成以下目的。
<?php } else if ($lang=='tchi') {?>
通過保護奧入瀨溪流自然環境活動以及10月第5週實施的私家車交通管制之活動，達成以下目的。
<?php } else if ($lang=='en') {?>
Activities contributing to the natural enviroment protection of Oirase Stream and through traffic management of private vehicle regulations performed during the 5th week in October.
<?php } else {?>
奥入瀬渓流の自然環境保全に資する活動や10月第5週に行うマイカー交通規制の取り組みをとおして、
<?php } ?>
</p>
</div>
<br />
<div class="cap02-1">
<p class="float_l">１．</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
방문하신 관광객과 아오모리현주민에게 자연환경보전에 대한 인식을 높이며, 지속적으로 보전에 힘쓴다.
<?php } else if ($lang=='chi') {?>
加深来访游客及青森县民对自然环境保护之理解，努力追求永久性保护。
<?php } else if ($lang=='tchi') {?>
加深來訪遊客及青森縣民對自然環境保護之理解，努力追求永久性保護。
<?php } else if ($lang=='en') {?>
Understand the full scope of environmental protection is aimed at tourist and Aomori residents as it strives for permanent preservation.
<?php } else {?>
訪れる観光客や青森県民に自然環境保全の理解浸透を図り、永続的な保全に努めること。
<?php } ?>
</p>
</div>
<div class="cap02-1">
<p class="float_l">２．</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
자연환경자원을 살린 해당지역의 지역발전과 관광진흥을 도모한다.
<?php } else if ($lang=='chi') {?>
活用自然环境实现该区域的地域振兴和观光振兴。
<?php } else if ($lang=='tchi') {?>
活用其自然環境來振興該區域的地域和觀光。
<?php } else if ($lang=='en') {?>
Regional developments take advantage of the natrual environment and is directed towards tourism promotion.
<?php } else {?>
自然環境を活かした当該地域の地域振興・観光振興を図ること。
<?php } ?>
</p>
</div>
<br />
<div class="cap01-1">
<p class="float_l">※</p>
<p class="ovf_h">
<?php if ($lang=='co'){?>
오이라세계곡 승용차교통규제는, 「오이라세 도와다 활용협의회」의 심의를 거쳐서 실시됩니다.
<?php } else if ($lang=='chi') {?>
奥入濑溪流私家车交通管制是经过“奥入濑十和田利活用协议会”的审议后而实施的。
<?php } else if ($lang=='tchi') {?>
奧入瀨溪流私家車交通管制是經過“奧入瀨十和田利活用協議會”的審議後而實施的。
<?php } else if ($lang=='en') {?>
The Oirase Stream private vehicle traffic restriction is carried out after deliberation with [Oirase Towada Utilization Council].
<?php } else {?>
奥入瀬渓流マイカー交通規制は、「奥入瀬十和田利活用協議会」の審議を経て実施されます。
<?php } ?>
</p>
</div>
</div>
            
 </div>
 <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>
