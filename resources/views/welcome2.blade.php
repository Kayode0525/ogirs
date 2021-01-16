@extends('layouts.front')


@section('headlinks')
   

@endsection

@section('content')
	<!--begin::Body-->

								<!--begin::Row-->
								<div class="row ">
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" style="margin-top: 30px;">
										<!--begin::Card-->
										<div class="card">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7 ">
													<!--begin::Pic-->
													<!-- <div class="flex-shrink-0 mr-4">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="{{ asset('frontend/assets/media/project-logos/1.png')}}" alt="image" />
														</div>
													</div> -->
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Tax Agent</a>
														<span class="text-muted font-weight-bold">Portal</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">To update your organisation record, file your returns,make your payment , and etc. 
												<a href="#" class="text-primary pr-1">Kindly click on the button below</a></p>
												<!--end::Desc-->
												
												<a href="{{ route('login') }}" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">Continue</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end:: Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" style="margin-top: 30px;">
										<!--begin::Card-->
										<div class="card">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!-- begin::Pic
													<div class="flex-shrink-0 mr-4">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="{{ asset('frontend/assets/media/project-logos/2.png')}}" alt="image" />
														</div>
													</div> -->
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Tax Payer</a>
														<span class="text-muted font-weight-bold">Tax Payer Portal</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Are you a registered tax payer?. Update your record and  make payment online 
												<a href="#" class="text-primary pr-1">Simply click on the button below</a></p>
												<!--end::Desc-->
											
												<a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4">Continue</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end:: Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" style="margin-top: 30px;">
										<!--begin::Card-->
										<div class="card">
											<!--begin::Body-->
											<div class="card-body pt-4">
												
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<!-- <div class="flex-shrink-0 mr-4">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="{{ asset('frontend/assets/media/project-logos/3.png')}}" alt="image" />
														</div>
													</div> -->
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">New Registration</a>
														<span class="text-muted font-weight-bold">New Corporate Registration</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Are you a Coprorate willing to register with OGIRS?. 
												<a href="#" class="text-primary pr-1">Please click on continue button below to register</a></p>
												<!--end::Desc-->
												<a href="{{ route('registration') }}" class="btn btn-block btn-sm btn-light-info font-weight-bolder text-uppercase py-4">Register</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end:: Card-->
									</div>
									
									<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6" style="margin-top: 30px;">
										<!--begin::Card-->
										<div class="card">
											<!--begin::Body-->
											<div class="card-body pt-4">
												
												<!--begin::User-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Pic-->
													<!-- <div class="flex-shrink-0 mr-4">
														<div class="symbol symbol-circle symbol-lg-75">
															<img src="{{ asset('frontend/assets/media/project-logos/5.png')}}" alt="image" />
														</div>
													</div> -->
													<!--end::Pic-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">New Registration</a>
														<span class="text-muted font-weight-bold">New Personal Registration</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::User-->
												<!--begin::Desc-->
												<p class="mb-7">Are you an Individual willing to register with OGIRS?. 
												<a href="#" class="text-primary pr-1">Please click on continue button below to register</a></p>
												<!--end::Desc-->
												<a href="{{ route('personal_registration') }}" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">Register</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end:: Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							
							
						<!--end::Entry-->
							<!--begin::Notice-->
							<div class="alert mt-8 alert-custom alert-white alert-shadow gutter-b" role="alert">
								<div class="alert-icon alert-icon-top">
									<span class="svg-icon svg-icon-3x svg-icon-primary mt-4">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Tools/Tools.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000" />
												<path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
								<!--begin::Accordions-->
								@include('includes.faq')
								<!--end::accordions-->

								
								
							</div>
							<!--begin::Section-->
							<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom p-6 mb-8 mb-lg-0">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-7">
														<!--begin::Content-->
														<h2 class="text-dark mb-4">Get in Touch</h2>
														<p class="text-dark-50 font-size-lg"></p>
														<!--end::Content-->
													</div>
													<div class="col-sm-5 d-flex align-items-center justify-content-sm-end">
														<!--begin::Button-->
														<a href="feedback.html" class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Submit a Request</a>
														<!--end::Button-->
													</div>
												</div>
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom p-6">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-7">
														<!--begin::Content-->
														<h2 class="text-dark mb-4">Live Chat</h2>
														<p class="text-dark-50 font-size-lg"></p>
														<!--end::Content-->
													</div>
													<div class="col-sm-5 d-flex align-items-center justify-content-sm-end">
														<!--begin::Button-->
														<a href="#" data-toggle="modal" data-target="#kt_chat_modal" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-6">Start Chat</a>
														<!--end::Button-->
													</div>
												</div>
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<!--end::Section-->
							<!--end::Notice-->
			
				                                       
 @endsection