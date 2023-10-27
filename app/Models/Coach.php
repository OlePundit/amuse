<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class Coach extends Model
{
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->password = Hash::make($model->password);
        });
    }
}
