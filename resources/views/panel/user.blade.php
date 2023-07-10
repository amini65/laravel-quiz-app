@extends('panel.layouts.master')

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">

        @if($quizzes)
            @foreach($quizzes as $quiz)
                <x-widgets.exam
                    title="{!! $quiz->name !!}" count="{!! $quiz->QuestionsCount !!}"
                    time="{!! $quiz->time !!} min" route="{{ route('quiz.start',$quiz->id) }}" status="{{ ($quiz->userQuiz)?false:true }}"
                />

            @endforeach
        @endif
{{--        <x-widgets.exam/>--}}
{{--        <x-widgets.exam/>--}}
    </div>

@endsection
