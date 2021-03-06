@extends('layouts.app')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Categories
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Category name
                 </th>
                 <th>
                     Editing
                 </th>
                 <th>
                     Deleting
                 </th>
             </thead>

             <tbody>
             @if($categories->count()>0)
                @foreach($categories as $category)
                     <tr>
                         <td>
                             {{$category->name}}
                         </td>
                         <td>
                         <a href="{{route('categories.edit',[$category->id])}}" class="btn btn-xs btn-info">
                                Edit
                             </a>
                         </td>
                         <td>
                       
                             <a href="{{route('categories.delete',[$category->id])}}" class="btn btn-xs btn-danger">
                                Delete
                                <form action="/categories/{{$category->id}}" method="POST">
                             @csrf
                              @method('DELETE')
                              </form>
                             </a>
                             
                         </td>
                         
                     </tr>
                 @endforeach
                @else
                       <tr>
                         <th colspan="5" class="text-center">
                             No categories yet.
                         </th>
                      </tr>

                @endif
             </tbody>
        </table>
     </div>
   </div>
   @stop