<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'subject_id', 'status', 'code', 'year', 
        'image_id', 'question', 'question2', 'question3', 
        'optionA', 'optionB', 'optionC', 'optionD', 'optionE', 
        'correctAnswer', 'explanation', 'status', 'year'
    ];
    protected $casts = ['status' => 'boolean',];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function images()
    {
        return $this->hasMany(Img::class, 'image_id');
    }
}
