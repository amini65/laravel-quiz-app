<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\Quize\QuizeRepo;
use App\Repositories\User\UserQuizRepo;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $user=Auth::user();
        if($user->role=='user')
            return $this->user($user);

        return view('panel.index');
    }


    public function user($user)
    {
        $quizRepo=new QuizeRepo();
        $quizzes=$quizRepo->getAllQuizUser($user->id);

        return view('panel.user',compact('quizzes'));
    }


}
