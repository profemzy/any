@extends('layout')

@section('content')

    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Create Business Profile</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">

                                <div class="form-header">
                                    <h2>{{$category->name}} Category</h2>
                                </div>
                                <div class="form-body">

                                    <form class="form-light padding-15" method="post" action="companies_web">

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
                                                    <input name="category_id" type="hidden" class="form-control" id="cat_id" placeholder="" readonly value="{{ $category->id }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="" value="{{ old('name') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="info">Information</label>
                                            <textarea name="information" class="form-control" id="info"></textarea>
                                            {{--<input name="information" type="text" class="form-control" id="info" placeholder="" value="{{ old('information') }}">--}}
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="text" class="form-control" id="email" placeholder="" value="{{ old('email') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="info">Year Established</label>
                                            <input name="year_estab" type="date" class="form-control" id="year_estab" placeholder="" value="{{ old('year_estab') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="info">Address</label>
                                            <textarea name="address" class="form-control" id="addy"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input name="user_id" type="hidden" class="form-control" id="user" readonly value="{{ $user->id }}">
                                        </div>




                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-two pull-right" type="submit">Sign Up</button>
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