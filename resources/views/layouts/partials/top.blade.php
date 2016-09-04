<div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                        @if (Auth::guest())
                            <p class="hidden-sm hidden-xs">聯絡我們 05-631-5722 或 ring0930@nfu.edu.tw</p>
                        @else
                            <p class="hidden-sm hidden-xs">Hi, {{ Auth::user()->name }} ({{ Auth::user()->epithet }}) !</p>
                        @endif
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                        @if (Auth::guest())
                            <div class="social">
                                <a href="{{ url('login') }}" class="facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="{{ url('login') }}" class="gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ url('login') }}" class="github" data-animate-hover="pulse"><i class="fa fa-github"></i></a>
                                <a href="{{ url('login') }}" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>
                        @endif

                            <div class="login">
                            @if (Auth::guest())
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">登入</span></a>
                                <a href="{{route('signup')}}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">註冊</span></a>
                            @else
                                <a href="{{ url('account') }}"><i class="fa fa-cog"></i> <span class="hidden-xs text-uppercase">我的帳戶</span></a>
                                <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> <span class="hidden-xs text-uppercase">登出</span></a>
                            @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
