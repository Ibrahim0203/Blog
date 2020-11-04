@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Create new tag.
      </div>
   <div class="card-body">
      <form action="{{ route('tag.store') }}" method="post">
         {{ csrf_field() }}
         
     <div class="text-center">
     <div class="form-group">
      <label for="name">Tag</label>
         <input type="text" name="tag" class="form-control">
      </div>
     </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post" type="submit">
                 Store tag
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop