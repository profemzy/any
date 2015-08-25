@extends('layout')

@section('content')

    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Create Personal Profile</h2>
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

                                    <form class="form-light padding-15" method="post" action="create_profile">

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
                                            <label for="surname">Surname</label>
                                            <input name="surname" type="text" class="form-control" id="surname" placeholder="" value="{{ old('surname') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="other_names">Other Names</label>
                                            <input name="other_names" type="text" class="form-control" id="other_names" placeholder="" value="{{ old('other_names') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="sex">Sex</label>
                                            {{--<input name="sex" type="text" class="form-control" id="sex" placeholder="" value="{{ old('sex') }}">--}}
                                            <select name="sex" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="mobile_no">Mobile Number</label>
                                            <input name="mobile_no" type="text" class="form-control" id="mobile_no" placeholder="" value="{{ old('mobile_no') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="contact_add">Contact Address</label>
                                            <textarea name="contact_add" class="form-control" id="contact_add"></textarea>
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