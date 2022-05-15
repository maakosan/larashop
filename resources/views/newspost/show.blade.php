@extends('layouts.main')


@section('title')
{{$newspost->title}}
@endsection

@section('excerpt')
@if(!empty($newpost->description))
{{$newpost->description}}
@endif
@endsection

@section('page-js')

@endsection

@section('content')
<div class="l-main__container">
            <main>
                <div class="l-main__aria">
<ul class="c-pan">
    <li><a href="{{url('/')}}">ホーム</a></li>
        <li>
            <a href="{{url('/news')}}">
お知らせ一覧
            </a>
        </li>
    <li>
{{$newspost->title}}
    </li>
</ul>
                        <h1 class="c-title">
                        {{$newspost->title}}</h1>
<section>
@if($newspost->image)
                        <img src="{{asset($newspost->image)}}" alt="{{$newspost->title}}イメージ">
                        @endif
                        <div class="l-main__textaria u-mt__20">
                            {!! $newspost->textaria !!}
                        </div>
                        <div class="c-button__wrap">

                            <div class="c-button__simple"><a href="{{url('/news')}}">お知らせ一覧</a></div>
                        </div>
                    </section>
                </div>
            </main>

</div>
@endsection