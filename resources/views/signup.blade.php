@extends('layouts.master')

@section('title', '建立您的帳戶／登入')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">建立您的創坑帳戶</h2>

                            <p class="lead">還沒有註冊創坑帳戶？</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                            <hr>

                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <label for="name-login">您的名稱</label>
                                    <input type="text" class="form-control" id="name-login">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">電子郵件</label>
                                    <input type="text" class="form-control" id="email-login">
                                </div>
                                <div class="form-group">
                                    <label for="password-login">建立密碼</label>
                                    <input type="password" class="form-control" id="password-login">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password-login">確認密碼</label>
                                    <input type="password" class="form-control" id="password-again">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">登入</h2>

                            <p class="lead">已經擁有創坑帳戶?</p>
                            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                            <hr>

                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
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