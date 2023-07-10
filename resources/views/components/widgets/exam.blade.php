<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
    <div class="card card-flush mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header pt-5">
            <!--begin::Title-->
            <div class="card-title d-flex flex-column">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{!! $title !!}</span>
                </div>
            </div>
        </div>

        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
            <div class="d-flex flex-column content-justify-center flex-row-fluid pb-5">
                <!--begin::Label-->
                <div class="d-flex fw-semibold align-items-center">
                    <!--begin::Bullet-->
                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                    <!--end::Bullet-->
                    <!--begin::Label-->
                    <div class="text-gray-500 flex-grow-1 me-4">{{ __('total question') }}</div>
                    <!--end::Label-->
                    <!--begin::Stats-->
                    <div class="fw-bolder text-gray-700 text-xxl-end">{!! $count !!}</div>
                    <!--end::Stats-->
                </div>
                <!--end::Label-->
                <!--begin::Label-->
                <div class="d-flex fw-semibold align-items-center my-3">
                    <!--begin::Bullet-->
                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                    <!--end::Bullet-->
                    <!--begin::Label-->
                    <div class="text-gray-500 flex-grow-1 me-4">{{ __('time') }}</div>
                    <!--end::Label-->
                    <!--begin::Stats-->
                    <div class="fw-bolder text-gray-700 text-xxl-end">{!! $time !!}</div>
                    <!--end::Stats-->
                </div>


            </div>
            <!--end::Labels-->
            @if($status)
             <a href="{!! $route !!}" class="btn btn-primary w-100 py-3">Start</a>
            @endif
        </div>
        <!--end::Card body-->
    </div>
</div>
