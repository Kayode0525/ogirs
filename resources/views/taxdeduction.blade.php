@extends('layouts.master')


@section('headlinks')
   
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

		<!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8" >
			<!--begin::Card-->
			<div class="card card-custom">
				<!--begin::Header-->
				<div class="card-header py-3">
					<div class="card-title align-items-start flex-column">
						<h3 class="card-label font-weight-bolder text-dark">FORM A</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Upload your tax schedule</span>
					</div>
					<div class="card-toolbar">
						<a href="/customer/exports/taxdeductions/xlsx"  class="btn btn-success mr-2">Download Excel Template</a>
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
						
								<div class="card-body">
									
								@include("includes.alert.alert")
								
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
										<div class="col-lg-6">
										<form action="{{ route('import_tax_deduction_cards') }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="file" name="filess" class="form-control">
												<br>
												
											<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
										</div>
									</div>
								<div class="form-group row">
										<label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Supporting Documents :</label>
										<div class="col-lg-4 col-md-9 col-sm-12">
											<div class="dropzone dropzone-default dropzone-success" id="kt_dropzone_3">
												<div class="dropzone-msg dz-message needsclick">
													<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
													<span class="dropzone-msg-desc">Only image, pdf and psd files are allowed for upload</span>
												</div>
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