@extends('layouts.app')

@section('content')
    <div id="login">
        <div class="logo-login d-flex justify-content-center">
            <img src="/assets/svg/logo.svg" width="300" class="img-fluid">
        </div>        
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{ route('register') }}" method="post" class="justify-content-center">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control " id="name" placeholder="name" name="name">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control " id="username" placeholder="username" name="username">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password"> 
                      <span class="input-group-text" id="showHide">
                        <i class="bi bi-eye"></i>
                      </span>
                    </div>
                    <div class="text-end">
                     <small>Sudah punya akun? <a href="{{ route('login') }}">Login</a></small>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn w-50 btn-login">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection