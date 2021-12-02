@extends('layouts.post-list')

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

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-content">
                    <div class="card-body">
                       
                    </div>




                    <!-- table hover -->
                    <div class="table-responsive">
                        @if (Session::has('post_delete'))
                      <span>{{Session::get('post_delete')}}</span> 
                        @endif
<a href="{{route('post.add')}}">Add Post</a>
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                
                                
                                    
                                    <th>Description</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                <tr>
                                    <td class="text-bold-500">{{$post->id}}</td>
                                    
                                    <td>{{$post->name}}</td>
                                    <td>{{$post->description}}</td>
                                      <td>
                                          <a href="/edit-post/{{$post->id}}"> <button type="button" class="btn btn-info">Edit</button> </a>
                                          <a href="/delete-post/{{$post->id}}"> <button type="button" class="btn btn-danger">Delete</button>  </a>
                                        
                                    
                                </tr>
                                
                              
                                @endforeach
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