@extends('layouts.main')

@section('title', '商品検索')

@section('excerpt', '検索ページです。')

@section('content')
<div class="l-main__container">

<div class="l-main__aria">
<ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>
商品検索
        </li>
</ul>

<h1 class="c-title">
商品検索
</h1>
<section>
<div class="c-card__search-wrap u-mb__20">
@include('components/parts-search')
</div>

<div class="c-card__search-answer">

@if (empty($searchs))
<p class="u-text__center">探したい商品について、検索してください。</p>
@else
<p class="p-p-qa__search-count">
[{{$searchs}}]の検索結果です。
    <span>検索結果：{{($matchs->count())}}件</span>
</p>
</div>
@if($matchs->count()>0)

  <div class="p-archive__list">


 <ul class="c-card__row">

   @foreach ($matchs as $product)
@include('components/parts-product-list')
                                        @endforeach

</ul>
   </div>
</section>
</div>
@endif

@endif

 </div>

                </div>

</div>
@endsection