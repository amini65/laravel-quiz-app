<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\Question\QuestionRepo;
use Illuminate\Http\Request;

class QuestionController extends CrudController
{
    public function __construct(QuestionRepo $repo)
    {
        $this->title=__('question');
        $this->repo=$repo;
        $this->viewLists='panel.question.lists';
        $this->viewCreate='panel.question.create';
        $this->viewEdit='panel.question.edit';
        $this->route='questions';
        $this->routeIndex='questions.index';
    }
}
