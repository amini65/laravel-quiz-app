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
                <x-forms.input type="text" name="name" title="{{ __('name') }}" placeholder="{{ __('name') }}" />
                <x-forms.input type="text" name="time" title="{{ __('time') }}" placeholder="{{ __('time') }}" />
             </x-form>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
