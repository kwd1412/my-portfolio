@extends('layouts.app')

@section('content')
    <div class="profile">
        <img class="back-img" src="../img/profile/ao.gif" alt="背景画像">
        <div class="picture">
            <img class="picture-pc" src="../img/profile/my-photo-pc.jpg" alt="プロフィール">
            <img class="picture-sp" src="../img/profile/my-photo-sp.jpg" alt="プロフィール">
        </div>
        <div class="my-page">
            <div class="p-title">
                <i><h4><span>P</span>rofile</h4></i>
            </div>
            <div class="p-contents">
                <i>
                    <p class="p-name">名　 前：</p>
                    <p class="place">出身地：</p>
                    <p class="p-text">友人に結婚式のプロフィールムービーやアルバムの作成やをお願いされ独学で勉強したのがきっかけで
                    Webに興味を持ち、Web作成ができる技術者になりたいと思い勉強を始めました。Webでデザイン、コーディングすることの難しさは痛感しましたが
                    それ以上に考えて作る楽しみとできた時の喜びが大きくもっと勉強したいと思い日々勉強を続けています。</p>
                </i>
            </div>
            <div class="p-title">
                <i><h4><span>S</span>kill</h4><i></i>
            </div>
            <div class="p-contents">
                <div class="skill-graph">
                    <div class="graph-left">
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>BootStorp</li>
                            <li>PHP/Laravel</li>
                            <li>Photoshop</li>
                        </ul>
                    </div>
                    <div class="graph-right">
                        <ul>
                            <li>★★★★★</li>
                            <li>★★★★☆</li>
                            <li>★★★☆☆</li>
                            <li>★★★★☆</li>
                            <li>★★★☆☆</li>
                        </ul>
                    </div>
                </div>
                <div class="p-text">
                    <i>
                        <p>2021年2月～テックアカデミーオンライン講座にて、<br>
                        <span>Webデザイン　フロントエンド　PHP/Laravel</span>　コースを受講。<br>
                        デザインからコーディングの基礎知識、アニメーションの実装、データベースを利用したログイン機能などの実装技術、
                        Photoshopを使用し写真加工、バナー作成技術を取得。
                        今後もWordPressやillustratorなど幅を広げて行きます。</p>
                    </i>
                </div>
            </div>
        </div>
    </div>
@endsection