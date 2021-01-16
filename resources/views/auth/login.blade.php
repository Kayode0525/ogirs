@extends('layouts.front')


@section('headlinks')
   

@endsection

@section('content')
<div class="card-body py-0" style=" background-color:white; margin-bottom:10px; margin-top:70px">
    <div class="row" style="justify-content:center; ">
        <div class="col-xl-4 col-lg-6 col-md-9 col-sm-6" style="margin-top: 30px; margin-bottom:30px">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <div class="align-items-center mb-7 ">
                            <h3
                                class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                Welcome!</h3>
                            <span class="text-muted font-weight-bold font-size-sm">No Login
                                Details?
                                <a href="{{ route('tin_home') }}" id="kt_login_signup"
                                    class="text-primary font-weight-bolder">Create an
                                    Account</a></span>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="userName">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label class="text-dark" for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="row"></div>
@include('includes.faq')

<!--end::Row-->

				                                       
 @endsection