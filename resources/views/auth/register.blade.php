@extends('layouts.main')

@section('content')
<main>
                <div class="l-main__aria">
                 <ul class="c-pan">
                    <li><a href="{{url('/')}}">ホーム</a></li>
                    <li><a href="{{url('/login')}}">ログイン</a></li>
                    </li>
                    <li>登録
                    </li>
                </ul>
                         <h1 class="c-title">
                            登録</h1>

                        <form method="POST" action="{{ route('register') }}">
                        @csrf

 <table class="p-contact__form-table">
                            <tr>
                                <td class="back"><label for="email">{{ __('メールアドレス') }}</label></td>

                            <td>
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
<tr>
                            <td class="back">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>
                            </td>
                            <td>
                                <lavel>姓</lavel>
                                <input id="firstname" type="text" class="form-control" name="name" value="{{ old('first-name') }}" required autocomplete="name" autofocus>
<lavel>名</lavel>
                                <input id="lastname" type="text" class="form-control" name="name" value="{{ old('last-name') }}" required autocomplete="name" autofocus>


                            </td>
                            </tr>
                            </tr>
                            <tr>
                            <td class="back">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('住所') }}</label>
                            </td>
                            <td><lavel>郵便番号</lavel>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('post') }}" required autocomplete="name">
                                <lavel>住所(都道府県)</lavel>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('address1') }}" required autocomplete="name">
<lavel>住所(市町村以下)</lavel>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('address2') }}" required autocomplete="name">

                            </td>
                            </tr>
                            <tr>
                            <td class="back">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>
                            </td>
                            <td>

                                <input id="firstname" type="text" class="form-control" name="name" value="{{ old('first-name') }}" required autocomplete="name" autofocus>

                            </td>
                            </tr>

                             <tr>
                                <td class="back"><label for="email">{{ __('メールアドレス') }}</label></td>

                            <td>
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
 <tr>
                            <td class="back">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
                            </td>
                            <td>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                            </tr>
                            <tr>
                            <td class="back">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワードを再入力') }}</label>
                            </td>
                            <td>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </td>
                            </tr>
                            </table>

                           <div class="p-contact__form-submit">
                            <div>
                            <button type="submit">
                                     {{ __('登録する') }}<i class="fas fa-lg fa-angle-right"></i>
                            </button>
                        </div>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="checkbox-color">
                                        {{ __('パスワードを記録する') }}
                                    </label>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録する') }}
                                </button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </main>




{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
