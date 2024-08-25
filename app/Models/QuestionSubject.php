<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'yearD', 'slug', 'main_id', 'exam_id', 'field_id', 'lesson_id', 'subject_id',
        'image_id', 'question', 'question2', 'question3', 'optionA', 'optionB', 'optionC',
        'optionD', 'optionE', 'correctAnswer', 'explanation'
    ];
    protected $casts = ['status' => 'boolean',];
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
    
    public function main()
    {
        return $this->belongsTo(Main::class);
    }
    
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
    
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    
    
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'question_subjects');
    }
    
   // ArticleTags pivot tabloda
    
}
