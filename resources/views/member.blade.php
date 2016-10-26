@extends('layouts/master')

@section('title','關於團隊')

@section('content')

@include('layouts.partials.heading-breadcrumbs')



<div id="content">
    <div class="container">

        <section>

            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>團隊簡介</h2>
                    </div>

                    <p class="lead">創意，源自於瞬間的感動，真心的投入就會非常有感覺，用心聆聽客戶的需求，從中捕捉最真實的”感動”。 善於以專業精闢的規劃能力與豐富的網路經驗，打造出企業與品牌嶄新的形象與創意的無限魅力。</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="team-member" data-animate="fadeInUp">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-1.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Han Solo</a></h3>
                        <p class="role">Founder</p>
                        <div class="social">
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-2.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Luke Skywalker</a></h3>
                        <p class="role">CTO</p>

                        <div class="social">
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-2.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Princess Leia</a></h3>
                        <p class="role">Team Leader</p>
                        <div class="social">
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-4.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Jabba Hut</a></h3>
                        <p class="role">Lead Developer</p>
                        <div class="social">
                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>
                    <!-- /.team-member -->
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="team-member" data-animate="fadeInDown">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-1.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Han Solo</a></h3>
                        <p class="role">Founder</p>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-2.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Luke Skywalker</a></h3>
                        <p class="role">CTO</p>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-3.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Princess Leia</a></h3>
                        <p class="role">Team Leader</p>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-4.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Jabba Hut</a></h3>
                        <p class="role">Lead Developer</p>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-2.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Franz Kafka</a></h3>
                        <p class="role">CTO</p>
                    </div>
                    <!-- /.team-member -->
                </div>
                <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                    <div class="team-member">
                        <div class="image">
                            <a href="team-member.html">
                                <img src={{asset('img/person-3.jpg')}} alt="" class="img-responsive img-circle">
                            </a>
                        </div>
                        <h3><a href="team-member.html">Gregor Samsa</a></h3>
                        <p class="role">CTO</p>
                    </div>
                    <!-- /.team-member -->
                </div>
            </div>
            <!-- /.row -->

        </section>

    </div>
    <!-- /.container -->

    <section class="bar background-gray no-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>What our customers say</h2>
                    </div>

                    <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>


                    <!-- *** TESTIMONIALS CAROUSEL ***
_________________________________________________________ -->

                    <ul class="owl-carousel testimonials same-height-row">
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown
                                        belly, slightly domed and divided by arches into stiff sections.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="img/person-1.jpg">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened
                                        to me? " he thought. It wasn't a dream.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="img/person-2.jpg">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

                                    <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice,
                                        gilded frame.</p>
                                </div>
                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="img/person-3.png">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull
                                        weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                                </div>

                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="img/person-4.jpg">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="testimonial same-height-always">
                                <div class="text">
                                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull
                                        weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which
                                        made him feel quite sad.</p>
                                </div>

                                <div class="bottom">
                                    <div class="icon"><i class="fa fa-quote-left"></i>
                                    </div>
                                    <div class="name-picture">
                                        <img class="" alt="" src="img/person-4.jpg">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- /.owl-carousel -->

                    <!-- *** TESTIMONIALS CAROUSEL END *** -->
                </div>

            </div>
        </div>
    </section>
    <!-- /.bar -->

</div>
<!-- /#content -->

<!-- *** GET IT ***
_________________________________________________________ -->

<div id="get-it">
    <div class="container">
        <div class="col-md-8 col-sm-12">
            <h3>Do you want cool website like this one?</h3>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
        </div>
    </div>
</div>


<!-- *** GET IT END *** -->


<!-- *** FOOTER ***
_________________________________________________________ -->


@endsection
