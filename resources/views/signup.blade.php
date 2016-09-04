@extends('layouts.master')

@section('title', '建立您的帳戶／登入')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">

                <div class="row">
                  <div class="col-md-6">
                      <div class="box">
                        @include('auth.register')
                      </div>
                  </div>


                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">登入</h2>

                            <p class="lead">已經擁有創坑帳戶?</p>
                            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                            <hr>

                            <form action="{{ url('auth/login') }}" method="post" role="form">
                              {!! csrf_field() !!}
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">電子郵件</label>
                                    <input type="text" class="form-control" name="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="text-center">
                                {!! Form::submit('Log in',['class' =>'btn btn-template-main fa fa-sign-in'])!!}
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection
