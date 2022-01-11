@extends('layouts.app')

@section('content')
    <div class="top">
        <div class="t-left">
            <div class="title">
                <i><h3 class="t-title"><span>W</span>elcome to my portfolio</h3></i>
            </div>
            <i>
                <ul class="serect">
                    <a href="{{ url('/mypage') }}"><li>MyPage</li></a>
                    <a href="{{ url('/portfolio') }}"><li>Portfolio</li></a>
                    <a href="{{ url('/future') }}"><li>Future</li></a>
                    <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                </ul>
                <div class="scrolldown1">
                    <span>Scroll</span>
                </div>
            </i>
        </div>
        <div class="t-right">
            <div class="top-contents">
                <img class="nofade" src="../img/profile/entrance.gif" alt="背景画像">
                <button type="button" class="btn btn-primary"><a href="{{ url('/mypage') }}"><i>MyPage</i></a></button>
            </div>
            <div class="top-contents">
                <div class="fadein">
                    <img src="../img/profile/planter.gif" alt="背景画像">
                    <button type="button" class="btn btn-info"><a href="{{ url('/portfolio') }}"><i>Portofolio</i></a></button>
                </div>
            </div>
            <div class="top-contents">
                <div class="fadein">
                    <img src="../img/profile/planter2.gif" alt="背景画像">
                    <button type="button" class="btn btn-info"><a href="{{ url('/future') }}"><i>Future</i></a></button>
                </div>
            </div>
            <div class="top-contents">
                <div class="fadein">
                    <img src="../img/profile/entrance2.gif" alt="背景画像">
                    <button type="button" class="btn btn-dark"><i>{!! link_to_route('logout.get', 'Logout') !!}</i></button>
                </div>
            </div>
            </div>
        </div>
@endsection