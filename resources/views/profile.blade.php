@extends('layouts.master')


@section('headlinks')
   

@endsection

@section('content')


		<!--begin::Content-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="min-width: 850px;">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
						
							<!--begin::Container-->
							<div class="container">

						
								
								<!--begin::Card-->
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Personal Record</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" id="kt_form_1" method="post" action="{{ route('update_profile') }}">
											@csrf
												<div class="card-body">
												@include("includes.alert.alert")
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Name</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" readonly class="form-control" value="{{$tax_agent->name}}" name="name"  />
															</div>
															<span class="form-text text-muted">Please enter your Name</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Phone Number</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" class="form-control" value="{{$tax_agent->phone_number}}" name="phone_number"  />
															</div>
															<span class="form-text text-muted">Please enter your Phone Number</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Email</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon-price-tag"></i>
																	</span>
																</div>
																<input type="email" class="form-control" value="{{$tax_agent->email}}" name="email" placeholder="Enter card number" />
															</div>
															<span class="form-text text-muted">Please enter your Email</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Address</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" class="form-control" value="{{$tax_agent->office_address}}" name="office_address"  />
															</div>
															<span class="form-text text-muted">Please enter your Address</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">City</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" class="form-control" value="{{$tax_agent->city}}" name="city"  />
															</div>
															<span class="form-text text-muted">Please enter your City</span>
														</div>
													</div>													
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Tax Identification Number</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" readonly class="form-control" value="{{$tax_agent->tax_identification_id}}" name="tax_identification_id"  />
															</div>
															<span class="form-text text-muted">Please enter your Tax Identification Number</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Reference Number</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" readonly class="form-control" value="{{$tax_agent->reference_number}}" name="reference_number" placeholder="Enter your Address" />
															</div>
															<span class="form-text text-muted">Please enter your Reference Number</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Company Reg Number</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="text" readonly class="form-control" value="{{$tax_agent->company_reg_number}}" name="company_reg_number" placeholder="Enter your Address" />
															</div>
															<span class="form-text text-muted">Please enter your Company Reg Number</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Tax Station</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<select  class="form-control" name="tax_station_id"  id="contract_category">

																	@foreach($tax_stations as $tax_station)

																	<option value="{{$tax_station->id}}">{{$tax_station->description}}</option>

																	@endforeach
																</select>
															</div>
															<span class="form-text text-muted">Please enter your Tax Station</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Business Type</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<select  class="form-control" name="business_type_id"  id="contract_category">
																	

																	@foreach($business_types as $business_type)

																	<option value="{{$business_type->id}}">{{$business_type->description}}</option>

																	@endforeach
																</select>
															</div>
															<span class="form-text text-muted">Please enter your Business Type</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Registration Date</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="flaticon2-website"></i>
																	</span>
																</div>
																<input type="date" class="form-control" value="{{$tax_agent->registration_date}}" name="registration_date" placeholder="Enter your Address" />
															</div>
															<span class="form-text text-muted">Please enter your Registration Date</span>
														</div>
													</div>
													
								
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-9 ml-lg-auto">
															<button type="submit" class="btn btn-primary font-weight-bold mr-2" >Save Record</button>
															<button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
                                    </div>
                                    
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->			                                       
 @endsection