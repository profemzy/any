@extends('layout')

@section('content')

    <h1>Clients Testimonials</h1>
    <hr>

    <a class="btn btn-default" href="/create_testimonial">Create Testimonial</a>
    <br>
    <br>

    @if(sizeof($testimonials) > 0)
        @foreach($testimonials as  $testimonial)
            <div>
                <h4> {{$testimonial->user->profile->surname}}  {{$testimonial->user->profile->other_names}}</h4>
                <p>{{$testimonial->details}}</p>
            </div>
            <hr>
        @endforeach
    @endif

@endsection