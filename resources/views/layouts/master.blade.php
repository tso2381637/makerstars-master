<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>創坑 - @yield('title')</title>

    <meta name="keywords" content="">

    {{-- <base href="{{ route('home') }}"> --}}

    {{-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'> --}}

    <link href="http://fonts.googleapis.com/earlyaccess/notosanstc.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{ route('home') }}/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="{{ route('home') }}/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{ route('home') }}/css/custom.css" rel="stylesheet">

    <!-- Social Buttons for Bootstrap -->
    <link href="{{ route('home') }}/css/bootstrap-social.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{ route('home') }}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ route('home') }}/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ route('home') }}/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ route('home') }}/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ route('home') }}/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ route('home') }}/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ route('home') }}/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ route('home') }}/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="{{ route('home') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ route('home') }}/css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            @include('layouts.partials.top')

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            @include('layouts.partials.navbar')

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        @include('layouts.partials.login-modal')

        <!-- *** LOGIN MODAL END *** -->


        @yield('content')


        <!-- *** FOOTER ***
_________________________________________________________ -->
        {{--
        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        <br>13/25 New Avenue
                        <br>Newtown upon River
                        <br>45Y 73J
                        <br>England
                        <br>
                        <strong>Great Britain</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer> --}}
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2016. MakerStars, Inc.</p>
                    <p class="pull-right">Template by <a href="http://v4-alpha.getbootstrap.com">Bootstrap 4 Themes</a> with support from <a href="http://kakusei.cz">Designové předměty</a>
                        {{-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) --}}
                    </p>
                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="{{ URL::asset('/') }}js/jquery.cookie.js"></script>
    <script src="{{ URL::asset('/') }}js/waypoints.min.js"></script>
    <script src="{{ URL::asset('/') }}js/jquery.counterup.min.js"></script>
    <script src="{{ URL::asset('/') }}js/jquery.parallax-1.1.3.js"></script>
    <script src="{{ URL::asset('/') }}js/front.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.6/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>

    <!-- owl carousel -->
    <script src="{{ URL::asset('/') }}js/owl.carousel.min.js"></script>



</body>

</html>
