@extends('layout')

@section('content')


<section class="slice bg-3">
    <div class="w-section inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="w-section inverse">
                        <div class="w-box sign-in-wr bg-5">

                            <div class="form-header">
                                <h2>Please, sign in to your account</h2>

                            </div>
                            <div class="form-body">
                                <form action="/auth/login" method="post" role="form" class="form-light padding-15">

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
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" id="txtEmail" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control" id="txtPassword" placeholder="">
                                    </div>

                                    <div class="row">
                                        <!--                                        <div class="col-md-6">-->
                                        <!--                                            <label class="checkbox"><input type="checkbox"> Remember me</label>-->
                                        <!--                                        </div>-->
                                        <div class="col-md-6">
                                            <button type="submit" name="submit" class="btn btn-two pull-right">Sign In</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!--                            <div class="form-footer">-->
                            <!--                                <p>Lost your password? <a href="#">Click here to recover.</a></p>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection