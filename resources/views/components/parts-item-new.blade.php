    <hr class="c-border__subcolor">
    <section class="l-main__dot-subcolor">
        <h2 class="c-title__subcolor">
            新着商品
        </h2>

        <div class="l-main__back-white">
            <ul class="c-card__row delayScroll">
                @foreach($products as $pickup)
                @if ($loop->index < 4)
                    <li class="c-card__column__4row">
                        <a href="{{ url('/product')}}{{'/'}}{{($pickup->id)}}">
                            <span class="c-card__hover">
                                <img class="c-card__image" src="{{ asset($pickup->mainimage)}}" alt="{{$pickup->name}}">
                            </span>
                            <p class="c-card__title">
                            {{$pickup->name}}
                            </p>
                            <p class="c-card__price">
                            {{number_format($pickup->price)}}
                            <span class="yen">円</span>
                            </p>
                        </a>
                    </li>
                @endif
                @endforeach
            </ul>
        </div>
    </section>
