@extends('layouts.front.master')


@section('headlinks')
   

@endsection

@section('content')

		<!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8" style="min-width: 900px;">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header py-3">
												
											</div>

											<!--begin::Row-->
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
											
										
												<div class="card-body">

                                                    <div class="col-md-12 portlets" style="display: flex; align-items:center; justify-content:center; width: 100%; margin-bottom: 70px;" >
                                                        <div class="widget invoice">
                                                            <div class="widget-content padding">
                                                            <br>
                                                            <div class="sc-row">
                                                                <div class="success-card-icon"></div>
                                                                <div class="spacer"></div>
                                                                <h3>Payment Completed Successfully!</h3>
                                                            </div>
                                                            <br>
                                                            <h3> Hello <strong>{{Session::get("company_name")}},</strong></h3>
                                                           <p class="text">Your request is been handled, kindly follow up on the portal for further details. <br>Your transaction detail is has shown below.</p>
                
                                                                                               
                                                           {{-- <b>Transaction Date: </b>{{Session::get("company_name")}} <br/>      --}}
                                                           <b>Transaction Reference: </b>{{$payment_code}} <br/>
                                                                
                                                        </div>
                                                    </div>
                                            
												</div>
												
												
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