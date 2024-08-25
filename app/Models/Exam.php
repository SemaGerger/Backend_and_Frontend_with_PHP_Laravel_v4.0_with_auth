<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'main_id', 'exam_date', 'status'];
    protected $casts = ['status' => 'boolean',];
    public function main()
    {
        return $this->belongsTo(Main::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
