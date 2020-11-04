@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Create new user.
      </div>
   <div class="card-body">
      <form action="{{ route('user.store') }}" method="post">
         {{ csrf_field() }}
         
     <div class="text-center">
     <div class="form-group">
      <label for="name">Name</label>
         <input type="text" name="name" class="form-control">
      </div>
     </div>

               
     <div class="text-center">
     <div class="form-group">
      <label for="name">Email</label>
         <input type="email" name="email" class="form-control">
      </div>
     </div>
       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post" type="submit">
                 Add User
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop