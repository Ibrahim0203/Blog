@extends('layouts.app')

@section('content')
   
@include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Update category
      </div>
   <div class="card-body">
      <form action="{{route('categories.update',['id'=>$category->id])}}" method="POST">
         @csrf
     
         
           
        <div class="text-center">
         <div class="form-group">
           <label for="category">Name</label>
             <input class="form-control" type="text" id="name" name="name" value="{{$category->name}}">
            </div>
         </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" type="submit">
                 Update Category
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop