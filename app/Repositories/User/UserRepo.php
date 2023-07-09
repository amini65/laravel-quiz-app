<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\CrudInterface;
use Illuminate\Support\Facades\Hash;

class UserRepo implements CrudInterface
{

    private $model;

    public function __construct()
    {
        $this->model = resolve(User::class);
    }

    public function all()
    {
        return $this->model::query()
            ->get();
    }

    public function find(int $id)
    {
        return $this->model::query()
            ->where('id',$id)->first();
    }

    public function store(array $data)
    {

        return $this->model::query()
            ->create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>Hash::make('123456'),

            ]);
    }

    public function update(int $id, array $data)
    {
        return $this->model::query()
            ->update(["id" => $id], [
                'name'=>$data['name'],
                'email'=>$data['email'],
            ]);
    }

    public function destroy(int $id)
    {
        $this->model::find($id)->delete();
    }
}
