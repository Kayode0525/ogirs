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
						<h3 class="card-label font-weight-bolder text-dark">File Annual Returns</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">
						
						</span>
						
					</div>
					<div class="card-toolbar">
						<a href="/customer/exports/annual/xlsx"  class="btn btn-success mr-2">Download Excel Template</a>
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
							<form action="{{ route('import_annual_returns') }}" method="POST" enctype="multipart/form-data">
												@csrf

											
						
								<div class="card-body">
									<!--begin::Alert-->
									<div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
										<div class="alert-icon">
											<span class="svg-icon svg-icon-3x svg-icon-danger">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Code/Info-circle.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
														<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<div class="alert-text font-weight-bold">Kindly update your employees' information before proceeding to filing of Annual Returns(FORM H1) .
										<br />Please contact OGIRS for any other information that you may require!</div>
										<div class="alert-close">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">
													<i class="ki ki-close"></i>
												</span>
											</button>
										</div>
									</div>
									<!--end::Alert-->
									{{-- <div class="alert alert-danger" role="alert">Please ensure your employee data are up to date before going forward to </div> --}}
									@include("includes.alert.alert")
									<div class="form-group row">
										<label class="col-lg-3 col-form-label text-lg-right">Filing Year:</label>
										<div class="col-lg-6">

									

											<select  class="form-control"  id="transaction_date" name="transaction_date">
												@foreach($years as $key => $year)
													<option value="{{ $year }}">{{ $year }}</option>
												@endforeach
											</select>
								
											{{-- <input type="date" class="form-control" placeholder="Enter full name" name="transaction_date" /> --}}
											<span class="form-text text-muted">Please select  the filling year</span>
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
										<label class="col-lg-3 col-form-label text-lg-right">Upload File (FORM H1):</label>
										<div class="col-lg-6">
										
												<input type="file" name="filess" class="form-control">
												<br>
												{{-- <button type ="submit" class="btn btn-success" id="submit-button">Upload Data</button><i id="spinner" style="display: none;" class="fa fa-spinner fa-spin fa-3x"></i>
											
											<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span> --}}
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



 @endsection