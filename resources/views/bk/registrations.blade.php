@extends('layouts.front.front')


@section('headlinks')
   

@endsection

@section('content')

  <!--begin::Content-->
  <div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">New Corporate Registration</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1"></span>
            </div>
            {{-- <div class="card-toolbar">
                <button type="reset" class="btn btn-success mr-2">Save Changes</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div> --}}
        </div>
        <!--end::Header-->
        <!--begin::Form-->
       <!--begin::Form-->
       <form action="{{ route('register_agent') }}" method="POST">
        @csrf
      
        <div class="card-body">
            @include("includes.alert.alert")
            <div class="mb-15">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-right">Company Name:</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" class="form-control" placeholder="Enter company name" />
                        <span class="form-text text-muted">Please enter your company name</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-right">Address:</label>
                    <div class="col-lg-6">
                        <input type="text" name="address" class="form-control" placeholder="Enter address" />
                        <span class="form-text text-muted">Please enter your address</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-right">Email address:</label>
                    <div class="col-lg-6">
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" />
                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-right">Phone Number:</label>
                    <div class="col-lg-6">
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter phone" />
                        <span class="form-text text-muted">Your company phone number</span>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
        <!--end::Form-->
    </div>
</div>
<!--end::Content-->

<!--end::Row-->

				                                       
 @endsection