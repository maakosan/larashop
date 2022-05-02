@extends('layouts.main')

@section('title', 'トップページ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトです。')

@section('page-js')
<script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 500,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {

        959: {
            slidesPerView: 1.5,
        },
    },
});
</script>
@endsection

@section('content')
<div class="l-main__container">
    <main class="l-main__aria-top">

                <div class="p-top__bunner">


<div class="swiper-container">
  <div class="swiper-wrapper">
   <div class="swiper-slide"><a href="{{ url('/') }}"><img src="{{ asset('assets/image/mainbunner1.jpg') }}" alt="{{config('app.name','Laravel')}}"></a></div>
    <div class="swiper-slide"><a href="{{ url('/') }}"><img src="{{ asset('assets/image/mainbunner2.jpg') }}" alt="{{config('app.name','Laravel')}}"></a></div>
    <div class="swiper-slide"><a href="{{ url('/') }}"><img src="{{ asset('assets/image/mainbunner3.jpg') }}" alt="{{config('app.name','Laravel')}}"></a></div>
  </div>
</div>
</div>

 <hr class="c-border__2color">
<div class="c-card__search-section">

                <div class="c-card__search-wrap">
@include('components/parts-search')
                </div></div>
                        <section class="l-main__white">
                        <div class="l-main__content">
                            <div class="p-top__info">
<span class="p-top__crip">
                        <i class="fas fa-paperclip fa-flip-vertical"></i>
                    </span>
                                 <div class="p-top__info-box">
                                    <h2 class="p-top__info-title">
                                        {{config('app.name','Laravel')}}からのお知らせ</h2>
                                    <div class="p-top__info-button">
                                        <a href="{{ url('/news') }}">過去のお知らせ</a></div>
                            <!--お知らせ一覧-->
                                <ul class="p-top__info-list">
                                @foreach($newsposts as $newspost)
                                    @if ($loop->index < 3)
                                        <li><span class="day">{{$newspost->updated_at->year}}/{{$newspost->updated_at->month}}/{{$newspost->updated_at->day}}</span><a href="news/{{$newspost->id}}">
                                                {{$newspost->title}}
                                           </a>
                                        </li>
                                    @endif
                                @endforeach
                                </ul>
                                </div>
                            </div>
                        </div>
                        </section>
                        @include('components/parts-item-new')
                        @include('components/parts-item-pickup')
    </main>
</div>
@endsection