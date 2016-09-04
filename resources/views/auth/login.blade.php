@extends('layouts.master')

@section('title', '登入')

@section('content')

@include('layouts.partials.heading-breadcrumbs')
    <div id="content">
        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="box">
                        <h2 class="text-uppercase">登入創坑</h2>

                        <form class="form-horizontal" role="form" method="POST" url="auth/login">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">忘記了密碼？</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center text-muted">尚未註冊？ <a href="{{ url('register') }}"><strong>立即註冊！</strong></a></p>
                        <p class="text-center text-muted">簡單快速只要 1 分鐘就能完成註冊，馬上註冊開始使用創坑！</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h2 class="text-uppercase">登入創坑</h2>
                        <p class="text-muted">
                            請使用學校信箱登入<br>
                            「@nfu.edu.tw」<br>
                            或<br>
                            「@gm.nfu.edu.tw」<br>
                        </p>

                        @if (session('message'))
                        <div class="alert alert-danger alert-dismissible"
                        role="alert">
                            <button type="button" class="close"
                                    data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>錯誤!</strong> {{ session('message') }}
                        <br>
                        <a href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue={{ url('login') }}" target="_blank">登出您目前的 gmail</a>
                        </div>
                        @endif

                        <hr>
                        {{-- <a class="btn btn-block btn-social btn-lg btn-facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook"></i>Sign in with Facebook</a> --}}

                        <a class="btn btn-block btn-social btn-lg btn-google" href="{{ url('/auth/google') }}"><i class="fa fa-google"></i>Sign in with Google</a>

                        {{-- <a class="btn btn-block btn-social btn-lg btn-github" href="{{ url('/auth/github') }}"><i class="fa fa-github"></i>Sign in with GitHub</a> --}}

                        {{-- <a class="btn btn-block btn-social btn-lg btn-twitter" href="{{ url('/auth/twitter') }}"><i class="fa fa-twitter"></i>Sign in with Twitter</a> --}}
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
@endsection
