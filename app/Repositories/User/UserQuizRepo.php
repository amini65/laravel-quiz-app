<?php

namespace App\Repositories\User;

use App\Models\Quiz;
use App\Models\User;
use App\Models\UserQuiz;

class UserQuizRepo
{


    public function create($user,$quiz)
    {
       return UserQuiz::query()->create([
           'user_id'=>$user,
           'quiz_id'=>$quiz,
            'status'=>'pending'
        ]);
    }
    public function getWithUserQuiz($user,$quiz)
    {
        return UserQuiz::query()->where('user_id',$user)
            ->where('quiz_id',$quiz)->first();
    }
    public function getUserAllQuiz($user)
    {
      return  Quiz::query()->join('user_quizzes', 'user_quizzes.quiz_id', '=', 'quizzes.id')
            ->where('user_quizzes.user_id',$user)
            ->get(['quizzes.*','user_quizzes.id as uq','user_quizzes.result','user_quizzes.status']);
    }
}
