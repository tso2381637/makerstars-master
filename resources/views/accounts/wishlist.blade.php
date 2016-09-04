@extends('layouts.master')

@section('title', '我的收藏')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-order">

                        <p class="lead">您可以將平台上的點子收藏記錄。</p>

                        <div class="box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">收藏日期</th>
                                            <th>內容摘要</th>
                                            <th>狀態</th>
                                            <th>查看</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <th><p>您還沒有任何收藏。</p></th>
                                        {{-- <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">White Blouse Armani</a>
                                            </td>
                                            <td>2</td>
                                            <td>$123.00</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/basketsquare.jpg" alt="Black Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">Black Blouse Armani</a>
                                            </td>
                                            <td>1</td>
                                            <td>$200.00</td>
                                            <td>$0.00</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
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
