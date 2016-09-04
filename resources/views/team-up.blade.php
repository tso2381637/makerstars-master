@extends('layouts.master')

@section('title', '坑隊招募')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-small">

                        <div class="row">
                        @foreach ($ideas as $idea)
                            <div class="col-md-4 col-sm-6">
                                <div class="box-image-text blog">
                                    <div class="top">
                                        <div class="image">
                                            <img src="{{asset('img/portfolio-1.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <div class="bg"></div>
                                        <div class="text">
                                            <p class="buttons">
                                                <a href="#" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> 我想加入</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4><a href="#">{{ $idea->title }}</a></h4>
                                        <p class="author-category">由 <a href="#">{{ $idea->user->name }}</a> 發佈在 <a href="#">
                                          @if($idea->category_id==1)
                                          人文及藝術領域
                                          @elseif($idea->category_id==2)
                                          工程及製造領域
                                          @elseif($idea->category_id==3)
                                          服務領域
                                          @elseif($idea->category_id==4)
                                          商業及法律領域
                                          @elseif($idea->category_id==5)
                                          科學領域
                                          @elseif($idea->category_id==6)
                                          教育領域
                                          @elseif($idea->category_id==7)
                                          農學領域
                                          @elseif($idea->category_id==8)
                                          醫藥及社福領域
                                          @elseif($idea->category_id==9)
                                          其他領域
                                          @endif
                                        </a></p>
                                        <p class="intro">正在尋找活動企劃專長的人。</p>
                                        <p class="read-more"><a href="#" class="btn btn-template-main">繼續閱讀</a>
                                        </p>

                                    </div>
                                </div>
                                <!-- /.box-image-text -->

                            </div>
                            @endforeach
                            
                    </div>

                        <ul class="pager">
                            <li class="previous"><a href="{!! $ideas->previousPageUrl() !!}">&larr; Newer</a>
                            </li>
                            <li class="next"><a href="{!! $ideas->nextPageUrl() !!}">Older &rarr;</a>
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
                                <h3 class="panel-title">坑隊招募</h3>
                            </div>

                            <div class="panel-body text-widget">
                                <p>在這裡可以瀏覽正在招募人的團隊
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
                                    @if($category_id==0)
                                    <li class="active"><a href="{{ route('team-up',0) }}">所有領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',0) }}">所有領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==1)
                                    <li class="active"><a href="{{ route('team-up',1) }}">人文及藝術領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',1) }}">人文及藝術領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==2)
                                    <li class="active"><a href="{{ route('team-up',2) }}">工程及製造領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',2) }}">工程及製造領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==3)
                                    <li class="active"><a href="{{ route('team-up',3) }}">服務領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',3) }}">服務領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==4)
                                    <li class="active"><a href="{{ route('team-up',4) }}">商業及法律領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',4) }}">商業及法律領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==5)
                                    <li class="active"><a href="{{ route('team-up',5) }}">科學領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',5) }}">科學領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==6)
                                    <li class="active"><a href="{{ route('team-up',6 )}}">教育領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',6 )}}">教育領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==7)
                                    <li class="active"><a href="{{ route('team-up',7 )}}">農學領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',7 )}}">農學領域</a>
                                    @endif
                                    </li>
                                    @if($category_id==8)
                                    <li class="active"><a href="{{ route('team-up',8 )}}">醫藥及社福領域</a>
                                    @else
                                    <li><a href="{{ route('team-up',8 )}}">醫藥及社福領域</a>
                                    @endif
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
