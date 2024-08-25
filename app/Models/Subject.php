<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'lesson_id', 'status'];
    protected $casts = ['status' => 'boolean',];
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }


    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_subject');
    }
}
