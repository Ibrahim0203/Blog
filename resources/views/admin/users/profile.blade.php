@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Edit user profile
      </div>
   <div class="card-body">
      <form action="{{ route('user.profile.update') }}"
       method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
      
         
     <div class="text-center">
     <div class="form-group">
      <label for="name">Username</label>
         <input type="text" name="name" value="{{$user->name}}" class="form-control">
      </div>
     </div>

               
     <div class="text-center">
     <div class="form-group">
      <label for="name">Email</label>
         <input type="email" name="email" value="{{$user->email}}" class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="password">New Password</label>
         <input type="password" name="password" class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="name">Upload New Avatar</label>
         <input type="file" name="avatar" class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="facebook">Facebook Profile</label>
         <input type="text" name="facebook"  class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="name">Youtube Profile</label>
         <input type="text" name="youtube"  class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="about">About you</label>
         <textarea name="about" id="about" cols="6" rows="6" class="form-control"></textarea>
      </div>
     </div>
       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post" type="submit">
                 Update Profile
               </button>           
              </div>
         </div>
      </form>
   </div>
   

   </div>

@stop