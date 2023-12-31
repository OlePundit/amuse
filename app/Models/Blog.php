<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function boot()
    {
        parent::boot();

        static::saving(function($model) {
            $model->slug = Str::slug($model->title);

            return true;
        });
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

}
