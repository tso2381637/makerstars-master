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
                                <br />
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                                </div>
                                </div>
                                <p>目前３人</p>
                                <h4>需要人才</h4>
                                <p>PHP, HipHop, Break-dance</p>
                                <h4>開坑期限</h4>
                                <p>10/2013 - 06/2014</p>
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

                        <div class="col-md-12">
                            <div class="heading">
                                <h3>Related projects</h3>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="box-image">
                                <div class="image">
                                    <img src="{{asset('img/portfolio-1.jpg')}}" alt="" class="img-responsive">
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
                                    <img src="{{asset('img/portfolio-1.jpg')}}" alt="" class="img-responsive">
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
                                    <img src="{{asset('img/portfolio-1.jpg')}}" alt="" class="img-responsive">
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

                         

                            <!-- /.box-image -->
                        </div>

                    </div>
                </section>

            </div>
            <!-- /.container -->


        </div>


        </div>










@endsection
