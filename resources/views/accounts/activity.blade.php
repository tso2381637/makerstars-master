@extends('layouts.master')

@section('title', '活動紀錄')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

		<div id="content">
            <div class="container">


                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9" id="customer-orders">

                        <p class="text-muted lead">您在創坑平台上的活動紀錄。</p>

                        <div class="box">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>日期</th>
                                            <th>內容摘要</th>
                                            <th>狀態</th>
                                            <th>查看</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <th><p>您在平台上還沒有任何活動紀錄。</p></th>
                                    {{--
                                        <tr>
                                            <td>22/06/2013</td>
                                            <td>多功能組合式行動電源</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22/06/2013</td>
                                            <td>夜市小吃找零</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22/06/2013</td>
                                            <td>回憶底片卷鑰匙圈</td>
                                            <td><span class="label label-success">Received</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22/06/2013</td>
                                            <td>菇纇自動化生產</td>
                                            <td><span class="label label-danger">Cancelled</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22/06/2013</td>
                                            <td>車門開啟安全警示</td>
                                            <td><span class="label label-warning">On hold</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr> --}}
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

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection
