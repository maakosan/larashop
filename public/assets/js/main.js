$(function() {

    var pagetop = $('#js-pagetop');
    pagetop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.on('click', function() {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });


    $('.search-keyword').on('keypress', function(e) {
        if (e.keyCode == 13) {
            var index = $('.search-keyword').index(this);
            $('.search-url')[index].click();
        }
    });



    $('.l-header__bar').on('click',
        function() {
            $(this).toggleClass('active');
            // $(".l-header__nav-menu").toggleClass('active');
            $(".l-header__nav-menu").slideToggle();
        });



    $(window).on('load resize', function() {
        var winW = $(window).width();
        var devW = 959;
        if (winW <= devW) {
            $(".l-header__nav-menu").hide();
        } else {
            $(".l-header__nav-menu").show();
            $('.l-header__bar').removeClass('active');
        }
    });




    // $('.l-header__bar').on('click', function() {
    //     var i = $('.l-header__nav-menu').hasClass('js-none-active');
    //     if (i) {
    //         $(this).addClass('active');
    //         $('.l-header__nav-menu').removeClass('js-none-active');
    //     } else {
    //         $(this).removeClass('active');
    //         $('.l-header__nav-menu').addClass('js-none-active');
    //     }
    //     $('.l-header__nav-menu').slideToggle('fast');
    // });



    $('#js-cate__search').on('click', function() {
        var i = $('#js-cate__search-icon').hasClass('fa-angle-down');
        if (i) {
            $('#js-cate__search-icon').removeClass('fa-angle-down').addClass('fa-angle-up');
        } else {
            $('#js-cate__search-icon').addClass('fa-angle-down').removeClass('fa-angle-up');
        }
        $('#js-cate__menu').slideToggle('fast');
    });



    // $('#js-archive__row').on('click',
    //     function() {
    //         $(this).addClass('active');
    //         $('.p-archive__column').addClass('js-archive');
    //         $('#js-archive__column').removeClass('active');
    //     }
    // );
    // $('#js-archive__column').on('click',
    //     function() {
    //         $(this).addClass('active');
    //         $('#js-archive__row').removeClass('active');
    //         $('.p-archive__column').removeClass('js-archive');
    //     }
    // );


    // function handleTouchMove(event) {
    //     event.preventDefault();
    // }

    // var element = document.getElementById('js-nav');

    $('#js-archive__row').on('click',
        function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('#js-nav').fadeOut(500);

                document.removeEventListener('touchmove', handleTouchMove, { passive: false });
            } else {
                $(this).addClass('js-open');
                $('#js-nav').addClass('js-sp-open');
                $('#js-nav').fadeIn(500);
                document.addEventListener('touchmove', handleTouchMove, { passive: false });
            };
        });


    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 10) { // トップから100pxスクロールしたらスライドイン
            $('#js-nav-toggle').removeClass('js-open');
        }
    });


    //画面幅変更の際のハンバーガーメニューの挙動
    // $(window).on('load resize', function() {　
    //     if (window.matchMedia('(min-width: 840px)').matches) {
    //         $('#js-nav').show();
    //         $('#js-nav-toggle').removeClass('js-open');
    //     } else {
    //         $('#js-nav').hide();
    //         if ($(this).hasClass('js-open')) {
    //             $(this).removeClass('js-open');
    //         };

    //     }
    //     if (window.matchMedia('(min-width: 767px)').matches) {
    //         $('.js-footer-site').next("ul").show();
    //         $('.js-footer-site').removeClass('js-footer-down');
    //     } else {
    //         $('.js-footer-site').next("ul").hide();


    //     }
    // });

    //SNS

    $(function() {

        var href = location.href; //1.URLを取得しエンコードする
        var getTitle = $('title').html(); //2.ページのタイトルを取得

        //3.URLを取得しエンコードする
        var snsUrl = encodeURIComponent(href);
        var snsTitle = encodeURIComponent(getTitle);

        $('.js-sns_link').each(function() {

            var sns_obj = $(this).attr('id');　 //4.ID名を取得
            var snsCase = sns_obj;

            //5.IDを判定してリンク先を出力する
            switch (snsCase) {

                case 'sns_mail':
                    $(this).attr('href', 'mailto:?body=' + snsTitle + snsUrl);
                    break;

                case 'sns_fb':
                    $(this).attr('href', 'http://www.facebook.com/sharer.php?u=' + snsUrl);
                    break;

                case 'sns_tw':
                    $(this).attr('href', 'http://twitter.com/share?text=' + snsTitle + '&url=' + snsUrl);
                    break;
            }

        });
    });
});

//ページトップへ
$(function() {
    var pagetop = $('#js-pagetop');
    pagetop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.on('click', function() {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });

    $('a[href *= "#"]').click(function() {
        var elmHash = $(this).attr('href');
        var pos = $(elmHash).offset().top;
        $('body,html').animate({ scrollTop: pos }, 500);
        return false;
    });



    $('.js-more').mouseover(function(e) {
        $(this).children('.c-button__arrow').addClass("active");
    });
    $('.js-more').mouseout(function(e) {
        $(this).children('.c-button__arrow').removeClass("active");
    })

    //下から出てくるアニメ
    function slideAnime() {
        //====上に動くアニメーションここから===
        $('.u-a-upAnime').each(function() {
            var elemPos = $(this).offset().top - 50;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                // 上から下へ表示するクラスを付与
                // テキスト要素を挟む親要素（上）とテキスト要素を元位置でアニメーションをおこなう
                $(this).addClass("u-a-slideAnimeUpDown");
                // 要素を上枠外に移動しCSS アニメーションで上から元の位置に移動
                $(this).children(".u-a-upAnimeInner").addClass("slideAnimeDownUp");
                // 子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
            } else {
                // 上から下へ表示するクラスを取り除く
                $(this).removeClass("u-a-slideAnimeUpDown");
                $(this).children(".u-a-upAnimeInner").removeClass("u-a-slideAnimeDownUp");
            }
        });
    }

    // // 画面をスクロールをしたら動かしたい場合の記述
    // $(window).scroll(function() {
    //     slideAnime(); /* アニメーション用の関数を呼ぶ*/
    // }); // ここまで画面をスクロールをしたら動かしたい場合の記述

    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function() {
        slideAnime(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

    function slideAnime() {

        $('.u-a-downAnime').each(function() {
            var elemPos = $(this).offset().top - 50;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass("u-a-slideAnimeDownUp");
                $(this).children(".u-a-downAnimeInner").addClass("u-a-slideAnimeUpDown");
            } else {
                $(this).removeClass("u-a-slideAnimeDownUp");
                $(this).children(".u-a-downAnimeInner").removeClass("u-a-slideAnimeUpDown");
            }
        });
    }

    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function() {
        slideAnime(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面をスクロールをしたら動かしたい場合の記述


    function delayScrollAnime() {
        var time = 0.5; //遅延時間を増やす秒数の値
        var value = time;
        $('.delayScroll').each(function() {
            var parent = this; //親要素を取得
            var elemPos = $(this).offset().top; //要素の位置まで来たら
            var scroll = $(window).scrollTop(); //スクロール値を取得
            var windowHeight = $(window).height(); //画面の高さを取得
            var childs = $(this).children(); //子要素を取得

            if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) { //指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
                $(childs).each(function() {

                    if (!$(this).hasClass("js-fadeUp")) { //アニメーションのクラス名が指定されているかどうかをチェック

                        $(parent).addClass("play"); //親要素にクラス名playを追加
                        $(this).css("animation-delay", value + "s"); //アニメーション遅延のCSS animation-delayを追加し
                        $(this).addClass("js-fadeUp"); //アニメーションのクラス名を追加
                        value = value + time; //delay時間を増加させる

                        //全ての処理を終わったらplayを外す
                        var index = $(childs).index(this);
                        if ((childs.length - 1) == index) {
                            $(parent).removeClass("play");
                        }
                    }
                })
            } else {
                $(childs).removeClass("js-fadeUp"); //アニメーションのクラス名を削除
                value = time; //delay初期値の数値に戻す
            }
        })
    }

    function delayScrollAnimeHead() {
        var time = 0.1; //遅延時間を増やす秒数の値
        var value = time;
        $('.js-delayScrollHead').each(function() {
            var parent = this; //親要素を取得
            var elemPos = $(this).offset().top; //要素の位置まで来たら
            var scroll = $(window).scrollTop(); //スクロール値を取得
            var windowHeight = $(window).height(); //画面の高さを取得
            var childs = $(this).children(); //子要素を取得

            if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) { //指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
                $(childs).each(function() {

                    if (!$(this).hasClass("js-fadeUp")) { //アニメーションのクラス名が指定されているかどうかをチェック

                        $(parent).addClass("play"); //親要素にクラス名playを追加
                        $(this).css("animation-delay", value + "s"); //アニメーション遅延のCSS animation-delayを追加し
                        $(this).addClass("js-fadeUp"); //アニメーションのクラス名を追加
                        value = value + time; //delay時間を増加させる

                        //全ての処理を終わったらplayを外す
                        var index = $(childs).index(this);
                        if ((childs.length - 1) == index) {
                            $(parent).removeClass("play");
                        }
                    }
                })
            } else {
                $(childs).removeClass("js-fadeUp"); //アニメーションのクラス名を削除
                value = time; //delay初期値の数値に戻す
            }
        })
    }

    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function() {
        delayScrollAnime(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面をスクロールをしたら動かしたい場合の記述

    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function() {
        delayScrollAnimeHead(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

});