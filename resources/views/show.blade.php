@extends('layouts/master')

@section('title','關於此坑')

@section('content')

@include('layouts.partials.heading-breadcrumbs')

<div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>{{$idea->title}}</h2>
                        </div>


                    </div>
                </div>
                <div class="row portfolio-project">

                    <section>

                        <div class="col-sm-8">
                            <div class="project owl-carousel">
                                <div class="item">
                                    <img src="{{asset('img/main-slider1.jpg')}}" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img class="{{asset('img/main-slider2.jpg')}}" src="img/main-slider2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="{{asset('img/main-slider3.jpg')}}" src="img/main-slider3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="{{asset('img/main-slider4.jpg')}}" src="img/main-slider4.jpg" alt="">
                                </div>
                            </div>
                            <!-- /.project owl-slider -->

                        </div>

                        <div class="col-sm-4">
                            <div class="project-more">


                                <h4>坑主</h4>
                                <p class="read-more"><a href="{{route('ideas.leader',['id'=>$idea->id])}}" >{{ $idea->user->name }}</a>
                                <h4>入坑人數</h4>
                                <p>目前３人</p>
                                <h4>需要人才</h4>
                                <p>PHP, HipHop, Break-dance</p>
                                <h4>開坑期限</h4>
                                <p>10/2013 - 06/2014</p>
                                <button class="btn btn-template-main" ><a href="{{ route('team.join',['$team_id' => $idea->id ]) }}">我要加入</a></button>
                            </div>
                        </div>

                    </section>

                    <section>

                        <div class="col-sm-12">

                            <div class="heading">
                                <h3>關於此坑</h3>
                            </div>

                            <p class="lead">{{$idea->content}}</p>
                        </div>
                    </section>

                </div>

                <section>
                    <div class="row portfolio">



                            <!-- /.box-image -->



                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-12">

                            <div class="heading">
                                <h3>留言板</h3>
                            </div>

                          </div>


                        <div id="comments">



                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src={{asset('img/blog-avatar2.jpg')}} class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">Julie Alma</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.comment -->


                            <div class="row comment last">

                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src={{asset('img/blog-avatar.jpg')}} class="img-responsive img-circle" alt="">
                                    </p>
                                </div>

                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">Louise Armero</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2012 at 12:00 am</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </p>
                                </div>

                            </div>
                            <!-- /.comment -->
                        </div>


                        <br><br><br><br><br><br>

                        <div id="comment-form">



                            <form>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">我要留言 <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" id="comment" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <button class="btn btn-template-main"><i class="fa fa-comment-o"></i> Post comment</button>
                                    </div>
                                </div>


                            </form>

                        </div>




                        <div class="col-md-12">
                            <div class="heading">
                                <h3>你可能會喜歡</h3>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="box-image">
                                <div class="image">
                                    <img src="{{asset('img/portfolio-4.jpg')}}" alt="" class="img-responsive">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                </div>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                        <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image -->

                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="box-image">
                                <div class="image">
                                    <img src="{{asset('img/portfolio-2.jpg')}}" alt="" class="img-responsive">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                </div>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                        <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image -->

                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="box-image">
                                <div class="image">
                                    <img src="{{asset('img/portfolio-3.jpg')}}" alt="" class="img-responsive">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3>
                                </div>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                        <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                    </p>
                                </div>
                            </div>




            </div>
          </div>
        </section>
            <!-- /.container -->


        </div>


        </div>










@endsection
