@extends('layouts.front')


@section('headlinks')
   

@endsection

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    {{-- <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
           
           
        </div>
    </div> --}}
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid" style="margin-top: 30px">
        <!--begin::Container-->
        <div class="container">
            {{-- <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
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
                <div class="alert-text">
                    <p>The layout builder is to assist your set and configure your preferred project layout specifications and preview it in real time. The configured layout options will be saved until you change or reset them. To use the layout builder, choose the layout options and click the 
                    <code>Preview</code>button to preview the changes and click the 
                    <code>Export</code>button to download the HTML template with its includable partials of this demo. In the downloaded folder the partials(header, footer, aside, topbar, etc) will be placed seperated from the base layout to allow you to integrate base layout into your application</p>
                    <p>
                    <span class="label label-inline label-pill label-danger label-rounded mr-2">NOTE:</span>The downloaded version does not include the assets folder since the layout builder's main purpose is to help to generate the final HTML code without hassle.</p>
                </div>
            </div> --}}
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                {{-- <div class="card-header card-header-tabs-line">
                    <ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_builder_page" role="tab">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_builder_header" role="tab">Header</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_builder_subheader" role="tab">Subheader</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_builder_content" role="tab">Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_builder_aside" role="tab">Aside</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_builder_footer" role="tab">Footer</a>
                        </li>
                    </ul>
                </div> --}}
                <!--end::Header-->
                <!--begin::Form-->
                <form class="form" method="POST" id="form-builder" action="https://preview.keenthemes.com/metronic/index.php">
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="tab-content pt-3">
                            <div class="tab-pane active" id="kt_builder_page">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Year:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <select class="form-control form-control-solid" name="year">
                                            @foreach($years as $key => $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        </select>

                                       
                                        <div class="form-text text-muted">Select the certificate year</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Tax Identification Number:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input class="form-control" name="tax_identification_number" required   type="text">
                                        <div class="form-text text-muted">Please enter your tax identification number</div>
                                    </div>
                                </div>
                            </div>
                          
                           
                           
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <input type="hidden" id="tab_id" name="builder[tab][tab_id]" />
                                <button type="submit" name="builder_submit" data-demo="demo2" class="btn btn-primary font-weight-bold mr-2">Preview</button>
                                {{-- <button type="submit" id="builder_export" data-demo="demo2" class="btn btn-light font-weight-bold mr-2">Export</button>
                                <button type="submit" name="builder_reset" data-demo="demo2" class="btn btn-clean font-weight-bold">Reset</button> --}}
                            </div>
                        </div>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
            <!--begin::Modal-->
            <div class="modal fade kt-modal-purchase" id="kt-modal-purchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">reCaptcha Verification</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group">
                                    <script src="../../../www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="submit-verify">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
				                                       
 @endsection