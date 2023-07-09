@extends('panel.layouts.master')
@section('css')

    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="post" url="{{ route($route.'.store') }}" >
                <x-forms.input type="text" name="full_name" title="{{ __('full_name') }}" placeholder="{{ __('full_name') }}" />
                <x-forms.input type="text" name="position" title="{{ __('position') }}" placeholder="{{ __('position') }}" />
                <x-forms.filemanager  name="image" placeholder="{{ __('image') }}"   />
                <x-forms.input type="text" name="description" title="{{ __('description') }}" placeholder="{{ __('description') }}" />
                <x-forms.input type="text" name="instagram" title="{{ __('instagram') }}" placeholder="{{ __('instagram') }}" />
                <x-forms.input type="text" name="twitter" title="{{ __('twitter') }}" placeholder="{{ __('twitter') }}" />
                <x-forms.input type="text" name="facebook" title="{{ __('facebook') }}" placeholder="{{ __('facebook') }}" />

            </x-form>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
