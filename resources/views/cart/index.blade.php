@extends('layouts.main')

@section('title', 'ショッピングカート')

@section('excerpt', 'ご購入内容をご確認ください')

@section('content')
<div class="l-main__container">


                <div class="l-main__aria">
                 <ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>カート
        </li>
</ul>

                         <h1 class="c-title">
                            ショッピングカート</h1>

                        <div class="p-cart__item">
                        @if(count($line_items) > 0)
        <div class="p-cart__cart-table">
                                    <div class="p-cart__item-wrap">
                                        <div class="p-cart__text-head">
                                            <div class="p-cart__img"></div>
                                            <div class="p-cart__name">商品</div>
                                            <div class="p-cart__price">単価</div>
                                            <div class="p-cart__qty">数量</div>
                                            <div class="p-cart__price">小計</div>
                                            <div class="p-cart__remove">削除</div>
                                        </div>
                                        <div class="p-cart__cart-product-wrap">
                                        @foreach ($line_items as $item)
                                        <div class="p-cart__cart-product">
                                                <div class="p-cart__img">
                                                    <a href="/product/{{($item->id)}}"><img src="{{asset($item->mainimage)}}" alt="{{$item->name}}"></a>
                                                </div>
                                                    <div class="p-cart__name">
                                                        <a href="/product/{{($item->id)}}">
                                                            {{$item->name}}
                                                        </a>
                                                    </div>
                                                    <div class="p-cart__price">
                                                        <span class="price onlyprice">
                                                            {{number_format($item->price)}}<span class="small">円</span></span>
                                                    </div>

                                                     <div class="p-cart__qty">
                                                        {{$item->pivot->quantity}}
                                                    </div>
                                                      <div class="p-cart__price totalprice">
                                                        <span class="price totalprice">
                                                            {{number_format($item->price * $item->pivot->quantity)}}<span class="small">円</span>
                                                        </span>
                                                    </div>


 <div class="p-cart__remove">
     <form method="post" action="{{route('line_item.delete')}}">
        @csrf
<input type="hidden" name="id" value="{{$item->pivot->id}}"/>
<button type="submit" class="p-cart__remove-icon fas fa-trash-alt"></button>
     </div>
    </form>
</div>

@endforeach
</div>
</div>
</div>

                        <div class="p-cart__total">
                            <p><span>合計金額:</span>
                            {{number_format($total_price)}}<span>円</span></p>
                        </div>

                        <div class="c-button__large">
                            <a href="{{url('/page')}}" class="p-cart__cart-btn slide-in_inner u-a-downAnimeInner">購入手続きへ<i class="fas fa-lg fa-angle-right"></i></a>
                        </div>
                            <div class="c-button__simple"><a href="javascript:history.back()">買い物を続ける</a></div>
                        </div>
                        @else
                            <p class="p-cart__item-none">ショッピングカートに商品はありません。</p>
                        @endif
                </div>

</div>
</div>
@endsection