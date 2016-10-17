<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="{{ route('home') }}">
                                <img src="{{ route('home') }}/img/logo.png" alt="創坑 logo" class="hidden-xs hidden-sm">
                                <img src="{{ route('home') }}/img/logo-small.png" alt="創坑 logo" class="visible-xs visible-sm"><span class="sr-only">創坑 - 回到首頁</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown {{ Request::is( '/') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">首頁</a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw {{ Request::is('forum') ? 'active' : '' }}">
                                    <a href=" {{ route('forum') }} ">群眾論坑</a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw {{ Request::is( 'ideas.show') ? 'active' : '' }}">
                                    <a href="{{ route('team-up',0) }}" >坑隊招募</a>
                                </li>
                                @if(Auth::check())
                                <li class="dropdown use-yamm yamm-fw {{ Request::is( 'team-up') ? 'active' : '' }}">
                                    <a href="{{ route('ideas.create') }}" >我要創坑</a>
                                </li>
                                @endif
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->


                                {{--<li class ="{{ Request::is( 'about') ? 'active' : '' }}">
                                    <a href="#">關於創坑 </a>
                                </li> --}}
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">講座與工作坊 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="{{ URL::asset('/') }}img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h5>2016 年度講座與工作坊</h5>
                                                        <ul>
                                                            <li><a href="#">「Flying V創辦人：鄭光廷」真正的多元才是創意的根本</a>
                                                            </li>
                                                            <li><a href="#">「木匠兄妹木工房創辦人：周信宏」當文創設計遇上傳統木工</a>
                                                            </li>
                                                            <li><a href="#">「學悅科技創辦人：趙式隆」學悅科技的校園創業歷程</a>
                                                            </li>
                                                            <li><a href="#">  「國際創新創業發展協會：蔡適陽」創業家精神的實踐與發展</a>
                                                            </li>
                                                            <li><a href="#">「VMFive 事業發展經理-吳子榮」第五次創業革命-VMFive 的成長之路</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!-- <div class="col-sm-3">
                                                        <h5>歷屆講座與工作坊</h5>
                                                        <ul>
                                                            <li><a href="#">2015 年度講座與工作坊</a>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                {{--
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">2016 創坑風雲榜 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>2016 年度最佳創坑榜</h5>
                                                        <ul>
                                                            <li><a href="{{ route('home') }}">精緻農業-菇纇自動化生產</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">車門開啟警示安全防撞偵測</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">客製化回憶底片卷鑰匙圈-記錄您的故事</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">多功能組合行動電源</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">小吃收找錢設備</a>
                                                            </li>
                                                        </ul>
                                                        <h5>2016 年度創坑十傑</h5>
                                                        <ul>
                                                            <li><a href="{{ route('home') }}">第一席-恩克拉多斯</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第二席-戰慄的龍卷</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第三席-鳳凰院凶真</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第四席-野比大熊</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第五席-宇智波止水</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第六席-馬哈揍敵客</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第七席-乙坂隼翼</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第八席-藍染惣右介</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第九席-久我恭介</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">第十席-星海坊主</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <h5>歷屆創坑風雲榜</h5>
                                                        <ul>
                                                            <li><a href="{{ route('home') }}">2015 年度創坑風雲榜</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">2014 年度創坑風雲榜</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">2013 年度創坑風雲榜</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">2012 年度創坑風雲榜</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">2011 年度創坑風雲榜</a>
                                                            </li>
                                                        </ul>
                                                        <h5>傑出創坑者紀念碑</h5>
                                                        <ul>
                                                            <li><a href="{{ route('home') }}">艾倫·圖零（2011 創坑十傑第一席）</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">假伯斯（2012 創坑十傑第二席）</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">彼爾蓋茲（2012 創坑十傑第七席）</a>
                                                            </li>
                                                            <li><a href="{{ route('home') }}">李奧納多皮卡丘（2013 創坑十傑第一席）</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                --}}

                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>
