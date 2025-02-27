<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamResultRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'exam_id' => 'required|exists:exam,exam_id',
            'student_id' => 'required|exists:student,student_id',
            'marks' => 'required|numeric|min:0|max:100',
        ];
    }
}


