@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Add new category.
      </div>
   <div class="card-body">
      <form method="POST" action="{{route('categories.index')}}">
         @csrf
         
     <div class="text-center">
     <div class="form-group">
      <label for="name">Name</label>
         <input type="text" name="name" class="form-control">
      </div>
     </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="POST" type="submit">
                 Add category
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop