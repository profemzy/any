@extends('layout')

@section('content')

    <!-- slider section -->
    <section id="slider-wrapper" class="layer-slider-wrapper">
        <div id="layerslider" style="width:100%;height:500px;">
            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                <!-- slide background -->
                <img src="images/slider/fw-1.jpg" class="ls-bg" alt="Slide background"/>

                <!-- Right Image -->
                <img src="images/prv/some.png" class="ls-l" style="top:58%; left:70%;"
                     data-ls="offsetxin:0;offsetyin:250;durationin:950;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;"
                     alt="Image layer">

                <!-- Left Text -->
                <h3 class="ls-l title" style="width:500px; top:25%; left:80px;"
                    data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    Whatever the issues are, let's fix them.</h3>

                <h3 class="ls-l subtitle" style="top:40%; left:80px;"
                    data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    we are just a call away!</h3>

                <p class="ls-l text-standard" style="width:500px; top:55%; left:80px;"
                   data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:2500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    Plumbing issues, domestic wiring issues, car issues, computer issues, or do you need caterers,
                    nannies, house helps, name it! we have got it all covered!
                </p>
                <a href="#" class="btn btn-two btn-lg ls-l" style="top:75%; left:80px;"
                   data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:3500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;"
                   target="_blank">More</a>
            </div>

            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                <!-- slide background -->
                <img src="images/slider/fw-1.jpg" class="ls-bg" alt="Slide background"/>

                <!-- Right Image -->
                <img src="images/prv/some.png" class="ls-l" style="top:48%; left:70%;"
                     data-ls="offsetxin:0;offsetyin:250;durationin:950;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;"
                     alt="Image layer">

                <!-- Left Text -->
                <h3 class="ls-l title" style="width:500px; top:15%; left:80px;"
                    data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    Any Work?</h3>

                <h3 class="ls-l list-item" style="top:28%; left:80px;"
                    data-ls="offsetxin: left; rotatein: 90;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    <i class="fa fa-check-circle-o"></i> Technical Support
                </h3>

                <h3 class="ls-l list-item" style="top:35%; left:80px;"
                    data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:2000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    <i class="fa fa-check-circle-o"></i> Domestic Support
                </h3>

                <h3 class="ls-l list-item" style="top:42%; left:80px;"
                    data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:2500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    <i class="fa fa-check-circle-o"></i> Outdoor Event Support
                </h3>

                <h3 class="ls-l list-item" style="top:49%; left:80px;"
                    data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:3000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    <i class="fa fa-check-circle-o"></i> General Consultancy
                </h3>

                <p class="ls-l text-standard" style="width:500px; top:65%; left:80px;"
                   data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:3500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    AnyWork Naija understands how tight your schedule can be, so we help take away some of the task so you
                    can focus on the major ones. </p>
                <a href="https://wrapbootstrap.com/theme/boomerang-multipurpose-template-WB021609D"
                   class="btn btn-two btn-lg ls-l" style="top:84%; left:80px;"
                   data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:4000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;"
                   target="_blank">Learn more</a>
            </div>
        </div>
    </section>
    <!-- end slider section -->



    <!-- brief about section -->
    <section class="slice bg-5">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="section-title"><span>Our company<span class="border"></span></span></h3>



                        <div class="flexslider">
                            <ul class="slides">

                                <!--<li>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/prv/col-img-4.jpg" alt="" class="img-responsive img-thumbnail" >
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                AnyWork Naija is an indigenous company with an international concept of ensuring
                                                that services are constantly available to our clients when needed.
                                                <br>

                                            </p>
                                        </div>
                                    </div>

                                </li>-->


                                <li>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="image/gen.png" alt="" class="img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                We have just installed a generator for a client on request,  Anywork gets the work done in time you need it.


                                                <br>

                                            </p>
                                        </div>
                                    </div>

                                </li>



                                <li>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="image/tshirt.png" alt="" class="img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                And we just got a customized shirt for this client,Anywork brands you,
                                                we get Anywork done, we are tailored to meet your request.

                                                <br>

                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <!--  <li>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <img src="image/tshirt.png" alt="" class="img-responsive img-thumbnail" width="200px" height="150px">
                                          </div>
                                          <div class="col-md-8">
                                              <p>
                                                  we are working naija AnyWork Naija is an indigenous company with an international concept of ensuring
                                                  that services are constantly available to our clients when needed.

                                                  <br>

                                              </p>
                                          </div>
                                      </div>
                                  </li>-->
                            </ul>
                        </div>




                        <blockquote class="blockquote-1">
                            <p>we go the extra mile to ensure absolute satisfaction of our clients.</p>
                            <small>AnyWork <cite title="Source Title">Naija</cite></small>
                        </blockquote>
                    </div>
                    <div class="col-md-5">
                        <h3 class="section-title">Our expertise</h3>

                        <div class="widget">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                               class="collapsed">
                                                Electrical Engineering
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                Our group of Engineers are ready to render support to you on your
                                                Electrical engineering related projects..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                               class="collapsed">
                                                Information Technology
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                Our group of I.T Experts are ready to render support to you on your I.T
                                                related projects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                               class="">
                                                General Consultancy
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            <p>
                                                Whatever aspects you need a fix or support, we have access to a wide
                                                range of experts to profer solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end brief about section -->













    <!-- brief about section
    <section class="slice bg-5">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="section-title"><span>Our company<span class="border"></span></span></h3>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/prv/col-img-4.jpg" alt="" class="img-responsive img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    AnyWork Naija is an indigenous company with an international concept of ensuring
                                    that services are constantly available to our clients when needed.

                                    <br>

                                </p>
                            </div>
                        </div>
                        <blockquote class="blockquote-1">
                            <p>we go the extra mile to ensure absolute satisfaction of our clients.</p>
                            <small>AnyWork <cite title="Source Title">Naija</cite></small>
                        </blockquote>
                    </div>
                    <div class="col-md-5">
                        <h3 class="section-title">Our expertise</h3>

                        <div class="widget">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                               class="collapsed">
                                                Electrical Engineering
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                Our group of Engineers are ready to render support to you on your
                                                Electrical engineering related projects..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                               class="collapsed">
                                                Information Technology
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                Our group of I.T Experts are ready to render support to you on your I.T
                                                related projects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                               class="">
                                                General Consultancy
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            <p>
                                                Whatever aspects you need a fix or support, we have access to a wide
                                                range of experts to profer solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <end brief about section -->


@endsection