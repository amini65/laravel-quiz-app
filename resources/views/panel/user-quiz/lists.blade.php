@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <x-page.title text="{{ __('lists') }} {!! $title !!}"/>

        </div>

        <div class="card-body py-3">
            <x-table>
                <x-slot name="thead">
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4">#</th>
                        <th class="">{{ __('name') }}</th>
                        <th class="">{{ __('result') }}</th>
                        <th class="">{{ __('status') }}</th>

                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @if($lists)
                        @foreach($lists as $key=>$list)
                            <tr>
                                <td class="ps-4" >{!! $key+1 !!} </td>
                                <td >{!! $list->quiz->name !!} </td>
                                <td >{!! $list->result !!} %</td>
                                <td >{!! $list->status !!} </td>
                            </tr>
                        @endforeach
                    @endif
                </x-slot>

            </x-table>
        </div>
    </div>

@endsection



