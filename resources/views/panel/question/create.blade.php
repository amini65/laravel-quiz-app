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
                <x-forms.select2 name="quiz_id" title="{{ __('quiz') }}" placeholder="{{ __('quiz') }}" >
                    @foreach(\App\Models\Quiz::all() as $quiz)
                        <option  value="{!! $quiz->id !!}">{!! $quiz->name !!}</option>
                    @endforeach
                </x-forms.select2>
                <x-forms.textarea  name="question" title="{{ __('question') }}" placeholder="{{ __('question') }}" />
                <x-forms.textarea name="answer1" title="{{ __('answer1') }}" placeholder="{{ __('answer1') }}" />
                <x-forms.textarea  name="answer2" title="{{ __('answer2') }}" placeholder="{{ __('answer2') }}" />
                <x-forms.textarea  name="answer3" title="{{ __('answer3') }}" placeholder="{{ __('answer3') }}" />
                <x-forms.textarea  name="answer4" title="{{ __('answer4') }}" placeholder="{{ __('answer4') }}" />
                <x-forms.select2 name="correct" title="{{ __('correct') }}" placeholder="{{ __('correct') }}" >
                    <option  value="1">1</option>
                    <option  value="2">2</option>
                    <option  value="3">3</option>
                    <option  value="4">4</option>
                </x-forms.select2>
             </x-form>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
