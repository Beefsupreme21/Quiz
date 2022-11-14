<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quiz_id',
        'form_data',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
