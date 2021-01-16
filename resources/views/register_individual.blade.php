@extends('layouts.front.front')


@section('headlinks')
   
<!--begin::Page Custom Styles(used by this page)-->
<link href="{{ asset('frontend/assets/css/pages/wizard/wizard-4d1cf.css?v=7.1.6')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
@endsection

@section('content')


								<!--begin::Card-->
								<div class="card card-custom card-transparent">
									<div class="card-body p-9">
										<!--begin::Wizard-->
										<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin::Wizard Nav-->
											<div class="wizard-nav">
												<div class="wizard-steps">
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-wrapper">
															<div class="wizard-number">1</div>
															<div class="wizard-label">
																<div class="wizard-title">Profile</div>
																<div class="wizard-desc">User's Personal Information</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">2</div>
															<div class="wizard-label">
																<div class="wizard-title">Business Info</div>
																<div class="wizard-desc">User's Account &amp; Settings</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">3</div>
															<div class="wizard-label">
																<div class="wizard-title">Company Info</div>
																<div class="wizard-desc">User's Shipping Address</div>
															</div>
														</div>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">4</div>
															<div class="wizard-label">
																<div class="wizard-title">Submission</div>
																<div class="wizard-desc">Review and Submit</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end::Wizard Nav-->
											<!--begin::Card-->
											<div class="card card-custom card-shadowless rounded-top-0">
												<!--begin::Body-->
												<div class="card-body p-0">
													<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
														<div class="col-xl-12 col-xxl-10">
															<!--begin::Wizard Form-->
															<form class="form" id="kt_form" method="post" action="{{ route('create_tax_payer') }}">
															@csrf
																<div class="row justify-content-center">
																	<div class="col-xl-9">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<h5 class="text-dark font-weight-bold mb-10">Personal Details:</h5>

																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" required  name="firstname" type="text" value="" />
																					<!-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
																				</div>
																			</div>
                                                                            
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="lastname" required  type="text" value="" />
																					<!-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Other Names</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" required  name="othername" type="text" value="" />
																					<!-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
																				</div>
																			</div>
																			<!--end::Group-->
                                                                            <div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Email</label>
																				<div class="col-xl-9 col-lg-9">
																					<input class="form-control form-control-solid form-control-lg"required  type="email"name="email">
																				</div>
																			</div>
																			<!-- <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label"> Address</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="address" type="text" value="" />
																				</div>
																			</div> -->

																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">City</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg"required  name="city" type="text" value="" />
																				</div>
																			</div>
																			
																			
																		</div>
																		<!--end::Wizard Step 1-->
																		<!--begin::Wizard Step 2-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="text-dark font-weight-bold mb-10 mt-5">User's Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Phone Number</label>
																				<div class="col-xl-9 col-lg-9">
																					<input class="form-control form-control-solid form-control-lg" required  type="number"name="phone_number">
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Address</label>
																				<div class="col-xl-9 col-lg-9">
																					<input class="form-control form-control-solid form-control-lg" required  type="text"name="address">
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Date Of Birth</label>
																				<div class="col-xl-9 col-lg-9">
																					<input class="form-control form-control-solid form-control-lg" required  type="date" name="dob">
																				</div>
																			</div>

																			

																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Gender</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="sex"  id="contract_category">
                                                                                        <option value="male">Male</option>
                                                                                        <option value="female">Female</option>
																					</select>
																				</div>
																			</div>

																			<!-- <div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Bussiness Category</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="business_category"  id="contract_category">
																							<option value="import">Import</option>
																							<option value="export">Export</option>
																							<option value="shipping">Shipping</option>
																							<option value="perishable">Perishable</option>
																							<option value="cash crop">Cash Crop</option>
																					</select>
																				</div>
																			</div> -->
																			<!--end::Group-->
																			<!--begin::Group-->
																			
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Communication</label>
																				<div class="col-xl-9 col-lg-9 col-form-label">
																					<div class="checkbox-inline">
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Email</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>SMS</label>
																						<label class="checkbox">
																						<input name="communication" type="checkbox" />
																						<span></span>Phone</label>
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!-- <div class="separator separator-dashed my-10"></div>
																			<h5 class="text-dark font-weight-bold mb-10">User's Account Settings</h5> -->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Login verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
																					<div class="form-text text-muted mt-3">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised. 
																					<a href="#">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Password reset verification</label>
																				<div class="col-xl-9 col-lg-9">
																					<div class="checkbox-inline">
																						<label class="checkbox mb-2">
																						<input type="checkbox" />
																						<span></span>Require personal information to reset your password.</label>
																					</div>
																					<div class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password. 
																					<a href="#" class="font-weight-bold">Learn more</a>.</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row mt-10">
																				<label class="col-xl-3 col-lg-3"></label>
																				<div class="col-xl-9 col-lg-9">
																					<button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
																				</div>
																			</div>
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 2-->
																		<!--begin::Wizard Step 3-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">More Info</h5>

                                                                            <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Occupation</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<!-- <div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-at"></i>
																							</span>
																						</div> -->
																						<input type="text" class="form-control form-control-solid form-control-lg" required  name="occupation" value="" />
																					</div>
																				</div>
																			</div>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Marital Status</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
                                                                                        <select  class="form-control" name="marital_status"  >
                                                                                            <option value="single">Single</option>
                                                                                            <option value="married">Married</option>
                                                                                            <option value="divorced">Divorced</option>
                                                                                       </select>
																					</div>
																				</div>
																			</div>

																			<!-- <div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Tax Station</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="tax_agent_id"  id="contract_category">
																						@foreach($tax_agents as $tax_agent)
																							<option value="{{$tax_agent->id}}">{{$tax_agent->name}}</option>
																						@endforeach
																					</select>
																				</div>
																			</div> -->
                                                                            
                                                                            <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Registration Code Type</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<!-- <div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-at"></i>
																							</span>
																						</div> -->
																						<input type="text" class="form-control form-control-solid form-control-lg" required  name="reg_type_code" value="" />
																					</div>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<!-- <div class="form-group">
																				<label>Reference Number</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" name="reference_number" placeholder=""  />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div> -->

																			<!-- <div class="form-group">
																				<label>Registration Date</label>
																				<input type="date" class="form-control form-control-solid form-control-lg" name="registration_date" placeholder=""  />
																				<span class="form-text text-muted">Please enter your Address.</span>
																			</div> -->
																			
																		</div>
																		<!--end::Wizard Step 3-->
																		<!--begin::Wizard Step 4-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h5>
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Account Details:</div>
																				<div class="line-height-xl">John Wick 
																				<br />Phone: +61412345678 
																				<br />Email: johnwick@reeves.com</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div class="border-bottom mb-5 pb-5">
																				<div class="font-weight-bolder mb-3">Your Address Details:</div>
																				<div class="line-height-xl">Address Line 1 
																				<br />Address Line 2 
																				<br />Melbourne 3000, VIC, Australia</div>
																			</div>
																			<!--end::Item-->
																			<!--begin::Item-->
																			<div>
																				<div class="font-weight-bolder">Payment Details:</div>
																				<div class="line-height-xl">Card Number: xxxx xxxx xxxx 1111 
																				<br />Card Name: John Wick 
																				<br />Card Expiry: 01/21</div>
																			</div>
																			<!--end::Item-->
																		</div>
																		<!--end::Wizard Step 4-->
																		<!--begin::Wizard Actions-->
																		<div class="d-flex justify-content-between border-top pt-10 mt-15">
																			<div class="mr-2">
																				<button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Previous</button>
																			</div>
																			<div>
																				<button type="submit" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
																				<button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Next</button>
																			</div>
																		</div>
																		<!--end::Wizard Actions-->
																	</div>
																</div>
															</form>
															<!--end::Wizard Form-->
														</div>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Wizard-->
									</div>
								</div>
								<!--end::Card-->
							 
 @endsection

 @section('scripts')

 <!--begin::Page Scripts(used by this page)-->
 <script src="{{ asset('frontend/assets/js/pages/custom/user/add-userd1cf.js?v=7.1.6')}}"></script>
        <!--end::Page Scripts-->
        
        @endsection