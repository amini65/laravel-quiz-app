<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\Quize\QuizeRepo;
use Illuminate\Http\Request;

class QuizController extends CrudController
{
    public function __construct(QuizeRepo $repo)
    {
        $this->title=__('quiz');
        $this->repo=$repo;
        $this->viewLists='panel.quiz.lists';
        $this->viewCreate='panel.quiz.create';
        $this->viewEdit='panel.quiz.edit';
        $this->route='quizzes';
        $this->routeIndex='quizzes.index';
    }
}
