<?php
global $lang;

$site_url = SITE_URL;
switch ($lang) {
      case 'ja':
            $subtitle = "お知らせ(令和6年度)";
            break;
      case 'en':
            $subtitle = "";
            break;
      case 'co':
            $subtitle = "";
            break;
      case 'chi':
            $subtitle = "";
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
            <div class="text_l">
                  ９月30日
                  <br>
                  <h2 class="title">シャトルバス電子チケット販売のお知らせ</h2>
                  シャトルバス電子チケットの販売を開始いたしました。<br>
                  こちらのサイトをご確認ください。<a href="https://travel.willer.co.jp/st/3/ja/pc/tour/package/?mcid=57908" target="_blank">電子チケット販売&nbsp;>></a><br><br>
                  QRコード　<img src="https://eco-oirase.com/pages/images/QRコード.jpg" alt="" style="vertical-align: middle; width: 140px;" /><br>

                  <br>
            </div>
            <div class="text_l">
                  令和6年9月6日
                  <br>
                  <h2 class="title">奥入瀬自然博物館　期間限定開催のお知らせ</h2>
                  奥入瀬・十和田湖地域は、天然の展示物から、自然の成立ちや営みを直接学べる「天然の自然博物館」です。<br>奥入瀬渓流沿いの国道102号では、車両の交通を規制しますので、「車のない奥入瀬」で自然博物館の見事な作品群をごゆっくりご鑑賞ください。
                  <br>
                  <br>
                  <table class="newstbl-1">
                        <tbody>
                              <tr>
                                    <th>とき</th>
                                    <th>マイカー<br>交通規制</th>
                                    <th>期間限定シャトルバス <br>（有料）</th>
                              </tr>
                              <tr>
                                    <td>令和6年10月21日（月）～<br>令和6年10月25日（金）

                                    </td>
                                    <td>10：00 ～ <br>16：00
                                    </td>
                                    <td>9：00 ～ <br>16：00
                                    </td>
                              </tr>
                              <tr>
                                    <td>令和6年10月26日（土）～<br>令和6年10月27日（日）
                                    </td>
                                    <td>9：00
                                          ～<br>
                                          16：00
                                    </td>
                                    <td>8：00
                                          ～<br>
                                          16：00
                                    </td>
                              </tr>
                        </tbody>
                  </table>
                  <br>
                  <br>
                  <p>※期間限定シャトルバスの時刻表 は <a href="/pdf/fin_24奥入瀬時刻表_A41004.pdf" target="_blank">こちら</a>
                  </p>
                  <br>
                  <p>詳細は<a href="/pdf/2409oirase_A4.pdf" target="_blank">コチラ（PDF）</a>
                        <br>イベントは<a href="/ja/event" target="_blank">コチラ</a>
                        <br>お問い合わせ　道路課　017-734-9651
                  </p><br>
                  <p>令和6年8月19日<br>マルシェの出店者公募</p>
                  <p><a href="/pdf/R6奥入瀬渓流温泉マルシェ出店要綱_241001ver - コピー.pdf" target="_blank">奥入瀬自然博物館「奥入瀬渓流温泉マルシェ」の出店者を公募します</a><br><br>
            </div>
            <!-- r6.3.22 -->
            <div class="text_l">
                  令和6年3月22日<br>
                  <h2 class="title">実施報告書</h2>
                  令和５年度の実施報告書をアップしました。<br>

                  <p>こちらからどうぞ！<br>
                        　<a href="pdf/houkokusho2023.pdf" target="_blank">令和５年度実施報告書（PDF）</a>
                  </p>
            </div>
            <br>
            <br>
            <br>
            <div id="rireki">
                  <?php include "rirekilist.php"; ?>
            </div>
      </div>

</div>

<?php
include "footer.php";
?>