@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}" >
                <x-forms.input type="text" value="{!! $model->full_name !!}" name="full_name" title="{{ __('full_name') }}" placeholder="{{ __('full_name') }}" />
                <x-forms.input type="text" value="{!! $model->position !!}" name="position" title="{{ __('position') }}" placeholder="{{ __('position') }}" />
                <x-forms.filemanager value="{!! $model->image !!}"  name="image" placeholder="{{ __('image') }}"   />
                <x-forms.input type="text" value="{!! $model->description !!}" name="description" title="{{ __('description') }}" placeholder="{{ __('description') }}" />
                <x-forms.input type="text" value="{!! $model->instagram !!}" name="instagram" title="{{ __('instagram') }}" placeholder="{{ __('instagram') }}" />
                <x-forms.input type="text" value="{!! $model->twitter !!}" name="twitter" title="{{ __('twitter') }}" placeholder="{{ __('twitter') }}" />
                <x-forms.input type="text" value="{!! $model->facebook !!}" name="facebook" title="{{ __('facebook') }}" placeholder="{{ __('facebook') }}" />
            </x-form>
        </div>
    </div>

@endsection
