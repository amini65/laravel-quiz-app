<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepo;
use Illuminate\Http\Request;

class UserController extends CrudController
{
    public function __construct(UserRepo $repo)
    {
        $this->title=__('users');
        $this->repo=$repo;
        $this->viewLists='panel.user.lists';
        $this->viewCreate='panel.user.create';
        $this->viewEdit='panel.user.edit';
        $this->route='users';
        $this->routeIndex='users.index';
    }
}
