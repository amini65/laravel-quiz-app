@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}" >
                <x-forms.input type="text" value="{!! $model->title !!}" name="title" title="{{ __('title') }}" placeholder="{{ __('title') }}" />
                <x-forms.filemanager  value="{!! $model->image !!}" name="image" placeholder="{{ __('image') }}"   />

            </x-form>
        </div>
    </div>

@endsection
