<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'year' => 'required|integer',
            'grade_id' => 'required|exists:grades,grade_id',
            'section' => 'required|string|max:2',
            'status' => 'required|boolean',
            'remarks' => 'nullable|string',
            'teacher_id' => 'required|exists:teachers,teacher_id',
        ];
    }
}
