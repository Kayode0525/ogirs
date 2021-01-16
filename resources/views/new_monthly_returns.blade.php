@extends('layouts.master')


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
													<h3 class="card-label font-weight-bolder text-dark">File Monthly Returns</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Change your email settings</span>
												</div>
												<div class="card-toolbar">
													<a href="/customer/exports/monthly/xlsx"  class="btn btn-success mr-2">Download Excel Template</a>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>

											<!--begin::Row-->
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
											<!-- <div class="card-header">
												<div class="card-title">
													<h3 class="card-label">File Uplaod Example In Form Layout</h3>
												</div>
											</div>  -->
											<!--begin::Form-->
											<form action="{{ route('import_monthly_returns') }}" method="POST" enctype="multipart/form-data">
																@csrf
										
												<div class="card-body">

													@include("includes.alert.alert")
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Filing Month:</label>
														<div class="col-lg-6">
															<input type="date" class="form-control" placeholder="Enter full name" name="transaction_date" />
															<span class="form-text text-muted">Please select the appropriate date in the filling month</span>
														</div>
													</div>
												
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Description:</label>
														<div class="col-lg-6">
															<textarea class="form-control" id="description" rows="3" name="description" placeholder="Please enter your message"></textarea>
															<span class="form-text text-muted">We'll never share your message with anyone else.</span>
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Amount</label>
														<div class="col-lg-6 col-md-6 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text"  class="form-control"  name="amount" placeholder="Enter your Address" />
															</div>
															<span class="form-text text-muted">Please enter your the amount you want to pay</span>
														</div>
													</div>

													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
														<div class="col-lg-6">
														
																<input type="file" name="filess" class="form-control">
																<br>
																<button type ="submit" class="btn btn-success" id="submit-button">Upload Data</button><i id="spinner" style="display: none;" class="fa fa-spinner fa-spin fa-3x"></i>
															
															<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
														</div>
													</div>
												</div>
												
												</form>
										</div>
										<!--end::Card-->
									</div>
								
									<!--end::Card-->
								</div>
							
										</div>
									
									</div>
								                      
 @endsection

 @section('scripts')

 <!--begin::Page Scripts(used by this page)-->
 <script src="{{ asset('frontend/assets/js/pages/crud/file-upload/dropzonejsd1cf.js?v=7.1.6')}}"></script>
        <!--end::Page Scripts-->
 @endsection