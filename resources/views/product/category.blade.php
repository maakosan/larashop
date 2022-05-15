@extends('layouts.main')

@section('title', '商品ラインナップ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトの商品ラインナップページ')

@section('content')
<div class="l-main__container">

<main>
<div class="l-main__aria">
<ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>

商品ラインナップ
        </li>
</ul>

<section>

<h1 class="c-title">
@foreach($cates as $cate)
        @if($cate->categoryslug == $slug)
            {{$cate->categoryname}}
        @endif
@endforeach
@empty($slug)
  商品ラインナップ
@endempty

<span>掲載件数:{{($products->count())}}件</span>
                                </h1>
                            <div class="p-archive__category-wrap">

                                    <ul class="p-archive__category">
                                       <li><a href="{{url('/product')}}">全商品</a></li>
                                        @foreach($cates as $cate)
                                            <li  @if($cate->categoryslug == $slug)
                                                class="active"
                                                @endif>

                                                <a href="{{url('/category')}}{{('/')}}{{($cate->categoryslug)}}">
                                          {{$cate->categoryname}}</a>

                                        </li>
                                         @endforeach

                                    </ul>
                            </div>
                            {{-- <div class="p-archive__sort-wrap">
                                <ul class="p-archive__sort product">
                                    <li><a href="">新着順</a></li>
                                    <li><a href="">価格の低い順</a></li>
                                    <li><a href="">価格の高い順</a></li>
                                </ul>

                                <ul class="p-archive__sort column">
                                    <li>表示切替</li>
                                    <li id="js-archive__column" class="active"><i class="fas fa-th"></i>
                                    </li>
                                    <li id="js-archive__row">
                                        <i class="fas fa-list"></i>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="p-archive__list">
                                <ul class="c-card__row js-delayScrollHead">
                                @foreach($products as $product)
                                @include('components/parts-product-list')
                                @endforeach
                                </ul>
                            </div>

                        </section>

                </div>


            </main>



                </div>
            </main>
</div>
@endsection