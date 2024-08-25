<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleSubject extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'article_subjects';
    
    protected $fillable = ['article_id', 'subject_id'];
}
