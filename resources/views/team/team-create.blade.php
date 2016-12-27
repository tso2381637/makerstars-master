@extends('layouts.master')

@section('title', '新增團隊')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')
        <div id="content">
            <div class="container">
                <div class="row">
                <div class="col-md-9">
                    <form class="form-horizontal" role="form" action="{{ route('team.store') }}"method="POST">
                      {!! csrf_field() !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                      <h3 for="name">團隊名稱</h3>
                      <input type="text"  class="form-control" name="name" placeholder="請輸入你的團隊名稱">
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                     <div class="form-group" id="member">
                      <h3 for="member" >新增成員</h3>
                         <div class="list-group" style="margin-bottom: 5px">
                         <div class="list-group-item" v-for="(check,index) in checked" style="padding: 5px 10px; border: hidden">
                             @{{ check }}
                         <button type="button" @click="checked.splice(index,1)" style="background-color: transparent; border: none" class="fa fa-remove"></button>
                         </div>
                         </div>
                      <div class="input-group">
                      <input v-model="query" type="text" class="form-control" id="member" placeholder="請輸入你的成員帳號">
                      <span class="input-group-btn">
                        <button @click="check" v-if="!loading" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                          <button disabled @click="check" v-if="loading" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                      </span>
                    </div>
                        <div class="list-group" style="margin-bottom: 0px" v-if="messages"  v-for="message in messages.data">
                            <a href="#" @click="select(message.name)" class="list-group-item" style="padding: 5px 10px">@{{ message.name }}</a>
                            </div>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                      <h3 for="introduction">團隊介紹</h3>
                      <textarea rows="5" class="form-control" name="introduction" placeholder="團隊介紹"></textarea>
                      @if ($errors->has('introduction'))
                          <span class="help-block">
                              <strong>{{ $errors->first('introduction') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="submit"></label>
                      <button type="submit" class="btn btn-primary">創建</button>
                    </div>
                  </form>
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
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.6/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.min.js"></script>
    <script src="http://homestead.app/js/team.create.js"></script>
@endsection