@extends('layout')

@section('content')

    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Give a Feedback</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">

                                <div class="form-header">
                                    <h2>Enter Details</h2>
                                </div>
                                <div class="form-body">

                                    <form class="form-light padding-15" method="post" action="/create_testimonial">

                                        {!! csrf_field()  !!}

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                <strong>Great!</strong> {{Session::get('success')}}<br><br>
                                            </div>
                                        @endif


                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea  name="details" class="form-control" id="details"></textarea>
                                        </div>


                                        <div class="form-group">
                                            <input name="user_id" type="hidden" class="form-control" id="user" readonly value="{{ $user->id }}">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-two pull-right" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="form-footer">
                                    <p>Want to return categories? <a href="/categories_web">Click here.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection