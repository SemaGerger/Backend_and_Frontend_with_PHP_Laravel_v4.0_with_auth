<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_keywords', 'meta_author', 'site_title', 'favicon_path', 'logo_image_table',
        'site_description', 'homepage_banner_image_table', 'featured_id',
        'article_id', 'footer_id', 'google_analytics_id', 'maintenance_mode'
    ];

    public $timestamps = true;
    protected $table = 'site_settings'; 
    protected $casts = [
        'maintenance_mode' => 'boolean',
    ];

    public function logo()
    {
        return $this->belongsTo(Img::class, 'image_id');
    }

    public function homepageBanner()
    {
        return $this->belongsTo(Img::class, 'image_id');
    }

    public function featured()
    {
        return $this->belongsTo(Featured::class, 'featured_id');
    }

    public function footer()
    {
        return $this->belongsTo(Footer::class, 'footer_id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
