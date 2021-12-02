@extends('layouts.edit-post')

@section('title')
Add Postz
@endsection
@section('sidebar-menu')
<ul class="menu">
    <li class="sidebar-title">Menu</li>
    
    <li
        class="sidebar-item  ">
        <a href="{{ route('user.home') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    
    
   
    
   






    <li
        class="sidebar-item active has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
            <span>User Management</span>
        </a>
        <ul class="submenu active">
            <li class="submenu-item active">
                <a href="{{ route('user.Datatable') }}">Detais</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('user.AddUser') }}">Add User</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('post.add') }}">Add Post</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('post.list') }}">Post List</a>
            </li>
        </ul>
    </li>
    



   
    
   
    
  
   
   
    
    
    
</ul>
@endsection
@section('content')
@if (Session::has('post_update'))
   <span>{{Session::get('post_update')}}</span> 
@endif
<form method="post" action="{{route('update.post')}}">

    @csrf
    <input type="hidden"name="id" value="{{$post->id}}">
    Post : <br> <input type="text" name="name"value="{{$post->name}}"> <br>
    Description : <br><textarea name="description">{{$post->description}}</textarea> <br>
        <!-- <input type="submit"value ="Submit">-->
        <button type="submit"value ="Submit" class="btn btn-secondary">Update</button>
  
     </form>

     @endsection 