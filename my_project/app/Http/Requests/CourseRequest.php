<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:45',
            'grade_id' => 'required|exists:grades,grade_id',
        ];
    }
}
