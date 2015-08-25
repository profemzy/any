@extends('app')

@section('content')

   <h1>Service Providers</h1>
   <hr>
   @if(sizeof($companies) > 0)
         @foreach($companies as  $company)
               <div>
                  <h4><a href="/validated/departments/edit-department/"><label for="">Name: </label>  {{$company->name}} </a></h4>
                  <p><label for="">Information: </label>{{$company->information}}</p>
               </div>

               <hr>
        @endforeach
   @endif
@endsection