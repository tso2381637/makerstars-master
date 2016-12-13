@extends('layouts.master')

@section('title', '我的帳戶')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

       <div class="col-md-9" id="customer-orders">
         <p class="text-muted lead">您在創坑平台上的團隊資訊。</p>
         <div class="box">
               <div class="table-responsive">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>團隊名稱</th>
                               <th>隊長</th>
                               <th>人數</th>
                               <th>進度</th>
                           </tr>
                       </thead>
                       <tbody>
                           @if($teams->isEmpty())
                           <th><p>還沒有團隊嗎，點此<a href="{{ route('team.create')}}">建立</a></p></th>
                           @else
                           @foreach($teams as $team)
                           <tr>
                                <th>{{ $team->name }}</th>
                                <td>{{ $team->user->name }}</td>
                                <td>{{ $team->teamup->count() }}</td>
                                <td>
                                   <div class="progress" style="margin-bottom: -5px;  background-color: #d6d6d6;">
                                  <div class="progress-bar progress-bar-striped active" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                    60%
                                  </div>
                                </div>
                                </td>
                                <td align="right"><a href="" class="btn btn-template-main btn-sm">View</a>
                                </td>
                            </tr>
                            @endforeach
                           @endif
                       </tbody>
                   </table>
               </div>
               <!-- /.table-responsive -->

             </div>
           <!-- /.box -->

       </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    @include('accounts.menu')

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection
