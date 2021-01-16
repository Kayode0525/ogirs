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
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                  <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        
                        <div class="form-group">
                            <label class="text-dark" for="userName">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                      
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                               
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