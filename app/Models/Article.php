<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'meta_author',
        'meta_keywords',
        'image_table',
        'content1',
        'content2',
        'main_id',
        'exam_id',
        'field_id',
        'lesson_id',
        'status',
        'published_at',
        'views',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    
    protected $primaryKey ='id';
    protected $table ='articles';

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
        return $this->belongsToMany(Subject::class, 'article_subjects');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
        
    }
    

    // Resim dosyasının tam yolunu al
    public function getImageUrlAttribute()
    {
        return $this->image_table ? asset('storage/articles/' . $this->image_table) : null;
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });
    }
}
