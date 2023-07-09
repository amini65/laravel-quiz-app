<?php

namespace App\Repositories\Quize;

use App\Models\Quiz;
use App\Models\User;
use App\Repositories\CrudInterface;
use Illuminate\Support\Facades\Hash;

class QuizeRepo implements CrudInterface
{
    private $model;

    public function __construct()
    {
        $this->model = resolve(Quiz::class);
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
                'time'=>$data['time']

            ]);
    }

    public function update(int $id, array $data)
    {
        return $this->model::query()
            ->update(["id" => $id], [
                'name'=>$data['name'],
                'time'=>$data['time'],
            ]);
    }

    public function destroy(int $id)
    {

        $this->model::find($id)->delete();
    }
}
