@extends('layout')

@section('content')

    @if($category)
        <h2>{{$category->name}} Services</h2>

        <hr>

        <div>
            @if(sizeof($category_company) > 0)
                        @foreach($category_company as $company)
                            <div>
                                <h4>Name:  {{$company->name}} </h4>
                                <p><strong>Information:</strong>  {{$company->information}}</p>
                            </div>
                            <hr>
                        @endforeach
            @else
                <h4>No companies listed in this category</h4>
                <br>
                <br>
                <br>

            @endif


                <div class="btn-toolbar " role="toolbar" aria-label="...">
                    <div class="btn-group" role="group">
                        <a class="btn btn-success btn-group-sm" href="/companies_web/{{ $category->id }}">Register Company in this Category</a>
                    </div>

                    <div class="btn-group" role="group">
                        <a class="btn btn-success btn-group-sm" href="/categories_web/">Return to Main Category List</a>
                    </div>
                </div>

                <br>
                <br>
                <br>

        </div>

    @endif

@endsection