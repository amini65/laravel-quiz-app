<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'quiz_id',
        'answer',
        'result',
        'status',
    ];


    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
