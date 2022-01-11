@extends('layouts.app')

@section('content')
    <div class="portfolio">
        <img class="back-img" src="../img/profile/ao.gif" alt="背景画像">
        <div class="pf-title">
            <i><h4><span>P</span>ortfolio</h4></i>
        </div>
        <div class="portfolio-page">
            <i class="tap">画像をTAP</i>
            <div class="pf-contents">
                <a href="http://kwd1412.sakura.ne.jp/portfolio/Hansel"><img src="../img/portfolio/pf-hansel.gif" alt="プロフィール"></a>
                <i><p class="p-text">薄いピンクを基調としたポップなサイトで、加工した写真やロゴをアニメーションで動かし、見ていて楽しめるサイトを表現。</p></i>
            </div>
            <div class="pf-contents">
                <a href="http://kwd1412.sakura.ne.jp/portfolio/nitouryuu"><img src="../img/portfolio/pf-nitouryuu.gif" alt="プロフィール"></a>
                <i><p class="p-text">白が基調のシンプルなデザイン。各カラムに統一感を持たせる事で見る側のストレスを軽減。ページ遷移を促すため文字での表現を最小限にしたサイト。</p></i>
            </div>
            <div class="pf-contents">
                <a href="http://kwd1412.sakura.ne.jp/portfolio/chie"><img src="../img/portfolio/pf-chie2.gif" alt="プロフィール"></a>
                <i><p class="p-text">和食(日本)、四季を連想させるような雰囲気をイメージし、文字や画像を全体的に大きめにすることで中年～年配の方に見やすいサイト。</p></i>
            </div>
            <div class="pf-contents">
                <a href="http://kwd1412.sakura.ne.jp/portfolio/Lapins"><img src="../img/portfolio/pf-lapins.gif" alt="プロフィール"></a>
                <i><p class="p-text">PC画面、スマホ画面でデザインが異なり背景に合わせて一面一面違った表情を。PC表示では画面遷移ではなく、TAB機能で切り替えをしています。</p></i>
            </div>
        </div>
    </div>
@endsection