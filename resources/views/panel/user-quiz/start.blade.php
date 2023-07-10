@extends('panel.layouts.master')

@section('content')

        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card header-->
                <div class="card-title fs-3 fw-bold">{!! $quiz->name !!}</div>
                <!--end::Card header-->
            </div>
            <!--end::Card header-->
            <x-form method="edit" url="{{ route('quiz.store',[$quiz->id]) }}" >
            <!--begin::Card body-->
            <div class="card-body">
                <div class="timeline">

                    @foreach($quiz->questions as $key=>$question)
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <span class="fs-2 fw-bold">{!! $key+1 !!}</span>
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-10 lh-xxl line-height">{!! $question->question !!}:</div>
                                    <div class="row g-9">
                                        <div class="col-md-3 col-lg-12 col-xxl-3">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                     <input class="form-check-input" type="radio" name="answer[{!! $question->id !!}]" value="1" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fw-semibold fs-7 text-gray-600">{!! $question->answer1 !!}</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-lg-12 col-xxl-3">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                     <input class="form-check-input" type="radio" name="answer[{!! $question->id !!}]" value="2" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fw-semibold fs-7 text-gray-600">{!! $question->answer2 !!}</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-lg-12 col-xxl-3">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                     <input class="form-check-input" type="radio" name="answer[{!! $question->id !!}]" value="3" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fw-semibold fs-7 text-gray-600">{!! $question->answer3 !!}</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-lg-12 col-xxl-3">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                     <input class="form-check-input" type="radio" name="answer[{!! $question->id !!}]" value="4" checked="checked">
                                                </span>
                                                <span class="ms-5">
                                                    <span class="fw-semibold fs-7 text-gray-600">{!! $question->answer4 !!}</span>
                                                </span>
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                    @endforeach
                    <!--begin::Timeline item-->




            </div>

        </div>

            </x-form>


@endsection
