<?php
global $lang, $new;
$site_url = "https://eco-oirase.com/";
$subtitle = "";
switch ($lang) {
      case 'ja':
            $banner_1 = 'banner_kisei.jpg';
            $banner_2 = '2023_banner_sougou.jpg';
            $banner_3 = '2023_banner_toujitsu.jpg';
            $banner_4 = 'youtube.jpg';
            $pdf_all = 'all2023.pdf';
            $pdf_daily = '2023_daily_use_pamphlet.pdf';
            $title_1 = 'プロジェクトの概要';
            $text_1 = '奥入瀬渓流の自然環境保全のために<br>美しい清流とブナ林を<br>ゆっくり味わっていただくために';
            $btn_1 = '詳しく見る';
            $title_2 = 'エコロードフェスタ<br>についての<br>パンフレットはこちら';
            $title_3 = 'アクセス';
            $title_4 = 'お問い合わせ';
            $title_5 = '奥入瀬渓流における自動運転の取り組みについて';
            break;
      case 'en':
            $banner_1 = 'banner_kisei.jpg';
            $banner_2 = '2023_banner_sougou_en.jpg';
            $banner_3 = '2023_banner_toujitsu_en.jpg';
            $banner_4 = 'youtube.jpg';
            $pdf_all = 'all2023.pdf';
            $pdf_daily = '2023_daily_use_pamphlet.pdf';
            $title_1 = 'Project outline';
            $text_1 = 'For the natural environment of the conservation of the Oirase Stream. Take your time to enjoy the beautiful clear stream and Beech forest.';
            $btn_1 = 'See details';
            $title_2 = 'Brochure';
            $title_3 = 'Access';
            $title_4 = 'Contact us';
            $title_5 = 'Efforts related to autonomous driving in Oirase Stream';
            break;
      case 'co':
            $banner_1 = 'banner_kisei.jpg';
            $banner_2 = '2023_banner_sougou_co.jpg';
            $banner_3 = '2023_banner_toujitsu_co.jpg';
            $banner_4 = 'youtube.jpg';
            $pdf_all = 'all2023.pdf';
            $pdf_daily = '2023_daily_use_pamphlet.pdf';
            $title_1 = '프로젝트 개요';
            $text_1 = '오이라세 계류의 자연환경 보전을 위해 아름답고 맑은 계곡과 너도밤나무숲을 만끽하기 위해';
            $btn_1 = '자세히 보기';
            $title_2 = '팜플렛';
            $title_3 = '교통정보';
            $title_4 = '문의';
            $title_5 = '奥入瀬 계류에서 자율주행에 대한 노력에 대하여
';
            break;
      case 'chi':
            $banner_1 = 'banner_kisei.jpg';
            $banner_2 = '2023_banner_sougou_cn.jpg';
            $banner_3 = '2023_banner_toujitsu_cn.jpg';
            $banner_4 = 'youtube.jpg';
            $pdf_all = 'all2023.pdf';
            $pdf_daily = '2023_daily_use_pamphlet.pdf';
            $title_1 = '规划概要';
            $text_1 = '为了保护奥入濑溪流的自然环境也为了让大家更能优雅欣赏到美丽的溪流和山毛榉树林';
            $btn_1 = '参阅详情';
            $title_2 = '小册子';
            $title_3 = '交通方式';
            $title_4 = '咨询';
            $title_5 = '关于奥入泽溪流的自动驾驶努力';
            break;
      case 'tchi':
            $banner_1 = 'banner_kisei.jpg';
            $banner_2 = '2023_banner_sougou_tcn.jpg';
            $banner_3 = '2023_banner_toujitsu_tcn.jpg';
            $banner_4 = 'youtube.jpg';
            $pdf_all = 'all2023.pdf';
            $pdf_daily = '2023_daily_use_pamphlet.pdf';
            $title_1 = '規劃概要';
            $text_1 = '為了保護奧入瀨溪流的自然環境也為了讓大家更能優雅欣賞到美麗的溪流和山毛櫸樹林';
            $btn_1 = '參閲詳情';
            $title_2 = '小冊子';
            $title_3 = '交通方式';
            $title_4 = '聯絡我們';
            $title_5 = '關於奥入瀬溪流的自動駕駛努力';
            break;
}

include "header" . $new . ".php";
?>
<div class="pos_r">
      <div class="top-infobox">
            <div class="mask"></div>
            <div class="inner pos_r">
                  <p class="fs_23 bdr_b">
                        奥入瀬渓流は、<br>
                        歩行者のための空間へ<span class="disp_ib">変わります。</span>
                  </p>
                  <p class="text">
                        奥入瀬（青橅山）バイパス完成後は、奥入瀬渓流区間に通年の車両交通規制を導入する予定です。<br>
                        プロジェクトの展望は<a href="<?php echo $site_url; ?>/ja/lp_project" class="hover" style="color: #fff">こちら>>></a>
                  </p>
            </div>
      </div>

      <div class="mw1200 mg-lra">
            <div id="slidebox">
                  <ul id="slide">
                        <!-- <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_6.jpg" alt="" /></li> -->
                        <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_5_2024.jpg" alt="" /></li>
                        <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_1.jpg" alt="" /></li>
                        <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_2.jpg" alt="" /></li>
                        <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_3.jpg" alt="" /></li>
                        <li><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_4.jpg" alt="" /></li>

                  </ul>
            </div>
      </div>
</div>
<p class="sp767_b disp_n text_l" style="margin: 30px auto; padding: 0 15px;">
      奥入瀬（青撫山）バイパス完成後は、奥入瀬渓流区間に通年の車両交通規制を導入する予定です。<br>
      プロジェクトの展望は<a href="<?php echo $site_url; ?>/ja/lp_project" class="hover" style="color: #000">こちら>>></a>
</p>

<div id="main">
      <div id="sidebar">
            <?php include "sidebar" . $new . ".php"; ?>
      </div>

      <div class="dbox ja">
            <div class="image-flexhome">
                  <a href="https://www.eco-oirase.com/ja/team" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/PictureHome1.png" alt="Image 1" /></a>
                  <a style="display: flex; justify-content: center;" href="http://tanaka-net.co.jp" target="_blank"><img style="width: 223.41px; height:223.41px; object-fit: cover;" src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/PictureHome2new.jpg" alt="Image 2" /></a>
                  <a href="https://www.aomoriwalk-kyokai.com" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/PictureHome4.jpg" alt="Image 3" /></a>
                  <a href="https://nw.tohoku-epco.co.jp/index.html" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/PictureHome3.jpg" alt="Image 4" /></a>
                  <a href="https://www.knktare.com" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/PictureHome5.png" alt="Image 5" /></a>
            </div>
            <div class="mw1200 mg-lra clearfix pos_r text_c" style="margin-bottom: 20px;">
                  <a href="<?php echo $site_url; ?>/ja/bus-ship#timetable" class="btn btn2">シャトルバス時刻表はこちら</a>
                  <a href="<?php echo $site_url; ?>/ja/parking#map" class="btn btn2">駐車場はこちら</a>
                  <a href="<?php echo $site_url; ?>/ja/bus-ship#map" class="btn btn2">チケット販売場所はこちら</a>
            </div>
            <div class="mw1200 mg-lra clearfix pos_r">
                  <div class="leaf-1 anime3"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/leaf-1.png" alt="" /></div>
                  <div class="infobox-1 float_l anime">
                        <div>
                              <p class="font_b fs_30 text_l">お知らせ</p>
                              <div style="background: #aaddf8; padding: 20px; border-radius: 20px;">
                                    <p style="font-size: 20px; text-align: center; font-weight: bold;margin-bottom: 20px;">2024年度の奥入瀬自然博物館にご協力いただきありがとうございました</p>
                                    <p>今年度の奥入瀬自然博物館、マイカー交通規制は終了いたしました。</p>
                                    <p>多くの皆様のご協力、誠にありがとうございました。</p>
                                    <p>2025年度の奥入瀬自然博物館、マイカー交通規制は、</p>
                                    <p>2025年10月27日（月）～11月2日（日）です。</p>
                                    <p>詳しい内容は、近くなりましたら公開いたします。</p>
                                    <p>みなさまと、また奥入瀬でお会いできることを楽しみにしています。</p>
                                    <p>奥入瀬十和田利活用協議会・奥入瀬渓流エコツーリズムプロジェクト実行委員会　一同</p>
                              </div>
                              <br>
                              <!-- <div class="text_l">
                                    ９月30日
                                    <br>
                                    <h2 class="title">シャトルバス電子チケット販売のお知らせ</h2>
                                    シャトルバス電子チケットの販売を開始いたしました。<br>
                                    こちらのサイトをご確認ください。<a href="https://travel.willer.co.jp/st/3/ja/pc/tour/package/?mcid=57908" target="_blank">電子チケット販売&nbsp;>></a><br><br>
                                    QRコード　<img src="https://eco-oirase.com/pages/images/QRコード.jpg" alt="" style="vertical-align: middle; width: 140px;" /><br>

                                    <br>
                              </div> -->
                              <!-- <div class="text_l">
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
                              </div> -->
                              <!-- r6.3.22 -->
                              <!-- <div class="text_l">
                                    令和6年3月22日<br>
                                    <h2 class="title">実施報告書</h2>
                                    令和５年度の実施報告書をアップしました。<br>

                                    <p>こちらからどうぞ！<br>
                                          　<a href="pdf/houkokusho2023.pdf" target="_blank">令和５年度実施報告書（PDF）</a>
                                    </p>
                              </div> -->
                              <br>
                              <br>
                              <br>
                              <div style="display: none">
                                    <!-- r5.10.13 -->
                                    <div class="text_l">
                                          令和5年10月13日<br>
                                          <h2 class="title">シャトルバス電子チケット販売のお知らせ</h2>
                                          シャトルバス電子チケットの販売を開始いたしました。<br>
                                          こちらのサイトをご確認ください。<a href="https://eventmanager-plus.jp/get/oirase-museum" target="_blank">電子チケット販売&nbsp;>></a><br><br>
                                          QRコード　<img src="pages/images/QR_echofesthicket_2023.png" alt="" style="vertical-align: middle; width: 140px;" /><br>

                                          <br>

                                    </div>
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
                                          詳細は<a href="pdf/<?php echo $pdf_all; ?>" target="_blank">コチラ（PDF）</a><br>
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
                                                　<a href="pdf/mobility_management-2023.pdf" target="_blank">観光バスモビリティマネジメントへのご協力（PDF）</a>
                                          </p>
                                    </div>
                                    <br>
                                    <br>
                                    <!-- r5.2.22 -->
                                    <!-- div class="text_l">
      令和5年2月22日<br>
      <h2 class="title">実施報告書</h2>
令和４年度の実施報告書をアップしました。<br>

      <p>こちらからどうぞ！<br>
　<a href="pdf/houkokusho2022.pdf" target="_blank">令和４年度実施報告書（PDF）</a>
      </p>
     </div -->
                                    <br>
                                    <br>
                              </div>
                              <a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/rireki_r6" class="btn">過去の記事はこちら</a>
                        </div>
                  </div>
                  <div class="imgbox-2 float_r anime2">
                        <div class="img-r">
                              <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/oirase-gorge.png" alt="" />
                              <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/04_資料6_大型バスのMMについて - コピー.jpg" alt="" />
                        </div>
                  </div>
            </div>
      </div>

      <div class="dbox-1">
            <div class="top-project mg-lra pos_r anime">
                  <div>
                        <table>
                              <tr>
                                    <td>
                                          <p class="text_c fs_30 font_b"><?php echo $title_1; ?></p>
                                          <p class="text_c text mg-lra"><?php echo $text_1; ?></p>
                                          <a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/project" class="btn mg-lra"><?php echo $btn_1; ?></a>
                                    </td>
                              </tr>
                        </table>
                        <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-project.jpg" alt="" />
                  </div>
            </div>
      </div>

      <div class="dbox ja">
            <div class="mw1200 mg-lra pos_r">
                  <div class="clearfix">
                        <div class="leaf-2 anime3"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/leaf-2.png" alt="" /></div>
                  </div>

                  <div class="clearfix">
                        <div class="infobox-1 float_r anime">
                              <div>
                                    <p class="font_b fs_30 text_l">イベント</p>
                                    <p class="col_g">
                                          奥入瀬渓流の見所３km満喫。<br>
                                          ボランティアガイドの御協力により、<span class="disp_ib">奥入瀬渓流の魅力をご紹介します。</span>
                                    </p>

                                    <a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/event" class="btn">詳しく見る</a>
                              </div>
                        </div>
                        <div class="imgbox-1 float_l anime2">
                              <div class="img-l">
                                    <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-2.jpg" alt="" />
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <div class="dbox">
            <div class="pamphlet mw1400 mg-lra anime">
                  <div class="mw1200 mg-lra clearfix">
                        <div class="col-1">
                              <p class="fs_30 font_b"><?php echo $title_2; ?></p>
                        </div>
                        <div class="col-2" style="position: relative;">
                              <a href="pdf/【合体版】当日パンフレット.pdf" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/slide_5_2024.jpg" alt="" /></a>
                        </div>
                  </div>
            </div>
      </div>

      <div class="mw1120 mg-lra pos_r anime event_bdr_b">
            <div class="text_c">
                  <p><a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/oirase/" target="_blank"><?php echo $title_5; ?></a></p>
                  <div class="image-flex">
                        <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/event/Picture1.jpg" alt="" />
                        <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/event/Picture2.jpg" alt="" />
                        <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/event/Picture3.jpg" alt="" />
                  </div>
            </div>

            <!-- <div class="mg-lra" style="max-width: 600px;">
                <table class="event_photo_tbl">
                <tr>
                <td><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/event/2023_event_4_img-1.png" alt="" /></td>
                </tr>
                </table>
                </div> -->

      </div>

      <div class="dbox bg_gr">
            <div class="youtube mw1400 mg-lra anime">
                  <table class="mg-lra sp420_tbl pos_r">
                        <tr>
                              <td class="col1">
                                    <div class="top-leaf-1"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-leaf-1.png" alt="" /</td>
                              <td class="fs_30 font_b" nowrap>Youtube Video</td>
                              <td class="col3 v_btm">
                                    <div class="top-leaf-2"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-leaf-2.png" alt="" /></div>
                              </td>
                        </tr>
                  </table>

                  <a href="https://www.youtube.com/watch?v=sZ-NPHN-SD0" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/youtube.jpg" alt="" /></a>
            </div>
      </div>

      <div class="dbox leaf">
            <div class="mw1400 mg-lra anime">
                  <ul class="banner-box">
                        <li>
                              <a href="https://www.youtube.com/channel/UCeRiy0lg_3j3N_DpZ3CatFw" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/0222_oirase.gif" alt="" /></a>
                        </li>
                        <li>
                              <a href="https://www.oiken.org/" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-1.png" alt="" /></a>
                        </li>
                        <li>
                              <a href="https://www.youtube.com/channel/UCVD_aGvmCf5nF7GySYWmTAw" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-2.png" alt="" /></a>
                        </li>
                        <li>
                              <a href="pdf/aki_sanpo.pdf" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-3.png" alt="" /></a>
                        </li>
                        <li>
                              <a href="http://www.aosya.com/" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-4.png" alt="" /></a>
                        </li>
                        <li>
                              <a href="http://www.aptinet.jp/" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-5.png" alt="" /></a>
                        </li>
                        <li>
                              <a href="http://oirase-seseragi.com/" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-6.png" alt="" /></a>
                        </li>
                  </ul>
            </div>
      </div>

      <div class="dbox-1">
            <div class="page-links clearfix anime">
                  <div>
                        <a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/access">
                              <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-access.jpg" alt="" />
                              <table>
                                    <tr>
                                          <td>
                                                <div class="icon"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/access-icon.png" alt="" /></div>
                                                <p class="fs_30 font_b"><?php echo $title_3; ?></p>
                                          </td>
                                    </tr>
                              </table>
                        </a>
                  </div>
                  <div>
                        <a href="<?php echo $site_url; ?>/<?php echo $lang; ?>/contact">
                              <img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/top-contact.jpg" alt="" />
                              <table>
                                    <tr>
                                          <td>
                                                <div class="icon"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/contact-icon.png" alt="" /></div>
                                                <p class="fs_30 font_b"><?php echo $title_4; ?></p>
                                          </td>
                                    </tr>
                              </table>
                        </a>
                  </div>
            </div>
      </div>

      <div class="dbox">
            <div class="mw1400 mg-lra anime">
                  <div class="banner-box2 clearfix">
                        <div><a href="https://tenki.jp/leisure/camp/2/5/23017/" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-7.png" alt="" /></a></div>
                        <div><a href="http://towadako-livecam-01.aa0.netvolante.jp:8080/viewer/live/ja/live.html" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-8.png" alt="" /></a></div>
                        <div><a href="http://www.koutsu-aomori.com/Road/livecamera.html" target="_blank"><img src="<?php echo $site_url; ?>/pages/images<?php echo $new; ?>/banner-9.png" alt="" /></a></div>
                  </div>
            </div>
      </div>

</div>

</div>
<?php
include "footer" . $new . ".php";
?>