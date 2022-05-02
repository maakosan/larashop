@extends('layouts.main')

@section('title', 'トップページ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトです。')

@section('content')
<div class="l-main__container">
    <main class="l-main__aria-top">
               <h1>検索</h1>

 <form action="{{ route('event.index') }}" method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <input type="search" name="search" placeholder="イベント名を入力してください">
      <input type="submit" value="検索">
 </form>

    </main>
</div>
@endsection