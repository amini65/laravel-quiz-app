<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'quiz_id',
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

}
