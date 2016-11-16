@extends('layouts.master')

@section('title', '新增團隊')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <!--<div class="col-md-9">

                      {{ Form::open(['route' => 'team.store']) }}
                      <div class="form-group">
                      <div>{{ Form::Label('團隊名稱') }}</div>
                      @if($errors->has('name'))
                      <div class="has-error">
                      {{ Form::text('name',null,['placeholder' => '請輸入你的團隊名稱']) }}
                    </div>
                    <strong>{{ $error->first(name) }}</strong>
                    @else
                    {{ Form::text('name',null,['placeholder' => '請輸入你的團隊名稱']) }}
                    @endif
                  </div>

                      <div class="form-group">
                        <div>{{ Form::Label('介紹') }}</div>
                        @if($errors->has('introduction'))
                        <div class="has-error">
                        {{ Form::textarea('introduction',null,['placeholder' => '請輸入你的團隊介紹']) }}
                        </div>
                        ＠else
                        {{ Form::textarea('introduction',null,['placeholder' => '請輸入你的團隊介紹']) }}
                        @endif
                      </div>
                      {{ Form::close() }}
                    </div>
                    </div>-->
                    <!-- /.col-md-9 -->
                    <div class="col-md-9" id="blog-listing-medium">

                        {!! Form::open(['route' => 'ideas.store', 'method' => 'POST', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']) !!}
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    @if ($errors->has('title'))
                                    {!! Form::label('title', '團隊名稱') !!}
                                    <div class="has-error">
                                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '請輸入你的團隊名稱']) !!}
                                        <p class="help-block text-danger">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </p>
                                      </div>
                                    @else
                                    {!! Form::label('title', '團隊名稱') !!}
                                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '請輸入你的團隊名稱']) !!}
                                    @endif
                                </div>
                            </div>
                            <!--<div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    {!! Form::label('category', '分類') !!}
                                    <br>
                                    {!! Form::select('category_id', array('1' => '人文及藝術領域', '2' => '工程、製造及營造領域', '3' => '服務領域', '4' => '社會科學、商業及法律領域', '5' => '科學領域', '6' => '教育領域', '7' => '農學領域', '8' => '醫藥衛生及社福領域', '9' => '其他領域'), '1') !!}
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>-->

                            <div class="row control-group">
                              <div class="form-group">


                                {!! Form::label('tilte','新增成員',['class' => 'col-xs-12']) !!}
                                {!! Form::text('title', null, ['id' => 'title', 'class' =>'col-xs-10','placeholder' => '請輸入你的團隊名稱']) !!}


                              <div class="col-xs-2">
                              <button type="submit" class="btn btn-default">＋</button>
                            </div>
                          </div>
                          </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    {!! Form::label('content', '團隊介紹') !!}
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







                            <!--<div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <p style="font-size: 1.5em; color: #555; margin-bottom: 0">設定為公開？</p>
                                    {!! Form::radio('private', 1, true) !!} 是
                                    {!! Form::radio('private', 0, false) !!} 否
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>-->
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-3">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->


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
