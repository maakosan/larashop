@extends('layouts.main')

@section('title', 'トップページ')

@section('excerpt', 'Laravelの勉強のために作ったサンプルサイトです。')

@section('page-js')
@endsection

@section('content')
<div class="l-main__container">
    <main>
                <div class="l-main__aria">
<ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>
お知らせ一覧
        </li>
</ul>

                        <h1 class="c-title">お知らせ一覧</h1>
                        <div class="l-main__textaria">
                            <!--お知らせ一覧-->


                                <ul class="p-page__info-list">
  @foreach($newsposts as $newspost)
                                        <li><span class="day">{{$newspost->updated_at->year}}/{{$newspost->updated_at->month}}/{{$newspost->updated_at->day}}</span>

 <a href="{{url('/news/')}}{{('/')}}{{$newspost->id}}">
                                                {{$newspost->title}}
                                           </a>
                                        </li>
                                       @endforeach
                                </ul>

                        </div>



                </div>
            </main>
</div>
@endsection
