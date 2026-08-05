<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'path',
        'name',
        'type',
    ];
    protected $table = 'images';
    
      public function imageable()
    {
        return $this->morphTo();
    }
}

