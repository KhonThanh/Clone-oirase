<?php
global $lang;

$site_url = SITE_URL;
switch ($lang) {
      case 'ja':
            $subtitle = "お知らせ(令和4年度)";
            $pdf_all = 'all2023.pdf';
            break;
      case 'en':
            $subtitle = "";
            $pdf_all = 'all2023.pdf';
            break;
      case 'co':
            $subtitle = "";
            $pdf_all = 'all2023.pdf';
            break;
      case 'chi':
            $subtitle = "";
            $pdf_all = 'all2023.pdf';
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

            <!-- r5.10.13 -->
            <!-- <div class="text_l">
                  令和6年8月30日
                  <br>
                  <h2 class="title">シャトルバス電子チケット販売のお知らせ</h2>
                  シャトルバス電子チケットの販売を開始いたしました。<br>
                  こちらのサイトをご確認ください。<a href="https://travel.willer.co.jp/st/3/ja/pc/tour/package/?mcid=57908" target="_blank">電子チケット販売&nbsp;>></a><br><br>
                  QRコード　<img src="https://eco-oirase.com/pages/images/QRコード.jpg" alt="" style="vertical-align: middle; width: 140px;" /><br>

                  <br>

            </div> -->
            <br>
            <br>
            <!-- r5.9.21 -->
            <div class="text_l">
                  令和5年9月21日<br>
                  <h2 class="title">奥入瀬自然博物館　期間限定開催のお知らせ</h2>
                  奥入瀬・十和田湖地域は、天然の展示物から、自然の成立ちや営みを直接学べる「天然の自然博物館」です。<br>
                  奥入瀬渓流沿いの国道102号では、車両の交通を規制しますので、「車のない奥入瀬」で自然博物館の見事な作品群をごゆっくりご鑑賞ください。<br><br>
                  <table class="newstbl-1">
                        <tr>
                              <th>とき</th>
                              <th>マイカー<br>交通規制</th>
                              <th colspan="2">シャトルバス（有料）</th>
                        </tr>
                        <tr>
                              <td>10月23日（月）
                                    ～<br>
                                    10月27日（金）
                              </td>
                              <td>10：00
                                    ～<br>
                                    14：00
                              </td>
                              <td>9：00
                                    ～<br>
                                    15：30まで
                              </td>
                              <td>焼山～休屋<br>
                                    約30分間隔運行
                              </td>
                        </tr>
                        <tr>
                              <td>10月28日（土）
                                    ・<br>
                                    10月29日（日）
                              </td>
                              <td>9：00
                                    ～<br>
                                    15：00
                              </td>
                              <td>8：00
                                    ～<br>
                                    16：00まで
                              </td>
                              <td>焼山～休屋<br>
                                    約30分間隔運行
                              </td>
                        </tr>
                  </table>
                  <br>
                  詳細は<a href="/pdf/<?php echo $pdf_all; ?>" target="_blank">コチラ（PDF）</a><br>
                  イベントは<a href="<?php echo $site_url; ?>/ja/event">コチラ</a><br>

                  お問い合わせ　道路課　017-734-9651

                  <br>

            </div>
            <br>
            <br>
            <!-- r5.9.15 -->
            <div class="text_l">
                  令和5年9月15日<br>
                  <h2 class="title">観光バス運行に関するお願い</h2>
                  奥入瀬渓流では自然環境保全と安全な道路空間の確保を目的に、”観光バスモビリティマネジメントへのご協力”をお願いしたいと考えております。<br>

                  <p>詳しくはこちらを参照してください。<br>
                        　<a href="/pdf/mobility_management-2023.pdf" target="_blank">観光バスモビリティマネジメントへのご協力（PDF）</a>
                  </p>
            </div>
            <br>
            <br>
            <div style="display: none;">
                  <h2>ニュース</h2>
                  <h3>令和4年度のニュース</h3>
                  <div class="right-inner">
                        <div id="news-rireki">
                              <!-- 新着を入力する際は「<dt>日付</dt><dd>ここに新着情報</dd>」で追加してください。 -->
                              <!-- ▼新着情報入力ここから▼ -->
                              <!-- r4.10.24 -->
                              <dl>
                                    <dd>シャトルバス運行について</h2>
                                          １０月24日（月）～30日（日）のシャトルバス運行は無事終了いたしました。<br>
                                          ご協力ありがとうございました。
                                    </dd>
                              </dl>

                              <!-- r4.9.30 -->
                              <dl>
                                    <dt>令和4年9月30日</dt>
                                    <dd>総合パンフレットについて<br>
                                          『2022年度の「奥入瀬渓流エコロードフェスタ総合パンフレット」をアップしました。』<br>

                                          <p>こちらのリンクをご利用ください。<br>
                                                　<a href="pdf/<?php echo $pdf_all; ?>" target="_blank">奥入瀬渓流エコロードフェスタ総合パンフレット（PDF)</a>
                                          </p>
                                    </dd>
                              </dl>

                              <!-- r4.9.30 -->
                              <dl>
                                    <dt>令和4年9月30日</dt>
                                    <dd>シャトルバス運行のおしらせ<br>
                                          『シャトルバスについて、以下の日程で運行します。』<br>

                                          <p style="float: left;">運行期間　</p>
                                          <p style="overflow: hidden;">■10月24日（月）～30日（日）までの7日間<br>&nbsp;<a href="<?php echo $site_url; ?>/ja/bus-ship#timetable">シャトルバス時刻表はこちら</a></p><br>
                                          <p>今年度はマイカー交通規制はしませんが、マイカーでの「エコーロード区間」への車両進入を控えてくださるようお願いします。<br>
                                                以下のページをご確認ください。<br>
                                                　<a href="<?php echo $site_url; ?>/ja/parking">駐車場ガイド（2022年)</a><br>
                                                　<a href="<?php echo $site_url; ?>/ja/bus-ship">シャトルバス・遊覧船（2022年)</a><br>
                                                　<a href="<?php echo $site_url; ?>/ja/faq">シャトルバス運行に関するQ&A（2022年)</a><br><br>
                                                運行期間中は、10月24日（月）～27日（水）に<a href="http://oirase-seseragi.com/" target="_blank">「奥入瀬せせらぎ体感プロジェクト」</a>、
                                                29日（土）～30日（日）に「奥入瀬エコロードフェスタ」を開催します。
                                          </p>
                                    </dd>
                              </dl>
                        </div>
                        <!-- ▲新着情報入力ここまで▲ -->
                  </div>
            </div>
            <div id="rireki">
                  <?php include "rirekilist.php"; ?>
            </div>

      </div>
      <div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>