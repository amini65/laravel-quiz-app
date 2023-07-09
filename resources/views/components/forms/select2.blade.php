<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-2 col-form-label fw-semibold fs-6">
        @if(isset($attributes['required']))
            <span class="required">*</span>
        @else
            <span >{!! $title !!}</span>
        @endif
        @if($tooltip)
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{!! $tooltip !!}"></i>
        @endif
    </label>
    <!--end::Label-->
    <!--begin::Col-->
    <div class="col-lg-6 fv-row">
        <select name="{!! $name !!}" aria-label="{!! $placeholder !!}" data-control="select2" data-placeholder="{!! $placeholder !!}" class="form-select form-select-solid form-select-lg fw-semibold">
            {{ $slot }}

        </select>
    </div>
    <!--end::Col-->
</div>
