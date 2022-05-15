<footer class="l-footer">
<section>
    <hr class="c-border__2color">
    <div class="l-footer__product">
        <p class="l-footer__text slide-in u-a-downAnime"><span class="inner">欲しいものが、きっと見つかる</span></p>
        <div class="c-button__subcolor_l">
            <a href="{{ url('/product') }}">商品ラインナップ</a>
        </div>
        <ul class="l-footer__list">
            <li>Category</li>

            @foreach($cates as $cate)
                <li><a href="{{url('/category')}}{{'/'}}{{$cate->categoryslug}}">
                        {{$cate->categoryname}}
                    </a>
                </li>
            @endforeach

        </ul>
        <div class="c-button__simple"><a href="{{ url('/page') }}">お問い合わせ</a></div>
    </div>
    <hr class="c-border__2color">
</section>
<section class="l-footer__guide">

    <div class="l-footer__guide-head">
        <h2>ご利用ガイド</h2>
    </div>
    <div class="l-footer__guide-content">
        <div class="c-card__column-wrap">
            <div class="c-card__column__2row">
                <h3 class="c-title__under">商品注文方法</h3>
                <div class="c-card__content">
                    カートに入れてください。このサイトはサンプルサイトです。実在しません。
                </div>
            </div>
             <div class="c-card__column__2row">

                    <h3 class="c-title__under">送料・手数料</h3>
                    <div class="c-card__content">
                        <p>このサイトはサンプルサイトです。実在しません。</p>
                    </div>
            </div>
        </div>
         <div class="c-card__column-wrap">
        <div class="c-card__column__2row">
                <h3 class="c-title__under">お支払いについて</h3>
                <div class="c-card__content">
                    このサイトはサンプルサイトです。実在しません。
                </div>
            </div>

            <div class="c-card__column__2row">
                <h3 class="c-title__under">配送について</h3>
                <div class="c-card__content">
                    このサイトはサンプルサイトです。実在しません。
                </div>
            </div>

        </div>
        <div class="c-card__column-wrap">
            <div class="c-card__column__2row">
                <h3 class="c-title__under">消費税について</h3>
                <div class="c-card__content">
                   このサイトはサンプルサイトです。実在しません。
                </div>
            </div>
            <div class="c-card__column__2row">
                <h3 class="c-title__under">返品について</h3>
                <div class="c-card__content">
                    このサイトはサンプルサイトです。実在しません。
                </div>
            </div>
        </div>


</section>
<section>
    <ul class="l-footer__sns">
        <li>Share</li>
        <li class="twitter"><a id="sns_tw" href="" target="_blank"><i class="fab fa-twitter" alt="Twitterでツイート"></i></a></li>
        <li class="facebook"><a id="sns_fb" href="" target="_blank"><i class="fab fa-facebook-f" alt="Facebookでシェア"></i></a></li>
        <li class="mail"><a id="sns_mail" href="" target="_blank"><i class="fas fa-envelope-square" alt="メールで友だちに送る"></i></a></li>
    </ul>
</section>

<section class="l-footer__menu">
    <div class="l-footer__menu-left">
        <p class="l-footer__company">
           {{config('app.name','Laravel')}}
        </p>
        <address class="l-footer__copylight">Copyright © 2022- {{config('app.name','Laravel')}}</address>
    </div>
    <div class="l-footer__menu-right">
        <ul class="l-footer__menu-contentlink">
<ul class="l-header__nav-menu">
                    </ul>
            <li><a href="{{ url('/product') }}">商品ラインナップ</a></li>
                        <li><a href="{{ url('/page') }}">ご利用ガイド</a></li>
                        <li><a href="{{ url('/page') }}">お問い合わせ</a></li>

@if (Route::has('login'))
<li>
                    @auth
                        <a href="{{ url('/home') }}">マイページ</a>
                    @else
                         <a href="{{ url('/login') }}"><span class="text">ログイン</span></a>
                    @endauth
                    </li>

            @endif


                        <li>
                            <a href="{{url('cart')}}">カート</a></li>
        </ul>
        <ul class="l-footer__menu-infolink ">
                    <li><a href="{{ url('/page') }}">会社概要</a></li>
                    <li><a href="{{ url('/page') }}">プライバシーポリシー</a></li>
                    <li><a href="{{ url('/page') }}">特定商取引法表示</a></li>
        </ul>
    </div>
</section>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('/assets/js/main.min.js') }}"></script>
@yield('page-js')
</body>
<div id="js-pagetop" class="c-botton__pagetop">
    <a href="#"><i class="fas fa-angle-up"></i></a>
</div>

</html>