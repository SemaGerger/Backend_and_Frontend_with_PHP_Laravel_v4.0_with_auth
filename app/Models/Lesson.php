<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'field_id', 'status'];
    protected $casts = ['status' => 'boolean',];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
