<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classroom';
    protected $fillable = ['year', 'grade_id', 'section', 'status', 'remarks', 'teacher_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}

