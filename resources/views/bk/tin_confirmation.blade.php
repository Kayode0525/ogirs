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
				@include("includes.alert.alert")
					<form class="form" id="kt_form_1" method="post" action="{{ route('tax_identification_verify_home') }}">
					@csrf
						<div class="align-items-center mb-7 ">
							<h3
								class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
								TIN Verification!</h3>
							
						</div>
						<div class="form-group">
							<label for="userName">TIN</label>
							<input type="text" class="form-control" name="id"
								id="id" />
						</div>

						
						<div class="text-right">
							<button type="submit" class="btn btn-primary btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4" >Submit</button>
							
						</div>

						<div class="align-items-center mb-7" style="margin-top:15px;">

						
							<p class=" text-dark  ">If You Don't Remember Your <b>TIN</b>  , Kindly Contact OGIRS Management</p>
							
						</div>

						
						
					</form>

				</div>
				<!--end::Body-->
			</div>
        </div>
		
    </div>
</div>

@include('includes.faq')
				
				                                       
 @endsection