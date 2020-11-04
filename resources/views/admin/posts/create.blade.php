@extends('layouts.app')

@section('content')
     
   @include('admin.includes.errors')   
   
   
   
   <div class="card card-default">
   <div class="card-header">
         Create new application.
      </div>
   <div class="card-body">
      <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         
         <div class="form-group">
         <label for="title">Name</label>
         <input type="text" name="title" class="form-control">
         </div>

         <div class="form-group">
         <label for="featured">Featured image</label>
         <input type="file" name="featured" class="form-control">
         </div>
         
         <div class="form-group">
           <label for="category">Select a category</label>
           <select name="category_id" id="category" class="form-control">

           @foreach($categories as $category)
             <option value="{{$category->id}}"> {{$category->name}} </option>
           @endforeach

           </select>
         </div>

          <div class="form-group">
             <label for="tags">Select Tags</label>
             @foreach($tags as $tag)
                <div class="checkbox">
                   <label>
                      <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                         {{$tag->tag}}
                   </label>
                </div>
             @endforeach
          </div>

         <div class="form-group">
         <label for="content">Content</label>
         <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
         </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post">
                 Store Post
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop

@section('styles')
  
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@stop

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
@stop