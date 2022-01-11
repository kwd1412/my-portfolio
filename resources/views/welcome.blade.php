@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('show')
    @else
    <div class="login">
        <div class="wellcome-top">
            <div class="main-img">
                <img class="wellcome-pc" src="../img/wellcome/wellcome-pc2.gif" alt="メイン画像">
            </div>
            <div class="wellcome-name">
                <h5>DAIKI KAWASHO</h5>
                <p>-Profile-</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク {{<p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p> --}}
            </div>
        </div>
    </div>
    @endif
@endsection