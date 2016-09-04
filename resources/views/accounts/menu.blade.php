<!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">我的帳戶</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                	<li class="{{ Request::is( 'account') ? 'active' : '' }}">
                                        <a href="{{ route('account') }}"><i class="fa fa-user"></i> 帳戶資訊</a>
                                    </li>
                                    <li class="{{ Request::is( 'account/activity') ? 'active' : '' }}">
                                        <a href="{{ route('account.activity') }}"><i class="fa fa-list"></i> 活動記錄</a>
                                    </li>
                                    <li class="{{ Request::is( 'account/wishlist') ? 'active' : '' }}">
                                        <a href=" {{ route('account.wishlist') }} "><i class="fa fa-heart"></i> 我的收藏</a>
                                    </li>
                                    <li class="{{ Request::is( 'account/resume') ? 'active' : '' }}">
                                        <a href=" {{ route('account.resume') }} "><i class="fa fa-file-text"></i> 三創履歷</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> 登出</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->
