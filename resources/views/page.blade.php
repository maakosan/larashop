@extends('layouts.main')

@section('title', 'トップページ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトです。')

@section('content')
<div class="l-main__container">
    <main class="l-main__aria-top">
                        <section class="l-main__white">
                        <div class="l-main__content">
<p>このサイトはLaravel学習のために作ったサンプルサイトです。お問い合わせ/ご購入等はできかねますので、ご了承ください。</p>
                        </div>
                        </section>


                        @include('components/parts-item-pickup')
    </main>
</div>
@endsection