<?php

namespace App\Repositories\Question;

use App\Models\Question;
use App\Repositories\CrudInterface;

class QuestionRepo implements CrudInterface
{
    private $model;

    public function __construct()
    {
        $this->model = resolve(Question::class);
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
                'quiz_id'=>$data['quiz_id'],
                'question'=>$data['question'],
                'answer1'=>$data['answer1'],
                'answer2'=>$data['answer2'],
                'answer3'=>$data['answer3'],
                'answer4'=>$data['answer4'],
                'correct'=>$data['correct'],
            ]);
    }

    public function update(int $id, array $data)
    {
        return $this->model::query()
            ->update(["id" => $id], [
                'quiz_id'=>$data['quiz_id'],
                'question'=>$data['question'],
                'answer1'=>$data['answer1'],
                'answer2'=>$data['answer2'],
                'answer3'=>$data['answer3'],
                'answer4'=>$data['answer4'],
                'correct'=>$data['correct'],
            ]);
    }

    public function destroy(int $id)
    {

        $this->model::find($id)->delete();
    }
}
