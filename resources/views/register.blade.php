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
														@include("includes.alert.alert")
															<!--begin::Wizard Form-->
															<form class="form" id="kt_form" method="post" action="{{ route('register_agent') }}">
															@csrf
																<div class="row justify-content-center">
																	<div class="col-xl-9">
																		<!--begin::Wizard Step 1-->
																		<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																			<h5 class="text-dark font-weight-bold mb-10">Company's Profile Details:</h5>
																			
																			<!--begin::Group-->
																			<!-- <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="name" type="text" value="" />
																				</div>
																			</div> -->
																			<!--end::Group-->
																			<!--begin::Group-->
																			<!-- <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="lastname" type="text" value="" />
																				</div>
																			</div> -->
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" name="name" type="text" required />
																					<!-- <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<!-- <div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-phone"></i>
																							</span>
																						</div> -->
																						<input type="number" class="form-control form-control-solid form-control-lg" required  name="phone_number" value="" placeholder="" />
																					</div>
																					<!-- <span class="form-text text-muted">Enter valid US phone number(e.g: 5678967456).</span> -->
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<!-- <div class="input-group-prepend">
																							<span class="input-group-text">
																								<i class="la la-at"></i>
																							</span>
																						</div> -->
																						<input type="email" class="form-control form-control-solid form-control-lg" required  name="email" value="" />
																					</div>
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Office Address</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" required  name="office_address" type="text" value="" />
																				</div>
																			</div>
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">City</label>
																				<div class="col-lg-9 col-xl-9">
																					<input class="form-control form-control-solid form-control-lg" required  name="city" type="text" value="" />
																				</div>
																			</div>
																			
																			<!--end::Group-->
																			<!--begin::Group-->
																			<!-- <div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
																				<div class="col-lg-9 col-xl-9">
																					<div class="input-group input-group-solid input-group-lg">
																						<input type="text" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="" />
																						<div class="input-group-append">
																							<span class="input-group-text">.com</span>
																						</div>
																					</div>
																				</div>
																			</div> -->
																			<!--end::Group-->
																		</div>
																		<!--end::Wizard Step 1-->
																		<!--begin::Wizard Step 2-->
																		<div class="my-5 step" data-wizard-type="step-content">
																			<h5 class="text-dark font-weight-bold mb-10 mt-5">User's Account Details</h5>
																			<!--begin::Group-->
																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Business Type</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="business_type_id"  id="contract_category">
																						@foreach($business_types as $business_type)
																							<option value="{{$business_type->id}}">{{$business_type->description}}</option>
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Tax Station</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="tax_station_id"  id="contract_category">
																						@foreach($tax_stations as $tax_station)
																							<option value="{{$tax_station->id}}">{{$tax_station->description}}</option>
																						@endforeach
																					</select>
																				</div>
																			</div>

																			<div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Business Category</label>
																				<div class="col-xl-9 col-lg-9">
																					<select  class="form-control" name="business_category"  id="contract_category">
																							<option value="import">Import</option>
																							<option value="export">Export</option>
																							<option value="shipping">Shipping</option>
																							<option value="perishable">Perishable</option>
																							<option value="cash crop">Cash Crop</option>
																					</select>
																				</div>
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<!-- <div class="form-group row">
																				<label class="col-form-label col-xl-3 col-lg-3">Time Zone</label>
																				<div class="col-xl-9 col-lg-9">
																					<select class="form-control form-control-lg form-control-solid" name="timezone">
																						<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																						<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																						<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																						<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																						<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																						<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																						<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																						<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																						<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																						<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																						<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																						<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																						<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																						<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																						<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																						<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																						<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																						<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																						<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																						<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																						<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																						<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																						<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																						<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																						<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																						<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																						<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																						<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																						<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																						<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																						<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																						<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																						<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																						<option data-offset="0" value="Azores">(GMT) Azores</option>
																						<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																						<option data-offset="0" value="UTC">(GMT) UTC</option>
																						<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																						<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																						<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																						<option data-offset="3600" value="London">(GMT+01:00) London</option>
																						<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																						<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																						<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																						<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																						<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																						<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																						<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																						<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																						<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																						<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																						<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																						<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																						<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																						<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																						<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																						<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																						<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																						<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																						<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																						<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																						<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																						<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																						<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																						<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																						<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																						<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																						<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																						<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																						<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																						<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																						<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																						<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																						<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																						<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																						<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																						<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																						<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																						<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																						<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																						<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																						<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																						<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																						<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																						<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																						<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																						<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																						<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																						<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																						<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																						<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																						<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																						<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																						<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																						<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																						<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																						<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																						<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																						<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																						<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																						<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																						<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																						<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																						<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																						<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																						<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																						<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																						<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																						<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																						<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																						<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																						<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																						<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																						<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																						<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																						<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																						<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																						<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																						<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																						<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																						<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																						<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																						<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																						<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																						<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																						<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																						<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																						<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																						<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																						<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																						<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																						<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																						<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																						<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																						<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																						<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																						<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																						<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																						<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																						<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																						<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																						<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																						<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																						<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																					</select>
																				</div>
																			</div> -->
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
																			<h5 class="mb-10 font-weight-bold text-dark">Setup Your Address</h5>
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Tax Identification Number</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" required  name="tax_identification_id" placeholder=""  />
																				<!-- <span class="form-text text-muted">Please enter your Address.</span> -->
																			</div>

																			<div class="form-group">
																				<label>Company Reg Number</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" required  name="company_reg_number" placeholder=""  />
																				<!-- <span class="form-text text-muted">Please enter your Address.</span> -->
																			</div>
																			<!--end::Group-->
																			<!--begin::Group-->
																			<div class="form-group">
																				<label>Reference Number</label>
																				<input type="text" class="form-control form-control-solid form-control-lg" required  name="reference_number" placeholder=""  />
																				<!-- <span class="form-text text-muted">Please enter your Address.</span> -->
																			</div>

																			<div class="form-group">
																				<label>Registration Date</label>
																				<input type="date" class="form-control form-control-solid form-control-lg" required  name="registration_date" placeholder=""  />
																				<!-- <span class="form-text text-muted">Please enter your Address.</span> -->
																			</div>
																			
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