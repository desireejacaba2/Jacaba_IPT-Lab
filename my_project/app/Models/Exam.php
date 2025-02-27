<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam';
    protected $fillable = ['exam_type_id', 'name', 'start_date', 'course_id'];

    public function examType()
    {
        return $this->belongsTo(ExamType::class, 'exam_type_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
