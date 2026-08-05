<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'instructor',
        'price',
        'image',
    ];
    protected $table = 'courses';



    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
