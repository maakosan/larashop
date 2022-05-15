@extends('layouts.main')

@section('title', 'トップページ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトです。')


@section('content')
<div class="l-main__container">

           <main>

                <div class="l-main__aria">
                 <ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>マイページ
        </li>
</ul>
                         <h1 class="c-title">
                            {{ Auth::user()->name }} 様マイページ</h1>



 <table class="p-contact__form-table">
        <tr>
                                <td class="back"><label for="email">{{ __('お名前') }}</label></td>
                                <td>
{{ Auth::user()->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="back"><label for="email">{{ __('メールアドレス') }}</label></td>
                                <td>
{{ Auth::user()->email }}
                                </td>
                            </tr>
                            <tr>
                                <td class="back"><label for="email">{{ __('郵便番号') }}</label></td>
                                <td>
{{ Auth::user()->email }}
                                </td>
                            </tr>
                            <tr>
                                <td class="back"><label for="email">{{ __('住所') }}</label></td>
                                <td>
{{ Auth::user()->email }}
                                </td>
                            </tr>
                            <tr>
                                <td class="back"><label for="email">{{ __('電話番号') }}</label></td>
                                <td>
{{ Auth::user()->email }}
                                </td>
                            </tr>


                        </table>

                           <div class="p-contact__form-submit">
                            <div>
                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                                  {{ Auth::user()->name }} 様


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}<i class="fas fa-lg fa-angle-right"></i>
                                    </a>

                                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> --}}
                                </div>

                                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ __('ログアウト') }}<i class="fas fa-lg fa-angle-right"></i>
                                        @csrf
                                    </form> --}}
                            </li>
                        @endguest


                        </div>


                    </div>

                </div>
            </main>


@endsection