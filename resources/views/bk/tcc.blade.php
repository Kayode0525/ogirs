@extends('layouts.front.master')


@section('headlinks')
   

@endsection

@section('content')

		<!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8" style="min-width: 800px;">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Tax Clearance Certificate Application</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Kindly fill the form below to apply for tax clearance certificate</span>
												</div>
												
                                            </div>
                                            
                                            @include("includes.alert.alert")

											<!--begin::Form-->
											<form class="form-horizontal" id="frm_main" method="post" action="{{ route('create_tcc') }}">
									@csrf
												<div class="card-body">
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Transaction Date:</label>
														<div class="col-lg-6">
															<input type="date" class="form-control" placeholder="Enter full name" name="application_date" />
															<span class="form-text text-muted">Please enter the date</span>
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Description:</label>
														<div class="col-lg-6">
															<textarea class="form-control" id="exampleTextarea" name="description" rows="3" placeholder="Please enter your message"></textarea>
															<span class="form-text text-muted">We'll never share your message with anyone else.</span>
														</div>
													</div>
													
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary">Submit</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
							
										</div>
									
									</div>
								                      
 @endsection

 @section('scripts')

 <!--begin::Page Scripts(used by this page)-->
 <script src="{{ asset('frontend/assets/js/pages/crud/file-upload/dropzonejsd1cf.js?v=7.1.6')}}"></script>
        <!--end::Page Scripts-->
 @endsection