@extends('layouts.master')

@section('title', '群眾論坑')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-medium">
                        {{-- @foreach($ideas as $idea)
                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/portfolio-2.jpg" class="img-responsive" alt="Example blog post alt">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="#"> {{ $idea->title }}</a></h2>
                                    <div class="clearfix">
                                        <p class="author-category">由 <a href="#">{{ $idea->user_id }}</a> 發佈在 <a href="#"></a>
                                        </p>
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> {{ $idea->created_at->diffForHumans() }}</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> Comments</a>
                                        </p>
                                    </div>
                                    <p class="intro">{{ $idea->content }}</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        @endforeach --}}
                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/portfolio-2.jpg" class="img-responsive" alt="Example blog post alt">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="#">來趣頑</a></h2>
                                    <div class="clearfix">
                                        <p class="author-category">由 <a href="#">陳宇紳</a> 發佈在 <a href="#">教育領域</a>
                                        </p>
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> 2016/3/20</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> 8則留言</a>
                                        </p>
                                    </div>
                                    <p class="intro">教育為國家穩定及個人志向的基礎，觀看近年來很多年輕學子對於教育後的成果，即對於自我目標興趣設定不足導致科系選填錯誤及就業迷茫，本團隊為致力於教育轉型認為台灣教育必須更多元化，主題式教學正在全球興起，讓台灣的下一代能夠接觸更廣泛的知識，不只能增加興趣探索而且更能增加「跨領域能力」...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/portfolio-3.jpg" class="img-responsive" alt="Example blog post alt">
                                        </a>
                                    </div>
                                    {{-- <div class="video">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/upZJpGrppJA"></iframe>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="#">封存記憶鑰匙圈</a></h2>
                                    <div class="clearfix">
                                        <p class="author-category">由 <a href="#">郭重佑</a> 發佈在 <a href="#">工程、製造及營造領域</a>
                                        </p>
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> 2016/3/17</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> 5則留言</a>
                                        </p>
                                    </div>
                                    <p class="intro">在人生的旅途中有許多的回憶，若是能有個鑰匙圈能把它們串在一起並隨時能夠回憶的話那有該多好～...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                        </section>

                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/portfolio-4.jpg" class="img-responsive" alt="Example blog post alt">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="#">P-bro 多功能行動電源</a></h2>
                                    <div class="clearfix">
                                        <p class="author-category">由 <a href="#">張吉楊</a> 發佈在 <a href="#">工程、製造及營造領域</a>
                                        </p>
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> 2016/2/25</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> 6則留言</a>
                                        </p>
                                    </div>
                                    <p class="intro">一個行動電源就能滿足你充電、照明和方便的願望，P-bro多功能行動電源能滿足你一切的電力需求。...</p>
                                    <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                    </p>
                                </div>
                            </div>
                        </section>

                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next disabled"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul>



                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-3">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">群眾論坑</h3>
                            </div>

                            <div class="panel-body text-widget">
                                <p>在這裡能互相討論各種不同的點子。
                                </p>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">搜尋</h3>
                            </div>

                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="輸入關鍵字搜尋">
                                        <span class="input-group-btn">

            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">分類</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#">所有領域</a>
                                    </li>
                                    <li><a href="#">人文及藝術領域</a>
                                    </li>
                                    <li><a href="#">工程、製造及營造領域</a>
                                    </li>
                                    <li><a href="#">服務領域</a>
                                    </li>
                                    <li><a href="#">社會科學、商業及法律領域</a>
                                    </li>
                                    <li><a href="#">科學領域</a>
                                    </li>
                                    <li><a href="#">教育領域</a>
                                    </li>
                                    <li><a href="#">農學領域</a>
                                    </li>
                                    <li><a href="#">醫藥衛生及社福領域</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">標籤</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="tag-cloud">
                                    <li><a href="#"><i class="fa fa-tags"></i> 機械工程</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 專案管理</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> UI 設計</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 視覺設計</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 編劇</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 3D 列印</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 程式設計</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> 攝影</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- *** MENUS AND FILTERS END *** -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection
