@extends('layout')


@section('content')

<div class="pg-opt pin">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2>About us</h2>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">About us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p>AnyWork Naija is an indigenous company with an international concept of ensuring that services are constantly available to our clients when needed, we go the extra mile to ensure absolute satisfaction of our clients.</p>
                        <ul class="list-check">
                            <li><i class="fa fa-check"></i> Technical Support</li>
                            <li><i class="fa fa-check"></i> Domestic Support</li>
                            <li><i class="fa fa-check"></i> Event Support</li>
                            <li><i class="fa fa-check"></i> Special Support</li>
                        </ul>
                        <p>Make a booking today and we'll be right there</p>
                    </div>
                    <div class="col-md-5">
                        <!--                    <div class="w-box w-box-inverse">-->
                        <!--                        <iframe src="http://player.vimeo.com/video/22439234" height="258"></iframe>-->
                        <!--                    </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slice bg-5">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="section-title">Our skills</h3>
                        <!--                    <p>-->
                        <!--                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.-->
                        <!--                    </p>-->
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">Electrical/Electronics Engineering</span>
                            </div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="sr-only">Information Technology</span>
                            </div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">Management</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="section-title">Unique services</h3>
                        <p>
                            We go an extra mile to get professionals to handle chores you might have issues with, and satisfaction is guaranteed.
                        </p>
                        <ul class="list-check">
                            <li><i class="fa fa-check"></i> Do you have pluming issues?</li>
                            <li><i class="fa fa-check"></i> Do you have electrical wiring issues?</li>
                            <li><i class="fa fa-check"></i> Do you need to fix your computers or Internet connectivity?</li>
                            <li><i class="fa fa-check"></i> Do you need auto-mechanics to fix your vehicles?</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="section-title">Why choose us</h3>
                        <ul class="bullet">
                            <li>
                                <figure>1</figure>
                                <p>We render our services like no one else does.</p>
                            </li>
                            <li>
                                <figure>2</figure>
                                <p>We have a range of professionals at our disposal to serve you.</p>
                            </li>
                            <li>
                                <figure>3</figure>
                                <p>Our Services are affordable and meet up to standard.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection