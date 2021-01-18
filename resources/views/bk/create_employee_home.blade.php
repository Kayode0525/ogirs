@extends('layouts.master')


@section('headlinks')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ asset('frontend/assets/plugins/custom/datatables/datatables.bundled1cf.css?v=7.1.6')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" >
	
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Card-->
			<div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">CREATE NEW EMPLOYEE</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="form"  method="post" action="{{ route('create_employee') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Surname:</label>
                                <input type="text" class="form-control" name="surname" placeholder="Enter surname" required/>
                                <!-- <span class="form-text text-muted">Please enter your first name</span> -->
                            </div>
                            <div class="col-lg-6">
                                <label>Other Names:</label>
                                <input type="text" name="othername" class="form-control" placeholder="Enter your other names" required/>
                                <!-- <span class="form-text text-muted">Please enter your last name</span> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required/>
                                <!-- <span class="form-text text-muted">Please enter your other names</span> -->
                            </div>
                            <div class="col-lg-6">
                                <label>Phone Number:</label>
                                <input type="number" name="phone_number" class="form-control" placeholder="Enter your phone number" required/>
                                <!-- <span class="form-text text-muted">Please enter your phone number</span> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Gender:</label>
                                <select class="form-control" id="exampleSelect1" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>            
                                </select>             
                            </div>
                            <div class="col-lg-6">
                                <label>City:</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter your city" required/>
                                <!-- <span class="form-text text-muted">Please enter your tin number</span> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Office Address:</label>
                                <input type="text" name="office_address" class="form-control" placeholder="Enter office address" required/>
                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                            </div>
                            <div class="col-lg-6">
                                <label>Company Registration Number:</label>
                                <input type="text" name="company_reg_number" class="form-control" placeholder="Enter your company registration number" required/>
                                <!-- <span class="form-text text-muted">Please enter your tin number</span> -->
                            </div>                           
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Tax Station ID:</label>
                                <input type="text" name="tax_station_id" class="form-control" placeholder="Enter your tax station ID" required/>
                                <!-- <span class="form-text text-muted">Please enter your designation</span> -->
                            </div>
                            <div class="col-lg-6">
                                <label>Tax Identification ID:</label>
                                <input type="text" name="tax_identification_id" class="form-control" placeholder="Enter your tax identification ID" required/>
                                <!-- <span class="form-text text-muted">Please enter your basic salry</span> -->
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Reference Number:</label>
                                <input type="text" name="reference_number" class="form-control" placeholder="Enter your reference number" required/>
                                <!-- <span class="form-text text-muted">Please enter your housing allowance</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2 submit-btn">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
			<!--end::Card-->
		</div>
		
		<!--end::Container-->
	</div>
</div>	
<!--end::Content-->	                                       
 @endsection

 @section('scripts')
 <script src="{{ asset('js\requestController.js')}}"></script>
<script src="{{ asset('js\formController.js')}}"></script>
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('frontend/assets/plugins/custom/datatables/datatables.bundled1cf.js?v=7.1.6')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('frontend/assets/js/pages/crud/datatables/basic/basicd1cf.js?v=7.1.6')}}"></script>
<!--end::Page Scripts-->

 @endsection