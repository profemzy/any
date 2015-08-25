@extends('layout')

@section('content')

<section class="slice bg-3">
    <div class="w-section inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Sign up  to make booking or Create Business Profile</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                    <div class="w-section inverse">
                        <div class="w-box sign-in-wr bg-5">

                            <div class="form-header">
                                <h2>Create an account</h2>
                            </div>
                            <div class="form-body">

                                <form class="form-light padding-15" method="post" action="/auth/register">

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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userName">Username</label>
                                                <input name="username" type="text" class="form-control" id="userName" placeholder="" value="{{ old('username') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="txtEmail" placeholder="" value="{{ old('email') }}">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass">Password</label>
                                                <input name="password" type="password" class="form-control" id="pass" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass2">Confirm password</label>
                                                <input name="password_confirmation" type="password" class="form-control" id="pass2" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!--                                        <div class="col-md-6">-->
                                        <!--                                            <label class="checkbox persistent"><input type="checkbox"> I accept the <a href="terms.html">terms and conditions of this website.</a></label>-->
                                        <!--                                        </div>-->
                                        <div class="col-md-6">
                                            <button class="btn btn-two pull-right" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="form-footer">
                                <p>Already have an account? <a href="sign-in.php">Click here to sign in.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection