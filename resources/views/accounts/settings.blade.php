@extends('layouts.master')

@section('title', '我的帳戶')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-account">

                        @if(Auth::user()->profile == NULL)
                        <p class="lead">請填寫您的個人簡介。</p>
                        <p class="text-muted">填寫個人簡介能讓人快速地了解你。</p>
                        @else
                        <p class="lead">您好 {{ Auth::user()->name }} ！</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        @endif

                        <div class="box">

                            <div class="heading">
                                <h3 class="text-uppercase">個人簡介</h3>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="用簡短的幾句話來介紹自己。" data-validation-required-message="請填寫您的個人簡介。" cols="50" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> 儲存</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.box -->


                        <div class="box clearfix">
                            <div class="heading">
                                <h3 class="text-uppercase">個人專長</h3>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="若有多個專長使用半形逗號區隔「,」，如：專長1,專長2" data-validation-required-message="請填寫您的專長。" cols="50" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> 儲存</button>
                                </div>
                            </form>

                        </div>

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
