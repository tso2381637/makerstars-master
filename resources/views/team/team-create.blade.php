@extends('layouts.master')

@section('title', '發表點子')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-9">

                      {{ Form::open(['route' => 'team.store']) }}
                      <div class="form-group">
                      <h4>{{ Form::Label('團隊名稱') }}</h4>
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
                        <h4>{{ Form::Label('介紹') }}</h4>
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
                    <!-- /.col-md-9 -->

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
