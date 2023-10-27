<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationEmail;


class Booking extends Model
{
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::created(function ($model){
            Mail::to($model->email)->send( new BookingConfirmationEmail());
        });
    }
}
