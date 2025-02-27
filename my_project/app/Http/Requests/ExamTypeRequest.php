<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:45',
        ];
    }
}
