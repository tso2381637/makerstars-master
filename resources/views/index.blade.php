@extends('layouts.master')

@section('title', '首頁')

@section('content')

@include('layouts.partials.home-carousel')

<section class="bar background-white">
            <div class="container">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>分享點子</h3>
                                <p>在平台上分享您的創意點子</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <h3>激盪創意</h3>
                                <p>透過互相討論激盪彼此的創意靈感</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <h3>儲存想法</h3>
                                <p>不再讓一閃而過的想法流逝</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <h3>講座與工作坊</h3>
                                <p>每月舉辦不同精彩的講座與工作坊</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <h3>尋找夥伴</h3>
                                <p>尋找不同領與的夥伴來實現你想做的事</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>三創履歷</h3>
                                <p>產生一份專屬你的三創履歷，讓你的競爭力能被看見</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>創坑者心得</h2>
                        </div>

                        {{-- <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p> --}}


                        <!-- *** TESTIMONIALS CAROUSEL ***
        }
 _________________________________________________________ -->

                        <ul class="owl-carousel testimonials same-height-row">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>創坑平台是可以開放討論自己想法的地方，這是分享想法 、練習溝通與說服別人的環境。在創坑平台上發現，同學們來自行銷、工程等背景，不同的策略性的思考對創業有很大的幫助。</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>孫柏毅</h5>
                                            <p>企管系, 四年級</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>不管是想提出想法，或者想加入團隊做一些不一樣的事，創坑平台是一個很好的平台。現在回過頭來想，假設我沒有加入創坑，而選擇自己與認識的人去做，要花的時間肯定是更多的，更不用說這裡的資源直接連結了技術、市場、財務等各領域專業的同學。</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-2.jpg">
                                            <h5>邱智豪</h5>
                                            <p>資工系, 四年級</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>我實際參與創坑後覺得創坑平台真的能夠找到志同道合的伙伴，在平台上的討論過程中發現到更多的問題，再將這些問題一個個解開。在這個過程中，夥伴們的不斷提點我，讓我建立起能夠完成我點子的信心，我們最後也真的做到了！</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-3.png">
                                            <h5>曾承翰</h5>
                                            <p>材料系, 三年級</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>創坑平台是一個很不一樣的地方，從知識上的傳遞到人與人的交流都給我很大的幫助。在創坑平台中因為可以跨領域的獲得建議，同學們之間常常會互相討論和分享，也因此成為無話不談的好朋友，大家常常在群組裡分享生活中有趣、好玩的事。</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>陳品義</h5>
                                            <p>生科系, 二年級</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>

                </div>
            </div>
        </section>
        <!-- /.bar -->

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>成功案例</h2>
                    </div>

                    {{-- <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                        mi vitae est. Mauris placerat eleifend leo. <span class="accent">Check our blog!</span>
                    </p> --}}

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/portfolio-1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> 觀看更多</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="#">來趣頑</a></h4>
                                    <p class="author-category">由 <a href="#">陳宇紳</a> 發佈在 <a href="#">教育領域</a>
                                    </p>
                                    <p class="intro">來趣頑是一個致力於將多元領域的教育活動帶入小學改變以往傳同的教育方式，並以生動活潑的方式讓小朋友從中學習...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/portfolio-2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> 觀看更多</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="#">封存記憶鑰匙圈</a></h4>
                                    <p class="author-category">由 <a href="#">郭重佑</a> 發佈在 <a href="#">工程、製造及營造領域</a>
                                    </p>
                                    <p class="intro">在人生的旅途中有許多的回憶，若是能有個鑰匙圈能把它們串在一起並隨時能夠回憶的話那有該多好～...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/portfolio-3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> 觀看更多</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="#">P-bro 多功能行動電源</a></h4>
                                    <p class="author-category">由 <a href="#">張吉楊</a> 發佈在 <a href="#">工程、製造及營造領域</a>
                                    </p>
                                    <p class="intro">一個行動電源就能滿足你充電、照明和方便的願望，P-bro多功能行動電源能滿足你一切的電力需求。...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/portfolio-4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> 觀看更多</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="#">在台灣做夜事</a></h4>
                                    <p class="author-category">由 <a href="#">張育慧</a> 發佈在 <a href="#">人文及藝術領域</a>
                                    </p>
                                    <p class="intro">越夜越美麗，台灣每個夜市都有不同的故事，我們想讓故事可以讓更多人所知道並愛上它。...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

        @if (Auth::guest())
        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">想要體驗更多或開始成為創坑者嗎？</h3>
                        <p class="lead">蛻變，給自己一個嶄新的未來！</p>
                        <p class="text-center">
                            <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-template-transparent-black btn-lg">立即加入創坑</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        @endif

        {{-- <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>創坑合作企業</h2>
                        </div>

                        <ul class="owl-carousel customers">
                            <li class="item">
                                <img src="img/customer-1.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-2.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-3.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-4.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-5.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-6.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section> --}}


<!-- *** GET IT ***
_________________________________________________________ -->
{{--
    @if (Auth::guest())
        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>想要再體驗更多或開始成為創坑者嗎？</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="{{ url('register') }}" class="btn btn-template-transparent-primary">立即加入創坑</a>
                </div>
            </div>
        </div>
    @endif
--}}

        <!-- *** GET IT END *** -->
@endsection
