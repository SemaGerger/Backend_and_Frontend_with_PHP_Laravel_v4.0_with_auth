<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'image_id',
        'link', 'status', 'expires_at', 'priority',
        'views', 'clicks'
      
    ];
    protected $casts = [
        'status' => 'boolean'
    ];
    public function images()
    {
        return $this->hasMany(Img::class, 'image_id');
    }
}
