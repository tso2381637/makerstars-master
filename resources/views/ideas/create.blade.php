@extends('layouts.master')

@section('title', '發表點子')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-medium">

                        {!! Form::open(['route' => 'ideas.store', 'method' => 'POST', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']) !!}
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    @if ($errors->has('title'))
                                    {!! Form::label('title', '標題') !!}
                                    <div class="has-error">
                                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '標題']) !!}
                                        <p class="help-block text-danger">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </p>
                                      </div>
                                    @else
                                    {!! Form::label('title', '標題') !!}
                                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '標題']) !!}
                                    @endif
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    {!! Form::label('category', '分類') !!}
                                    <br>
                                    {!! Form::select('category_id', array('1' => '人文及藝術領域', '2' => '工程、製造及營造領域', '3' => '服務領域', '4' => '社會科學、商業及法律領域', '5' => '科學領域', '6' => '教育領域', '7' => '農學領域', '8' => '醫藥衛生及社福領域', '9' => '其他領域'), '1') !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    {!! Form::label('tags', '標籤') !!}
                                    {!! Form::text('content', null, ['id' => 'content', 'rows' => 5, 'class' => 'form-control', 'placeholder' => '以半形逗號區隔數個標籤，如：標籤A,標籤B', 'data-validation-required-message' => '請輸入標籤', 'required']) !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    {!! Form::label('content', '內文') !!}
                                    @if($errors->has('content'))
                                    <div class="has-error">
                                    {!! Form::textarea('content', null, ['id' => 'content', 'rows' => 5, 'class' => 'form-control', 'placeholder' => '內文']) !!}
                                    <p class="help-block text-danger">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </p>
                                  </div>
                                  @else
                                  {!! Form::textarea('content', null, ['id' => 'content', 'rows' => 5, 'class' => 'form-control', 'placeholder' => '內文']) !!}
                                  @endif
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <p style="font-size: 1.5em; color: #555; margin-bottom: 0">設定為公開？</p>
                                    {!! Form::radio('private', 1, true) !!} 是
                                    {!! Form::radio('private', 0, false) !!} 否
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
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
                                <h3 class="panel-title">Text widget</h3>
                            </div>

                            <div class="panel-body text-widget">
                                <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
                                </p>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Search</h3>
                            </div>

                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="blog.html">Webdesign</a>
                                    </li>
                                    <li class="active"><a href="blog.html">Tutorials</a>
                                    </li>
                                    <li><a href="blog.html">Print</a>
                                    </li>
                                    <li><a href="blog.html">Our tips</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
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
