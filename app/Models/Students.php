<?php

namespace App\Models;

use Spatie\Translatable\Attributes\Translatable;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Students extends Model
{
    use HasTranslations;
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
    public array $translatable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country'
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
