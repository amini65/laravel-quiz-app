<?php

namespace App\Models;

use App\Traits\ViewTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory,ViewTrait;

    protected $fillable=['name','time'];

    public function getQuestionsCountAttribute()
    {
        return $this->hasMany(Question::class)->count();
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function usersQuiz()
    {
        return $this->hasMany(UserQuiz::class);
    }
    public function userQuiz()
    {
        return $this->belongsTo(UserQuiz::class,'id','quiz_id');
    }


}
