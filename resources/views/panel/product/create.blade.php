@extends('panel.layouts.master')
@section('css')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="post" url="{{ route($route.'.store') }}" >
                <x-forms.select2 name="category_id" title="{{ __('category') }}" placeholder="{{ __('$category') }}" >
                    @foreach(\App\Repositories\CategoryRepo::byType(\App\Models\Product::class) as $category)
                        <option  value="{!! $category->id !!}">{!! $category->title !!}</option>
                    @endforeach
                </x-forms.select2>
                <x-forms.input type="text" name="title" title="{{ __('title') }}" placeholder="{{ __('title') }}" />
                <x-forms.input type="number" name="price" title="{{ __('price') }}" placeholder="{{ __('price') }}" />
                <x-forms.input type="text" name="link" title="{{ __('link') }}" placeholder="{{ __('link') }}" />
                <x-forms.filemanager  name="image" placeholder="{{ __('image') }}"   />
                <x-forms.ckeditor type="text" name="description" title="{{ __('description') }}" placeholder="{{ __('description') }}" />
            </x-form>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
