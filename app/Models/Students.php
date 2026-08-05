<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'student_id');
    }



    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
