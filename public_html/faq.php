<?php
global $lang;

$site_url = "https://eco-oirase.com/";
switch ($lang) {
  case 'ja':
    $subtitle = "マイカー交通規制に関するQ&A";
    $title_1 = "マイカー規制に関すること";
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
    <?php include "sidebar.php"; ?>
  </div>
  <div id="main_contents">

    <?php if ($lang == 'ja') { ?>
      <h3><?php echo $title_1; ?></h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>質問内容</td>
          <td>回答</td>
        </tr>
        <tr>
          <td>1</td>
          <td>エコロードフェスタって何？</td>
          <td>
            ・奥入瀬渓流を保全し、渓流の魅力を多くの皆さんに知っていただこうという目的で、渓流を静かにゆっくり楽しんで頂くためのイベントです。<br>
            ・当日は、車の乗り入れが規制（マイカー交通規制）されますのでご注意下さい。
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>毎年やっているの？<br>来年もやるの？</td>
          <td>
            ・車の乗り入れ規制は、平成15年度から実施しています。<br>・毎年、10月最終週の7日間で実施しています。<br>・令和7年度（2025年）は、10/27（月）～11/2（日）の7日間で実施予定です。<br>

          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>当日は車で奥入瀬渓流に行けないの？</td>
          <td>
            ・大変申し訳ございませんが、<span style='color: #404ce3;'>平日の規制時は10：00～16：00</span> の間、<span style='color: #f5465e;'>休日の規制時は9:00～16:00</span> の間、大型車などを除いて通行止めとなっておりますので、ご協力をお願いします
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>なぜ規制をするのですか？</td>
          <td>
            ・自動車の騒音や排気ガスは、渓流散策者や自然にとって、決して良い環境とは言えません。<br>・渓流のせせらぎやブナ林を歩いて楽しんでいただくため、シャトルバス運行をさせていただいていますので、ご理解とご協力をお願いします。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>なぜマイカーだけ規制するのですか？<br>大型やバスはなぜ規制しないのですか？</td>
          <td>
            ・奥入瀬渓流の迂回路となっている七曲と呼ばれる区間は、道幅が狭く、急カーブも多い道路ですので、大型車のすれちがいが出来ません。このため、やむを得ず大型車は奥入瀬渓流を通行してもよいこととしています。
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>低公害車（ハイブリッドカー）も通行できないのですか？</td>
          <td>
            ・道路の混雑解消、渓流散策者の環境向上などを目的としていますので、申し訳ありませんが、通行止めでご協力お願い致します。
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>車椅子、身障者、高齢者も規制されるのですか？</td>
          <td>
            ・車椅子をご利用で歩行が困難な方が同乗されている場合、通行出来ます。<br>・障がい者手帳をお持ちの方はご提示ください。（障がいの種類、等級によらず、障がい者手帳をお持ちの方はすべて通行できます。）<br>・規制区間入口のスタッフへその旨お話下さい。<br>（事前申請は不要）
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>規制対象車輌は？</td>
          <td>
            ・自動二輪車を含むマイカー車両です。（原付バイクも含む）<br>・大型車、特定中型車、タクシー、ハイヤー、小特車、身体障害者使用車両は規制対象外です。<br><br>
            〔特定中型車とは〕
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">車両総重量　8ｔ以上　 11ｔ未満</p>
              <p style="margin-left: 10px;">最大積載量　5ｔ以上　6.5ｔ未満</p>
              <p style="margin-left: 10px;">乗車定員　11人以上　29人以下</p>
              <p style="margin-left: 20px;">・マイクロバス</p>
              <p style="margin-left: 20px;">・トラック（5ｔ以上）</p>
              <p style="margin-left: 20px;">※キャンピングカーは該当しない</p>
              <br>
              <p style="margin-left: 10px;">ナンバーで整理すると</p>
              <p style="margin-left: 10px;">１ナンバー大板：大型車及び特定中型車（貨物輸送用途） </p>
              <p style="margin-left: 10px;">２ナンバー大板：大型車（人輸送用途） </p>
              <p style="margin-left: 10px;">２ナンバー中板：特定中型車（人輸送用途）</p>
              <br>
              <p style="margin-left: 10px;">大板：22cm×44cm　ボルト４点固定</p>
              <p style="margin-left: 10px;">中板：16.5cm×33cm　ボルト２点固定</p>
              <br>
              <p style="margin-left: 10px;">※<span style="font-weight: bold;">２ナンバーもしくは大板ナンバープレート</span>の車両が</p>
              <p style="margin-left: 10px;">特定中型車以上のため規制対象外</p>
            </div>
            <br>
            <br>
            〔小特車とは〕
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">最高速度15ｋｍ／ｈ以下</p>
              <p style="margin-left: 10px;">全長4.7ｍ以下、全幅1.7ｍ以下、</p>
              <p style="margin-left: 10px;">全高2.8ｍ（2.0ｍ）以下</p>
              <br>
              <p style="font-weight: bold;">・農作業用自動車</p>
              <p style="margin-left: 10px;">（トラクタ、薬剤散布車、脱穀作業車等）</p>
              <p style="font-weight: bold;">・建設用機械</p>
              <p style="margin-left: 15px;">（ ショベルローダ、タイヤローラ、グレーダ、ロードスタビライザ、スクレーパ、ロータリ除雪車、アスファルトフィニッシャ、タイヤドーザ等の機械で上記規格内）</p>
              <p style="margin-left: 10px;">※軽トラックは該当しない</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>(自動車・自動二輪)<br>迂回路を通る場合、通常に比べて、どれくらい通過時間が違うのですか？</td>
          <td>
            ・惣辺交差点から子ノ口交差点までの区間延長は、奥入瀬渓流区間で約10km、迂回路（奥入瀬バイパス）は約14kmとなっており、通常期では約5～10分程度、通過時間に差があります。なお、マイカー規制日以外の紅葉シーズンは奥入瀬渓流区間で渋滞が発生することから、迂回路を通った方が早く通過できる場合もあります。
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>マイカー交通規制期間中に、観光バスは入ることができますか？</td>
          <td>
            <p>・マイカー交通規制期間中に観光バスは通行できます。</p>
            <p>・ただ一方で、一部区間において観光バスの長時間の駐車が集中し、車両の走行速度が低下、渓流内の歩行者の安全が阻害される状態となる場合があります。</p>
            <p>・ゆっくり観光する場合は、シャトルバスにお乗り換えください。</p>
            <p>・奥入瀬渓流内での長時間（20分以上）の駐停車はご遠慮ください。</p>
            <p>・観光バスの一時駐車場所は以下の通りです。</p>
            <p>　○奥入瀬渓流温泉スキー場前駐車場</p>
            <p>　○奥入瀬渓流館向かい側</p>
            <p>　○宇樽部駐車場</p>
            <p>　○休屋駐車場（有料）</p>
            <img src="<?php echo $site_url; ?>/pages/images/faqtab.jpg">
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>規制前であれば奥入瀬渓流にマイカー規制で進入できますか？</td>
          <td>
            ・規制前であれば、マイカーで奥入瀬渓流内に進入できます。<br>・ただし、<span style='color: red;'>規制時間内は道路交通法により車両を走行させることはできません。</span>（本規制は警察と協議済み、かつ道路交通法による規制です。）<br>・<span style='color: red;'>規制時間内に車両を走行させた場合は、道路交通法違反</span>に該当しますので十分ご注意ください。
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>何時から規制しますか？</td>
          <td>
            ・規制開始（＝車両が走行しない時間）は、下記の通りです。
            <br>→平日は10時00分から
            <br>→休日は9時00分から
            <br>・上記の規制開始時間は、<span style='color: red;'>マイカー規制区間内を車が走行してはいけない時間になります。</span>
            <br>・渓流内通過するにはおおよそ30分必要となりますので、マイカー規制区間外への迂回開始時刻は下記の時間から始まります。
            <br><span style='color: red;'>→平日は9時30分から</span>
            <br><span style='color: red;'>→休日は8時30分から</span>
          </td>
        </tr>
      </table>
      <h3>シャトルバスに関すること</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>質問内容</td>
          <td>回答例</td>
        </tr>
        <tr>
          <td>1</td>
          <td>駐車場はどこですか？<br>シャトルバスの運行はどうなっていますか？</td>
          <td>
            ・駐車場は奥入瀬渓流温泉スキー場前と休屋にありますので、こちらをご利用下さい。<br>・シャトルバスは奥入瀬渓流温泉スキー場前～休屋の間を30分間隔で運行します。<br>・料金は1日フリーパス1,500円です。<br>・小学生以下は無料です。
            <br><br>・奥入瀬渓流温泉スキー場前、休屋のシャトルバス発着場所は、路線バスのバス停とは異なります。<br>・奥入瀬渓流温泉スキー場前バス停は、JRバス東北の奥入瀬渓流温泉バス停とは異なります。ご注意ください。

          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>車椅子ですが乗車出来ますか？</td>
          <td>
            ・シャトルバスに乗車できません。<br>・車椅子を利用されている方は、マイカー規制の対象外です。その旨、交差点の誘導員、スタッフに伝えてください。（身障者用バス・福祉車両等）
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>ペット連れですが、シャトルバスに乗車できますか？</td>
          <td>
            ・ペットのバス内への持ち込みは容器（ケージ）に入れた場合のみ可能です。<br>・容器の準備のない方は、奥入瀬渓流温泉スキー場前駐車場及び休屋地区発券所にはダンボール箱を用意しますのでご利用下さい。

          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>シャトルバスに乗りたいのですが休屋駐車場は有料なのですか？</td>
          <td>
            ・交通規制の対象車両で休屋駐車場を利用される場合（駐車料自動車500円、自動二輪車200円）、シャトルバスチケット料金をお一人様のみ通常の1,500円から自動車1,000円、自動二輪車1,300円に割引して販売させていただいております。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>チケットを持っていませんがシャトルバスに乗ることは可能ですか？（主に渓流区間のバス停）</td>
          <td>
            ・乗車するにはシャトルバスチケットが必要となります。シャトルバス内でスタッフがチケットを販売しています。<br>・事前に電子チケットもご購入できます。ＷＥＢから「奥入瀬渓流　シャトルバス」と検索してください。

          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>ＪＲ路線バスのチケットでシャトルバスに乗車することはできますか？</td>
          <td>
            ・乗車することはできません。また、その逆で、シャトルバスチケットでＪＲ路線バスに乗車することもできません。
            シャトルバスとＪＲ路線バスの運行区別を明確にするためですのでご理解ください。<br>
            ※シャトルバスには写真のようにバス前面に「横断幕」を取り付けていますが、路線バスは「横断幕」が付いていません。<br>
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh-11-10.jpg">
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh1-11-10.jpg">
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>シャトルバスチケットは事前に購入できますか？</td>
          <td>
            ・シャトルバスチケットは事前に購入できます。<br>
            ・「奥入瀬渓流　シャトルバス」と検索してください。
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>シャトルバスの時刻表はどこに掲載されていますか？</td>
          <td>
            ・時刻表は下記に掲載しております。<a href="https://www.eco-oirase.com/ja/bus-ship#timetable"> https://www.eco-oirase.com/ja/bus-ship#timetable</a><br>
            ・「奥入瀬渓流　シャトルバス」と検索してください。
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>JR EAST PASS、JAPAN RAIL PASS、青森･八戸･十和田湖フリーきっぷを使ってシャトルバスに乗車できるの？</td>
          <td>
            ・JR EAST PASS、JAPAN RAIL PASSを使用して、シャトルバスに乗車することはできません。<br>
            ・青森･八戸･十和田湖フリーきっぷ（JR路線バスチケット）を使用してシャトルバスに乗車することはできません。
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>シャトルバスチケットは何時から販売開始ですか？</td>
          <td>
            ・シャトルバスチケットの販売開始時刻は、下記の通りです。<br>
            平日：8時45分～<br>
            休日：7時45分～
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>障がい者割引や高齢者割引、その他割引はありますか？</td>
          <td>
            ・障がい者割引や高齢者割引はございません。<br>
            ・障がい者手帳（障がいの種類、等級による）をお持ちであれば、マイカー交通規制の対象外となります。<br>
            ・交通規制の対象車両で休屋駐車場を利用される場合（駐車料自動車500円、自動二輪車200円）、シャトルバスチケット料金をお一人様のみ通常の1,500円から自動車1,000円、自動二輪車1,300円に割引して販売させていただいております。
          </td>
        </tr>
      </table>
      <h3>エコツアー、イベントに関すること</h3>
      <table id="faq">
        <p>当日パンフレット提示</p>
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>質問内容</td>
          <td>回答例</td>
        </tr>
        <tr>
          <td>1</td>
          <td>イベントの内容は？</td>
          <td>
            ・下記をご覧ください。<a href="https://www.eco-oirase.com/ja/event" style="margin-right: 199px;">「https://www.eco-oirase.com/ja/event」</a><br>
            ・「奥入瀬渓流　エコロードフェスタ」で
          </td>
        </tr>
      </table>
      <h3>レンタサイクル</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>質問内容</td>
          <td>回答例</td>
        </tr>
        <tr>
          <td>1</td>
          <td>レンタサイクルの利用は？</td>
          <td>
            ・奥入瀬湧水館、石ケ戸休憩所、JRバス（子ノ口バス停）にあります。<br>
            奥入瀬湧水館　0176-74-1212<br>
            石ケ戸休憩所　0176-74-2355<br>
            JRバス子ノ口　0176-75-2244<br>
            <table id="faq">
              <tr>
                <th colspan="2" style='text-align: center;background: #dfdb;'>〔営業内容〕</th>
              </tr>
              <tr>
                <td>営業時間</td>
                <td>9：00～16:30（子ノ口のみ16:00まで）</td>
              </tr>
              <tr>
                <td>料　　金</td>
                <td>
                  4時間 一般自転車…1,000円<br>
                  <p style="margin-left: 45px;">電動自転車…2,000円<br>e-Bike…3,000円<br></p>
                  （MTBタイプの電動アシスト自転車（湧水館発着のみ）<br>
                  <p style="margin-left: 45px;">乗り捨て料金無料<br>超過料金（30分毎）追加　300円/p>
                </td>
              </tr>
              <tr>
                <td>所要時間</td>
                <td>
                  奥入瀬渓流館→子ノ口　約2時間<br>
                  →上り勾配のため、下りよりも所要時間がかかります。<br>
                  子ノ口→奥入瀬渓流館 約1時間30分

                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <h3>渓流区間に関すること</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>質問内容</td>
          <td>回答</td>
        </tr>
        <tr>
          <td>1</td>
          <td>渓流区間の観光スポットはどこか？</td>
          <td>
            ・おすすめのコースは下記のとおりです。<br>

            静かなブナ林散策コース　黄瀬～惣辺交差点<br>
            →1.8km、徒歩約30分<br><br>

            「瀑布街道」満喫コース　雲井の流れ～銚子大滝　<br>
            →2.7km、徒歩約50分<br><br>

            荘厳たる巨木群堪能コース　白糸の滝～子ノ口<br>
            →2.6km、徒歩約50分<br><br>

            ■主要地点での距離と時間（参考）<br>奥入瀬渓流温泉スキー場前～子ノ口 約14km、約4～5時間<br>
            　　石ケ戸～子ノ口　約 9km、約3～4時間

          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>食事は出来ますか？</td>
          <td>
            ・渓流区間は石ケ戸休憩所でおにぎりなど軽食があります。<br>
            ・奥入瀬渓流温泉マルシェで軽食できます。<br>
            ・長時間歩く場合は、持参することをおすすめします。<br>
            ※子ノ口、休屋、奥入瀬渓流温泉地区ではお土産店とお食事処があります。
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>携帯電話は通じますか</td>
          <td>
            ・電波の状況が悪い区間もあります。<br>
            ・子ノ口～石ケ戸休憩所は電波がつながりにくいです。
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>トイレはありますか？</td>
          <td>
            ・渓流区間はトイレが少ないので事前にお済ませ下さい。<br>
            ○黄瀬公衆トイレ（奥入瀬渓流館～石ケ戸間）<br>
            ○石ケ戸休憩所トイレ（車いす可）<br>
            ○玉簾公衆トイレ（雲井の流れバス停から十和田湖側に500m）<br>
            ※千筋の滝および銚子大滝付近にも仮設トイレを設置しています。（マイカー交通規制期間中のみの仮設トイレのため、ガイドマップには記載されていません）。

          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>渓流は上流側（子ノ口側）から下流側（奥入瀬渓流温泉スキー場前）に向かって歩くべきですか。</td>
          <td>
            ・奥入瀬渓流は、下流側（奥入瀬渓流温泉スキー場前側）から上流側（子ノ口側）に歩くのがおすすめです。<br>
            ・理由は勾配がとても緩く、渓流の流れを見続けながら歩くことができるからです。
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>どのような服装で歩くべきですか？</td>
          <td>
            ・長袖、長ズボンを推奨します。<br>
            ・足元は、トレッキングシューズを推奨します。

          </td>
        </tr>
      </table>
    <?php } ?>

    <?php if ($lang == 'en') { ?>
      <h3><?php echo $title_1; ?></h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>Questions</td>
          <td>Answers</td>
        </tr>
        <tr>
          <td>1</td>
          <td>What is Eco Road Festa?</td>
          <td>
            ・This event aims to preserve the Oirase Stream and introduce its charms to many visitors, so that you can enjoy the stream quietly and leisurely.<br>
            ・Please note that vehicle access will be restricted (private vehicle traffic restrictions) on the day of the event.
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Is this an annual event? Are you planning to hold it next year?</td>
          <td>
            ・Vehicle access restrictions have been in place since 2003.<br>
            ・It is held annually for seven days during the final week of October.<br>
            ・In 2025, the event will be on from October 27th (Mon) to November 2nd (Sun).<br>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Is it impossible to drive to Oirase Stream on that day?</td>
          <td>
            We apologize for any inconvenience, but vehicle access is restricted from 10:00 AM to 4:00 PM on weekdays and from 9:00 AM to 4:00 PM on weekends, except for large-size vehicles.Thanks for your understanding.
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Why is this regulation in place?</td>
          <td>
            ・The noise and exhaust fumes from cars are detrimental to both people walking along the stream and the nature.<br>
            ・We operate shuttle buses so that you can enjoy walking along the beech forest and listening to the murmuring stream. Thank you for your understanding and cooperation.
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Why are there restrictions only on private vehicle?<br>
            Why not on large-size vehicles or buses?
          </td>
          <td>
            The Nanamagari section, which serves as a detour for the Oirase Stream, is narrow and has many sharp curves, making it impossible for large vehicles to pass each other. For this reason, large vehicles are allowed to travel through the Oirase Stream.
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Are low-emission vehicles (hybrid cars) also not allowed?</td>
          <td>
            ・The purpose of this restrictions is to reduce traffic congestion and improve the environment for people walking along the stream, so we apologize for any inconvenience.。
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>Are there restrictions on wheelchair users, people with disabilities and the elderly?</td>
          <td>
            ・Individuals who use a wheelchair and have difficulty walking may enter.<br>
            ・Please present your disability certificate. (Regardless of the type or degree of disability, all holders of a disability certificate are permitted to enter.)<br>
            ・Please inform the staff at the entrance to the restricted area.<br>
            (Prior application is not required.)
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>What types of vehicles are restricted?</td>
          <td>
            ・Private vehicles, including motorcycles (even mopeds).<br>
            ・Large-size vehicles, specific medium-sized vehicles, taxies, hire cars, specific small-sized vehicles and vehicles for the disabled are exempt .<br>
            (What is the specific medium-sized vehicle?)
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">Total vehicle weight: 8 to 11 tons</p>
              <p style="margin-left: 10px;">Maximum load capacity: 5 to 6.5 tons</p>
              <p style="margin-left: 10px;">Passenger capacity: 11 to 29 persons</p>
              <p style="margin-left: 20px;">・Microbus</p>
              <p style="margin-left: 20px;">・Truck (5 tons or more)</p>
              <p style="margin-left: 10px;">※Camping cars are not included</p>
              <br>
              <p style="margin-left: 10px;">Number plate categorization:</p>
              <p style="margin-left: 10px;">Number 1-Large plate: Large-size vehicles and specific medium-sized vehicles (for freight transportation)</p>
              <p style="margin-left: 10px;">Number 2- Large plate: Large-size vehicles (for passenger transportation)</p>
              <p style="margin-left: 10px;">Number 2- Medium plate: Specific medium-sized vehicles (for passenger transportation)</p>
              <br>
              <p style="margin-left: 10px;">Large plate: 22cm x 44cm 4 bolts</p>
              <p style="margin-left: 10px;">Medium plate: 16.5cm x 33cm 2 bolts</p>
              <p style="margin-left: 10px;">*Vehicles with number-2 large plate are not restricted because they are specific medium-sized vehicles or larger.</p>
            </div>
            <br>
            <br>
            (What is the specific small-sized vehicle?)
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">Maximum speed: 15km/h or less</p>
              <p style="margin-left: 10px;">Length: 4.7 meters or less, Width: 1.7 meters or less</p>
              <p style="margin-left: 10px;">Height: 2.8m (2.0m) or less</p>
              <br>
              <p style="font-weight: bold;">・Agricultural machinery</p>
              <p style="margin-left: 10px;">(Tractors, pesticide sprayers, threshing machine, etc.)</p>
              <p style="font-weight: bold;">Construction machinery</p>
              <p style="margin-left: 10px;">(Shovel loaders, tire rollers, graders, road stabilizers, scrapers, rotary snowplows, asphalt finishers, tire dozers, etc. that meet the above standards)</p>
              <p style="margin-left: 10px;">※Mini-trucks (kei trucks) are not included.</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>(Cars/ motorcycles)<br>
            How much longer does the detour route take compared to the usual route?</td>
          <td>
            ・The distance from Soube intersection to Nenokuchi intersection is about 10km through the Oirase Stream and about 14km via the Oirase Bypass. It usually
            takes about 5 to 10 minutes longer to travel through stream. However, during the autumn foliage season when there are no vehicle restrictions, traffic
            congestion can occur in the Oirase Stream section, so using the bypass may be quicker.
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>Can tourist buses enter during the private vehicle restriction period?</td>
          <td>
            <p>・Tourist buses are allowed to enter during the private vehicle restriction period.</p>
            <p>・However, in some sections, long-term parking of tourist buses can slow down the vehicle's speed and pose a the safety risk to pedestrians within the stream.</p>
            <p>・For leisurely sightseeing, please use the shuttle bus.</p>
            <p>・Please refrain from parking for long time (over 20 minutes) in the Oirase Stream.</p>
            <p>・Temporary parking areas for tourist buses are as follows:</p>
            <p>○Parking lot in front of Oirase Keiryu Onsen Ski Resort</p>
            <p>○Opposite Oirase Field Museum</p>
            <p>○Utarube parking lot</p>
            <p>○Yasumiya parking lot (paid)</p>
            <img src="<?php echo $site_url; ?>/pages/images/faqtab.jpg">
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>Can private vehicles enter the Oirase Stream before the restrictions are in place?</td>
          <td>
            ・Private vehicles can enter the Oirase Stream before the restrictions are in place.<br>
            ・However, during the restricted hours, driving is prohibited by law. (This restriction has been coordinated with the police and is based on the Road Traffic Act.)<br>
            ・Please be aware that driving during restricted hours is a violation of the Road Traffic Act.<br>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>What time will the vehicle restriction start?</td>
          <td>

            <p></p>・Vehicle restrictions will begin at the following times:<br>
            →Weekdays: from 10:00 AM<br>
            →Weekends: from 9:00 AM<br>
            ・During these times, no vehicles are allowed within the restricted area.<br>
            ・It takes approximately 30 minutes to pass through the stream, so the detour outside the restricted area start at the following times:<br>
            <span style='color: red;'>→Weekdays: from 9:30 AM</span><br>
            <span style='color: red;'>→Weekends: from 8:30 AM</span><br>
            </p>
          </td>
        </tr>
      </table>
      <h3>Regarding shuttle buses</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>Questions</td>
          <td>Example Answer</td>
        </tr>
        <tr>
          <td>1</td>
          <td>
            Where is the parking lot?<br>
            How does the shuttle bus work?
          </td>
          <td>
            ・Parking is available at Oirase Keiryu Onsen Ski Resort and Yasumiya. Please use these parking lots.<br>
            ・The shuttle bus runs between Oirase Keiryu Onsen Ski Resort and Yasumiya every 30 minutes.<br>
            ・The one-day pass is 1.500 yen.<br>
            ・Free for elementary school students and younger.<br>
            ・The shuttle bus stops at Oirase Keiryu Onsen Ski Resort and Yasumiya are distinct from the regular bus stops.<br>
            ・Please note the shuttle bus stop at Oirase Keiryu Onsen Ski Resort is different from the JR Bus Tohoku Oirase Keiryu Onsen bus stop.<br>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Is the shuttle bus available for wheelchair users?</td>
          <td>
            ・Shuttle bus service is not available for wheelchair users.<br>
            ・Wheelchair users are exempt from the vehicle restrictions. Please inform the traffic controllers or staff at the intersections. (for handicap buses, welfare vehicles, etc.)<br>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Is it possible to bring pets on the shuttle bus?</td>
          <td>
            ・Pets are only allowed on the bus if they are in a carrier (cage).<br>
            ・If you do not have a carrier, please use the cardboard boxes available at the Oirase Keiryu Onsen Ski Resort parking lot and the Yasumiya ticket office.
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Is there a fee at Yasumiya parking lot if I want to take the shuttle bus? </td>
          <td>
            ・For vehicles subject to traffic restrictions using the Yasumiya parking lot (parking fee: 500 yen for cars, 200 yen for motorcycles), we offer a special discounted rate for the shuttle bus: 1.000 yen for cars and 1.300 yen for motorcycles, compared to the standard fare of 1.500 yen.
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Is it possible to board the shuttle bus without a ticket? (especially at the bus stop in the stream area)</td>
          <td>
            ・A shuttle bus ticket is required to board the bus. Staff will sell tickets on the shuttle bus.<br>
            ・You can also purchase e-tickets in advance by searching for "Oirase Keiryu Shuttle Bus" on the web.。
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Can I use my JR route bus ticket to board the shuttle bus?</td>
          <td>
            ・Please note that JR route bus tickets cannot be used for the Oirase Keiryu shuttle bus and vice versa. To avoid confusion, we have clearly distinguished between the two bus services.<br>
            ※As shown in the picture, the shuttle buses have "banners" installed on the front, while the route buses do not.。<br>
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh-11-10.jpg">
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh1-11-10.jpg">
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>Can I purchase the shuttle bus ticket in advance?</td>
          <td>
            ・Shuttle bus tickets can be purchased in advance.<br>
            ・Please search for "Oirase Stream Shuttle Bus" on the web.
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>Where is the shuttle bus schedule posted?</td>
          <td>
            ・The schedule is posted below: <a href="https://www.eco-oirase.com/ja/bus-ship#timetable"> https://www.eco-oirase.com/ja/bus-ship#timetable</a><br>
            ・Search for "Oirase Stream Shuttle Bus.<br>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>Can I use the JR EAST PASS, JAPAN RAIL PASS or Aomori-Hachinohe-Towada Lake Free Ticket to board the shuttle bus?</td>
          <td>
            ・The JR EAST PASS and JAPAN RAIL PASS cannot be used to board the shuttle bus.<br>
            ・The Aomori-Hachinohe-Towada Lake Free Ticket (JR route bus ticket) cannot be used to board the shuttle bus.
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>What time do shuttle bus tickets go on sale?</td>
          <td>
            ・The sale of shuttle bus tickets begins at the following times:<br>
            Weekdays: from 8:45 AM<br>
            Weekends : from 7:45 AM
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>Are there any discounts available for people with disabilities, seniors or others?</td>
          <td>
            ・There are no discounts for people with disabilities or seniors.<br>
            ・If you have a disability certificate (depending on the type and degree of disability), your vehicle will be exempt from traffic restrictions.<br>
            ・For vehicles subject to traffic restrictions using the Yasumiya parking lot (parking fee: 500 yen for cars, 200 yen for motorcycles), we offer a special discounted rate for the shuttle bus: 1.000 yen for cars and 1.300 yen for motorcycles, compared to the standard fare of 1.500 yen.
          </td>
        </tr>
      </table>
      <h3>Regarding Ecotours and events</h3>
      <table id="faq">
        <p>Brochure</p>
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>Questions</td>
          <td>Example Answer</td>
        </tr>
        <tr>
          <td>1</td>
          <td>What is the event about?</td>
          <td>
            ・Please see below:<a href="https://www.eco-oirase.com/ja/event" style="margin-right: 199px;">https://www.eco-oirase.com/ja/event</a><br>
            ・At "Oirase Stream Eco Road Festa"
          </td>
        </tr>
      </table>
      <h3>Bicycle rental</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>Questions</td>
          <td>Example Answer</td>
        </tr>
        <tr>
          <td>1</td>
          <td>How to rent a bicycle?</td>
          <td>
            ・Bicycle rental services is available at Oirase Yusuikan, Ishigedo Rest Area and JR Bus (Nenokuchi bus stop).<br>
            Oirase Yusuikan: 0176-74-1212<br>
            Ishigedo Rest Area: 0176-74-2355<br>
            JR Bus Nenokuchi: 0176-75-2244<br>
            <table id="faq">
              <tr>
                <th colspan="2" style='text-align: center;background: #dfdb;'>Business details</th>
              </tr>
              <tr>
                <td>Opening time</td>
                <td>From 9:00 to 16:30 (Nenokuchi only until 16:00)</td>
              </tr>
              <tr>
                <td>Rental rates</td>
                <td>
                  4 hours: General bicycle... 1.000 yen <br>
                  <p style="margin-left: 45px;">Electric bicycle...2.000 yen<br>e-Bike...3.000 yen<br></p>
                  MTB type electric assist bicycle (departure from Yusuikan only)<br>
                  <p style="margin-left: 45px;">Free drop-off<br>Excess charge (every 30 minutes) 300 yen/person</p>
                </td>
              </tr>
              <tr>
                <td>Travel time</td>
                <td>
                  Oirase Field Museum → Nenokuchi Approximately 2 hours
                  → Because it's uphill, it will take longer than going downhill.<br>
                  Nenokuchi → Oirase Field Museum Approximately 1 hour 30 minutes
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <h3>Regarding the stream area</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>Questions</td>
          <td>Answers</td>
        </tr>
        <tr>
          <td>1</td>
          <td>What are the tourist attractions along the stream?</td>
          <td>
            ・The recommended courses are as follows:<br>
            Peaceful forest walk course: Ouse ~ Sobe intersection<br>
            →1.8km, approximately 30 minutes on foot<br><br>

            "Waterfall Highway" enjoyment course: Kumoinonagare ~ Choshio falls<br>
            →2.7km, approximately 50 minutes on foot<br><br>

            The majestic giant trees enjoyment course: Shiraito falls ~ Nenokuchi<br>
            →2.6km, approximately 50 minutes on foot<br><br>

            ■Distance and time at major points (for reference)<br>
            Oirase Keiryu Onsen Ski Resort ~ Nenokuchi: approximately 14km, 4-5 hours<br>
            Ishigedo~Nenokuchi: approximately 9km, 3-4 hours<br>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Can I eat here?</td>
          <td>
            ・Light snacks like onigiri are available at Ishigedo rest area in the stream section.<br>
            ・You can get a light snack at the Oirase Keiryu Onsen Marche.<br>
            ・If you are going on a long hike, we recommend bringing your own food.<br>
            *There are souvenir shops and restaurants in Nenokuchi, Yasumiya and the Oirase Keiryu Onsen area.<br>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Can I use a mobile phone?</td>
          <td>
            ・There are some areas with poor signal strength.<br>
            ・Cell phone reception is poor between Nenokuchi and Ishigedo rest area.
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Are there toilets here?</td>
          <td>
            ・There are few toilets in the stream area, so please use them beforehand.<br>
            ○Ouse public toilet (Oirase Field Museum~Ishigedo)<br>
            ○Ishigedo rest area toilet (wheelchair accessible)<br>
            ○Tamasudare public toilet (500m from Kumoinogare bus stop on the Lake Towada side)<br>
            ※Temporary toilets near Sensuji falls and Choshio falls are also available. (These are not listed on the guide map as they are only available during the private vehicle restrictions period)<br>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Should I walk along the stream from the upstream (Nenokuchi side) to the downstream (Oirase Keiryu Onsen Ski Resort)?</td>
          <td>
            ・We recommend walking along the Oirase Stream from the downstream side (Oirase Keiryu Onsen Ski Resort) to the upstream side (Nenokuchi).<br>
            ・The reason is that the slope is very gentle, allowing you to enjoy the scenery of the flowing stream.
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>What kind of clothes should I wear for the walk?</td>
          <td>
            ・We recommend wearing long sleeves and long trousers.<br>
            ・Trekking shoes are recommended for footwear.
          </td>
        </tr>
      </table>
    <?php } ?>

    <?php if ($lang == 'co') { ?>
      <h3><?php echo $title_1; ?></h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>질문 내용</td>
          <td>답변</td>
        </tr>
        <tr>
          <td>1</td>
          <td>에코 로드 축제란 무엇인가요?</td>
          <td>
            이 행사는 오이라세 계곡을 보존하고 그 아름다움을 많은 사람들에게 소개하기 위해 개최됩니다. 이 행사는 사람들이 조용하고 편안하게 계곡을 즐길 수 있도록 조직되었습니다. 행사 당일에는 개인 차량의 진입이 제한된다는 점을 유의하시기 바랍니다.
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>이 행사는 매년 열리나요? 내년에도 개최되나요?</td>
          <td>
            차량 진입 제한 규정은 2003년부터 시행되었습니다. 매년 10월 마지막 주 주말 동안 7일간 행사가 열립니다. 2025년(레이와 시대 7년)은 10월 27일(월요일)부터 11월 2일(일요일)까지 진행될 예정입니다.
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>그 날, 저는 차로 오이라세 계곡에 갈 수 없나요?</td>
          <td>
            죄송합니다만 차량 운행 제한 기간에 평일 10:00~16:00, 공휴일 9:00~16:00에는 대형 차량을 제외한 모든 차량의 운행이 금지되오니 많은 협조 부탁드립니다.
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>이러한 제한 규정은 왜 있나요?</td>
          <td>
            자동차의 소음과 배기가스는 계곡과 자연을 산책하는 사람들에게 좋은 환경이 아닙니다. 사람들이 계곡의 소리를 즐기고 너도밤나무 숲 속을 걸을 수 있도록 셔틀버스를 운영하고 있으니, 이해와 협조 부탁드립니다.
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>왜 개인 차량에만 제한이 있나요? 대형 차량과 버스에는 왜 제한이 없나요?</td>
          <td>
            나나마가리 구간은 좁고 급커브가 많은 도로로, 대형 차량이 서로 통과할 수 없습니다. 따라서 불가피한 상황에서만 대형 차량이 오이라세 계류를 통과할 수 있도록 허용됩니다.
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>환경 친화적인 차량(하이브리드 차량)도 통행이 금지되나요?</td>
          <td>
            교통 혼잡을 줄이고 계곡을 산책하는 사람들을 위한 환경을 개선하기 위해, 고객님께 사과드리며 통행 제한 규정을 협조해 주시기를 부탁드립니다.
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>휠체어, 장애인 및 노인에 대한 제한이 있나요?</td>
          <td>
            • 휠체어를 사용하는 분이 이동에 어려움이 있는 경우, 통과가 허용될 수 있습니다.<br>
            • 장애인 인증 카드를 소지한 분은 이용 시 카드를 제시해 주시기 바랍니다. (장애 유형이나 정도와 관계없이, 장애인 인증 카드를 소지한 모든 분은 통행이 허용됩니다.)<br>
            • 제한 구역 입구의 직원에게 이 사실을 알려주시기 바랍니다. (사전 등록은 필요 없습니다.)）
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>어떤 차량이 제한되나요?</td>
          <td>
            • 개인 차량에는 오토바이(전기 오토바이 포함)도 포함됩니다.<br>
            • 대형 차량, 중형 특수 차량, 택시, 렌터카, 소형 특수 차량 및 장애인을 위한 차량은 제한 대상에 포함되지 않습니다.<br><br>
            중형 특수 차량이란 무엇인가요?
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">총 중량: 8톤 이상 11톤 미만</p>
              <p style="margin-left: 10px;">최대 적재량: 5톤 이상 6.5톤 미만</p>
              <p style="margin-left: 10px;">좌석 수: 11명 이상 29명 미만</p>

              <p style="margin-left: 20px;">마이크로버스</p>
              <p style="margin-left: 20px;">화물차 (5톤 초과)</p>
              <p style="margin-left: 20px;">참고: 캠핑카는 이 범주에 포함되지 않습니다.</p>
              <br>
              <p style="margin-left: 10px;">번호판 분류:</p>
              <br>
              <p style="margin-left: 10px;">유형 1: 대형 및 중형 특수 차량 (화물 운송용)</p>
              <p style="margin-left: 10px;">유형 2: 대형 차량 (승객 운송용)</p>
              <p style="margin-left: 10px;">유형 2: 중형 특수 차량 (승객 운송용)</p>
              <p style="margin-left: 10px;">번호판 규격:</p>
              <br>
              <p style="margin-left: 10px;">대형: 22cm x 44cm, 4개의 고정 볼트로 장착</p>
              <p style="margin-left: 10px;">중형: 16.5cm x 33cm, 2개의 고정 볼트로 장착</p>
              <p style="margin-left: 10px;">*참고: 유형 2 또는 대형 번호판을 가진 중형 특수 차량은 제한 대상에 포함되지 않습니다.</p>
            </div>
            <br>
            <br>
            〔소형 특수 차량이란 무엇인가요?
            <div style='border: 2px solid black;'>
              <p>최대 속도: 15 km/h 미만</p>
              <p>길이: 4.7m 미만, 너비: 1.7m 미만, 높이: 2.8m(또는 2.0m) 미만</p>
              <p>농업용 차량(트랙터, 농약 분무기, 수확기 등)</p>
              <p>건설 기계(로더, 롤러, 스크래퍼, 도로 안정화 기계, 경운기, 스노우 블로워, 아스팔트 콘크리트 마감 기계, 타이어 구동 트랙터 등)</p>
              <p>참고: 소형 트럭은 이 범주에 포함되지 않습니다.</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>(자동차/오토바이)<br>우회로를 이용하면 일반 도로와 비교해 운송 시간이 얼마나 달라지나요?</td>
          <td>
            오이라세 계류 지역에서의 소베사거리에서 고노쿠치 사거리까지의 거리는 약 10km, 우회도로(오이라세 바이패스)는 약 14km입니다. 보통 이동시간은 약 5~10분 차이가 있습니다. 단풍의 계절에는 개인차량 운행이 금지되지 않는 기간에는 오이라세 계류 지역에서는 교통침체 발생하므로 우회도로 이용하시면 더 빠릅니다.
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>관광 버스는 개인 차량 통행 제한 시간에 들어갈 수 있나요?</td>
          <td>
            <p>・관광 버스는 개인 차량 통행 제한 시간에 통과할 수 있습니다.</p>
            <p>・그러나 일부 지역에서는 관광 버스가 장시간 주차할 수 있어 차량 속도를 줄이고 계곡에서 걷는 사람들의 안전을 방해할 수 있습니다.</p>
            <p>・편안하게 관광하시려면 셔틀버스로 전환해 주시기 바랍니다.</p>
            <p>・오이라세 협곡에서는 장시간 주차(20분 이상)를 삼가해 주시기 바랍니다.</p>
            <p>・관광 버스를 위한 임시 주차 위치는 다음과 같습니다.</p>
            <p> ○ 오이라세 계류 온천 스키장 앞 주차장</p>
            <p> ○ 오이라세 케이류칸 맞은편</p>
            <p> ○ 우타루베 주차장</p>

            <img src="<?php echo $site_url; ?>/pages/images/faqtab.jpg">
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>제한 규정이 있기 전에 개인 차량으로 오이라세 협곡에 들어갈 수 있나요?</td>
          <td>
            <p>· 제한시간 전에 개인 차량으로 오이라세 협곡에 진입을 하실 수 있습니다.</p>
            <p>・단, 도로교통법에 따라 제한기간 내에는 차량 운행이 불가능합니다. (이 규정은 경찰과 협의한 내용이며 도로교통법을 근거로 합니다.)</p>
            <p>・제한 기간 내 차량 운행은 도로교통법 위반이므로 주의하시기 바랍니다.</p>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>규정은 언제부터 시행되나요?</td>
          <td>
            <p>・규정 시작 시간 (= 차량이 운행하지 않는 시간)는 다음과 같습니다.</p>
            <p>→ 평일: 10:00부터</p>
            <p>→ 휴일: 9:00부터</p>
            <p>・위에 언급된 제한 시간은 개인 차량이 제한 구역 내에서 운전할 수 없는 시간입니다.</p>
            <p>・산속 계곡을 통과하는 데 약 30분이 소요되므로, 개인 차량이 제한 구역을 우회하기 시작하는 시간은 다음과 같습니다.</p>
            <p> → 평일: 오전 9:30부터</p>
            <p> → 휴일: 오전 8:30부터 개방.</p>
          </td>
        </tr>
      </table>
      <h3>셔틀버스 정보</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>질문 내용</td>
          <td>샘플 답변</td>
        </tr>
        <tr>
          <td>1</td>
          <td>주차장은 어디에 있나요?<br>
            셔틀버스는 어떻게 운행되나요?</td>
          <td>
            <p>・오이라세 계류 온천 스키장과 야스미야 앞에 주차장이 있으니 이곳을 이용해 주시기 바랍니다.</p>
            <p>・셔틀버스는 오이라세 계류 온천 스키장과 야스미야 사이를 30분 간격으로 운행합니다.</p>
            <p>・일일 요금은 1,500엔입니다.</p>
            <p>・초등학교 이하 학생은 무료 입장입니다.</p>
            <p>・셔틀버스의 출발 및 도착 지점은 오이라세 계류 온천 스키장과 야스미야 앞에 있으며, 노선 버스 정류장과는 다릅니다.</p>
            <p>・오이라세 계류 온천 스키장 정류소는 JR 버스 도호쿠의 오이라세 계류 온천 정류소와 다르니 유의하시기 바랍니다.</p>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>저는 휠체어를 사용하고 있는데, 차에 탈 수 있을까요?</td>
          <td>
            <p>・고객님은 셔틀버스를 이용하실 수 없습니다.</p>
            <p>・휠체어를 사용하는 경우 개인 자동차 통행 제한을 따르지 않아도 됩니다. 이 점에 대해 교차로 안내자와 직원에게 알려주시기 바랍니다. (장애인 전용 버스, 복지 차량 등)</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>저는 반려동물을 데리고 왔는데, 셔틀버스를 탈 수 있을까요?</td>
          <td>
            <p>・반려동물은 전용 상자(우리)에 담겨 있어야만 버스에 탑승할 수 있습니다.</p>
            <p>・관람객이 상자를 미리 준비하지 않은 경우, 오이라세 케이류 온천 스키장 주차장과 야스미야 구역 매표소에서 제공하는 판지 상자를 이용해 주시기 바랍니다.</p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>셔틀버스를 타고 싶은데, 야스미야 주차장은 요금이 있나요?</td>
          <td>
            ・교통 규정을 준수하는 차량으로 야스미야 주차장을 이용할 경우, 주차 요금은 자동차 500엔, 오토바이 200엔입니다. 일반 요금 1,500엔에서 자동차 탑승자는 1,000엔, 오토바이 탑승자는 1,300엔으로 할인된 셔틀버스 요금을 판매하고 있습니다.
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>저는 티켓이 없는데, 셔틀버스를 탈 수 있을까요? (주로 산속 구역에서 정차합니다.)</td>
          <td>
            <p>・셔틀버스를 이용하려면 티켓이 필요합니다. 직원이 셔틀버스에서 티켓을 판매합니다.</p>
            <p>・전자 티켓도 미리 구매할 수 있습니다. '오이라세 케이류 셔틀버스'를 검색해 주세요.</p>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>JR 노선 버스 티켓으로 셔틀버스를 탈 수 있나요?</td>
          <td>
            ・셔틀버스를 이용할 수 없습니다. 또한, 셔틀버스 티켓으로 JR 노선 버스를 탈 수 없습니다. 이는 셔틀버스와 JR 노선 버스의 차이를 명확히 하기 위한 것임을 이해해 주시기 바랍니다.<br>
            *셔틀버스에는 사진과 같이 앞쪽에 '배너'가 붙어 있지만, 노선 버스에는 '배너'가 없습니다。<br>
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh-11-10.jpg">
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh1-11-10.jpg">
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>셔틀버스 티켓을 미리 구매할 수 있나요?</td>
          <td>
            ・셔틀버스 티켓을 미리 구매할 수 있습니다.<br>
            ・'오이라세 케이류 셔틀버스'를 검색해 주세요.
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>셔틀버스 일정은 어디에 게시되어 있나요?</td>
          <td>
            ・일정은 아래에 게시되어 있습니다.<a href="https://www.eco-oirase.com/ja/bus-ship#timetable"> https://www.eco-oirase.com/ja/bus-ship#timetable</a><br>
            ・'오이라세 케이류 셔틀버스'를 검색해 주세요
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>JR EAST PASS, JAPAN RAIL PASS, Aomori/Hachinohe/Lake Towada의 무료 티켓으로 셔틀버스를 탈 수 있나요?</td>
          <td>
            ・JR EAST PASS 또는 JAPAN RAIL PASS로 셔틀버스를 이용할 수 없습니다.<br>
            ・Aomori/Hachinohe/호수 Towada의 무료 티켓(노선 버스 티켓)으로도 셔틀버스를 탈 수 없습니다.<br>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>셔틀버스 티켓은 몇 시에 판매되나요?</td>
          <td>
            ・셔틀버스 티켓 판매 시작 시간은 다음과 같습니다.<br>
            주중: 오전 8:45~<br>
            공휴일: 오전 7:45~
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>장애인, 노인 또는 기타 할인 혜택이 있나요?</td>
          <td>
            <p>・장애인이나 노인을 위한 할인은 없습니다.</p>
            <p>・장애인 증명서를 소지한 경우(장애의 종류와 정도에 따라 다름) 개인 자동차 통행 제한 규정을 따르지 않아도 됩니다.</p>
            <p>・교통 규정을 준수하는 차량으로 야스미야 주차장을 이용할 경우, 주차 요금은 자동차 500엔, 오토바이 200엔입니다. 일반 요금 1,500엔에서 자동차 탑승자는 1,000엔, 오토바이 탑승자는 1,300엔으로 할인된 셔틀버스 요금을 판매하고 있습니다.</p>
          </td>
        </tr>
      </table>
      <h3>생태 관광 및 이벤트에 대하여</h3>
      <table id="faq">
        <p>당일 배포되는 전단지에 표시됩니다.</p>
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>질문 내용</td>
          <td>샘플 답변</td>
        </tr>
        <tr>
          <td>1</td>
          <td>이벤트의 내용은 무엇인가요?</td>
          <td>
            ・아래를 참조해 주세요.<a href="https://www.eco-oirase.com/ja/event" style="margin-right: 199px;">「https://www.eco-oirase.com/ja/event」</a><br>
            ・"오이라세 협곡 생태길 축제"에서
          </td>
        </tr>
      </table>
      <h3>자전거 대</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>질문 내용</td>
          <td>샘플 답변</td>
        </tr>
        <tr>
          <td>1</td>
          <td>어떻게 자전거를 대여할 수 있나요?</td>
          <td>
            <p>오이라세 필드 박물관 입구, 이시게도 리조트 리조트, JR 버스정류장(노노구치 버스 정류장)에 위치합니다다.</p>
            <p>오이라세 유스이칸 0176-74-1212</p>
            <p>이시가토 리조트 0176-74-2355</p>
            <p>JR 노노구치 버스 0176-75-2244</p>
            <table id="faq">
              <tr>
                <th colspan="2" style='text-align: center;background: #dfdb;'>[사업 운영에 대한 자세한 정보]</th>
              </tr>
              <tr>
                <td>업무 시간</td>
                <td>9:00-16:30 (네노쿠치는 16:00까지)</td>
              </tr>
              <tr>
                <td>요금</td>
                <td>
                  <p>일반 자전거 4시간…1,000엔</p>
                  <p>전기 자전거…2,000엔</p>
                  <p>전기 자전거…3,000엔</p>
                  <br>
                  <p>(MTB 전기 지원 자전거(유수이칸 왕복 전용)</p>
                  <p>셔틀버스 요금 무료</p>
                  <p>초과 요금(30분마다) 추가 300엔/30분</p>
                </td>
              </tr>
              <tr>
                <td>필요한 시간</td>
                <td>
                  <p>오이라세 케이류칸 → 네노쿠치 약 2시간</p>
                  <p>→ 경사가 있기 때문에 하산보다 시간이 더 걸립니다.</p>
                  <p>네노쿠치 → 오이라세 케이류칸 약 1시간 30분</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <h3>산속 계곡에 대해</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>질문 내용</td>
          <td>샘플 답변</td>
        </tr>
        <tr>
          <td>1</td>
          <td>산속 계곡에는 어떤 관광 명소가 있나요?</td>
          <td>
            <p>・추천 경로는 다음과 같습니다.</p>
            <p>기세소베 교차로의 참나무 숲 속의 조용한 산책로</p>
            <p>→1.8km, 도보 약 30분</p>
            <br>
            <p>흥미로운 경로 "폭포 루트" : 구모이 폭포 ~ 조시 폭포</p>
            <p>→2.7km, 도보 약 50분</p>
            <br>
            <p>거대한 거목 구경 경로: 시라이토 폭포에서 네노쿠치까지</p>
            <p> →2.6km, 도보 약 50분</p>
            <br>
            <p> ■ 주요 코스들간 간격 및 시간(참고용)</p>
            <p> 오이라세 계류 온천 - 네노쿠치 스키장 약 14km, 약 4~5시간 소요</p>
            <p>이시가도~노노구치 약 9km, 약 3~4시간</p>

          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>식사할 수 있나요?</td>
          <td>
            <p>・계류 지역에서는 이시가도 휴게소에서 주먹밥 등 가벼운 식사를 즐기실 수 있습니다.</p>
            <p>・오이라세 계류 온천 마르쉐에서 가벼운 식사를 즐기실 수 있습니다.</p>
            <p>・산행을 계획 중이시라면 음식을 직접 준비하시기 바랍니다.</p>
            <p>*네노쿠치, 야스미야, 오이라세 계류 온천 지역에는 기념품 가게와 레스토랑이 있습니다.。</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>저는 휴대전화를 사용할 수 있나요?</td>
          <td>
            <p>・신호가 약한 구역이 있습니다.</p>
            <p> Nenokuchi 휴식 구역과 Ishigado 사이의 전화 신호가 약해 연결이 어렵습니다.</p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>화장실이 있나요?</td>
          <td>
            <p>온천지역에는 화장실 수가 적으므로 사전에 이용하시기 바랍니다.</p>
            <p>○키세 공중 화장실(오이라세 계류관~이시가토마)</p>
            <p>○이시게도 휴게소 화장실(휠체어 이용 가능)</p>
            <p>○ 다마다레 공중 화장실(구모이노 나가레 버스 정류장에서 도와다 호반까지 500m임)</p>
            <p>*치스지 폭포, 조시 오타키 폭포 근처에서도 임시 화장실이 설치되어 있습니다. (개인 차량 운행이 제한된 기간에만 이용할 수 있는 임시 화장실이므로 가이드맵에는 기재되어 있지 않습니다.) "</p>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>나는 상류(네노쿠치)에서 하류(오이라세 케이류 온천 스키장 앞)까지 걸어야 할까요?</td>
          <td>
            우리는 당신이 오이라세 케이류의 하류(오이라세 케이류 온천 스키장 앞)에서 상류(네노쿠치)까지 걷는 것을 추천합니다. · 경사가 매우 완만하기 때문에 산속의 개울 흐름을 보면서 걷기 좋습니다.
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>나는 어떤 옷을 입어야 할까요?</td>
          <td>
            <p>・긴팔, 긴바지를 권장합니다.</p>
            <p>・발을 보호하기 위해 트레킹화를 권장합니다.</p>
          </td>
        </tr>
      </table>
    <?php } ?>

    <?php if ($lang == 'chi') { ?>
      <h3><?php echo $title_1; ?></h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>问题内容</td>
          <td>回答</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Eco Road 节日是什么？</td>
          <td>
            这是一项保护Oirase溪流温泉并向更多人介绍Oirase之美的活动。此次活动的组织目的是为了让每个人都能安静舒适地享受溪流。请注意，活动当天将实行车辆进入限制（私家车交通限制）
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>每年都举办吗？<br> 明年举办吗？</td>
          <td>
            <p>自 2003 年起就实施了车辆通行限制</p>
            <p>每年，活动都会在 10 月份最后1周的那7天举行</p>
            <p>2025年（Reiwa时代第7年）将于10月27日（星期一）至11月2日（星期日）举行。</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>那天我不能开车去Oirase溪吗？</td>
          <td>
            非常抱歉，但是在限行期间内，工作日 10:00 至 16:00和节假日 9:00 至 16:00，除大型车辆外，其他车辆一律禁止通行，请配合。
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>为什么会有这个限制规定？</td>
          <td>
            汽车的噪音和尾气对于人们在溪流和大自然中行走来说并不是一个良好的环境。为了让大家能够欣赏溪水声、并在beech山树林里散步，我们特意安排了接驳巴士，敬请理解和配合。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>为什么只对私家车辆有规定？<br>为什么对大型车辆和公共汽车没有规定？</td>
          <td>
            Nanamagari 这条路很窄，急转弯很多，大型车辆无法互相超车。因此，只有在出现不可抗力的情况下，大型车辆才可以通过Oirase溪流。
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>环保车（混合动力车）也不可以流通吗？</td>
          <td>
            为了减少交通拥堵，改善大家在溪边行走的环境，我们向您表示歉意，但请配合实施交通管制。
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>轮椅、残疾人和老年人是否有限制？</td>
          <td>
            <p>• 如果有人使用轮椅并且行走有困难，可允许通行；</p>
            <p>• 持有残疾人证者，使用时请出示该卡。 （无论残疾类型或程度如何，所有持有残疾证明的人都可以通行）</p>
            <p>• 请告知禁区入口处的工作人员。 （无需提前注册。）</p>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>哪些车辆被限制？</td>
          <td>
            • 私家车辆，包括摩托车（包括电动摩托车）<br>
            •大型汽车、特殊中型汽车、出租车、租赁车；特殊小型汽车、残疾人用车不受限制。。<br><br>
            什么是特种中型车？
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">车辆总重：8吨至11吨以下</p>
              <p style="margin-left: 10px;">最大负载：5吨至6.5吨以下</p>
              <p style="margin-left: 10px;">座位数：11人至29人以下</p>
              <p style="margin-left: 20px;">面包车</p>
              <p style="margin-left: 20px;">卡车（5吨以上）</p>
              <p style="margin-left: 20px;">注：旅居车(camping car)不包括在此类别中。</p>
              <p style="margin-left: 10px;">按车牌分类：</p>
              <p style="margin-left: 10px;">车牌类型1：大型车辆和特种中型车辆（用于运输货物）</p>
              <p style="margin-left: 10px;">车牌类型2：大型车辆（客运用）</p>
              <p style="margin-left: 10px;">车牌类型2：特种中型车（客运用）</p>
              <p style="margin-left: 10px;">大车牌：22cm x 44cm，用4个固定螺栓安装</p>
              <p style="margin-left: 10px;">.5cm x 33cm，用2个固定螺栓固定</p>
              <p style="margin-left: 10px;">*注：车牌类型2的车辆或属于中型及以上特种车辆的大型车牌车辆不受限制。</p>
            </div>
            <br>
            <br>
            什么是特种小型车？
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">最高速度：小于15公里/小时</p>
              <p style="margin-left: 10px;">长度：小于4.7 m，宽度：小于1.7 m，高度：小于2.8 m（或2.0 m）</p>
              <p style="margin-left: 10px;">农用车辆（拖拉机、农药喷雾机、收割机...）</p>
              <p style="margin-left: 10px;">工程机械（装载机、压路机、铲运机、道路稳定机、耕耘机、旋转造雪机、沥青摊铺机、轮式拖拉机...）</p>
              <p style="margin-left: 10px;">注：小型卡车不属于此类别。</p>

            </div>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>（汽车/摩托车）<br>如果我绕道，行驶时间与常规路线会有多少差异？</td>
          <td>
            Oirase溪流地区内从Sōbe交叉路口到Nenokuchi 交叉路口的里程约10公里，而绕行道（Oirase绕道）全长约14公里。正常情况下，行程时间可能会相差约 5 至 10 分钟。不过，在红叶季节，不是禁止私家茶辆通行的日子，Oirase溪流地区经常出现拥堵，因此走绕行道路可能会更快。
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>私家车限行期间旅游巴士可以进入吗？</td>
          <td>
            <p>・私家车交通限制期间，旅游巴士可以通行。</p>
            <p>・另一方面，在某些地区，旅游巴士可能会长时间停放，这可能会降低车辆的速度，并影响山溪行人的安全。</p>
            <p>・若想悠闲游览，请转乘接驳巴士。</p>
            <p>・请勿在Oirase溪谷长时间停车（超过20分钟）。</p>
            <p>・观光巴士的临时停车地点如下。</p>
            <p>○Oirase溪流温泉滑雪场前面停车场</p>
            <p>○ OiraseKeiryukan对面</p>
            <p>○Utarube 停车场</p>
            <p>○Yasumiya停车场（收费）</p>
            <img src="<?php echo $site_url; ?>/pages/images/faqtab.jpg">
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>在限制实施之前，我可以开私家车进入Oirase峡谷吗？</td>
          <td>
            <p>・您可以在限制实施之前驾驶私家车进入Oirase峡谷</p>。
            <p>・但是，根据道路交通法，车辆在限制时间内不得行驶。 （该规定已与警方讨论，并以《道路交通法》为基础。</p>
            <p>・在限定时间内驾驶是违反道路交通法的行为，请注意。</p>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>规定什么时候开始实施？</td>
          <td>
            <p>・开始实施时间（=车辆未行驶的时间）如下：</p>
            <p> → 平日从 10:00 开始</p>
            <p> →节假日 从9:00 开始</p>
            <p>・上述限制开始时间是私家车限制区域内禁止车辆行驶的时间。</p>
            <p>・穿越山涧大约需要 30 分钟，因此私家车禁区外绕行的起始时间如下：</p>
            <p>→ 平日上午 9:30 开始</p>
            <p>→ 节假日早上8点30分开始营业</p>
          </td>
        </tr>
      </table>
      <h3>接驳巴士信息</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>问题内容</td>
          <td>示例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>停车场在哪儿？<br>
            接驳巴士如何运作？</td>
          <td>
            <p>・Oirase溪流温泉滑雪场和Yasumiya 前面有停车场，请使用这些停车场。</p>
            <p>・Oirase溪流温泉滑雪场和Yasumiya之间的接驳巴士每 30 分钟一班。</p>
            <p>・一日票价为1,500日元。</p>
            <p>・小学生以下免费。</p>
            <p>・Oirase溪流温泉滑雪场和Yasumiya前的接驳巴士的出发、到达地点与路线巴士的巴士站不同。</p>
            <p>・请注意，Oirase溪流温泉滑雪场Ski Resort巴士站与 JR Bus Tohoku的Oirase溪流温泉巴士站不同。</p>

          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>我使用轮椅，可以上车吗？</td>
          <td>
            <p>・您无法搭乘接驳巴士。</p>
            <p>・轮椅使用者不受私家车限制；请将此情况告知路口引导员和工作人员（残疾人巴士、福利车等）</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>我带着我的宠物。我可以乘坐接驳巴士吗？</td>
          <td>
            <p>・宠物必须放在单独的盒子（笼子）中才能带上巴士。</p>
            <p>・如果没有准备笼子，请使用Oirase溪流温泉滑雪场和Yasumiya区售票处前停车场提供的纸箱。</p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>我想乘坐接驳巴士，但是Yasumiya停车场收费吗？</td>
          <td>
            ・您使用符合交通规则的车辆使用 Yasumiya停车场时（停车费：汽车500日元、摩托车200日元）。我们提供接驳巴士车票折扣，从通常的每人 1,500 日元降至汽车乘客 1,000 日元、摩托车乘客 1,300 日元。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>我没有票，可以乘坐接驳巴士吗？ （主要停在山涧）</td>
          <td>
            <p>・搭乘接驳巴士时需要购买车票。接驳巴士上会有工作人员出售车票。</p>
            <p>・您也可以提前购买电子票。请在网上搜索“Oirase溪流接驳巴士。 </p>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>我可以使用 JR 线巴士通票乘坐接驳巴士吗？</td>
          <td>
            ・您无法搭乘接驳巴士。此外，持有接驳巴士车票的旅客也无法搭乘JR线巴士。这是为了清楚接驳巴士与JR线巴士的区别，敬请谅解。<br>
            *如图所示，接驳巴士车前贴有“横幅”，但路线巴士没有“横幅”。<br>
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh-11-10.jpg">
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh1-11-10.jpg">
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>我可以提前购买接驳巴士票吗？</td>
          <td>
            <p>・接驳巴士车票可以提前购买。</p>
            <p>・请搜索“Oirase溪流接驳巴士“</p>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>哪里有发布班车时表？</td>
          <td>
            ・时间表发布在。<a href="https://www.eco-oirase.com/ja/bus-ship#timetable"> https://www.eco-oirase.com/ja/bus-ship#timetable</a><br>
            ・请搜索“Oirase溪流接驳巴士”
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>我可以使用JR EAST PASS, JAPAN RAIL PASS, Aomori/Hachinohe/Lake Towada乘坐接驳巴士吗？</td>
          <td>
            <p>・您无法使用 JR EAST PASS 或 JAPAN RAIL PASS乘坐接驳巴士。</p>
            <p>・Aomori/Hachinohe/Hồ Towada（JR线巴士周游券）无法搭乘接驳巴士。</p>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>接驳巴士车票什么时候开始发售？</td>
          <td>
            <p>・接驳巴士车票销售开始时间如下。</p>
            <p>平日：上午8点45分~</p>
            <p>节假日：早上7点45分~</p>
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>是否有针对残疾人、老年人有折扣？</td>
          <td>
            <p>・残障人士或老年人没有折扣。</p>
            <p>・如果持有残疾证明书（根据残疾的种类和程度），则不受私家车的交通限制。</p>
            <p>・使用符合交通规则的车辆使用Yasumiya 停车场时（停车费：汽车500日元、摩托车200日元）。我们提供接驳巴士车票折扣，从通常的每人 1,500 日元降至汽车乘客 1,000 日元、摩托车乘客 1,300 日元。。</p>
          </td>
        </tr>
      </table>
      <h3>关于生态旅游和活动</h3>
      <table id="faq">
        <p>当天在传单上展示</p>
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>问题内容</td>
          <td>示例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>活动内容是什么？</td>
          <td>
            ・请参阅在：。<a href="https://www.eco-oirase.com/ja/event" style="margin-right: 199px;">「https://www.eco-oirase.com/ja/event」</a><br>
            ・“Oirase溪流生态路节日”
          </td>
        </tr>
      </table>
      <h3>自行车租赁</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>问题内容</td>
          <td>示例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>我怎样才能租到自行车？</td>
          <td>
            <p>・位于Oirase Field博物馆、Ishigedo 度假村、JR巴士（Nenokuchi巴士站）的入口处；</p>
            <p>Oirase Yusuikan 0176-74-1212</p>
            <p>Ishigedo度假村 0176-74-2355</p>
            <p>JR Nenokuchi 巴士 0176-75-2244</p>
            <table id="faq">
              <tr>
                <th colspan="2" style='text-align: center;background: #dfdb;'>[经营活动详细信息]</th>
              </tr>
              <tr>
                <td>营业时间</td>
                <td>9:00-16:30（Nenokuchi营业至16:00）</td>
              </tr>
              <tr>
                <td>费用</td>
                <td>
                  <p>4小时普通自行车…1,000日元</p>
                  <p>电动自行车…2,000日元</p>
                  <p>电动自行车…3,000日元</p>
                  <p>（MTB型电动助力自行车（仅限Yusuikan往返）</p>
                  <p>免费接送</p>
                  <p>超额费（每30分钟）加收300日元/分钟”</p>
                </td>
              </tr>
              <tr>
                <td>所需时间</td>
                <td>
                  <p> Oirase Keiryukan → Nenokuchi 约2小时</p>
                  <p>→ 因为是上坡路，所以行驶时间比下坡路要长。</p>
                  <p>Nenokuchi → Oirase Keiryukan 约1小时30分钟</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <h3>关于山间溪流</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>问题内容</td>
          <td>示例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>山间溪流段有哪些旅游景点？</td>
          <td>
            <p>・推荐路线如下：</p>
            <p> 橡树林中安静的步道：Ouse-Sobe交叉路口</p>
            <p>→1.8公里，步行约30分钟</p>
            <p>有趣的路线“瀑布路”： Kumoi瀑布 – Choshi 瀑布</p>
            <p>→2.7公里，步行约50分钟</p>
            <p>雄伟巨树观赏路线：Shiraito瀑布 至 Nenokuchi</p>
            <p>→2.6公里，步行约50分钟</p>
            <p> ■关键点距离和时间（仅供参考）</p>
            <p> Oirase Keiryu Onsen滑雪场 - Nenokuchi 约14公里、约需4～5小时</p>
            <p>Ishigedo-Nenokuchi约9公里，约3-4小时”</p>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>我可以用餐吗？</td>
          <td>
            <p>・在溪流地区， Ishigedo休息处提供饭团等便餐。</p>
            <p>・您可以在Oirase Keiryu Onsen Marche享用便餐。</p>
            <p>・如果您打算去徒步旅行，请自备装备。</p>
            <p>*Nenokuchi, Yasumiya 和 Oirase Keiryu Onsen地区有特产店和餐厅</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>我可以使用手机吗？</td>
          <td>
            <p>・有信号不良的区域。</p>
            <p>- 电话信号较差，Nenokuchi和 Ishigedo之间难以连接。 </p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>有洗手间吗？</td>
          <td>
            <p>山间溪流地区洗手间较少，请先使用。</p>
            <p>○Ouse (Oirase Keiryukan ~ Ishigatoma) 公共洗手间</p>
            <p>○ Ishigedo休息区洗手间（轮椅可通行）</p>
            <p>○Tamadare公共洗手间（从 Kumoi no Nagare巴士站到Towada湖约500m）</p>
            <p>*Sensuji 瀑布和Choshi瀑布 附近也设置了临时洗手间（导游地图上没有列出，因为它是一个临时洗手间，仅在私家车交通有限期间开放）</p>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>我应该从上游方向（Nenokuchi 方向）步行到下游方向（Oirase Keiryu Onsen滑雪场前）吗？</td>
          <td>
            <p>我们建议从Oirase Keiryu的下游方向（Oirase Keiryu Onsen滑雪场前）向上游方向（Nenokuchi方向）徒步。</p>
            <p>・由于坡度非常平缓，所以您可以边走边观察山溪的水流。</p>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>我应该穿什么样的衣服？</td>
          <td>
            <p>・建议穿长袖和长裤。</p>
            <p>・建议穿徒步鞋以保护脚部。</p>
          </td>
        </tr>
      </table>
    <?php } ?>

    <?php if ($lang == 'tchi') { ?>
      <h3><?php echo $title_1; ?></h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>問題內容</td>
          <td>回答</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Eco Road 節日是什麼？</td>
          <td>
            這是一項保護Oirase溪流溫泉並向更多人介紹Oirase之美的活動。這次活動的組織目的是為了讓每個人都能安靜舒適地享受溪流。請注意，活動當天將實施車輛進入限制（私家車交通限制）
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>每年都會舉辦嗎？<br> 明年舉辦嗎？</td>
          <td>
            <p>自 2003 年起就實施了車輛通行限制</p>
            <p>每年，活動都會在 10 月最後1週的7天舉行</p>
            <p>2025年（Reiwa時代第7年）將於10月27日（星期一）至11月2日（星期日）舉行。</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>那天我不能開車去Oirase溪嗎？</td>
          <td>
            非常抱歉，但在限行期間內，<br>
            工作日 10:00 至 16:00和假日 9:00 至 16:00，除大型車輛外，其他車輛一律禁止通行，請配合。
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>為什麼會有這個限制規定？</td>
          <td>
            汽車的噪音和廢氣對於人們在溪流和大自然中行走來說並不是一個良好的環境。為了讓大家能夠欣賞溪水聲、並在beech山樹林裡散步，我們特意安排了接駁巴士，敬請理解與配合。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>為什麼只對私家車輛有規定？<br>
            為什麼對大型車輛和公共汽車沒有規定？ </td>
          <td>
            Nanamagari 這條路很窄，急轉彎很多，大型車輛無法互相超車。因此，只有在出現不可抗力的情況下，大型車輛才可以通過Oirase溪。
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>環保車（油電混合車）也不可以流通嗎？</td>
          <td>
            為了減少交通擁堵，改善大家在溪邊行走的環境，我們向您表示歉意，但請配合實施交通管制。
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>輪椅、殘障人士和老年人是否有限制？</td>
          <td>
            <p>• 若有人使用輪椅且行走有困難，可允許通行；</p>
            <p>• 持有殘障人證者，使用時請出示該卡。 （無論殘疾類型或程度如何，所有持有殘疾證明的人都可以通行）</p>
            <p>• 請告知禁區入口處的工作人員。 （無需提前註冊。）</p>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>哪些車輛被限制？</td>
          <td>
            • 私家車輛，包括摩托車（含電動摩托車）<br>
            •大型汽車、特殊中型汽車、計程車、租賃車；特殊小型汽車、殘障人士用車不受限制。 <br><br>
            什麼是特種中型車？
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">車輛總重：8噸至11噸以下</p>
              <p style="margin-left: 10px;">最大負載：5噸至6.5噸以下</p>
              <p style="margin-left: 10px;">座位數：11人至29人以下</p>
              <p style="margin-left: 20px;">貨車</p>
              <p style="margin-left: 20px;">卡車（5噸以上）</p>
              <p style="margin-left: 20px;">註：露營車(camping car)不包括在此類中。</p>
              <p style="margin-left: 10px;">按車牌分類：</p>
              <p style="margin-left: 10px;">車牌類型1：大型車輛及特殊中型車輛（用於運輸貨物）</p>
              <p style="margin-left: 10px;">車牌類型2：大型車輛（客運用）</p>
              <p style="margin-left: 10px;">車牌類型2：特種中型車（客運用）</p>
              <p style="margin-left: 10px;">大車牌：22cm x 44cm，用4個固定螺栓安裝</p>
              <p style="margin-left: 10px;">中型車牌：16.5cm x 33cm，用2個固定螺栓固定</p>
              <p style="margin-left: 10px;">*註：車牌類型2的車輛或屬於中型及以上特殊車輛的大型車牌車輛不受限制。</p>
            </div>
            <br>
            <br>
            什麼是特種小型車？
            <div style='border: 2px solid black;'>
              <p style="margin-left: 10px;">最高速度：小於15公里/小時</p>
              <p style="margin-left: 10px;">長度：小於4.7 m，寬度：小於1.7 m，高度：小於2.8 m（或2.0 m）</p>
              <p style="margin-left: 10px;">農用車輛（拖拉機、農藥噴霧機、收割機...）</p>
              <p style="margin-left: 10px;">工程機械（裝載機、壓路機、鏟土機、道路穩定機、耕耘機、旋轉式造雪機、瀝青攤舖機、輪式拖拉機...）</p>
              <p style="margin-left: 10px;">註：小型卡車不屬於此類。</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>（汽車/摩托車）<br>
            如果我繞道，行駛時間與常規路線會有多少差異？ </td>
          <td>
            Oirase溪流地區內從Sōbe交叉路口到Nenokuchi 交叉路口的里程約10公里，而繞行道（Oirase繞道）全長約14公里。正常情況下，行程時間可能會相差約 5 至 10 分鐘。不過，在紅葉季節，不是禁止私家茶輛通行的日子，Oirase溪流地區經常出現擁堵，因此走繞行道路可能會更快。
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>私家車限行期間旅遊巴士可以進入嗎？</td>
          <td>
            <p>・私家車交通限制期間，旅遊巴士可以通行。</p>
            <p>・另一方面，在某些地區，旅遊巴士可能會長時間停放，這可能會降低車輛的速度，並影響山溪行人的安全。</p>
            <p>・若想悠閒遊覽，請轉乘接駁巴士。</p>
            <p>・請勿在Oirase溪谷長時間停車（超過20分鐘）。</p>
            <p>・觀光巴士的臨時停車地點如下。</p>
            <p> ○Oirase溪流溫泉滑雪場前方停車場</p>
            <p> ○ OiraseKeiryukan對面</p>
            <p>○Utarube 停車場</p>
            <p>○Yasumiya停車場（收費）</p>
            <img src="<?php echo $site_url; ?>/pages/images/faqtab.jpg">
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>在限制實施之前，我可以開私家車進入Oirase峽谷嗎？</td>
          <td>
            <p>・您可以在限制實施之前駕駛私家車進入Oirase峽谷。</p>
            <p>・但是，根據道路交通法，車輛在限制時間內不得行駛。 （該規定已與警方討論，並以《道路交通法》為基礎。</p>
            <p>・在限定時間內駕駛是違反道路交通法的行為，請注意。</p>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>規定什麼時候開始實施？</td>
          <td>
            <p>・開始實施時間（=車輛未行駛的時間）如下：</p>
            <p>→ 平日從 10:00 開始</p>
            <p>→假日 從9:00 開始</p>
            <p>・上述限制開始時間是私家車限制區域內禁止車輛行駛的時間。</p>
            <p>・穿越山澗大約需要 30 分鐘，因此私家車禁區外繞行的起始時間如下：</p>
            <p>→ 平日上午 9:30 開始</p>
            <p>→ 假日早上8點30分開始營業</p>
          </td>
        </tr>
      </table>
      <h3>接駁巴士訊息</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>問題內容</td>
          <td>範例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>停車場在哪裡？<br>
            接駁巴士如何運作？</td>
          <td>
            <p>・Oirase溪流溫泉滑雪場和Yasumiya 前面有停車場，請使用這些停車場。</p>
            <p>・Oirase溪流溫泉滑雪場和Yasumiya之間的接駁巴士每 30 分鐘一班。</p>
            <p>・一日票價為1,500日圓。</p>
            <p>・小學生以下免費。</p>
            <p>・Oirase溪流溫泉滑雪場和Yasumiya前的接駁巴士的出發、到達地點與路線巴士的巴士站不同。</p>
            <p>・請注意，Oirase溪流溫泉滑雪場Ski Resort巴士站與 JR Bus Tohoku的Oirase溪流溫泉巴士站不同。</p>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>我使用輪椅，可以上車嗎？</td>
          <td>
            <p>・您無法搭乘接駁巴士。</p>
            <p>・輪椅使用者不受私家車限制；請將此情況告知路口引導員及工作人員（殘障巴士、福利車等）</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>我帶著我的寵物。我可以搭乘接駁巴士嗎？</td>
          <td>
            <p>・寵物必須放在單獨的盒子（籠子）中才能帶上巴士。</p>
            <p>・如果沒有準備籠子，請使用Oirase溪流溫泉滑雪場和Yasumiya區售票處前停車場提供的紙箱。</p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>我想搭乘接駁巴士，但是Yasumiya停車場要收費嗎？</td>
          <td>
            ・您使用符合交通規則的車輛使用 Yasumiya停車場時（停車費：汽車500日元、摩托車200日元）。我們提供接駁巴士車票折扣，從通常的每人 1,500 日元降至汽車乘客 1,000 日元、摩托車乘客 1,300 日元。
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>我沒有票，可以搭乘接駁巴士嗎？ （主要停在山澗）</td>
          <td>
            <p>・搭乘接駁巴士時需要購買車票。接駁巴士上會有工作人員出售車票。</p>
            <p>・您也可以提前購買電子票券。請在網上搜尋“Oirase溪流接駁巴士。</p>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>我可以使用 JR 線巴士通票搭乘接駁巴士嗎？</td>
          <td>
            ・您無法搭乘接駁巴士。此外，持有接駁巴士車票的旅客也無法搭乘JR線巴士。這是為了清楚接駁巴士與JR線巴士的區別，敬請諒解。<br>
            *如圖所示，接駁巴士車前貼有“橫幅”，但路線巴士沒有“橫幅”。<br>
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh-11-10.jpg">
            <img style="
            width: 200px; 
            height: auto;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
          " src="<?php echo $site_url; ?>/pages/images/anh1-11-10.jpg">
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>我可以提前購買接駁巴士票嗎？</td>
          <td>
            <p>・接駁巴士車票可以提前購買。</p>
            <p>・請搜尋「Oirase溪流接駁巴士「</p>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>哪裡有發布接駁車時表？</td>
          <td>
            ・時間表發佈在。<a href="https://www.eco-oirase.com/ja/bus-ship#timetable"> https://www.eco-oirase.com/ja/bus-ship#timetable</a><br>
            ・請搜尋「Oirase溪流接駁巴士」
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>我可以使用JR EAST PASS, JAPAN RAIL PASS, Aomori/Hachinohe/Lake Towada搭乘接駁巴士嗎？</td>
          <td>
            <p>・您無法使用 JR EAST PASS 或 JAPAN RAIL PASS搭乘接駁巴士。</p>
            <p>・Aomori/Hachinohe/Hồ Towada（JR線巴士週遊券）無法搭乘接駁巴士。</p>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>接駁巴士車票什麼時候開始販售？</td>
          <td>
            <p>・接駁巴士車票銷售開始時間如下。</p>
            <p>平日：上午8點45分~</p>
            <p>假日：早上7點45分~</p>
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>是否有針對殘障人士、老年人有折扣？</td>
          <td>
            <p>・殘障人士或老年人沒有折扣。</p>
            <p>・如果持有殘障證明書（根據殘疾的種類和程度），則不受私家車的交通限制。</p>
            <p>・使用符合交通規則的車輛使用Yasumiya 停車場時（停車費：汽車500日元、摩托車200日元）。我們提供接駁巴士車票折扣，從通常的每人 1,500 日元降至汽車乘客 1,000 日元、摩托車乘客 1,300 日元。</p>
          </td>
        </tr>
      </table>
      <h3>關於生態旅遊和活動</h3>
      <table id="faq">
        <p>當天在傳單上展示</p>
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>問題內容</td>
          <td>範例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>活動內容是什麼？</td>
          <td>
            ・請參閱在:<a href="https://www.eco-oirase.com/ja/event" style="margin-right: 199px;">「https://www.eco-oirase.com/ja/event」</a><br>
            ・「Oirase溪流生態路節慶」
          </td>
        </tr>
      </table>
      <h3>自行車租賃</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>問題內容</td>
          <td>範例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>我怎樣才能租到自行車？</td>
          <td>
            <p>・位於Oirase Field博物館、Ishigedo 度假村、JR巴士（Nenokuchi巴士站）的入口處；</p>
            <p> Oirase Yusuikan 0176-74-1212</p>
            <p> Ishigedo度假村 0176-74-2355</p>
            <p> JR Nenokuchi 巴士 0176-75-2244"</p>
            <table id="faq">
              <tr>
                <th colspan="2" style='text-align: center;background: #dfdb;'>[經營活動詳細資料]</th>
              </tr>
              <tr>
                <td>營業時間</td>
                <td>9:00-16:30（Nenokuchi營業至16:00）</td>
              </tr>
              <tr>
                <td>費用</td>
                <td>
                  <p>4小時普通自行車…1,000日元</p>
                  <p>電動自行車…2,000日圓</p>
                  <p>電動自行車…3,000日圓</p>
                  <p>（MTB型電動輔助自行車（僅限Yusuikan往返）</p>
                  <p>免費接送</p>
                  <p>超額費用（每30分鐘）加收300日幣/分鐘”</p>
                </td>
              </tr>
              <tr>
                <td>所需時間</td>
                <td>
                  <p>Oirase Keiryukan → Nenokuchi 約2小時</p>
                  <p>→ 因為是上坡路，所以行駛時間比下坡路長。</p>
                  <p>Nenokuchi → Oirase Keiryukan 約1小時30分鐘</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <h3>關於山間溪流</h3>
      <table id="faq">
        <tr style='text-align: center;'>
          <td>NO.</td>
          <td>問題內容</td>
          <td>範例答案</td>
        </tr>
        <tr>
          <td>1</td>
          <td>山間溪流段有哪些旅遊景點？</td>
          <td>
            <p>・推薦路線如下：</p>
            <p>橡樹林中安靜的步道：Ouse-Sobe交叉路口</p>
            <p>→1.8公里，步行約30分鐘</p>
            <p> 有趣的路線「瀑布路」： Kumoi 瀑布 – Choshi 瀑布</p>
            <p>→2.7公里，步行約50分鐘</p>
            <p>雄偉巨樹觀賞路線：Shiraito瀑布 至 Nenokuchi</p>
            <p>→2.6公里，步行約50分鐘</p>
            <p>■關鍵點距離和時間（僅供參考）</p>
            <p>Oirase Keiryu Onsen滑雪場 - Nenokuchi 約14公里、約4～5小時</p>
            <p>Ishigedo-Nenokuchi約9公里，約3-4小時”</p>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>我可以用餐嗎？</td>
          <td>
            <p>・在溪流地區， Ishigedo休息處提供飯糰等便餐。</p>
            <p>・您可以在Oirase Keiryu Onsen Marche享用輕食。</p>
            <p>・如果您打算去健行，請自備裝備。</p>
            <p>*Nenokuchi, Yasumiya 和 Oirase Keiryu Onsen地區有特產店和餐廳</p>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>我可以使用手機嗎？</td>
          <td>
            <p>・有訊號不良的區域。</p>
            <p>- 電話訊號較差，Nenokuchi和 Ishigedo之間難以連線。 </p>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>有洗手間嗎？</td>
          <td>
            <p> 山間溪流地區洗手間較少，請先使用。</p>
            <p>○Ouse (Oirase Keiryukan ~ Ishigatoma) 公共洗手間</p>
            <p>○ Ishigedo休息區洗手間（輪椅可通行）</p>
            <p>○Tamadare公共洗手間（從 Kumoi no Nagare巴士站到Towada湖約500m）</p>
            <p>*Sensuji 瀑布和 Choshi瀑布 附近也設置了臨時洗手間（導遊地圖上沒有列出，因為它是一個臨時洗手間，僅在私家車交通有限期間開放）</p>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>我應該從上游方向（Nenokuchi 方向）步行到下游方向（Oirase Keiryu Onsen滑雪場前）嗎？</td>
          <td>
            <p>我們建議從Oirase Keiryu的下游方向（Oirase Keiryu Onsen滑雪場前）向上游方向（Nenokuchi方向）徒步旅行。</p>
            <p>・由於坡度非常平緩，所以您可以邊走邊觀察山溪的水流。 </p>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>我該穿什麼樣的衣服？</td>
          <td>
            <p>・建議穿長袖和長褲。</p>
            <p>・建議穿著健行鞋以保護腳部。 </p>
          </td>
        </tr>
      </table>
    <?php } ?>
  </div>
  <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>