@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <x-page.title text="{{ __('lists') }} {!! $title !!}"/>
            <div class="card-toolbar">
                <x-button.create title="{{ __('create') }}" route="{{ route($route.'.create') }}" icon="create" color="primary" />
            </div>
        </div>

        <div class="card-body py-3">
            <x-table>
                <x-slot name="thead">
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4">#</th>
                        <th class="">{{ __('quiz') }}</th>
                        <th class="">{{ __('question') }}</th>
                        <th class=""></th>

                    </tr>
                    <th></th>
                </x-slot>

                <x-slot name="tbody">
                    @if($lists)
                        @foreach($lists as $key=>$list)
                            <tr>
                                <td class="ps-4" >{!! $key+1 !!} </td>
                                <td >{!! $list->quiz->name !!} </td>
                                <td >{!! $list->question !!} </td>
                                <td>
                                    <x-button.table route="{{ route($route.'.edit',[$list->id]) }}" icon="edit" title="{{__('edit')}} {!! $title !!}" />
                                    <x-button.delete route="{{ route($route.'.destroy',[$list->id]) }}" icon="delete" title="{{__('delete')}} {!! $title !!}" />

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </x-slot>

            </x-table>
        </div>
    </div>

@endsection



