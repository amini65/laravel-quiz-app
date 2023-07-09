@extends('panel.layouts.master')


@section('content')

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 cursor-pointer">
            <x-page.title text="{{ __('edit') }} {!! $title !!}" />
        </div>

        <div  class="collapse show">
            <x-form method="edit" url="{{ route($route.'.update',[$model->id]) }}" >

                <x-forms.select2 name="quiz_id" title="{{ __('quiz') }}" placeholder="{{ __('quiz') }}" >
                    @foreach(\App\Models\Quiz::all() as $quiz)
                        <option  value="{!! $quiz->id !!}" {{ ($model->queiz_id==$quiz->id)?'selected':'' }}>{!! $quiz->name !!}</option>
                    @endforeach
                </x-forms.select2>
                <x-forms.textarea  name="question" value="{!! $model->question !!}" title="{{ __('question') }}" placeholder="{{ __('question') }}" />
                <x-forms.textarea name="answer1" value="{!! $model->answer1 !!}" title="{{ __('answer1') }}" placeholder="{{ __('answer1') }}" />
                <x-forms.textarea  name="answer2" value="{!! $model->answer2 !!}" title="{{ __('answer2') }}" placeholder="{{ __('answer2') }}" />
                <x-forms.textarea  name="answer3" value="{!! $model->answer3 !!}" title="{{ __('answer3') }}" placeholder="{{ __('answer3') }}" />
                <x-forms.textarea  name="answer4" value="{!! $model->answer4 !!}" title="{{ __('answer4') }}" placeholder="{{ __('answer4') }}" />
                <x-forms.select2 name="correct" title="{{ __('correct') }}" placeholder="{{ __('correct') }}" >
                    <option  value="1" {{ ($model->correct==1)?'selected':'' }}>1</option>
                    <option  value="2" {{ ($model->correct==2)?'selected':'' }}>2</option>
                    <option  value="3" {{ ($model->correct==3)?'selected':'' }}>3</option>
                    <option  value="4" {{ ($model->correct==4)?'selected':'' }}>4</option>
                </x-forms.select2>
            </x-form>
        </div>
    </div>

@endsection
