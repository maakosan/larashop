<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')|{{config('app.name','Laravel')}}</title>
    <link rel="shortcut icon" type="image/ico" href="{{ asset('/assets/image/favicon.ico') }}">
    <meta name="description" itemprop="description" content="@yield('excerpt')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta name="twitter:card" content="Summary with Large Image">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">



 <!-- Place your kit's code here -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<header class="l-header">

            <div class="l-header__logo">
                <a href="{{ url('/') }}"><img src="{{ asset('/assets/image/logo.png') }}" alt="{{config('app.name','Laravel')}}>"></a>
            </div>
                <nav class="l-header__nav">
                    <ul class="l-header__nav-menu">
                        <li><a href="{{ url('/product') }}">ラインナップ</a></li><li><a href="{{ url('/page') }}">ご利用ガイド</a></li><li><a href="{{ url('/page') }}">お問い合わせ</a></li><li><a class="border" href="{{ url('/search') }}"><i class="u-pr__3 fas fa-search"></i>商品検索</a></li>
                    </ul>
                    <ul class="l-header__nav-btn">
                        <li class="cart">
                            <a href="{{ url('/cart') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="l-header__cart-badge"></span><span class="text">カート</span></a>
                        </li>

 @if (Route::has('login'))
                <div class="top-right links"><li class="login">
                    @auth
                        <a href="{{ url('/home') }}"><i class="fas fa-user-alt"></i>マイページ</a>
                    @else
                         <a href="{{ url('/login') }}"><i class="fas fa-user-alt"></i><span class="text">ログイン</span></a>
                    @endauth
                    </li>
                </div>
            @endif
            </ul>

                    <div class="l-header__bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>

</header>
