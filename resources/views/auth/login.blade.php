@extends('layouts.app')

@section('content')
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
        <!--begin::Aside-->
        <div class="d-flex flex-center flex-lg-start flex-column">
            <!--begin::Logo-->
            <a href="#" class="mb-7">
                <img alt="Logo" src="{{ asset('images/logo.svg') }}" width="300" />
            </a>

        </div>
    </div>
    <div class="d-flex flex-center w-lg-50 p-10">
        <div class="card rounded-3 w-md-550px">
            <div class="card-body p-10 p-lg-20">
                <form action="{!! route('login') !!}" method="post" class="form w-100" novalidate="novalidate" id="kt_sign_in_form"  >
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                    </div>


                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::Password-->
                    </div>


                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Sign In</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>


                </form>


            </div>

        </div>

    </div>

@endsection
