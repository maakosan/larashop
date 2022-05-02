@include('view.header',['msg_title']=>'OK','msg_content'=>'ヘッダーを表示'])
        <main class="l-main">
            {{$content}}

            <section>
                <div class="c-btn__sns">
                    <ul>
                        <li>シェアする</li>
                        <li class="sns-list">
                            <a id="sns_tw" class="sns_link" href="" target="_blank"><img class="sns-lazyload"
                                    src="images/twitter-share.png" alt="ツイッターでつぶやく"></a>
                        </li>
                        <li class="sns-list">
                            <a id="sns_fb" class="sns_link" href="" target="_blank"><img class="sns-lazyload"
                                    src="images/facebook-share.png" alt="Facebookでシェアする"></a>
                        </li>
                        <li class="sns-list">
                            <a id="sns_line" class="sns_link" href="" target="_blank"><img class="sns-lazyload"
                                    src="images/line-share.png" alt="LINEへ送る"></a>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="p-top__contact c-border__gray-bottom">

                    <h2 class="c-title__top">Contact<span>お問い合わせ</span></h2>

                    <div class="p-contact__form">
                        <h3 class="c-title__simple">-メールでのお問い合わせ</h3>
                        <form method="POST" action="/contactform">
                            {{ csrf_field() }}
                            <table class="p-contact__form-table">
                            <tr>
                                <th><span class="required">必須</span>お名前</th>
                                <td>
                                    <span><input name="お名前" class="p-contact__middle" type="text"></span>
                                </td>
                            </tr>

                            <tr>
                                <th><span class="required">必須</span>郵便番号(7桁) <span class="u-font__ms"><span
                                            class="u-red">※</span>半角入力</span>
                                </th>
                                <td><span class="zip">
                                        <input type="text" name="zip" value="" id="zip" /></span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="required">必須</span>住所<span class="u-font__ms">(都道府県/市町村/番地)</span></th>
                                <td>
                                    <span class="addr"><input type="text" name="addr" value="" size="40"
                                            class="p-contact__middle" id="addr"></span>
                                </td>
                            </tr>

                            <tr>
                                <th><span class="required">必須</span>ご連絡先TEL<span class="u-font__ms">(自宅/携帯)</span>

                                </th>
                                </th>
                                <td><span class="tel"><input type="tel" name="tel" value="" class="p-contact__middle">
                                    </span></td>
                            </tr>
                            <tr>
                                <th>e-mail
                                </th>
                                <td>
                                    <input type="email" name="email" value="" class="p-contact__middle" />
                                </td>
                            </tr>
                            <tr>
                                <th>ご希望の連絡方法</th>
                                <td>
                                    <span class="radio-requirement"><label><input type="radio" name="radio-requirement"
                                                value="TEL" checked="checked">
                                            TEL
                                        </label>
                                        <label><input type="radio" name="radio-requirement"
                                                value="e-mail">e-mail</label>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>ご要望</th>
                                <td>
                                    <input type="radio" name="ご要望" value="見積もり依頼">見積もり依頼
                                    <input type="radio" name="ご要望" value="在庫確認">在庫確認
                                    <input type="radio" name="ご要望" value="来店希望">来店希望
                                    <input type="radio" name="ご要望" value="その他">その他
                                </td>
                            </tr>
                            <tr>
                                <th>その他お問い合わせ事項</th>
                                <td><textarea name="textarea-other" class="p-contact__text-area"></textarea>
                                </td>
                            </tr>
                        </table>

                        <div class="p-contact__form-submit">
                            <input type="reset" value="リセット" />
                            <input type="submit" value="送信" class="" />
                        </div>
                        </form>
                    </div>
                </div>



                <div class="p-contact__container">

                    <div class="p-contact__tel">
                        <div class="title">
                            <h3>-電話でのお問い合わせ</h3>
                            <div class="time">受付：10:00〜19:00（水・祝・年末年始除く）</div>
                        </div>
                        <dl class="p-contact__tel-dl">
                            <dt>タジマプレミアム中古車 仙台</dt>
                            <dd><a class="tel" href="tel:0227761963">TEL:022-776-1963</a>
                                住所/宮城県仙台市泉区七北田新田36-1（ランボルギーニ仙台内）担当/石村
                            </dd>
                            <dt>タジマプレミアム中古車 東京</dt>
                            <dd><a class="tel" href="tel:0359144106">TEL:03-5914-4106</a>
                                住所/東京都板橋区坂下3-1-5（シトロエン板橋内）担当/湯浅・和田
                            </dd>
                            <dt>タジマプレミアム中古車 広島</dt>
                            <dd><a class="tel" href="tel:0822495155">TEL:082-249-5155</a>
                                住所/広島県広島市中区平野町3-29（ランボルギーニ広島内）担当/大西
                            </dd>
                        </dl>
                    </div>


                    <div class="p-contact__line">
                        <h3 class="c-title__simple">-LINEでのお問い合わせ</h3>
                        <div class="u-pb__1">
                            <img src="images/line.png" alt="タジマプレミアム中古車LINE公式アカウント">
                        </div>
                        <div class="line-it-button" data-lang="ja" data-type="friend" data-lineid="@278ymopd"
                            style="display: none;"></div>
                    </div>
                </div>

    </div>
    </div>
    <div class="" role="alert" aria-hidden="true"></div>
    </form>
    </div>
    </div>
    </section>
    </main>



    <footer class="l-footer">
        <div class="l-container">
            <h2 class="l-footer__title">
                <a href="http://www.tajima-motor.com/" target="_blank">タジマモーターコーポレーショングループ</a>
            </h2>

            <ul class="l-footer__brandlink">
                <li>
                    <div class="logo">
                        <img src="images/porsche-logo.png" alt="ポルシェ">
                    </div>
                    <ul class="shopname">
                        <li><a href="https://www.porsche.co.jp/dealers/nara/" target="_blank">ポルシェセンター奈良</a></li>
                    </ul>
                </li>
                <li>
                    <div class="logo">
                        <img src="images/lamborghini-logo.png" alt="ランボルギーニ">
                    </div>
                    <ul class="shopname">
                        <li><a href="https://www.tajima-motor.com/lamborghini-sendai/" target="_blank">ランボルギーニ仙台</a>
                        </li>
                        <li><a href="https://www.tajima-motor.com/lamborghini-hiroshima/" target="_blank">ランボルギーニ広島</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="logo">
                        <img src="images/logo/astonmartin.png" alt="アストンマーティン">
                    </div>
                    <ul class="shopname">
                        <li><a href="https://www.tajima-motor.com/astonmartin-sendai/" target="_blank">アストンマーティン仙台</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="logo">
                        <img src="images/logo/peugeot.png" alt="プジョー">
                    </div>
                    <ul class="shopname">
                        <li><a href="http://mejiro.peugeot-dealer.jp/cgi-bin/WebObjects/11333bb4323.woa/"
                                target="_blank">プジョー目白</a></li>
                        <li><a href="http://chofu.peugeot-dealer.jp/cgi-bin/WebObjects/1542d083ac2.woa/#_ga=1.178633828.1950711616.1456059049"
                                target="_blank">プジョー調布</a></li>
                    </ul>
                </li>
                <li>
                    <div class="logo">
                        <img src="images/logo/citroen.png" alt="シトロエン">
                    </div>
                    <ul class="shopname">
                        <li><a href="http://itabashi.citroen-dealer.jp/cgi-bin/WebObjects/135391d6178.woa/"
                                target="_blank">シトロエン板橋</a></li>
                        <li><a href="http://chiba.citroen-dealer.jp/cgi-bin/WebObjects/135391dd738.woa/"
                                target="_blank">シトロエン千葉</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /l-footer__brandlink -->

            <ul class="l-footer__brandtext">
                <li>
                    <ul>
                        <li><a href="http://www.tajima-motor.com/gopro/" target="_blank">GoPro</a></li>
                        <li><a href="https://www.monster-sport.com/" target="_blank">モンスタースポーツ</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="http://www.tajima-camper.com/" target="_blank">キャンピングカー</a></li>
                        <li><a href="https://www.tajima-rental.com/" target="_blank">レンタカー</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="https://www.sanitysystem.jp/" target="_blank">Sanity System</a></li>
                        <li><a href="http://www.tajima-motor.com/safeplus/shelter/" target="_blank">浮揚式津波洪水対策シェルター</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="l-footer__copylight">
                <p>Copyright (C) <a href="https://www.tajima-motor.com/" target="_blank">TAJIMA MOTOR CORPORATION</a>.
                    All rights reserved. </p>
            </div>
            <!-- /footer-copylight -->
        </div>
    </footer>

</body>

</html>