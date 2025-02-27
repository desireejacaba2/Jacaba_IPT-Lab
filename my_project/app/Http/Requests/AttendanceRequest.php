<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date',
            'student_id' => 'required|exists:students,student_id',
            'status' => 'required|boolean',
            'remark' => 'nullable|string',
        ];
    }
}
