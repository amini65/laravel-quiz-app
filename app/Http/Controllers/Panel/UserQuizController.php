<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\Question\QuestionRepo;
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
        $user = Auth::user();

        $result=$this->repo->getWithUserQuiz($user->id,$id);
        if($result)
            abort(403);

        $quizRepo = new QuizeRepo();
        $quiz = $quizRepo->getQuizQuestion($id);
        $userQuiz = $this->repo->create($user->id, $id);

        return view('panel.user-quiz.start', compact('userQuiz', 'quiz'));
    }

    public function store(Request $request,$id)
    {
        $user=Auth::user();
        $result=$this->repo->getWithUserQuiz($user->id,$id);
        $quizRepo=new QuestionRepo();
        $trueAnswer=0;
        $wrongAnswer=0;
        $questions=$quizRepo->findWithQuizId($id);
        foreach ($questions as $question){
            if($question->correct == $request->answer[$question->id])
                $trueAnswer+=1;
            else
                $wrongAnswer+=1;
        }

        $scoure= 100 * ($questions->count() - $wrongAnswer) / $questions->count();
        $this->repo->update($result,$request->all(),$scoure);

        return redirect()->route('dashboard');

    }



}
