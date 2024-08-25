<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    protected static function bootSluggable()
    {
        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug($model->title);
        });

        static::updating(function ($model) {
            if ($model->isDirty('title')) {
                $model->slug = static::generateUniqueSlug($model->title);
            }
        });
    }

    /**
     * Generate a unique slug.
     *
     * @param  string  $title
     * @return string
     */
    protected static function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = static::where('slug', 'like', "$slug%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
