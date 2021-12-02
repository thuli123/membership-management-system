@extends('layouts.AddUser')

@section('title')
Dashbord
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
                <a href="{{ route('user.Datatable') }}">Detalis</a>
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

<div id="auth">
        
    <div class="content">

<div class="row">
    <div class="col-md-4 offset-md-4" style="margin: 45px;">
          <h4>Add User</h4><hr>
          <form action="{{ route('user.create') }}" method="post" autocomplete="off">
            @if (Session::get('success'))
                 <div class="alert alert-success">
                     {{ Session::get('success') }}
                 </div>
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif

            @csrf
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                  <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
            </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add User</button>
              </div>
              <br>
              <a href="{{ route('user.login') }}">I already have an account</a>
          </form>
    </div>
</div>
<div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')
@endsection