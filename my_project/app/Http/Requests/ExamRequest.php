<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'exam_type_id' => 'required|exists:exam_type,exam_type_id',
            'name' => 'required|string|max:45',
            'start_date' => 'required|date',
            'course_id' => 'required|exists:course,course_id',
        ];
    }
}
