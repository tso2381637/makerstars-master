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
                            <div>
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">登入</span></a>
                                <a href="{{route('signup')}}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">註冊</span></a>
                            @else
                            <div class="dropdown" style="display:inline;">
                                <a data-toggle="dropdown" id="notify" href="#"><i class="fa fa-flag"></i></a>
                                <ul class="dropdown-menu" style="padding-top:0;margin-top:0;border-top:0;border-radius:5px">
                                  <span class="col-xs-12" style="background:#38a7bb;border-radius:5px">通知</span>

                                </ul>
                              </div>
                                <a href="{{ url('account') }}"><i class="fa fa-cog"></i> <span class="hidden-xs text-uppercase">我的帳戶</span></a>
                                <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> <span class="hidden-xs text-uppercase">登出</span></a>
                            @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <template>
              <a href="#"><li style="color:black">
                @{{ notification }}
              </li></a>
            </template>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.6/vue.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
            <script>
            var socket = io('localhost:3000');
            Vue.component('Vue-Dropdown',{
              template: '#dropdown-template',
              props: ['notification'],
              methods:{
                mounted:function(){socket.on('test-channel:event1',function(data){
                this.users.push(data.name);
              }.bind(this));
              }
            }
            });
            </script>
