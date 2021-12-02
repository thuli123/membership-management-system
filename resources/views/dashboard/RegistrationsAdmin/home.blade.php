@extends('layouts.master')

@section('title')
Dashbord
@endsection
@section('sidebar-menu')
<ul class="menu">
    <li class="sidebar-title">Menu</li>
    
    <li
        class="sidebar-item active ">
        <a href="{{ route('RegistrationsAdmin.home') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
  
    
    
    
 
 
    
   
    
    <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
            <span>User Management</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ route('RegistrationsAdmin.Datatable') }}">Details</a>
              
            </li>
            <li class="submenu-item ">
                <a href="{{ route('RegistrationsAdmin.AddUser') }}">Add User</a>
            </li>
            <li class="submenu-item ">
            
                <a href="{{ route('RegistrationsAdmin.PostAdd') }}">Add Post</a>
            </li>
            <li class="submenu-item ">
            
                <a href="{{ route('RegistrationsAdmin.PostList') }}">Post List</a>
            </li>
        <!--    <li class="submenu-item ">
                <a href="table-datatable-jquery.html">Datatable (ry)</a>
            </li>
        </ul>
    </li>
-->

    
   
   
 
    
 
    
   
   

 
    
    
    
    
    
</ul>
@endsection
@section('scripts')
@endsection