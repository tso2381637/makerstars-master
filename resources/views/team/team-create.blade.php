@extends('layouts.master')

@section('title', '新增團隊')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">
                <div class="row">
                <div class="col-md-9">
                    <form class="form-horizontal" id="form">
                    <div class="form-group">
                      <label for="teamname">團隊名稱</label>
                      <input type="text" class="form-control" id="teamname" placeholder="請輸入你的團隊名稱">
                      <p v-show="" class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                      <label for="member" >新增成員</label>
                      <div class="input-group">
                      <input type="text" class="form-control" id="member" placeholder="請輸入你的成員帳號">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                      </span>
                    </div>
                      <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                      <label for="introduce">團隊介紹</label>
                      <textarea rows="5" class="form-control" id="introduce" placeholder="團隊介紹"></textarea>
                      <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                      <label for="submit"></label>
                      <button type="submit" action="route('team.store')"class="btn btn-primary">創建</button>
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
<script>
new Vue({
  el:'#form',

  data:{
    error:$error
  }

})
</script>
