@extends('layouts/master')

@section('title','關於坑主')

@section('content')

@include('layouts.partials.heading-breadcrumbs')



<div id="content" class="team-member-detail">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>關於 {{ $idea->user->name }}</h2>
                    </div>

                    <h3>創坑等級：{{ $idea->user->epithet }}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>你好，我是○○○，我對金融業有絕大的信心和熱忱，因為我擁有專業的金融知識，利用一年時間積極考去取十張證照，在財務個案分析方面也有研究，另外也具有豐富的實習經驗</p>

                    <div class="heading">
                        <h3>個人專長</h3>
                    </div>

                    <ul class="ul-icons">
                        <li><i class="fa fa-check"></i>c語言</li>
                        <li><i class="fa fa-check"></i>java</li>
                        <li><i class="fa fa-check"></i>laravel</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <img class="img-responsive img-circle" alt="" src="{{asset('img/person-1.jpg')}}">
                </div>
            </div>
        </section>

        <section>
            <div class="row">

                <div class="col-md-4">
                    <div class="heading">
                        <h3>與我聯絡</h3>
                    </div>

                    <div class="social">
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="heading">


                        <h3>目前開的坑</h3>
                    </div>

                    <ul class="ul-icons">
                        <li><a href="{{route('ideas.show',['id'=>$idea->id])}} ">麵包製作</a>
                        </li>
                        <li><a href="{{route('ideas.show',['id'=>$idea->id])}} ">TEST</a>
                        </li>
                        <li><a href="{{route('ideas.show',['id'=>$idea->id])}} ">123</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4">
                    <div class="heading">
                        <h3>目前加入的坑</h3>
                    </div>

                    <ul class="ul-icons">
                        <li>無
                        </li>
                        <li><a href="#"></a>
                        </li>
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container -->





@endsection
