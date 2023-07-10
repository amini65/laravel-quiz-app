<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\Quize\QuizeRepo;
use App\Repositories\User\UserQuizRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserQuizController extends Controller
{
    public $repo;
    public function __construct(UserQuizRepo $repo)
    {
        $this->repo=$repo;
    }

    public function start($id)
    {
        $user=Auth::user();

        $result=$this->repo->getWithUserQuiz($user->id,$id);
        if($result)
            abort(403);

        $quizRepo=new QuizeRepo();


        $quiz=$quizRepo->getQuizQuestion($id);
        $userQuiz=$this->repo->create($user->id,$id);

        dd($quiz,$userQuiz);
        return view('panel.user-quiz.start',compact('userQuiz','quiz'));

    }



}
