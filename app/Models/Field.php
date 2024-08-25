<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'exam_id', 'status'];
    protected $casts = ['status' => 'boolean',];
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
