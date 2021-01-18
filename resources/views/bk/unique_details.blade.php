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
				<form class="form" id="kt_form_1" method="post" action="{{ route('update_email_phone') }}">
				@csrf
					<div class="align-items-center mb-7 ">
						<h3
							class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
							Complete Details!</h3>
						
					</div>
					<div class="form-group">
						<label for="userName">Phone Numer</label>
						<input type="text" class="form-control" name="phone_number"
							id="phone_number" />
					</div>

					<div class="form-group">
						<label for="password">Email</label>
						<input type="email" class="form-control" name="email"
							id="email" />
					</div>
					<div class="text-left">
					<button type="submit" class="btn btn-primary font-weight-bold mr-2" >Submit</button>
						
						</div>
						
						</form>
				</div>
				<!--end::Body-->
			</div>
        </div>
    </div>
</div>

<div class="row"></div>
@include('includes.faq')
				                                       
 @endsection