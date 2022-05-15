

                                        <li class="p-archive__column">
                                            <div class="image">
                                                <a href="{{url('/product')}}{{('/')}}{{($product->id)}}" class="c-card__image">
                                                    <span class="c-card__hover">
                                                    <img src="{{asset($product->mainimage)}}">
                                                    </span>
                                                </a>
                                            </div>

                                        <div class="info">
                                                <p class="c-card__title">
                                                    {{$product->name}}
                                                </p>

                                                <ul class="c-card__row-small">

                                                    <li>商品番号:
                                                        {{$product->productno}}
                                                    </li>
                                                </ul>

                                                 <p class="c-card__price">
                            {{number_format($product->price)}}
                            <span class="yen">円</span> </p>
                                        </div>
                                        <div class="button">
                                                <div class="c-card__button-wrap">
                                                    <div class="c-card__button detail">

                                                        <a href="{{url('/product')}}{{'/'}}{{($product->id)}}">
                                                            <i class="fas fa-angle-right u-pr__3"></i>商品詳細</a>
                                                    </div>
                                                    @if($product->stock< 1)
                                                        <p class="u-text__center u-text__red">欠品中</p>
                                                        @else
                                                         <div>
                                                        <form method="POST" action="{{ route('line_item.create') }}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}"/>
                                                        <input type="hidden" name="quantity" value="1"/>
                                                        <button type="submit"  class="c-card__button-cart">
                                                                <i class="fa fa-shopping-cart u-pr__2"></i>カートに入れる
                                                        </button>
                                                        </form>

                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
