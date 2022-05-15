@extends('layouts.main')

@section('title')
{{$products->name}}
@endsection

@section('excerpt')
 {{$products->description}}
@endsection

@section('page-js')
<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script>
const mainSlider = '.main'                                        //メインスライダーのクラス名
const thumbSlider = '.thumbnail'                                  //サムネイルスライダーのクラス名
const mainSlides = document.getElementsByClassName('main-slide');        //メインスライダーのslideのクラス名
const thumbSlides = document.getElementsByClassName('thumbnail-slide');  //サムネイルスライダーのslideのクラス名
let slideChangePermit = false;

const mainSwiper = new Swiper(mainSlider,{
  loop: true,
  loopedSlides: mainSlides.length
});

const thumbSwiper = new Swiper(thumbSlider, {
  speed: 1500,
//   autoplay: {
//     delay: 4000
//   },
  slideToClickedSlide: true,
  spaceBetween: 1,
  slidesPerView: 'auto',
  centeredSlides: true,
  loop: true,
  loopedSlides: mainSlides.length,
  controller:{
    control:mainSwiper
  }
});

for( let i = 0; i < thumbSlides.length ; i ++ ){
  thumbSlides[i].addEventListener('click',()=>{
    setTimeout(()=>{
    //   thumbSwiper.autoplay.start();
    },3000);
  },false);
}

mainSwiper.on('touchEnd',()=>{
  slideChangePermit = true;
});

mainSwiper.on('slideChange',()=>{
  if( slideChangePermit ){
    const current = mainSwiper.activeIndex;
    thumbSwiper.slideTo(current, 300, true);
    setTimeout(()=>{
      thumbSwiper.autoplay.start();
      slideChangePermit = false;
    },3000);
  }
});
</script>
@endsection

@section('content')
<div class="l-main__container">
<section>
<main>
<div class="l-main__aria">
<ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>
            <a href="{{url('/product')}}">
商品ラインナップ
            </a>
        </li>
        <li>
    {{$products->name}}
        </li>
</ul>
<h1 class="c-title">
{{$products->name}}
</h1>
<div>
    <div class="c-card__row-between">
    <div class="p-product__column__2row">

<div class="js-swiper">

<!-- メインスライダー -->
<div class="swiper-container main">
  <div class="swiper-wrapper">
    <div class="swiper-slide main-slide"><img src="{{asset($products->mainimage)}}"></div>
    @if (isset($products->subimage1))
    <div class="swiper-slide main-slide"><img src="{{asset($products->subimage1)}}"></div>
    @endif
     @if (isset($products->subimage2))
    <div class="swiper-slide main-slide"><img src="{{asset($products->subimage2)}}"></div>
      @endif
      @if (isset($products->subimage2))
    <div class="swiper-slide main-slide"><img src="{{asset($products->subimage3)}}"></div>
@endif
</div>
</div>
<!-- サムネイルスライダー -->
<div class="swiper-container thumbnail">
  <div class="swiper-wrapper">
    <div class="swiper-slide thumbnail-slide"><img src="{{asset($products->mainimage)}}"></div>
    @if (isset($products->subimage1))
    <div class="swiper-slide thumbnail-slide"><img src="{{asset($products->subimage1)}}"></div>
  @endif
    @if (isset($products->subimage2))
    <div class="swiper-slide thumbnail-slide"><img src="{{asset($products->subimage2)}}"></div>
    @endif
    @if (isset($products->subimage3))
    <div class="swiper-slide thumbnail-slide"><img src="{{asset($products->subimage3)}}"></div>
@endif

</div>



</div>
</div>

</div>
<div class="p-product__column__2row u-a-fadeRight">

                                            <ul class="p-product__icon">

                                            @if (!empty($products->categoryslug1))
                                                    <li class="{{$products->categoryslug1}}">

                                                    @php
                                                $cate = strtoupper($products->categoryslug1);echo $cate
                                                    @endphp

                                                    </li>
                                            @endif
                                            @if (!empty($products->categoryslug2))
                                                    <li class="{{$products->categoryslug2}}">

                                                        @php
                                                $cate = strtoupper($products->categoryslug2);echo $cate
                                                    @endphp

                                                    </li>
                                            @endif
                                            @if (!empty($products->categoryslug3))
                                                    <li class="{{$products->categoryslug3}}">

                                                       @php
                                                $cate = strtoupper($products->categoryslug3);echo $cate
                                                    @endphp

                                                    </li>
                                            @endif
                                            </ul>

                                            <div class="p-product__read">
                                                    {!!  $products->description !!}
                                            </div>
                                                <ul class="p-product__info-wrap">
                                                    <li class="p-product__no">
                                                        商品番号:<span class="no"> {{$products->productno}}</span>
                                                    </li>
                                                    <li class="p-product__price">販売価格:
                                                            <span class="text">{{number_format($products->price)}}</span><span class="yen">円</span></li>
                                            </ul>
                                     >
                                                    @if($products->stock<1)
                                                        <p class="u-text__center u-text__red">欠品中</p>

                                                        @else
                                                        <div class="p-product__option-wrap">


                                    <form method="POST" action="{{ route('line_item.create') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $products->id }}"/>
                                    <div class="p-product__quantity"><span class="u-pr__3">購入数</span>
    <input type="number" name="quantity" min="1" value="1" max="10" step="1" autocomplete="off" require/></div>

 <button type="submit" class="c-button__cart slide-in"><span class="fa fa-shopping-cart"></span>カートに入れる</button>
 </div>

</form>
@endif
                                      </div>
                                    </div>
                                    </div>
                        </section>


                                    </div>

                                   @include('components/parts-item-pickup')
            </main>
</div>
@endsection