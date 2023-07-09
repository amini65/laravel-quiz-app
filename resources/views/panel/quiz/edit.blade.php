@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}" >

                <x-forms.input type="text" name="name" value="{!! $model->name !!}" title="{{ __('name') }}" placeholder="{{ __('name') }}" />
                <x-forms.input type="number" name="time" value="{!! $model->time !!}" title="{{ __('time') }}" placeholder="{{ __('time') }}" />
              </x-form>
        </div>
    </div>

@endsection
