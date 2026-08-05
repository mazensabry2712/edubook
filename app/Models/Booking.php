<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'boockings';
    protected $fillable = [
        'student_id',
        'course_id',
        'booking_date',
        'booking_time',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
    
}
