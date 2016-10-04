@extends('layouts/master')

@section('title','關於坑主')

@section('content')

@include('layouts.partials.heading-breadcrumbs')



<div id="content" class="team-member-detail">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>About {{ $idea->user->name }}</h2>
                    </div>
                    <p class="lead">Do greatest at in learning steepest. Breakfast extremity suffering one who all otherwise suspected. He at no nothing forbade up moments. Wholly uneasy at missed be of pretty whence. John way sir high than law who week. Surrounded
                        prosperous introduced it if is up dispatched. Improved so strictly produced answered elegance is.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do.
                        Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood do provided stronger is. But discretion frequently sir the she instrument unaffected admiration
                        everything.</p>

                    <p>Abilities forfeited situation extremely my to he resembled. Old had conviction discretion understood put principles you. Match means keeps round one her quick. She forming two comfort invited. Yet she income effect edward.
                        Entire desire way design few. Mrs sentiments led solicitude estimating friendship fat. Meant those event is weeks state it to or. Boy but has folly charm there its. Its fact ten spot drew.</p>

                    <p>So feel been kept be at gate. Be september it extensive oh concluded of certainty. In read most gate at body held it ever no. Talking justice welcome message inquiry in started of am me. Led own hearted highest visited lasting
                        sir through compass his. Guest tiled he quick by so these trees am. It announcing alteration at surrounded comparison.</p>

                    <div class="heading">
                        <h3>Han's main responsibilities are</h3>
                    </div>

                    <ul class="ul-icons">
                        <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li><i class="fa fa-check"></i>Aliquam tincidunt mauris eu risus.</li>
                        <li><i class="fa fa-check"></i>Vestibulum auctor dapibus neque.</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <img class="img-responsive img-circle" alt="" src="img/detailsquare.jpg">
                </div>
            </div>
        </section>

        <section>
            <div class="row">

                <div class="col-md-4">
                    <div class="heading">
                        <h3>Get in touch with Han</h3>
                    </div>

                    <div class="social">
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="heading">
                        <h3>Han's presentations</h3>
                    </div>

                    <ul class="ul-icons">
                        <li><i class="fa fa-check"></i><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                        <li><i class="fa fa-check"></i><a href="#">Aliquam tincidunt mauris eu risus.</a>
                        </li>
                        <li><i class="fa fa-check"></i><a href="#">Vestibulum auctor dapibus neque.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                        <h3>Han's articles</h3>
                    </div>

                    <ul class="ul-icons">
                        <li><i class="fa fa-check"></i><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                        <li><i class="fa fa-check"></i><a href="#">Aliquam tincidunt mauris eu risus.</a>
                        </li>
                        <li><i class="fa fa-check"></i><a href="#">Vestibulum auctor dapibus neque.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container -->





@endsection
