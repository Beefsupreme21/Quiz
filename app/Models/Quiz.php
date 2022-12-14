<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'user_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
}
