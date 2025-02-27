<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'classroom_id' => 'required|exists:classroom,classroom_id',
            'student_id' => 'required|exists:students,student_id',
        ];
    }
}
