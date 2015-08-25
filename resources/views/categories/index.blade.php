@extends('layout')

@section('content')

    <h1>Service Categories</h1>
    <hr>
    @if(sizeof($categories) > 0)
        @foreach($categories as  $category)
            <div>
                <h4><a href="categories_web/{{$category->id}}"> {{$category->name}} </a></h4>
            </div>

            <hr>
        @endforeach
    @endif

@endsection