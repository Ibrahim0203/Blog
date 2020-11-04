@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Edit site settings.
      </div>
   <div class="card-body">
      <form action="{{ route('settings.update') }}" method="post">
         {{ csrf_field() }}
         
     <div class="text-center">
     <div class="form-group">
      <label for="name">Site name</label>
         <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
      </div>
     </div>

     <div class="text-center">
     <div class="form-group">
      <label for="name">Contact Number</label>
         <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
      </div>
     </div>
       
     <div class="text-center">
     <div class="form-group">
      <label for="name">Contact Email</label>
         <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
      </div>
     </div>
       
     <div class="text-center">
     <div class="form-group">
      <label for="name">Address</label>
         <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
      </div>
     </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post" type="submit">
                 Update Settings
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop