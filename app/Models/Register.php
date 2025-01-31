<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'course_id', 'registered_at', 'status', 'fee_paid'];
    public function student() {
        return $this->belongsTo(Student::class);
    }
    public function courses() {
        return $this->belongsTo(Course::class);
    }
}
