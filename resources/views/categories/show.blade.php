@extends('layout')

@section('content')

   @if($category)
       <h1>{{$category->name}} Services</h1>

       <div>
           <h3>{{$category->name}}</h3>
           <h4>Service Providers</h4>
           @if(sizeof($category_company))
                @foreach($category_company as $company)
                   <div>
                       <h4><a href="/validated/departments/edit-department/"><label for="">Name: </label>  {{$company->name}} </a></h4>
                       <p><label for="">Information: </label>{{$company->information}}</p>
                   </div>
                   <hr>
                @endforeach
           @endif

       </div>

   @endif

@endsection