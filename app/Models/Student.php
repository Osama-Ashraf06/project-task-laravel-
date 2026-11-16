<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'course_id',
    ];
}
