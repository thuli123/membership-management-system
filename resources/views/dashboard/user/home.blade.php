@extends('layouts.master')

@section('title')
Dashbord
@endsection
@section('sidebar-menu')
<ul class="menu">
    <li class="sidebar-title">Menu</li>
    
    <li
        class="sidebar-item active ">
        <a href="{{ route('user.home') }}" class='sidebar-link'>
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
                <a href="{{ route('user.Datatable') }}">Details</a>
              
            </li>
            <li class="submenu-item ">
                <a href="{{ route('user.AddUser') }}">Add User</a>
            </li>
        <!--    <li class="submenu-item ">
                <a href="table-datatable-jquery.html">Datatable (ry)</a>
            </li>
        </ul>
    </li> -->
    

    
   
   
 
    
 
    
   
   

 
    
    
    
    
    
</ul>
@endsection

@section('scripts')
@endsection