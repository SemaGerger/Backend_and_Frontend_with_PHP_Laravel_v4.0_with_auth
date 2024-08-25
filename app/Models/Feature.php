<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'featureds';
    protected $fillable = [
        'featured_title',
        'featured_description',
        'featured_image_table',
    ];

}
