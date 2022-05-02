
                    <div class="c-card__search">
                        <div class="c-card__search__list-button">
                        <div id="js-cate__search" class="main"><span>カテゴリ</span><span class="u-sp__none">から探す</span>
                            <span class="icon"><i id="js-cate__search-icon" class="fas fa-angle-down"></span></i>
                        </div>
                        </div>
                        <form action="{{url('/search')}}" method="GET" class="c-card__search-form">
                        <input type="search" name="search" class="c-card__search-input" placeholder="商品名で検索">
                        <button class="c-card__search__input-button"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <ul class="c-card__search__list-button-menu" id="js-cate__menu">
                                @foreach($cates as $cate)
                                        <li><a href="{{url('/category')}}{{'/'}}{{$cate->categoryslug}}">
                                                {{$cate->categoryname}}
                                           </a>
                                        </li>
                                @endforeach
                    </ul>
