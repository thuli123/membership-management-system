@extends('layouts.login')

@section('title')
login
@endsection

@section('row h-100')
<div class="col-lg-5 col-12">
    <div id="auth-left">
        <div class="auth-logo">
            <a href="index.html"><img src="../assets/images/logo/logo.png" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Log in.</h1>
        <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

        <form action="{{ route('RegistrationsAdmin.check') }}" method="POST">
            @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" class="form-control form-control-xl"name ="email" placeholder="Enter Email">
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control form-control-xl" name="password"placeholder="Password">
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-check form-check-lg d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                    Keep me logged in
                </label>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
        </form>



        <div class="text-center mt-5 text-lg fs-4">
            
                    
            <p><a class="font-bold" href="{{ route('RegistrationsAdmin.ForgotPassword') }}">Forgot password?</a>.</p>
        </div>
    </div>
</div>


@endsection

