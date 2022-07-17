@extends('layouts.main')

@section('title', 'ショッピングカート')

@section('excerpt', 'ご購入内容をご確認ください')

@section('content')
<div class="l-main__container">


                <div class="l-main__aria">
                 <ul class="c-pan">
                    <li><a href="{{url('/')}}">ホーム</a></li>
                    <li>ログイン
                    </li>
                </ul>
                         <h1 class="c-title">
                            ログイン</h1>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

        <table class="p-contact__form-table">
                            <tr>
                                <td class="back"><label for="email">{{ __('メールアドレス') }}</label></td>
                            <td>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </td>
                            </tr>
                        <tr>
                            <td class="back"><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label></td>
                            <td>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </td>
                             </tr>
                        </table>

                           <div class="p-contact__form-submit">
                            <div>
                            <button type="submit">
                                    {{ __('ログイン') }}<i class="fas fa-lg fa-angle-right"></i>
                            </button>
                        </div>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="checkbox-color">
                                        {{ __('パスワードを記録する') }}
                                    </label>
                        <div class="p-contact__add-wrap">
                            @if (Route::has('register'))
                                <div class="p-contact__forget">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('会員登録する') }}</a>
                                </div>
                            @endif
                            <div class="p-contact__forget">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('パスワードをお忘れですか?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    </form>
                </table>
            </section>

</div>
@endsection