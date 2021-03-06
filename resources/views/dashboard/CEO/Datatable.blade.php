@extends('layouts.Datatable')

@section('title')
Dashbord
@endsection

@section('sidebar-menu')
<ul class="menu">
    <li class="sidebar-title">Menu</li>
    
    <li
        class="sidebar-item  ">
        <a href="{{ route('CEO.home') }}" class='sidebar-link'>
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
                <a href="{{ route('CEO.Datatable') }}">Detais</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('CEO.AddUser') }}">Add User</a>
            </li>
            <li class="submenu-item ">
            
                <a href="{{ route('CEO.PostAdd') }}">Add Post</a>
            </li>
            <li class="submenu-item ">
            
                <a href="{{ route('CEO.PostList') }}">Post List</a>
            </li>
        </ul>
    </li>
    



   
    
   
    
  
   
   
    
    
    
</ul>
@endsection

@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-content">
                    <div class="card-body">
                       
                    </div>




                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                
                                
                                    
                                    <th>EMAIL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">{{ Auth::guard('CEO')->user()->name }}</td>
                                    <td>{{ Auth::guard('CEO')->user()->email }}</td>
                                
                                    <td>
                                        <a href="{{ route('CEO.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form action="{{ route('CEO.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                    </td>
                                    
                                    
                                </tr>
                                
                              
                              
                            </tbody>
                        </table>
                    </div>







                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection