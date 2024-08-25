<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'address',
        'social_media_name',
        'social_media_url'
    ];
    protected $table = 'contacts'; 
}
