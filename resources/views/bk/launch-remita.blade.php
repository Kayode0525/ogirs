@extends('layouts.front.master')


@section('headlinks')
   
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

		<!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Launch Remita Payment Platform</h3>
												
												</div>

                                                   <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                <div style="padding: 20px;">
							Redirecting to Remita...
							<span>If you don't get redirected in 10 seconds,
							<a href="#" id="#forceRedirect">click here</a></span>
						</div>
						<form action="{{ $payment_url }}" method="POST" id="redirectForm">
							@csrf
							<input id="merchantId" name="merchantId" value="{{ $merchantID }}" type="hidden"/>
							<input id="rrr" name="rrr" value="{{ $rrr }}" type="hidden"/>
							<input id="responseurl" name="responseurl" value="{{ $responseURL }}" type="hidden"/>
							<input id="hash" name="hash" value="{{ $hash }}" type="hidden"/>
							<!-- <button type="submit" class="btn btn-sm btn-primary" name="submit" value="Submit"> Submit </button>  -->
						</form>
                </div>
            </div>
        </div>
												
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											
                </div>
											</div>
													
												
													
													
												                       
 @endsection


 

@section("scripts")
	{{--<script src="https://code.jquery.com/jquery-3.4.1.min.js"--}}
			{{--integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="--}}
			{{--crossorigin="anonymous"></script>--}}
	<script type="text/javascript">
		const $form = $("#redirectForm");

		$(document).ready(function(){
			console.log($form)
			$form.submit();
		});

		$("#forceRedirect").on("click", function () {
			console.log($form)
			$form.submit();
		})
	</script>
@endsection